<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit Profile'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('Charity');
		echo $this->Form->input('password', array( 'value' => ''));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
