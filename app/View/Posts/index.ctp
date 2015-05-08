

<div class="clearfix"></div>

	<!--
	<div class="col-md-offset-2 col-md-8">
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
                <li data-target="#carousel" data-slide-to="5"></li>
                <li data-target="#carousel" data-slide-to="6"></li>
                <li data-target="#carousel" data-slide-to="7"></li>
                <li data-target="#carousel" data-slide-to="8"></li>
                <li data-target="#carousel" data-slide-to="9"></li>
                <li data-target="#carousel" data-slide-to="10"></li>
                <li data-target="#carousel" data-slide-to="11"></li>
                <li data-target="#carousel" data-slide-to="12"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<?php echo $this->Html->image('front/1.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<?php echo $this->Html->image('front/2.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<?php echo $this->Html->image('front/3.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<?php echo $this->Html->image('front/4.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/5.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/6.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/7.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/8.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/9.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/10.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/11.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/12.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
                <div class="item">
					<?php echo $this->Html->image('front/13.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</div>
    -->
    
<div class="posts index">
<div class="ad">
    <div class="row vertical-center-row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <h2><div align="center">Welcome to Versus Tornament Gaming!</div></h2>
                <div><iframe width="960" height="570" src="https://www.youtube.com/embed/w2ROvlSkNvM" frameborder="0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</div>	

<div class="row">
    <div class="col-md-3" style="background-color: #cda001;">
        <div align="center"> 
            <iframe  src="https://www.eventbrite.com/calendar-widget?eid=16162451327" frameborder="0" height="652" width="195" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true">
            </iframe>
        </div>
    </div>

    <div class="col-md-8">
        <h2><?php echo __('Latest Blog Posts'); ?></h2>
        <?php 
            if($this->Session->read('Auth.User.group_id') == 1) {
                echo $this->Html->link('New Post', array('action' => 'add'), array('class' => 'btn btn-primary pull-right')); 
            } 
        ?>
	    <div class="row">
			<?php foreach ($posts as $post): ?>
				<div class="panel panel-primary">
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
</div>


    
