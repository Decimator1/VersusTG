<?php echo $this->Html->link('Back', array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
<br/><br/>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Edit Post</h1>
    </div>
    <div class="panel-body">
       <?php echo $this->Form->create('Post'); ?>
       <?php
            echo $this->Form->input('id');
            echo $this->Form->input('title', array('label' => 'Title','class'=>'form-control','div' => 'form-group'));
            echo $this->Form->input('body', array('label' => 'Body','class'=>'form-control','div' => 'form-group'));
        ?>
       <?php echo $this->Form->end(__('Submit')); ?>
    </div>
</div>
