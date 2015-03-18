<div class="col-md-8 col-md-offset-2">
<?php echo $this->Form->create('User'); ?>
	<legend><?php echo __('Login'); ?></legend>
		<?php
			echo $this->Form->input('username', array('label' => 'User Name','class'=>'form-control','div' => 'form-group'));
			echo $this->Form->input('password', array('type'=>'password','label' => 'Last Name','class'=>'form-control','div' => 'form-group'));
		?>
<?php echo $this->Form->end(array('label' => 'Login','class' => 'btn-lg btn-primary')); ?>
</div>

