
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    
    <fieldset>
		<legend><?php echo __('Sign Up'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirm', array('type'=>'password'));
		echo $this->Form->input('Charity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>


<div class="span5 row-fluid hero-unit">
    
    test
</div>


</div>

