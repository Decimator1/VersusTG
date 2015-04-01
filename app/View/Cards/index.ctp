<?php //debug($cards);die; ?>
<div class="cards index">
	<h2><?php echo __('Cards'); ?></h2>
	<table class="table table-responsive">
	<thead>
	<tr>
			<!--<th><?php echo 'Id'; ?></th> --> 
			<th><?php echo 'Name'; ?></th>
			<th><?php echo 'Rule Text'; ?></th>
			<th><?php echo 'Flavor Test'; ?></th>
			<th><?php echo 'Mana Cost'; ?></th>
			<th><?php echo 'Set'; ?></th>
			<th><?php //echo $this->Paginator->sort('card_condition'); ?></th>
			<th><?php echo 'Rarity'; ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cards as $card): ?>
	<tr>
		<!--<td><?php if(isset($card['Card']['itemid'])){echo h($card['Card']['itemid']);}?>&nbsp;</td>-->
		<td><?php if(isset($card['Card']['name'])){echo h($card['Card']['name']);} ?>&nbsp;</td>
		<td><?php if(isset($card['Card']['text'])){echo h($card['Card']['text']);} ?>&nbsp;</td>
		<td><?php if(isset($card['Card']['flavor'])){echo h($card['Card']['flavor']);} ?>&nbsp;</td>
		<td><?php if(isset($card['Card']['manaCost'])){echo h($card['Card']['manaCost']);} ?>&nbsp;</td>
		<td><?php if(isset($card['Card']['sets'][0])){echo h($card['Card']['sets'][0]);} ?>&nbsp;</td>
		<td><?php //echo h($card['Card']['card_condition']); ?>&nbsp;</td>
		<td><?php if(isset($card['Card']['rarity'])){echo h($card['Card']['rarity']);} ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $card['Card']['itemid'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['itemid'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['itemid']), array('confirm' => __('Are you sure you want to delete # %s?', $card['Card']['itemid']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paging">
	<?php
		//echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		//echo $this->Paginator->numbers(array('separator' => ''));
		//echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?></li>
	</ul>
</div>
