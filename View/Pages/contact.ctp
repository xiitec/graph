<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Contact Us'); ?></legend>

                <p>Please send us any questions or comments, we'll get back to you
                   promptly!
                </p>
                
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('message', array('type'=>'textarea'));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

