<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Order Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To City'); ?></dt>
		<dd>
			<?php echo h($order['Order']['to_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To State'); ?></dt>
		<dd>
			<?php echo h($order['Order']['to_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Street'); ?></dt>
		<dd>
			<?php echo h($order['Order']['to_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Zip'); ?></dt>
		<dd>
			<?php echo h($order['Order']['to_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['order_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['order_id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['order_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
