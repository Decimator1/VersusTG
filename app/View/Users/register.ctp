<?php 
if($this->Session->check('Auth.User.id')){
			$this->Session->setFlash(__('Already logged in'), 'default', array('class' => 'alert alert-info'));
	    	$this->redirect($this->referer());
	    }
?>

<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Register Account'); ?></legend>
			<p>All fields are required to create an account.</p>
			<br>
			<h4>Account Information</h4>
			<?php
				echo $this->Form->input('username', array('label' => 'Username','class'=>'form-control','div' => 'form-group'));
				echo $this->Form->input('email', array('label' => 'E-Mail','class'=>'form-control','div' => 'form-group'));
				echo $this->Form->input('password', array('type'=>'password', 'label' => 'Password','class'=>'form-control','div' => 'form-group'));
				echo $this->Form->input('fname', array('label' => 'First Name','class'=>'form-control','div' => 'form-group'));
				echo $this->Form->input('lname', array('label' => 'Last Name','class'=>'form-control','div' => 'form-group'));
				//Check if admin before displaying this
				//echo $this->Form->input('group_id', array('label' => 'Assign Group'));
			?>
			<br>
			<h4>Shipping Information</h4>
			<p>This information will be used when ordering items from our online store. You may enter the information now or do so later
				from your User Settings menu</p>
			<?php
				echo $this->Form->input('address', array('label' => 'Address','class'=>'form-control','div' => 'form-group'));
				echo $this->Form->input('city', array('label' => 'City','class'=>'form-control','div' => 'form-group'));
			echo $this->Form->input('state',
				array(
					'label' => 'State',
					'type'=>'select',
					'options' => $states,
					'empty'=>'(Choose one)',
					'class' => 'form-control',
					'div' => 'form-group'
				));
				echo $this->Form->input('zip', array('label' => 'ZIP Code','class'=>'form-control','div' => 'form-group'));
				echo $this->Form->input('phone', array('label' => 'Phone Number','class'=>'form-control','div' => 'form-group'));
			?>
	<?php echo $this->Form->end(array('label' => 'Register','class' => 'btn-lg btn-success')); ?>
</div>

