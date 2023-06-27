<!-- File: templates/Articles/add.php -->

<h1><?= __("Add a post") ?></h1>
<?php
    echo $this->Form->create($article);
    // Hard code the user for now.
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control(__('title'));
    echo $this->Form->control(__('body'), ['rows' => '3']);
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->button(__('save'));
    echo $this->Form->end();
?>