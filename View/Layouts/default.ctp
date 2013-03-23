<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('common');
		echo $this->Html->script('bootstrap.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
</head>
<body>
	<!-- Header -->
	<div class="container-fluid">
		<div class="row-fluid">
			<div id="header" class="navbar span12">
			  	<div class="navbar-inner">
		  			<?php echo $this->Html->link(
							$this->Html->image('logo.png', array('class' => 'pull-left logo', 'alt' => $cakeDescription, 'border' => '0')), '/', array( 'escape' => false)
						);
					?>
		  			<a class="brand" href="/">ProDono</a>
					<ul class="nav">
				      <li class="active"><?php echo $this->Html->link("Home", '/'); ?></li>
				      <li><a href="#"> Service Provider </a></li>
				      <li><a href="#"> Service Receiver </a></li>
				      <li><a href="#"> Charity </a></li>
				    </ul>
			  	</div>
			</div>
		</div>
		<div class="row-fluid" id="pagebody">
			<div class="row-fluid">
				<!-- Content -->
				<div class="span12" id="content">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
				<!-- Footer -->
				<div id="footer" class="navbar navbar-inverse span12">
					<div class="navbar-inner">
						<ul class="nav pull-right">
					      <li><a href="#"> About</a></li>
					      <li><a href="#"> Contact</a></li>
					    </ul>
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
