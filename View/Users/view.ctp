<div class="container-fluid">
	<div class="span8 offset2 row-fluid">	
		<?php echo $this->Form->postLink(__('Delete Your Profile'), array( 'action' => 'delete', $user['User']['id']), array( 'class' => 'btn btn-danger pull-right'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		<?php echo $this->Html->link(__('Edit Your Profile'), array( 'action' => 'edit', $user['User']['id']), array( 'class' => 'btn btn-warning pull-right', 'style' => 'margin-right:5px')); ?>
		<div class="users view">
		<h2 style="margin-bottom:60px"><?php  echo __($user['User']['name']); ?></h2>
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
	</div>
</div>