<div class="cards view">
<h2><?php echo __('Card'); ?></h2>
	<dl>
		<dt><?php echo __('Itemid'); ?></dt>
		<dd>
			<?php echo h($card['Card']['itemid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rule Text'); ?></dt>
		<dd>
			<?php echo h($card['Card']['rule_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flavor Text'); ?></dt>
		<dd>
			<?php echo h($card['Card']['flavor_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mana Cost'); ?></dt>
		<dd>
			<?php echo h($card['Card']['mana_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Set'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Condition'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_condition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rarity'); ?></dt>
		<dd>
			<?php echo h($card['Card']['rarity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['itemid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['itemid']), array(), __('Are you sure you want to delete # %s?', $card['Card']['itemid'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
	</ul>
</div>
