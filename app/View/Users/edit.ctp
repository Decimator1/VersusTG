<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title"><?php echo __('Edit Account Information'); ?></h1>
	</div>
	<div class="panel-body">
		<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('id'); ?>
			<div class="form-group">
				<label for="data[User][fname]">First Name</label>
				<?php echo $this->Form->input('fname', array('class' => 'form-control', 'label' => false)); ?>
			</div>
			<div class="form-group">
				<label for="data[User][lname]">Last Name</label>
				<?php echo $this->Form->input('lname', array('class' => 'form-control', 'label' => false)); ?>
			</div>
			<div class="form-group">
				<label for="data[User][email]">E-Mail</label>
				<?php echo $this->Form->input('eamil', array('class' => 'form-control', 'label' => false)); ?>
			</div>
			<div class="form-group">
				<label for="data[User][address]">address</label>
				<?php echo $this->Form->input('address', array('class' => 'form-control', 'label' => false)); ?>
			</div>
			<div class="form-group">
				<label for="data[User][phone]">Phone Number</label>
				<?php echo $this->Form->input('phone', array('class' => 'form-control', 'label' => false)); ?>
			</div>
			<div class="form-group">
				<label for="data[User][city]">City</label>
				<?php echo $this->Form->input('city', array('class' => 'form-control', 'label' => false)); ?>
			</div>
			<div class="form-group">
				<label for="data[User][state]">State</label>
				<?php echo $this->Form->input('state', array('class' => 'form-control', 'label' => false)); ?>
			</div>
			<div class="form-group">
				<label for="data[User][zip]">Zip Code</label>
				<?php echo $this->Form->input('zip', array('class' => 'form-control', 'label' => false)); ?>
			</div>
	</div>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
