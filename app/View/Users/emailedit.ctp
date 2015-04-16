<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Change Email Address'); ?></legend>
			<?php
				echo $this->Form->input('email_update', array('label' => 'New Email Address','class'=>'form-control','div' => 'form-group'));
			?>
		<?php echo $this->Form->end(array('label' => 'Change','class' => 'btn-lg btn-success')); ?>
</div>

