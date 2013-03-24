<div class="charities form">
<?php echo $this->Form->create('Charity'); ?>
	<fieldset>
		<legend><?php echo __('Add Charity'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('website');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Charities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users Charities'), array('controller' => 'users_charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Charity'), array('controller' => 'users_charities', 'action' => 'add')); ?> </li>
	</ul>
</div>
