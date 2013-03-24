<h2><?php echo __('Search Listings'); ?></h2>

<div>
<?php echo $this->Form->create('Listing'); ?>
<fieldset>
    	<label class="">Are You...</label>
	<div class="row-fluid" style="margin-bottom:10px">
		<label class="radio inline span3">
			<input type="radio" name="data[Listing][pitcher_or_catcher]" id="ListingPitcherOrCatcher1" value="pitcher" checked>Providing the Service</label>
		<label class="radio inline span3">
			<input type="radio" name="data[Listing][pitcher_or_catcher]" id="ListingPitcherOrCatcher2" value="catcher">
			Requesting the Service
		</label>
            <br><br>
        <?php echo $this->Form->input('search', array('label'=>'')); ?>        
        </div>
</fieldset>                
<?php echo $this->Form->end(__('Search >>')); ?>        
</div>                
    
    
  

<?php if(isset($listings)) { ?>

<div class="listings index">

	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
                        <th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			
			<th><?php echo $this->Paginator->sort('pitcher_or_catcher','Provider / Reciever'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($listings as $listing): ?>
        <?php 
        if(h($listing['Listing']['pitcher_or_catcher'] == 'pitcher')) {
            $term = 'Provider';
        } else {
            $term = 'Service';
        }
        
        ?>
	<tr>
                <td><?php echo h($listing['Listing']['summary']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listing['Service']['title'], array('controller' => 'services', 'action' => 'view', $listing['Service']['id'])); ?>
		</td>
		<td>$<?php echo h($listing['Listing']['rate']); ?>&nbsp;</td>
		
		<td><?php echo $term; ?>&nbsp;</td>
		<td>
                <?php echo $this->Html->link($listing['User']['name'], array('controller' => 'users', 'action' => 'view', $listing['User']['id'])); ?>
		</td>
		<td><?php echo h($listing['Listing']['date_created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $listing['Listing']['id'])); ?>
			</td>
	</tr>
<?php endforeach; ?>

        </table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?></p>
	
</div>

<?php } ?>
