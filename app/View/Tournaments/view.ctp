<div class="tournaments view">
<h2><?php echo __('Tournament'); ?></h2>
	<dl>
		<dt><?php echo __('Tournament Id'); ?></dt>
		<dd>
			<?php echo h($tournament['Tournament']['tournament_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($tournament['Tournament']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tournament Date'); ?></dt>
		<dd>
			<?php echo h($tournament['Tournament']['tournament_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Entries'); ?></dt>
		<dd>
			<?php echo h($tournament['Tournament']['max_entries']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tournament'), array('action' => 'edit', $tournament['Tournament']['tournament_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tournament'), array('action' => 'delete', $tournament['Tournament']['tournament_id']), array(), __('Are you sure you want to delete # %s?', $tournament['Tournament']['tournament_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tournaments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tournament'), array('action' => 'add')); ?> </li>
	</ul>
</div>
