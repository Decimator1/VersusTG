<div class="cards form">
<?php echo $this->Form->create('Card'); ?>
	<fieldset>
		<legend><?php echo __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('card_name')
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

		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?></li>
	</ul>
</div>
