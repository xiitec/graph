<div class="charities view">
<h2><?php  echo __('Charity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($charity['Charity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($charity['Charity']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($charity['Charity']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($charity['Charity']['website']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Charity'), array('action' => 'edit', $charity['Charity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Charity'), array('action' => 'delete', $charity['Charity']['id']), null, __('Are you sure you want to delete # %s?', $charity['Charity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Charities'), array('controller' => 'users_charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Charity'), array('controller' => 'users_charities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users Charities'); ?></h3>
	<?php if (!empty($charity['UsersCharity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Charity Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($charity['UsersCharity'] as $usersCharity): ?>
		<tr>
			<td><?php echo $usersCharity['id']; ?></td>
			<td><?php echo $usersCharity['charity_id']; ?></td>
			<td><?php echo $usersCharity['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users_charities', 'action' => 'view', $usersCharity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users_charities', 'action' => 'edit', $usersCharity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users_charities', 'action' => 'delete', $usersCharity['id']), null, __('Are you sure you want to delete # %s?', $usersCharity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Charity'), array('controller' => 'users_charities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
