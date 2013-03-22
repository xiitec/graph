

<div class="users form">

<?php if ($nohash != 1) { ?>

<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Reset Password'); ?></legend>
	<?php
		
			echo $this->Form->input('password');
			echo $this->Form->input('password_confirm', array('type'=>'password'));
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
