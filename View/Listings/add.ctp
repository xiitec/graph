<div class="listings form">
<?php echo $this->Form->create('Listing'); ?>
	<fieldset>
	<legend><?php echo __('Add a Listing'); ?></legend>
	<label class="">Are you...</label>
	<div class="row-fluid" style="margin-bottom:10px">
		<label class="radio inline span3">
			<input type="radio" name="data[Listing][pitcher_or_catcher]" id="ListingPitcherOrCatcher1" value="pitcher" checked>
			Providing the Service
		</label>
		<label class="radio inline span3">
			<input type="radio" name="data[Listing][pitcher_or_catcher]" id="ListingPitcherOrCatcher2" value="catcher">
			Requesting the Service
		</label><br>
	</div>
	<?php
		echo $this->Form->input('summary');
		echo $this->Form->input('service_id');
		echo $this->Form->input('rate', array('description' => 'what is this job worth?'));
		echo $this->Form->input('website');
		echo $this->Form->input('user_id', array('value' => $user, 'type' => 'hidden'));
		echo $this->Form->input('description', array('type' => 'textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>