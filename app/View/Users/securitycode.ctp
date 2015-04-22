<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Enter Security Code'); ?></legend>
			<p>Please enter the security code you received in your password reset email to reset your password.</p>
			<br>
			<?php
				echo $this->Form->input('pass_reset', array('type'=>'password', 'label' => 'Security Code','class'=>'form-control','div' => 'form-group'));
			?>
		<?php echo $this->Form->end(array('label' => 'Change','class' => 'btn-lg btn-success')); ?>
</div>