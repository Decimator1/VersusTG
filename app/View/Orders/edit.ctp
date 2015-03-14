<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('order_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('order_date');
		echo $this->Form->input('ship_date');
		echo $this->Form->input('to_city');
		echo $this->Form->input('to_state');
		echo $this->Form->input('to_street');
		echo $this->Form->input('to_zip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.order_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Order.order_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
