<?php $this->load->view('header'); ?>

<<<<<<< HEAD
<?php //echo lang('in_intro'); ?>
=======
<?php echo lang('in_intro'); ?>
>>>>>>> FETCH_HEAD

<?php if (isset($startup_errors) && !empty($startup_errors)) :?>

	<h2><?php echo lang('in_not_writeable_heading'); ?></h2>
	
	<?php echo $startup_errors; ?>
	
<<<<<<< HEAD
	<p style="text-align: right; margin-top: 3em;"><?php echo anchor('install', lang('in_reload')); ?></p>
=======
	<p style="text-align: right; margin-top: 3em;"><?php echo anchor('install', 'Reload Page'); ?></p>
>>>>>>> FETCH_HEAD

<?php else : ?>

	<?php if (isset($curl_error) && !empty($curl_error)) :?>
	
	<?php echo lang('in_curl_disabled'); ?>
	
	<?php endif; ?>
    

	<?php echo lang('in_account_heading'); ?>
	  
	
	<?php if (validation_errors()) : ?>
	<div class="notification information">
		<p><?php echo validation_errors(); ?></p>
	</div>
	<?php endif; ?>
	
	<?php echo form_open(current_url()) ?>
	
		<div>
			<label for="site_title"><?php echo lang('in_site_title'); ?></label>
<<<<<<< HEAD
			<input type="text" name="site_title" id="site_title" placeholder="Aqu&iacute; el t&iacute;tulo para mi aplicaci&oacute;n Web" value="<?php echo set_value('site_title', config_item('site.title')) ?>" />
		</div>
		
		<div>
			<label for="username"><?php echo lang('in_username'); ?></label>
=======
			<input type="text" name="site_title" id="site_title" placeholder="My Great Bonfire App" value="<?php echo set_value('site_title', config_item('site.title')) ?>" />
		</div>
		
		<div>
			<label for="username"><?php echo lang('bf_username'); ?></label>
>>>>>>> FETCH_HEAD
			<input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" />
		</div>
		
		<br />
		
		<div>
<<<<<<< HEAD
			<label for="password"><?php echo lang('in_password'); ?></label>
=======
			<label for="password"><?php echo lang('bf_password'); ?></label>
>>>>>>> FETCH_HEAD
			<input type="password" name="password" id="password" value="" />
			<p class="small"><?php echo lang('in_password_note'); ?></p>
		</div>
		
		<div>
			<label for="pass_confirm"><?php echo lang('in_password_again'); ?></label>
			<input type="password" name="pass_confirm" id="pass_confirm" value="" />
		</div>
		
		<br/>
		
		<div>
			<label for="email"><?php echo lang('in_email'); ?></label>
<<<<<<< HEAD
			<input type="email" name="email" id="email" placeholder="yo@micorreo.com" value="<?php echo set_value('email') ?>" />
=======
			<input type="email" name="email" id="email" placeholder="me@home.com" value="<?php echo set_value('email') ?>" />
>>>>>>> FETCH_HEAD
			<p class="small"><?php echo lang('in_email_note'); ?></p>
		</div>
		
		<div class="submits">
			<input type="submit" name="submit" id="submit" value="<?php echo lang('in_install_button'); ?>" />
		</div>
	
	<?php echo form_close(); ?>
<?php endif; ?>

<<<<<<< HEAD
<?php $this->load->view('footer'); ?>
=======
<?php $this->load->view('footer'); ?>
>>>>>>> FETCH_HEAD
