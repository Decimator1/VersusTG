<div class="posts index">


	<h2><?php echo __('Latest Blog Posts'); ?></h2>
	<div class="row">
		<?php foreach ($posts as $post): ?>
			<div class="col-xs-12">
				<h3><?php echo $this->Html->link(__($post['Post']['title']), array('action' => 'view', $post['Post']['id'])); ?></h3>
				<hr/>
				<td><?php echo h($post['Post']['body']); ?>&nbsp;</td>

			</div>
		<?php endforeach; ?>
	</div>
	<p>
	<div class="clearfix"></div>
	<div class="paging">
		<ul class="pagination">
			<?php
				echo "<li>".$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'))."</li>";
				echo "<li>".$this->Paginator->numbers(array('separator' => ''))."</li>";
				echo "<li>".$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'))."</li>";
			?>
		</ul>
	</div>
</div>
