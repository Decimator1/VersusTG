<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('Tournament'); ?>
		<legend><?php echo __('Register for Tournaments'); ?></legend>
			<p>Use this page to register for tournaments. Select the tournament that you wish to enter from the dropdown list
				below and click the Register button to sign up.</p>
			<br>
			<?php echo $this->Form->input('tournament_name',
				array(
					'label' => '',
					'type'=>'select',
					'options' => $tournaments,
					'empty'=>'(Choose a tournament)',
					'class' => 'form-control',
					'div' => 'form-group'
				)); 
			?>
			<br>

			<p>A DCI number is required to play in Magic: The Gathering tournaments. You can still register in a tournament without one,
				but you will need to present a number at the tournament location in order to play. Please contact Versus Tournamnet Gaming
				for more information about DCI numbers.<p>
	<?php echo $this->Form->end(array('label' => 'Register','class' => 'btn-lg btn-success')); ?>
</div>