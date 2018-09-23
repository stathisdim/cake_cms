<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->control('tag_id', ['options' => $tags]);
    echo $this->Form->button(__('Update Article'), ['class' => 'button', 'style' => 'margin-right:10px; margin-left:10px']);
	echo $this->Html->link('Back', ['action' => 'index'], ['class' => 'button']); 
    echo $this->Form->end();
?>