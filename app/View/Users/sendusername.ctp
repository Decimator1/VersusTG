<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Find Username'); ?></legend>
			<p>Enter the email address associated with your account</p>
			<br>
			<?php
				echo $this->Form->input('email', array('label' => 'Account Email','class'=>'form-control','div' => 'form-group'));
			?>
		<?php echo $this->Form->end(array('label' => 'Send Email','class' => 'btn-lg btn-success')); ?>
</div>
