<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Change Account Password'); ?></legend>
			<?php
				echo $this->Form->input('old_password', array('type'=>'password', 'label' => 'Old Password','class'=>'form-control','div' => 'form-group'));
				echo $this->Form->input('password_update', array('type'=>'password', 'label' => 'New Password','class'=>'form-control','div' => 'form-group'));
			?>
		<?php echo $this->Form->end(array('label' => 'Change','class' => 'btn-lg btn-success')); ?>
</div>

