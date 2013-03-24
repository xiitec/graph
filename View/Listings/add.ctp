<div class="listings form">
<?php echo $this->Form->create('Listing'); ?>
	<fieldset>
		<legend><?php echo __('What job do you need done?'); ?></legend>
	<?php
                $user = $this->Session->read('Auth.User');
                echo '<h4>Name: '.$user['name'].'</h4>';
		echo $this->Form->input('service_id');
		echo $this->Form->input('rate', array('description' => 'what is this job worth?'));
		echo $this->Form->input('website');
		echo $this->Form->input('description');
		echo $this->Form->input('pitcher_or_catcher');
		//echo $this->Form->input('user_id');
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

		<li><?php echo $this->Html->link(__('List Listings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
