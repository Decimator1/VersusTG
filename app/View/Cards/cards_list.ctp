<?php ?>
<div class="row">
	<button class="btn btn-primary">Search</button>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title">Magic The Gathering Cards</h1>
	</div>
	<div class="panel-body">
		<table class="table table-responsive table-bordered table-hover">
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
				<!--<td><?php if(isset($card['Card']['_id
		'])){echo h($card['Card']['_id
		']);}?>&nbsp;</td>-->
				<td><?php if(isset($card['Card']['name'])){echo h($card['Card']['name']);} ?>&nbsp;</td>
				<td><?php if(isset($card['Card']['text'])){echo h($card['Card']['text']);} ?>&nbsp;</td>
				<td><?php if(isset($card['Card']['flavor'])){echo h($card['Card']['flavor']);} ?>&nbsp;</td>
				<td><?php if(isset($card['Card']['manaCost'])){echo h($card['Card']['manaCost']);} ?>&nbsp;</td>
				<td><?php if(isset($card['Card']['sets'][0])){echo h($card['Card']['sets'][0]);} ?>&nbsp;</td>
				<td><?php //echo h($card['Card']['card_condition']); ?>&nbsp;</td>
				<td><?php if(isset($card['Card']['rarity'])){echo h($card['Card']['rarity']);} ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $card['Card']['_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['_id']), array('confirm' => __('Are you sure you want to delete # %s?', $card['Card']['_id']))); ?>
				</td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<div class="paging">
			<?php
			if($page > 1) {
				echo $this->Html->link('Previous', array('controller' => 'cards', 'action' => 'index', $page-1), array('class' => 'btn btn-primary'));
			}
				echo $this->Html->link('Next', array('controller' => 'cards', 'action' => 'index', $page+1), array('class' => 'btn btn-primary'));
			?>
		</div>
	</div>
</div>
	