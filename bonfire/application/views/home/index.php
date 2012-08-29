
<div class="container">

	<div class="hero-unit">

		<h1>Bienvenido a <br /> Bonfire-coffee.</h1>

		<p>Ponga en marcha sus aplicaciones basadas en <br /> CodeIgniter completamente en espa&ntilde;ol latino.</p>
	</div>

<p>Si eres nuevo en Bonfire, pero estas familiarizado con <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a>, podr&aacute;s iniciar y ejecutar el sistema en poco tiempo.</p>

<p>Si eres nuevo en CodeIgniter, asegurate de leer y entender la <a href="http://codeigniter.com/user_guide/" target="_blank">Gu&iacute;a del Usuario de CodeIgniter</a> (en ingl&eacute;s) antes de sumergirse en Bonfire.</p>

<p>Si eres nuevo en Bonfire, puedes iniciar leyendo la <?php echo anchor('http://cibonfire.com/learn', 'documentaci&oacute;n', 'target="_blank"') ?> (en ingl&eacute;s).</p>

<p>Bonfire utiliza Twitter Bootstrap para las interfaces (front-end y back-end). Aprende m&aacute;s <?php echo anchor('http://twitter.github.com/bootstrap/', 'aqu&iacute;', 'target="_blank"') ?> (en ingl&eacute;s).</p>


<?php if (isset($current_user->email)) : ?>

	<div class="alert alert-info" style="text-align: center">

		<?php echo anchor(SITE_AREA, "Ingresa al panel de control"); ?>

	</div>

<?php else :?>

	<p style="text-align: center">
		<?php echo anchor('/login', '<i class="icon-lock icon-white"></i> '. lang('bf_action_login'), ' class="btn btn-primary btn-large" '); ?>
	</p>

<?php endif;?>



</div>
