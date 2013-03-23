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
		<p>We link Bob's Accounting who wants to provide professional services for free
		   with Fred who needs his accounting done... BUT... theres a twist...</p>
		<p>Fred donates money to a Charity that Bob really likes.</p>
	</div>
	<!-- Choice box -->
	<div class="span6">
		You want to:
		<br><a class="btn span12" href="#provider">
			Provide a Service
		</a><br><br>
		<a class="btn span12" href="#receiver">Click me

		</a>
	</div>
</div>
<!-- Filler -->
<div id="filler" class="span12 row-fluid infobox">
	Filler
</div>
<!-- Service Provider -->
<div id="provider" class="span12 row-fluid infobox">
	Service Provider
</div>
<!-- Service Receiver -->
<div id="receiver" class="span12 row-fluid infobox">
	Service Receiver
</div>