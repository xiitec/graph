<div class="listings form">
<?php echo $this->Form->create('Listing'); ?>
	<fieldset>
		<legend><?php echo __('Edit Listing'); ?></legend>
	<?php
		echo $this->Form->input('summary');
		echo $this->Form->input('service_id');
		echo $this->Form->input('rate');
		echo $this->Form->input('website');
		echo $this->Form->input('description', array('type' => 'textarea'));
		echo $this->Form->input('active', array('type' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
