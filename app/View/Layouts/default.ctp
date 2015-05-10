<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		VS Tournament Gaming
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('sticky_footer');

		echo $this->Html->script('jquery-1.11.2');
		echo $this->Html->script('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<nav class="navbar navbar-default row">
      <div class="container-fluid">
        <div class="navbar-header col-md-4">
            <button type="button" class="navbar-toggle collapsed col-md-4 col-md-offset-1" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->image('vstglogo.png', array("alt" => "vstg", "class" => "img-responsive", 'url' => array('controller' => 'posts','action' => 'index'))); ?></li>
        </div>
        <div class="col-md-8">
          <div id="navbar" class="navbar-collapse collapse row">
            <ul class="nav navbar-nav col-md-8">
              <li><a href="#contact">Contact</a></li>
              <li><a href="http://www.vstg.net/about">About</a></li>
              <li><a href="https://vstg.forums.net/">Forums</a><li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Store Menu <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><?php echo $this->Html->link('Cards', array('controller' => 'cards', 'action' => 'index'));?></li>
                  <li><a href="#">Accessories</a></li>

                </ul>
              </li>
              <li><?php echo $this->Html->link(__('Tournaments'), array('controller' => 'tournaments' ,'action' => 'signup')); ?></li>
            </ul>
            <ul class="nav navbar-nav navbar-right col-md-4">
              <?php if(!$this->Session->check('Auth.User')) : ?>
              <li><?php echo $this->Html->link(__('Login'), array('controller' => 'users' ,'action' => 'login')); ?></li>
              <li><?php echo $this->Html->link(__('Register'), array('controller' => 'users','action' => 'register')); ?></li>
            <?php else: ?>
              <li>  <?php
                      $username = $this->Session->read('Auth.User.username');
                      echo $this->Html->link(__('Hi, ' . $username . '!'), array('controller' => 'users','action' => 'view',$this->Session->read('Auth.User.id'))); ?></li>
                
              <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users' ,'action' => 'logout')); ?></li>
            <?php endif; ?>
              <li class="active"><a href="./">
                <button type="button" class="btn btn-default" aria-label="Shopping Cart">
                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                </button>
              </a></li>
            </ul>
          </div>
      
          
        </div>  
      </div><!--/.nav-collapse -->
  </nav>
    <div class='container'>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
    </div>
	</div>
	<footer class="footer">
		<div class="container">
			<p class="text-muted">
				VS Tournament Gaming Copyright <?php echo date('Y'); ?>
			</p>
		</div>
	</footer>
</body>
</html>
