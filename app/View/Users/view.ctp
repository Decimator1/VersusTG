<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title col-md-offset-6"><?php echo h($user['User']['username']); ?></h1>
	</div>
	<div class="panel-body">
		<div class="col-md-4">
			<ul>
				<li><?php echo $this->Html->link('Edit Email', array('action' => 'emailedit',$user['User']['id']));?></li>
				<li><?php echo $this->Html->link('Edit Password', array('action' => 'passwordedit',$user['User']['id']));?></li>
				<li><?php echo $this->Html->link('Edit Shipping Info', array('action' => 'shippingedit',$user['User']['id']));?></li>
			</ul>
		</div>
		<div class="col-md-4">
			<div>
				<?php
				    echo $this->Gravatar->image($user['User']['email'], array('size' => 80));
				?>
			</div>
			<table class="table table-bordered table-hover">
				<tbody>
					<tr>
						<td><?php echo __(' Name'); ?></td>
						<td><?php echo h($user['User']['fname']).' '.h($user['User']['lname']); ?> </td>
					</tr>
					<tr>
						<td><?php echo __('Address'); ?></td>
						<td>
							<?php echo h($user['User']['address']).' '.h($user['User']['city']).', '.h($user['User']['state']).' '.h($user['User']['zip']); ?>
							&nbsp;
						</td>
					<tr>
					<tr>
						<td><?php echo __('Phone Number'); ?></td>
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

