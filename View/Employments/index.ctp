<div class="employments index">
	<h2><?php echo __('Employments'); ?></h2>


        
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Population', 'Labour Force'],        
        
<?php foreach ($employments as $employment): ?>


<?php echo "['".h($employment['Employment']['date'])."', ".h($employment['Employment']['population'])." ,".h($employment['Employment']['labour_force'])."],"; ?>
<?php endforeach; ?>
]);        
        

        var options = {
          title: 'Company Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


<div id="chart_div" style="width: 900px; height: 500px;"></div>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('population'); ?></th>
			<th><?php echo $this->Paginator->sort('labour_force'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employments as $employment): ?>
	<tr>
		<td><?php echo h($employment['Employment']['id']); ?>&nbsp;</td>
		<td><?php echo h($employment['Employment']['date']); ?>&nbsp;</td>
		<td><?php echo h($employment['Employment']['population']); ?>&nbsp;</td>
		<td><?php echo h($employment['Employment']['labour_force']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employment['Employment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employment['Employment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employment['Employment']['id']), null, __('Are you sure you want to delete # %s?', $employment['Employment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employment'), array('action' => 'add')); ?></li>
	</ul>
</div>
