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

$cakeDescription = __d('cake_dev', 'ProDono.co! Offer Service | Recieve Service | Donate to Charity');
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
				      <li class="<?php if(isset($home))echo "active";?>"><?php echo $this->Html->link("Home", '/'); ?></li>
				      <li class="<?php if(isset($join)) echo "active";?>"><a href="/join"> Sign Up Now</a></li>
				      <li class="<?php if(isset($about))echo "active";?>"><a href="/about"> About</a></li>
	
                        
                                     <?php
					if ($this->Session->read('Auth.User')) {
                                            echo '<li>'. $this->Html->link("Log Out", "/users/logout")."</li>";
					} else {
					    echo '<li>'. $this->Html->link("Log In", "/users/login")."</li>";
					} 
                                    ?>
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
					      <li><a href="/about"> About</a></li>
					      <li><a href="/contact"> Contact</a></li>
					    </ul>
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

        
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1496966-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        
</body>
</html>
