<div class="usersCharities form">
<?php echo $this->Form->create('UsersCharity'); ?>
	<fieldset>
		<legend><?php echo __('Add Users Charity'); ?></legend>
	<?php
		echo $this->Form->input('charity_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Charities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Id'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities'), array('controller' => 'charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charity Id'), array('controller' => 'charities', 'action' => 'add')); ?> </li>
	</ul>
</div>
