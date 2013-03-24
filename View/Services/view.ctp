<div class="services view">
<h2><?php  echo __('Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($service['Service']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listings'), array('controller' => 'listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Listings'); ?></h3>
	<?php if (!empty($service['Listing'])): ?>
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
		foreach ($service['Listing'] as $listing): ?>
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
