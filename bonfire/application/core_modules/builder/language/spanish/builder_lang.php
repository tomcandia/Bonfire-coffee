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

// INDEX page
$lang['mb_actions']				= 'Acciones';
$lang['mb_create_button']		= 'Crear módulo';
$lang['mb_create_link']			= 'Crear un nuevo módulo';
$lang['mb_create_note']			= 'Utiliza el asistente para crear un nuevo módulo. El asistente hace todo el trabajo pesado por ti generando controladores, módelos, vistas y archivos de idioma.';
$lang['mb_not_writeable_note']	= 'Error: la carpeta bonfire/modules no tiene permisos de escritura por lo que no podr&aacute; crear ning&uacute;n m&oacute;dulo en el servidor. Por favor asigne los permisos de escritura a la carpeta y actualiza esta p&aacute;gina.';
$lang['mb_delete']				= 'Eliminar';
$lang['mb_generic_description']	= 'Su descripci&oacute;n aqu&iacute;.';
$lang['mb_installed_head']		= 'M&oacute;dulos de aplicaci&oacute;n instaldos';
$lang['mb_module']				= 'M&oacute;dulo';
$lang['mb_no_modules']			= 'No hay módulos instalados.';

$lang['mb_table_name']			= 'Nombre';
$lang['mb_table_version']		= 'Versi&oacute;n';
$lang['mb_table_author']		= 'Autor';
$lang['mb_table_description']	= 'Descripci&oacute;n';

// OUTPUT page
$lang['mb_out_success']			= 'La creaci&oacute;n del m&oacute;dulo finalizo correctamente! Ahora puedes buscar la lista de archivos de controladores, Modelos, Idioma, Migraci&oacute;n y Vistas que fueron creados durante el proceso. Los archivos de modelo y SQL ser&aacute;n incluidos si selecciono la opci&oacute;n de "Generar Migraci&oacute;n" y el archivo de Javascript si fue requerido durante la creaci&oacute;n.';
$lang['mb_out_success_note']	= 'NOTA: Por favor agrege validaci&oacute;n adicional a los campos de usuario seg&uacute;n requiera. Este c&oacute;digo es usado como un punto de partida &uacute;nicamente.';
$lang['mb_out_tables_success']	= 'Las tablas fueron creadas autom&aacute;ticamente en la base de datos. Puede verificarlas o eliminarlas, si desea desde esta secci&oacute;n %s.';
$lang['mb_out_tables_error']	= 'Las tablas <strong>NO</strong> fueron creadas autom&aacute;ticamente en la base de datos. Si a&uacute;n lo requiere vaya a la secci&oacute;n %s y realice el proceso de migraci&oacute;n en la base de datos antes de poder trabajar con ellas.';
$lang['mb_out_acl'] 			= 'Archivo de control de acceso';
$lang['mb_out_acl_path']        = 'migrations/001_Install_%s_permissions.php';
$lang['mb_out_config'] 			= 'Archivo de configuraci&oacute;n';
$lang['mb_out_config_path'] 	= 'config/config.php';
$lang['mb_out_controller']		= 'Controlador';
$lang['mb_out_controller_path']	= 'controllers/%s.php';
$lang['mb_out_model'] 			= 'Modelos';
$lang['mb_out_model_path']		= '%s_model.php';
$lang['mb_out_view']			= 'Vistas';
$lang['mb_out_view_path']		= 'views/%s.php';
$lang['mb_out_lang']			= 'Archivo de Idioma';
$lang['mb_out_lang_path']		= '%s_lang.php';
$lang['mb_out_migration']		= 'Archivos de Migraci&oacute;n';
$lang['mb_out_migration_path']	= 'migrations/002_Install_%s.php';
$lang['mb_new_module']			= 'Nuevo m&oacute;dulo';
$lang['mb_exist_modules']		= 'M&oacute;dulos existentes';

// FORM page
$lang['mb_form_note'] 			= '<p><b>Este formulario generar&aacute; un m&oacute;dulo completo de CodeIgniter (modelo, controlador y vista) y un archivo de Migraci&oacute;n.</b></p>';

$lang['mb_table_note'] 			= '<p>Su tabla se crear&aacute; con al menos un campo de clave primaria que ser&aacute; usado como identificador &uacute;nico y como un &iacute;ndice. Si requiere campos adicionales, haga clic en el n&uacute;mero que necesita para agregarlos a este formulario.</p>';

$lang['mb_field_note'] 			= '<p><b>NOTA: PARA TODOS LOS CAMPOS</b><br />Si su campo para la tabla es de tipo "enum" o "set", por favor ingrese los valores usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez necesita poner una barra invertida ("\") o una sola comilla ("\'") entre esos valores, precedalos con una barra invertida (por ejemplo \'\\xyz\' or \'a\\\'b\').</p>';
	
