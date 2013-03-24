<div class="listings view">
<h2><?php  echo __('Listing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listing['Service']['title'], array('controller' => 'services', 'action' => 'view', $listing['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pitcher Or Catcher'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['pitcher_or_catcher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listing['User']['name'], array('controller' => 'users', 'action' => 'view', $listing['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['summary']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Listing'), array('action' => 'edit', $listing['Listing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Listing'), array('action' => 'delete', $listing['Listing']['id']), null, __('Are you sure you want to delete # %s?', $listing['Listing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Listings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
