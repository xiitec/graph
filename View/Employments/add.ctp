<div class="employments form">
<?php echo $this->Form->create('Employment'); ?>
	<fieldset>
		<legend><?php echo __('Add Employment'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('population');
		echo $this->Form->input('labour_force');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employments'), array('action' => 'index')); ?></li>
	</ul>
</div>
