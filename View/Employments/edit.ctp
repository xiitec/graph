<div class="employments form">
<?php echo $this->Form->create('Employment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employment'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employments'), array('action' => 'index')); ?></li>
	</ul>
</div>