$lang['mb_form_errors']			= 'Por favor corrija los siguientes errores.';
$lang['mb_form_mod_details']	= 'Detalles del m&oacute;dulo';
$lang['mb_form_mod_name']		= 'Nombre del m&oacute;dulo';
$lang['mb_form_mod_name_ph']	= 'Foro, Blog, Tareas';
$lang['mb_form_mod_desc']		= 'Descripci&oacute;n del m&oacute;dulo';
$lang['mb_form_mod_desc_ph']	= 'Una lista de todos los &iacute;tems';
$lang['mb_form_contexts']		= 'Entornos de trabajo';
$lang['mb_form_public']			= 'Publico';
$lang['mb_form_table_details']	= 'Detalles de la Tabla';
$lang['mb_form_actions']		= 'Acciones del controlador';
$lang['mb_form_primarykey']		= 'Clave primaria';
$lang['mb_form_delims']			= 'Delimitadores del formulario de entrada';
$lang['mb_form_err_delims']		= 'Form Error Delimiters';
$lang['mb_form_text_ed']		= 'Editor del &aacute;rea de texto';
$lang['mb_form_soft_deletes']	= '&iexcl;Usar el campo "Deleted"?';
$lang['mb_form_use_created']	= '&iexcl;Usar el campo "Created"?';
$lang['mb_form_use_modified']	= '&iexcl;Usar el campo "Modified"?';
$lang['mb_form_created_field']	= '"Created" field name?';
$lang['mb_form_modified_field']	= '"Modified" field name?';
$lang['mb_form_generate']		= 'Crear una tabla para el m&oacute;dulo';
$lang['mb_form_role_id']		= 'Otorgar el rol de acceso completo';
$lang['mb_form_fieldnum']		= 'Campos adicionales para la tabla';
$lang['mb_form_field_details']	= 'Detalles del campo';
$lang['mb_form_table_name']		= 'Nombre de la Tabla';
$lang['mb_form_table_name_ph']	= 'Min&uacute;sculas, sin espacios';
$lang['mb_form_table_as_field_prefix']		= 'Usar el nombre de la tabla como prefijo para el campo';
$lang['mb_form_label']			= 'Etiqueta';
$lang['mb_form_label_ph']		= 'El nombre que se usar&aacute; en la p&aacute;gina web';
$lang['mb_form_fieldname']		= 'Nombre (sin espacios)';
$lang['mb_form_fieldname_ph']	= 'El nombre del campo en la tabla. Usar min&uacute;sculas es lo recomendado.';
$lang['mb_form_type']			= 'Tipo de entrada';
$lang['mb_form_length']			= 'longitud m&aacute;xima <b>-o-</b> Valores';
$lang['mb_form_length_ph']		= '30, 255, 1000, etc...';
$lang['mb_form_dbtype']			= 'Tipo de datos';
$lang['mb_form_rules']			= 'Reglas de validaci&oacute;n';
$lang['mb_form_rules_limits']	= 'Reglas adicionales'; 
$lang['mb_form_required']		= 'Requerido';
$lang['mb_form_unique']			= 'Unico';
$lang['mb_form_trim']			= 'Trim';
$lang['mb_form_xss_clean']		= 'Sanitize';
$lang['mb_form_valid_email']	= 'Correo electr&oacute;nico v&aacute;lido';
$lang['mb_form_is_numeric']		= '0-9';
$lang['mb_form_alpha']			= 'a-Z';
$lang['mb_form_alpha_dash']		= 'a-Z, 0-9, and _-';
$lang['mb_form_alpha_numeric']	= 'a-Z and 0-9';
$lang['mb_form_add_fld_button'] = 'Agregar otro campo';
$lang['mb_form_show_advanced']	= 'Activar las opciones avanzadas';
$lang['mb_form_show_more']		= '...active para m&aacute;s reglas...';
$lang['mb_form_integer']		= 'Entero';
$lang['mb_form_is_decimal']		= 'Numero decimal';
$lang['mb_form_is_natural']		= 'Numero natural';
$lang['mb_form_is_natural_no_zero']	= 'Natural, sin ceros';
$lang['mb_form_valid_ip']		= 'IP v&aacute;lida';
$lang['mb_form_valid_base64']	= 'Base64 v&aacute;lido';
$lang['mb_form_alpha_extra']	= 'Alfanumerico, subrayado, guiones, periodos y espacios.';

// Activities
$lang['mb_act_create']			= 'M&oacute;dulo creado';
$lang['mb_act_delete']			= 'M&oacute;dulo eliminado';

$lang['mb_form_button']			= 'Generar Módulo';
$lang['mb_form_none']			= 'Ninguno';
$lang['mb_form_new_table']		= 'Crear una nueva tabla';
$lang['mb_form_existing_table']	= 'Desde una tabla existente';

$lang['mb_create_a_context']	= 'Crear un Contexto';
$lang['mb_tools']				= 'Herramienta';
$lang['mb_mod_builder']			= 'Generador de M&oacute;dulos';
$lang['mb_new_context']			= 'Nuevo Contexto';
$lang['mb_no_context_name']		= 'Nombre inv&aacute;lido para el Contexto.';
$lang['mb_cant_write_config']	= 'No es posible escribir en el archivo de configuraci&oacute;n.';
$lang['mb_context_exists']		= 'Ya existe el Contexto en el archivo de configuraci&oacute;n.';
