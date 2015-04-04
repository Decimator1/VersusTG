<div class="cards view">
<h2><?php echo __($card['Card']['name']); ?></h2>
	<dl>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->image("http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=".$card['Card']['multiverseid']."&type=card");?>
		</dd>
		<dt><?php echo __('Itemid'); ?></dt>
		<dd>
			<?php echo h($card['Card']['_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Name'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_name']); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('Rule Text'); ?></dt>
		<dd>
			<?php if(!empty($card['Card']['text'])){ echo h($card['Card']['text']);} ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flavor Text'); ?></dt>
		<dd>
			<?php if(!empty($card['Card']['flavor'])){echo h($card['Card']['flavor']);} ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mana Cost'); ?></dt>
		<dd>
			<?php echo h($card['Card']['manaCost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Set'); ?></dt>
		<dd>
			<?php
			foreach ($card['Card']['sets'] as $set) {
				echo h($set)."\n";
			}
			?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Rarity'); ?></dt>
		<dd>
			<?php echo h($card['Card']['rarity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
