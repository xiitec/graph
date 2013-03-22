

<div class="users form">

<?php if ($nohash != 1) { ?>

<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Reset Password'); ?></legend>
	<?php
		
			echo $this->Form->input('password');
<<<<<<< HEAD
			echo $this->Form->input('password_confirm', array('type'=>'password'));
=======
			echo $this->Form->input('password_confirm', array('type'=>'password')););
>>>>>>> 0f7010dc9e98953b8b730a5a7528e0c278373c16
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<?php } ?>

</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
