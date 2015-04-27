<div class="posts index">

    <div class="row">
        <h2 class="pull-left"><?php echo __('Latest Blog Posts'); ?></h2>
        <?php 
            if($this->Session->read('Auth.User.group_id') == 1) {
                echo $this->Html->link('New Post', array('action' => 'add'), array('class' => 'btn btn-primary pull-right')); 
            } 
        ?>
    </div>
	
    <div class="row">
		<?php foreach ($posts as $post): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title"><?php echo $this->Html->link(__($post['Post']['title']), array('action' => 'view', $post['Post']['id']));?>
                    <?php 
                        if($this->Session->read('Auth.User.group_id') == 1) {
                            echo $this->Form->postLink(__(''), array('action' => 'delete', $post['Post']['id']), 
                                                       array('class' => 'glyphicon glyphicon-remove pull-right','confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id'])));
                            echo $this->Html->link(__(''), array('action' => 'edit', $post['Post']['id']), 
                                                       array('class' => 'glyphicon glyphicon-edit pull-right'));
                        }
                    ?>
                </h1>
			</div>
			<div class="panel-body">
				<?php echo h($post['Post']['body']); ?>
			</div>
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
