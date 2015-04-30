<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Reset Password'); ?></legend>
			<p>Enter your account username to reset your password:</p>
			<br>
			<?php
				echo $this->Form->input('username', array('label' => 'Username','class'=>'form-control','div' => 'form-group'));
			?>
		<?php echo $this->Form->end(array('label' => 'Send Email','class' => 'btn-lg btn-success')); ?>
</div>
