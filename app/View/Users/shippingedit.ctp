<div class="col-md-8 col-md-offset-2">
	<?php echo $this->Form->create('User'); ?>
		<legend><?php echo __('Change Shipping Information'); ?></legend>
			<p>The shipping information we have on file for your account is listed below. Make any necessary changes by changing the data below, then click the Change button to save the your changes.<p>
			<br>
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
		<?php echo $this->Form->end(array('label' => 'Change','class' => 'btn-lg btn-success')); ?>
</div>
