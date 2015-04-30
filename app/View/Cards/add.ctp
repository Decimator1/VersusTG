<div class="cards form">
<?php echo $this->Form->create('Card'); ?>
	<fieldset>
		<legend><?php echo __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('manaCost');
		echo $this->Form->input('cmc');
		echo $this->Form->input('type');
		echo $this->Form->input('rarity');
		echo $this->Form->input('text');
		echo $this->Form->input('artist');
		echo $this->Form->input('number');
		echo $this->Form->input('power');
		echo $this->Form->input('toughness');
		echo $this->Form->input('layout');
		echo $this->Form->input('multiverseid');
		echo $this->Form->input('sets');
		echo $this->Form->input('subtypes');
		echo $this->Form->input('colors');
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
