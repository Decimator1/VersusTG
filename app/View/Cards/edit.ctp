<div class="cards form">
<?php echo $this->Form->create('Card'); ?>
	<fieldset>
		<legend><?php echo __('Edit Card'); ?></legend>
	<?php
		echo $this->Form->input('itemid');
		echo $this->Form->input('rule_text');
		echo $this->Form->input('flavor_text');
		echo $this->Form->input('mana_cost');
		echo $this->Form->input('card_set');
		echo $this->Form->input('card_condition');
		echo $this->Form->input('rarity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Card.itemid')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Card.itemid'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?></li>
	</ul>
</div>
