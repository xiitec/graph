


<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Log In'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Log In >>')); ?>
	<ul>
		<li><?php echo $this->Html->link(__('Sign Up'), array('action' => 'join')); ?></li>
	</ul>
</div>



