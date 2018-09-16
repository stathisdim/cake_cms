<h1>Add Article</h1>

<?php

echo $this->Form->create($article);

echo $this->Form->control('user_id', ['type' => 'hidden', 'value'=> 1 ]);
echo $this->Form->control('published', ['type' => 'hidden', 'value'=> 1 ]);
echo $this->Form->control('title');
echo $this->Form->control('body', ['rows' => 5 ]);
echo $this->Form->button(__('Save Article'), ['class' => 'button', 'style' => 'margin-right:10px; margin-left:10px']);
echo $this->Html->link('Back', ['action' => 'index'], ['class' => 'button']); 
echo $this->Form->end();

?>

