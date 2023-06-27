<div class="users form">
    <?= $this->Flash->render() ?>
    <h3><?= __("Connexion") ?></h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control(__('email'), ['type' => 'email', 'id' => 'email', 'name' => 'email', 'required' => true]) ?>
        <?= $this->Form->control(__('password'), ['type' => 'password', 'id' => 'password', 'name' => 'password', 'required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link(__("Add a user"), ['action' => 'add']) ?>
</div>