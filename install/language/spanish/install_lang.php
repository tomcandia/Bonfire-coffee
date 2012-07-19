<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
	Copyright (c) 2011 Lonnie Ezell

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.
*/

$lang['in_intro']					= '<h2>Bienvenido</h2><p>&iexcl;Bienvenido al proceso de instalaci&oacute;n de Bonfire!<br /> Con Bonfire crear&aacute; aplicaciones web basadas en Codeigniter 2.0 m&aacute;s r&aacute;pido que nunca.<br /> Para iniciar el proceso de instalci&oacute;n, S&oacute;lo llene los campos a continuaci&oacute;n</p>';
$lang['in_not_writeable_heading']	= 'Archivos/Carpetas sin permisos de escritura';

$lang['in_writeable_directories_message'] = 'Por favor asegurese de que el siguiente directorio tiene permisos de escritura e intentelo nuevamente';
$lang['in_writeable_files_message']       = 'Por favor asegurese de que el siguiente archivo tenga permisos de escritura e intentelo nuevamente';

$lang['in_db_settings']				= 'Configuraci&oacute;n de la Base de Datos';
$lang['in_db_settings_note']		= '<p>Por favor llene la informaci&oacute;n a continuaci&oacute;n.</p><p class="small">Esta configuraci&oacute;n ser&aacute; guardada en el archivo principal <b>config/database.php</b> y en el archivo del entorno de desarrollo (que se encuentra en <b>config/development/database.php)</b>. </p>';
$lang['in_db_no_connect']           = 'El instalador no se pudo conectar al servidor MySQL o la base de datos, asegurese de ingresar la informaci&oacute;n correcta.';
$lang['in_db_setup_error']          = 'Hubo un error al cargar la configuraci&oacute;n a la base de datos';
$lang['in_db_settings_error']       = 'Hubo un error al insertar la configuraci&oacute;n en la base de datos';
$lang['in_db_account_error']        = 'Hubo un error al crear su cuenta en la base de datos';
$lang['in_settings_save_error']     = 'Hubo un error al guardar las configuraciones. Por favor verifique que su base de datos y el archivo de configuracion %s/database tienen permisos de escritura.';

$lang['in_environment']				= 'Entorno';
$lang['in_host']					= 'Host';
$lang['in_database']				= 'Base de datos';
$lang['in_prefix']					= 'Prefijo';
$lang['in_test_db']					= 'Base de datos de prueba';

$lang['in_account_heading']			= '<h2>Informaci&oacute;n faltante</h2><p>Por favor ingrese la siguiente informaci&oacute;n.</p>';
$lang['in_site_title']				= 'T&iacute;tulo del sitio';
$lang['in_username']			    = 'Nombre de Usuario';
$lang['in_password']			    = 'Contrase&ntilde;a';
$lang['in_password_note']			= 'M&iacute;nimo 8 caracteres.';
$lang['in_password_again']			= 'Contrase&ntilde;a (repetir)';
$lang['in_email']					= 'Su correo electr&oacute;nico';
$lang['in_email_note']				= 'Por favor vuelve a verificar su correo electr&oacute;nico antes de continuar.';
$lang['in_install_button']			= 'Instalar Bonfire';

$lang['in_curl_disabled']			= '<p class="error">cURL <strong>is not</strong> presently enabled as a PHP extension. Bonfire will not be able to check for updates until it is enabled.</p>';

$lang['in_success_notification']    = 'Todo esta listo para iniciar! Happy coding!';
$lang['in_success_rebase_msg']		= 'Por favor configure en el archivo .htaccess la opci&oacute;n RewriteBase';
$lang['in_success_msg']				= 'Por favor remueva la carpeta install y regrese a ';

$lang['no_migrations_found']			= 'No se encontraron los archivos de migraci&oacute;n';
$lang['multiple_migrations_version']	= 'Multiples versiones de migraci&oacute;n: %d';
$lang['multiple_migrations_name']		= 'Multiples nombres de migraci&oacute;n: %s';
$lang['migration_class_doesnt_exist']	= 'La clase de migracion no existe: %s';
$lang['wrong_migration_interface']		= 'Interfaz incorrecta de migraci&oacute;n: %s';
$lang['invalid_migration_filename']		= 'Nombre de archivo de migraci&oacute;n incorrecto: %s - %s';