<div class="usersCharities view">
<h2><?php  echo __('Users Charity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usersCharity['UsersCharity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charity Id'); ?></dt>
		<dd>
			<?php echo h($usersCharity['UsersCharity']['charity_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($usersCharity['UsersCharity']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Charity'), array('action' => 'edit', $usersCharity['UsersCharity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Charity'), array('action' => 'delete', $usersCharity['UsersCharity']['id']), null, __('Are you sure you want to delete # %s?', $usersCharity['UsersCharity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Charities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Charity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Id'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities'), array('controller' => 'charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charity Id'), array('controller' => 'charities', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($usersCharity['user_id'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['is_active']; ?>
&nbsp;</dd>
		<dt><?php echo __('Resetkey'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['resetkey']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Hashdate'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['hashdate']; ?>
&nbsp;</dd>
		<dt><?php echo __('Service Id'); ?></dt>
		<dd>
	<?php echo $usersCharity['user_id']['service_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit User Id'), array('controller' => 'users', 'action' => 'edit', $usersCharity['user_id']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Charities'); ?></h3>
	<?php if (!empty($usersCharity['charity_id'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usersCharity['charity_id']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $usersCharity['charity_id']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
	<?php echo $usersCharity['charity_id']['description']; ?>
&nbsp;</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
	<?php echo $usersCharity['charity_id']['website']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Charity Id'), array('controller' => 'charities', 'action' => 'edit', $usersCharity['charity_id']['id'])); ?></li>
			</ul>
		</div>
	</div>
	