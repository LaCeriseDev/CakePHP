<!-- Fichier : templates/Articles/index.php -->

<h1>Post</h1>
<?= $this->Html->link(__('Add a post'), ['action' => 'add']) ?>
<table>
    <tr>
        <th><?= __("Title") ?></th>
        <th><?= __("Created at") ?></th>
        <th><?= __("Action") ?></th>
    </tr>

    <!-- C'est ici que nous bouclons sur notre objet Query $articles pour afficher les informations de chaque article -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link(__($article->title), ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->slug]) ?>
            |
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->slug],
                ['confirm' => 'Are-you sure ?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>