<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title col-md-offset-6"><?php echo "User: ".h($user['User']['username']); ?></h1>
	</div>
	<div class="panel-body">
		<div class="col-md-4 well btn-group-vertical">
				<?php echo $this->Html->link('Edit Email', array('action' => 'emailedit',$user['User']['id']), array('class' => 'btn btn-primary'));?>
				<?php echo $this->Html->link('Edit Password', array('action' => 'passwordedit',$user['User']['id']), array('class' => 'btn btn-primary'));?>
				<?php echo $this->Html->link('Edit Shipping Info', array('action' => 'shippingedit',$user['User']['id']), array('class' => 'btn btn-primary'));?>
		</div>
		<div class="col-md-6">
			<div class="col-md-offset-4">
				<?php
				    echo $this->Gravatar->image($user['User']['email'], array('size' => 80));
				?>
			</div>
			<br/><br/>
			<table class="table table-bordered table-hover">
				<tbody>
					<tr>
						<td><b><?php echo __(' Name'); ?></b></td>
						<td><?php echo h($user['User']['fname']).' '.h($user['User']['lname']); ?> </td>
					</tr>
					<tr>
						<td><b><?php echo __('Address'); ?></b></td>
						<td>
							<?php echo h($user['User']['address']).' '.h($user['User']['city']).', '.h($user['User']['state']).' '.h($user['User']['zip']); ?>
							&nbsp;
						</td>
					<tr>
					<tr>
						<td><b><?php echo __('Phone Number'); ?></b></td>
						<td>
							<?php echo h($user['User']['phone']); ?>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

