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
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
		echo $this->Html->css('home');
?>


<!-- Site description box -->
<div class="span12 row-fluid hero-unit">
	<div class="span6">
		<img src="/img/logo.png" class="pull-left"></img>
		<h2>Welcome to ProDono!</h2><br>
		<p>We link people with skills to  customers who need their service.</p>
		<p>But instead of paying them directly, the money goes to charity.</p>
	</div>
	<!-- Choice box -->
	<div class="span6" style="margin-top:30px">
		I want to:
		<br><a class="btn btn-info span12" href="#provider">
			<h3>Provide a Service</h3>
		</a><br><br><br>
		<a class="btn btn-primary span12" href="#receiver">
			<h3>Donate for Services</h3>
		</a>
	</div>
</div>
<!-- Filler -->
<div id="filler" class="span12 row-fluid infobox">

</div>
<!-- Service Provider -->
<div id="provider" class="span12 row-fluid infobox">
	<img class="span4" src="/img/logo.png"></img>
	<div class="span8">
		<h1>You've got skills to give.</h1>
		<br><br>
		<p class="lead">You're an Accountant, a public speaker, an IT service provider, a designer, an amazing bagpiper... <br><br>
		We'll link you up with someone who needs those services. <br><br>
		Then - as a show of gratitude - that person will donate to a quality charity that you love!</p>
		<a href="#" class="btn btn-success btn-large pull-right">Sign up now!</a>
	</div>
</div>
<!-- Service Receiver -->
<div id="receiver" class="span12 row-fluid infobox">
	<img class="span4" src="/img/logo.png"></img>
	<div class="span8">
		<h1>You need a service.</h1>
		<br><br>
		<p class="lead">You need some work done: <br><br>
			legal services, taxes, website maintenance... <br><br>
			Find someone willing to do that work for free and give the money to charity instead.<br> Everybody wins!</p>
		<a href="#" class="btn btn-success btn-large pull-right">Start now!</a>
	</div>
</div>