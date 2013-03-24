<div class="listings index">
	<h2><?php echo __('Listings'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('pitcher_or_catcher'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($listings as $listing): ?>
	<tr>
		<td><?php echo h($listing['Listing']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listing['Service']['title'], array('controller' => 'services', 'action' => 'view', $listing['Service']['id'])); ?>
		</td>
		<td><?php echo h($listing['Listing']['rate']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['website']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['description']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['pitcher_or_catcher']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listing['User']['name'], array('controller' => 'users', 'action' => 'view', $listing['User']['id'])); ?>
		</td>
		<td><?php echo h($listing['Listing']['active']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['summary']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $listing['Listing']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $listing['Listing']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $listing['Listing']['id']), null, __('Are you sure you want to delete # %s?', $listing['Listing']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Listing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
