

<h1>Articles</h1>
<?= $this->Html->link('Add New Article', ['action' => 'add'], ['class' => 'button']); ?>
<table>

 <tr>
  	<th> Title </th>
  	<th> Slug </th>
  	<th> Created </th>
  	<th> Actions </th>
</tr>

<?php  foreach($articles as $article){ ?>

	<tr> 

		<td> 

		<?php echo $this->Html->link($article->title, ['action' => 'view', $article->slug]);  ?>

		</td>
		<td> 

		<?php echo $article->slug; ?>
		</td>

		<td> 

		<?php echo $article->created->format(DATE_RFC850); ?>
		</td>
		<td> 
		<?php echo $this->Html->link('View', ['action' => 'view', $article->slug], ['class' => 'button']);  ?>
		<?php echo $this->Html->link('Edit', ['action' => 'edit', $article->slug], ['class' => 'button']);  ?>
		<?php echo $this->Html->link('Delete', ['action' => 'delete', $article->slug], ['class' => 'button', 'confirm' => 'Are you sure you want to delete?!']);  ?>
		</td>

	</tr>
<?php
}
?>

</table> 

