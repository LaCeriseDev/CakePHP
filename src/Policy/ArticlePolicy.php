<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Article;
use Authorization\IdentityInterface;

/**
 * Article policy
 */
class ArticlePolicy
{
    public function canAdd(IdentityInterface $user, Article $article)
    {
        //Tous les utilisateurs authentifiés peuvent créer des articles.
        return true;
    }

    public function canEdit(IdentityInterface $user, Article $article)
    {
        // Les utilisateurs authentifiés ne peuvent modifier que leurs articles.
        return $this->isAuthor($user, $article);
    }

    public function canDelete(IdentityInterface $user, Article $article)
    {
        // Les utilisateurs authentfiés ne peuvent supprimer que leurs articles.
        return $this->isAuthor($user, $article);
    }

    protected function isAuthor(IdentityInterface $user, Article $article)
    {
        return $article->user_id === $user->getIdentifier();
    }
}