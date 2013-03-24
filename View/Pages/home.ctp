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
<div class="row-fluid">
	<img src="/img/prodono.png" class="span12"></img>
</div><br>
<div class="span12 row-fluid text-center">
		<div class="span12 row-fluid" style="margin-top:40px;margin-bottom:40px">
			<div class="span6 pull-left">
				<h2 style="color: rgb(51,85,93)">Professionals:</h2> Get money donated to charity by offering your services and skills! <br>
				<a class="btn btn-primary" href="#provider" style="margin-top:15px">
					<h4>Provide a Service</h3>
				</a>
			</div>
			<div class="span6 pull-right">
				<h2 style="color: rgb(81,135,161)">Businesses:</h2> Get quality work at a reduced rate, and all of it goes to charity!
				<a class="btn btn-info" href="#receiver" style="margin-top:15px">
					<h4>Donate for Services</h3>
				</a> 
			</div>
		</div>
		<div class="hero-unit" style="padding:20px">
		<h2>Welcome to ProDono!</h2>
		<p>We are a service linking professionals willing to do donate their skills and time, to local businesses willing to donate their money.

		This is not pro bono. It’s professional quality work for local businesses that need professional work done at a reduced cost.  Here’s the kicker: Businesses agree to donate professional service wage to a charity of the worker’s choice, that’s professional work in exchange for charitable donations – ProDono.
		</p>
		</div>
</div>
<!-- Filler -->
<div id="filler" class="span12 row-fluid text-center" style="height:450px;margin-top:40px;margin-bottom:40px">
	<h1>Watch our Promo Video!</h1><br>
	<iframe width="70%" height="400" src="http://www.youtube.com/embed/2EndVVnKdzQ" frameborder="0" allowfullscreen></iframe>
</div>
<!-- Service Provider -->
<div id="provider" class="span12 row-fluid infobox">
	<img class="span4" src="/img/hammer.png"></img>
	<div class="span8">
		<h1 style="color: rgb(51,85,93)">Professionals</h1>
		<h3 class="offset1">You've got skills to give.</h2>
		<br><br>
		<p class="lead">You're an Accountant, a public speaker, an IT service provider, a designer, an amazing bagpiper... <br><br>
		We'll link you up with someone who needs those services. <br><br>
		Then - as a show of gratitude - that person will donate to a quality charity that you love!</p><br>
		<a href="/join" class="btn btn-success btn-large pull-right">Sign up now!</a>
	</div>
</div>
<!-- Service Receiver -->
<div id="receiver" class="span12 row-fluid infobox">
	<div class="span8">
		<h1 style="color: rgb(81,135,161)">Businesses</h1>
		<h3 class="offset1">You need a service.</h2>
		<br><br>
		<p class="lead">You need some work done: <br><br>
			legal services, taxes, website maintenance... <br><br>
			Find someone willing to do that work for free and give the money to charity instead.<br> Everybody wins!</p><br>
		<a href="/join" class="btn btn-success btn-large pull-left">Sign up now!</a>
	</div>
	<img class="span4" src="/img/donation.gif"></img>
</div>