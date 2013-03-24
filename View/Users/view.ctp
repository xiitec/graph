<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resetkey'); ?></dt>
		<dd>
			<?php echo h($user['User']['resetkey']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hashdate'); ?></dt>
		<dd>
			<?php echo h($user['User']['hashdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['service_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listings'), array('controller' => 'listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities'), array('controller' => 'charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charity'), array('controller' => 'charities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Listings'); ?></h3>
	<?php if (!empty($user['Listing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Pitcher Or Catcher'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Listing'] as $listing): ?>
		<tr>
			<td><?php echo $listing['id']; ?></td>
			<td><?php echo $listing['service_id']; ?></td>
			<td><?php echo $listing['rate']; ?></td>
			<td><?php echo $listing['website']; ?></td>
			<td><?php echo $listing['description']; ?></td>
			<td><?php echo $listing['pitcher_or_catcher']; ?></td>
			<td><?php echo $listing['user_id']; ?></td>
			<td><?php echo $listing['active']; ?></td>
			<td><?php echo $listing['date_created']; ?></td>
			<td><?php echo $listing['summary']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'listings', 'action' => 'view', $listing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'listings', 'action' => 'edit', $listing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'listings', 'action' => 'delete', $listing['id']), null, __('Are you sure you want to delete # %s?', $listing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Charities'); ?></h3>
	<?php if (!empty($user['Charity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Charity'] as $charity): ?>
		<tr>
			<td><?php echo $charity['id']; ?></td>
			<td><?php echo $charity['name']; ?></td>
			<td><?php echo $charity['description']; ?></td>
			<td><?php echo $charity['website']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'charities', 'action' => 'view', $charity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'charities', 'action' => 'edit', $charity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'charities', 'action' => 'delete', $charity['id']), null, __('Are you sure you want to delete # %s?', $charity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Charity'), array('controller' => 'charities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
