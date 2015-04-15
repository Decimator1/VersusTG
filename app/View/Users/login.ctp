<div class="col-md-8 col-md-offset-2">
<?php echo $this->Form->create('User'); ?>
	<legend><?php echo __('Login'); ?></legend>
		<?php
			echo $this->Form->input('username', array('label' => 'User Name','class'=>'form-control','div' => 'form-group'));
			echo $this->Html->link('Forgot Username?', array('controller' => 'users', 'action' => 'sendusernameemail'));
		?>
		<br>
		<br>
		<?php
			echo $this->Form->input('password', array('type'=>'password','label' => 'Password','class'=>'form-control','div' => 'form-group'));
			echo $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'sendpasswordemail'));
		?>
		<br>
		<br>
<?php echo $this->Form->end(array('label' => 'Login','class' => 'btn-lg btn-primary')); ?>
</div>

