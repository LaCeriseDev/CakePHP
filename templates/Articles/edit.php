<!-- Fichier : templates/Articles/edit.php -->

<h1><?= __("Edit a post") ?></h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control(__('title'));
    echo $this->Form->control(__('body'), ['rows' => '3']);
    echo $this->Form->control('tags._ids', ['options' => $tags]);
    echo $this->Form->button(__('save'));
    echo $this->Form->end();
?>