<!-- File: templates/Articles/edit.php -->

<h1>Edit Article</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->control('title');
echo $this->Form->control('body', ['rows' => '3']);
echo $this->Form->control('tag_string', ['type' => 'text']);
echo $this->Form->button('Save Article');
echo $this->Form->end();
echo $this->Html->link('Home page', ['action'=> 'index']);
echo '<br>'. $this->Html->link('back', ['action'=> "view/". $article['slug']]);
?>
