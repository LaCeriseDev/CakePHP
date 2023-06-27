<!-- Fichier : templates/Articles/view.php -->

<h1><?= __(h($article->title)) ?></h1>
<p><?= __(h($article->body)) ?></p>
<p><b><?= 'Tags:'." :" ?></b> <?= __(h($article->tag_string)) ?></p>
<p><small><?= __("Created at".$article->created->format(DATE_RFC850)." :") ?></small></p>
<p><?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->slug]) ?></p>