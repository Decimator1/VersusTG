<div class="tournaments form">
<?php echo $this->Form->create('Tournament'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tournament'); ?></legend>
	<?php
		echo $this->Form->input('tournament_id');
		echo $this->Form->input('type');
		echo $this->Form->input('tournament_date');
		echo $this->Form->input('max_entries');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tournament.tournament_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tournament.tournament_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tournaments'), array('action' => 'index')); ?></li>
	</ul>
</div>
