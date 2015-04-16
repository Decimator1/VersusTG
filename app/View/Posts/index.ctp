<div class="col-md-6 col-md-offset-3">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/w2ROvlSkNvM" frameborder="0" allowfullscreen></iframe>
</div>

<div class="clearfix"></div>

<div class="row">
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
    
    
    
    
    
    <div class="row">
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-8">.col-sm-8</div>
    </div>
	
</div>































<div class="posts index">


	<h2><?php echo __('Latest Blog Posts'); ?></h2>
	<div class="row">
		<?php foreach ($posts as $post): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title"><?php echo $this->Html->link(__($post['Post']['title']), array('action' => 'view', $post['Post']['id']));?></h1>
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
