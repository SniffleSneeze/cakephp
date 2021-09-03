<h1>Articles</h1>
<?php
?>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>
    <?php foreach($articles as $article) {?>
        <tr>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Delete',
                    ['action' => 'delete', $article->slug],
                    ['confirm' => 'Are you sure?'])
                ?>
            </td>
        </tr>
    <?php } ?>
</table>

