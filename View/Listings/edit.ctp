<div class="listings form">
<?php echo $this->Form->create('Listing'); ?>
	<fieldset>
		<legend><?php echo __('Edit Listing'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('service_id');
		echo $this->Form->input('rate');
		echo $this->Form->input('website');
		echo $this->Form->input('description');
		echo $this->Form->input('pitcher_or_catcher');
		echo $this->Form->input('user_id');
		echo $this->Form->input('active');
		echo $this->Form->input('date_created');
		echo $this->Form->input('summary');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Listing.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Listing.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Listings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
