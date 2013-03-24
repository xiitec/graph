<div class="container-fluid">
	<div class="span10 offset1 row-fluid">	
		<?php echo $this->Form->postLink(__('Delete Your Profile'), array( 'action' => 'delete', $user['User']['id']), array( 'class' => 'btn btn-danger pull-right'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		<?php echo $this->Html->link(__('Edit Your Profile'), array( 'action' => 'edit', $user['User']['id']), array( 'class' => 'btn btn-warning pull-right', 'style' => 'margin-right:5px')); ?>
		<div class="users view">
		<h2 style="margin-bottom:40px">Profile</h2>
			<dl>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($user['User']['name']); ?>
					&nbsp;
				</dd><br>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($user['User']['email']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
		<div class="listings index">
			<h2><?php echo __('Current Listings'); ?></h2>
			<table class="table">
			<tr>
				<th><?php echo $this->Paginator->sort('service_id'); ?></th>
				<th><?php echo $this->Paginator->sort('summary'); ?></th>
				<th><?php echo $this->Paginator->sort('rate'); ?></th>
				<th><?php echo $this->Paginator->sort('website'); ?></th>
				<th><?php echo $this->Paginator->sort('date_created'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($current_listings as $listing): ?>
				<tr>
					<td><?php echo $this->Html->link($listing['Service']['title'], array('controller' => 'services', 'action' => 'view', $listing['Service']['id'])); ?></td>
					<td><?php echo h($listing['Listing']['summary']); ?>&nbsp;</td>
					<td><?php echo '$ '.h($listing['Listing']['rate']); ?>&nbsp;</td>
					<td><?php echo h($listing['Listing']['website']); ?>&nbsp;</td>
					<td><?php echo h($listing['Listing']['date_created']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link("View", "/listings/view/".$listing['Listing']['id']); ?>
						<?php echo $this->Html->link("Edit", "/listings/edit/".$listing['Listing']['id']); ?>
						<?php echo $this->Form->postLink("Delete", "/listings/delete/".$listing['Listing']['id'], null, __('Are you sure you want to delete # %s?', $listing['Listing']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			<!-- Archive -->
			<h2><?php echo __('Archived Listings'); ?></h2>
			<table class="table">
			<tr>
				<th><?php echo $this->Paginator->sort('service_id'); ?></th>
				<th><?php echo $this->Paginator->sort('summary'); ?></th>
				<th><?php echo $this->Paginator->sort('rate'); ?></th>
				<th><?php echo $this->Paginator->sort('website'); ?></th>
				<th><?php echo $this->Paginator->sort('date_created'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($archived_listings as $listing): ?>
				<tr>
					<td><?php echo $this->Html->link($listing['Service']['title'], array('controller' => 'services', 'action' => 'view', $listing['Service']['id'])); ?></td>
					<td><?php echo h($listing['Listing']['summary']); ?>&nbsp;</td>
					<td><?php echo '$ '.h($listing['Listing']['rate']); ?>&nbsp;</td>
					<td><?php echo h($listing['Listing']['website']); ?>&nbsp;</td>
					<td><?php echo h($listing['Listing']['date_created']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link("View", "/listings/view/".$listing['Listing']['id']); ?>
						<?php echo $this->Html->link("Edit", "/listings/edit/".$listing['Listing']['id']); ?>
						<?php echo $this->Form->postLink("Delete", "/listings/delete/".$listing['Listing']['id'], null, __('Are you sure you want to delete # %s?', $listing['Listing']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>