<!-- Dans templates/Articles/tags.php -->
<h1>
    <?= __("Post with tags") ?>
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
<?php foreach ($articles as $article): ?>
    <article>
        <!-- Utilisation du HtmlHelper pour créer le lien -->
        <h4><?= $this->Html->link(
            __($article->title),
            ['controller' => 'Articles', 'action' => 'view', $article->slug]
        ) ?></h4>
        <span><?= __(h($article->created)) ?></span>
    </article>
<?php endforeach; ?>
</section>