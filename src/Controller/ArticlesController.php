<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use App\Controller\AppController;
class ArticlesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
        $this->Authorization->skipAuthorization();
    }

    public function view($slug = null)
    {
        $article = $this->Articles
            ->findBySlug($slug)
            ->contain('Tags')
            ->firstOrFail();
        $this->set(compact('article'));
        $this->Authorization->skipAuthorization();
    }

    public function add()
    {
        $article = $this->Articles->newEmptyEntity();
        $this->Authorization->authorize($article);

        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->user_id = $this->request->getAttribute('identity')->getIdentifier();

            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
        $tags = $this->Articles->Tags->find('list')->all();
        $this->set(compact('article', 'tags'));
    }
    

    public function edit($slug) 
    {
        $article = $this->Articles
            ->findBySlug($slug)
            ->contain('Tags')
            ->firstOrFail();
        $this->Authorization->authorize($article);

        if ($this->request->is(['post', 'put'])) {
            $this->Articles->patchEntity($article, $this->request->getData(), [
                'accessibleFields' => ['user_id' => false]
            ]);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update the post'));
        }
        // Récupère une liste des tags.
        $tags = $this->Articles->Tags->find('list')->all();
        // Passe les tags au context de la view
        $this->set('tags', $tags);
        // Passe les articles au context de la view
        $this->set('article', $article);
        $this->set(compact('article', 'tags'));
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        $this->Authorization->authorize($article);

        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The post {0} has been deleted.', $article->title));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function tags()
    {
        // La clé 'pass' est fournie par CakePHP et contient tous les
        // segments d'URL passés dans la requête
        $tags = $this->request->getParam('pass');

        // Utilisation de ArticlesTable pour trouver les articles taggés
        $articles = $this->Articles->find('tagged', [
            'tags' => $tags
        ])
        ->all();

        // Passage des variables dans le contexte de la view du template
        $this->set([
            'articles' => $articles,
            'tags' => $tags
        ]);
        $this->Authorization->skipAuthorization();
    }
}