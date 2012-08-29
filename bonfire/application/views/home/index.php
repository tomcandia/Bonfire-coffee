
<div class="container">

	<div class="hero-unit">
<<<<<<< HEAD
		<h1>Bienvenido a <br /> Bonfire-coffee.</h1>

		<p>Ponga en marcha sus aplicaciones basadas en <br /> CodeIgniter completamente en espa&ntilde;ol latino.</p>
	</div>

<p>Si eres nuevo en Bonfire, pero estas familiarizado con <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a>, podr&aacute;s iniciar y ejecutar el sistema en poco tiempo.</p>

<p>Si eres nuevo en CodeIgniter, asegurate de leer y entender la <a href="http://codeigniter.com/user_guide/" target="_blank">Gu&iacute;a del Usuario de CodeIgniter</a> (en ingl&eacute;s) antes de sumergirse en Bonfire.</p>

<p>Si eres nuevo en Bonfire, puedes iniciar leyendo la <?php echo anchor('http://cibonfire.com/learn', 'documentaci&oacute;n', 'target="_blank"') ?> (en ingl&eacute;s).</p>

<p>Bonfire utiliza Twitter Bootstrap para las interfaces (front-end y back-end). Aprende m&aacute;s <?php echo anchor('http://twitter.github.com/bootstrap/', 'aqu&iacute;', 'target="_blank"') ?> (en ingl&eacute;s).</p>
=======
		<h1>Welcome to Bonfire.</h1>

		<p>Kickstart your CodeIgniter applications.</p>
	</div>

<p>If you're new to Bonfire, but familiar with <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a>, then you should be up an running within the system in no time.</p>

<p>If you're new to CodeIgniter, make sure you read through and understand the latest <a href="http://codeigniter.com/user_guide/" target="_blank">CodeIgniter User Guide</a> before diving into Bonfire. Your headaches will thank you.</p>


<p>If you are new to Bonfire, you should start by reading the <?php echo anchor('http://cibonfire.com/learn', 'docs', 'target="_blank"') ?>.</p>
>>>>>>> FETCH_HEAD

<?php if (isset($current_user->email)) : ?>

	<div class="alert alert-info" style="text-align: center">
<<<<<<< HEAD
		<?php echo anchor(SITE_AREA, "Ingresa al panel de control"); ?>
=======
		<?php echo anchor(SITE_AREA, "Dive into Bonfire's Springboard"); ?>
>>>>>>> FETCH_HEAD
	</div>

<?php else :?>

	<p style="text-align: center">
		<?php echo anchor('/login', '<i class="icon-lock icon-white"></i> '. lang('bf_action_login'), ' class="btn btn-primary btn-large" '); ?>
	</p>

<?php endif;?>



</div>
