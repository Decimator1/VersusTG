<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title"><?php echo __($card['Card']['name']); ?></h1>
	</div>	
	<div class="panel-body">
		<div class="row">
			<div class="col-md-2 col-md-offset-1">
				<?php echo $this->Html->image("http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=".$card['Card']['multiverseid']."&type=card"); ?>
			</div>
			<div class="col-md-7 col-md-offset-2">
				<dl>
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
		</div>
	</div>
</div>


<div class="cards view">
	
</div>
