<div class="employments view">
<h2><?php  echo __('Employment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employment['Employment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($employment['Employment']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Population'); ?></dt>
		<dd>
			<?php echo h($employment['Employment']['population']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Labour Force'); ?></dt>
		<dd>
			<?php echo h($employment['Employment']['labour_force']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employment'), array('action' => 'edit', $employment['Employment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employment'), array('action' => 'delete', $employment['Employment']['id']), null, __('Are you sure you want to delete # %s?', $employment['Employment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
