<?php echo $this->Html->css('simple-sidebar'); ?>
<style>
.carousel{width:680px; height:400px;}
</style>
<div class="row">
    <div id="sidebar-wrapper" class="hide col-sm-3 col-md-2 sidebar" style="position:absolute;">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Dragons Of Tarkir</li>
            <li class="sidebar-brand">Fate Reforged</li>
            <li class="sidebar-brand">Khans Of Tarkir</li>
            <li class="sidebar-brand">Magic 2015</li>
            <li class="sidebar-brand"><?php echo $this->Html->link('All Cards', array('action' => 'cardsList'));?></li>
        </ul>
    </div>
    <div class="row">
        <div class="input-group col-md-offset-2 col-md-7">
        	<?php 
        		echo $this->Form->create('Card', array('action' => 'search', 'type' => 'post'));
        	?>
       		<input name="data[Card][name]" type="text" class="form-control" placeholder="Search for Card"/>
        	<span class="input-group-btn">
	    		<?php echo $this->Form->end(array('label' => 'Go','type' => 'button', 'class' => 'btn btn-default')); ?>
  			</span>
   		</div>
    </div>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php echo $this->Html->image('mtg/magic_logo.png'); ?>
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#corousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<?php echo $this->Html->image('mtg/narset_trans.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<?php echo $this->Html->image('mtg/tiny_leaders.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<?php echo $this->Html->image('mtg/origins_release.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<?php echo $this->Html->image('mtg/board_game_night.jpg'); ?>
					<div class="carousel-caption">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
		<b style="font-size:110%">
			VSTG hosts some of the best Magic: The Gathering tournaments around! MTG is by far the most popular trading card game in the world today and Friday Night Magic (FNM) is played in every hobby store. FNM is now offered in a variety of great, easy-to-get into formats. Whether you like to build your own deck and bring it the event or play from a limited pool of cards when you get there, you’ll be sure to find a format that’s right for you. Come by VSTG and play in a MTG tournament!
		</b>
	</div>
	<div class="clearfix"></div><br/>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Best Sellers</h1>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">Best Seller</div>
				<div class="col-md-3">Best Seller</div>
				<div class="col-md-3">Best Seller</div>
				<div class="col-md-3">Best Seller</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Stock Your Collection</h1>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">Fat Pack</div>
				<div class="col-md-3">Booster Box</div>
				<div class="col-md-3">Commander 2015</div>
				<div class="col-md-3">Old Booster Pack</div>
			</div>
		</div>
	</div>
</div>