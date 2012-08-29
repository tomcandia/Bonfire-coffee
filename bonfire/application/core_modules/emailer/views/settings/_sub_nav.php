<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/settings/emailer') ?>"><?php echo lang('bf_context_settings'); ?></a>
	</li>
	<li <?php echo $this->uri->segment(4) == 'template' ? 'class="active"' : '' ?>>
<<<<<<< HEAD
		<a href="<?php echo site_url(SITE_AREA .'/settings/emailer/template') ?>"><?php echo lang('em_template'); ?></a>
	</li>
	<li <?php echo $this->uri->segment(4) == 'queue' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/settings/emailer/queue') ?>"><?php echo lang('em_emailer_queue'); ?></a>
=======
		<a href="<?php echo site_url(SITE_AREA .'/settings/emailer/template') ?>">Template</a>
	</li>
	<li <?php echo $this->uri->segment(4) == 'queue' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/settings/emailer/queue') ?>">Queue</a>
>>>>>>> FETCH_HEAD
	</li>
</ul>
