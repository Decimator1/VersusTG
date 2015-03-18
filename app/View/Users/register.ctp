<div class="col-md-8 col-md-offset-2">
<?php echo $this->Form->create('User'); ?>
	<legend><?php echo __('Register Account'); ?></legend>
		<?php
			echo $this->Form->input('fname', array('label' => 'First Name','class'=>'form-control','div' => 'form-group'));
			echo $this->Form->input('lname', array('label' => 'Last Name','class'=>'form-control','div' => 'form-group'));
			echo $this->Form->input('address', array('label' => 'Address','class'=>'form-control','div' => 'form-group'));
			echo $this->Form->input('phone', array('label' => 'Phone Number','class'=>'form-control','div' => 'form-group'));
			//Check if admin before displaying this
			//echo $this->Form->input('group_id', array('label' => 'Assign Group'));
		?>
<?php echo $this->Form->end(array('label' => 'Register','class' => 'btn-lg btn-success')); ?>
</div>

