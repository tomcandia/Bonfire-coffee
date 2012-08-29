<?php $this->load->view('header'); ?>

<<<<<<< HEAD
<?php echo lang('in_success'); ?>
=======
<?php echo lang('in_intro'); ?>
>>>>>>> FETCH_HEAD

<?php if(isset($rebase)):?>
<p><?php echo lang('in_success_rebase_msg').$rebase;?></p>
<?php endif;?>

<?php echo lang('in_success_msg'); ?> <?php echo anchor('../', 'Bonfire'); ?>

<?php $this->load->view('footer'); ?>
