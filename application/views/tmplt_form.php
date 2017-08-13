#without authentication
<div class="form-group">
	<label for=""></label>
	<input class="w3-input" name="" placeholder="" type="text" />
	
</div>

#using authentication
<div class="form-group">
	<label for="name"></label>
	<input class="w3-input" name="fname" placeholder="Your First Name | without space" type="text" value="<?php echo set_value('fname'); ?>" />
	<span class="text-danger"><?php echo form_error('fname'); ?></span>
</div>