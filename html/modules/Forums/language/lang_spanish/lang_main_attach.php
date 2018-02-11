<?php
/** 
*
* attachment mod main [Spanish]
*
* @package attachment_mod
* @version $Id: lang_main_attach.php,v 1.1 2005/11/05 10:25:02 acydburn Exp $
* @copyright (c) 2002 Meik Sievertsen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($lang) || !is_array($lang))
{
	$lang = array();
}

// Attachment Mod Main Language Variables

// Auth Related Entries
$lang['Rules_attach_can'] = '<span class="thick">Puede</span> adjuntar archivos';
$lang['Rules_attach_cannot'] = '<span class="thick">No puede</span> adjuntar archivos';
$lang['Rules_download_can'] = '<span class="thick">Puede</span> descargar archivos';
$lang['Rules_download_cannot'] = '<span class="thick">No Puede</span> descargar archivos';
$lang['Sorry_auth_view_attach'] = 'Lo sentimos, pero no tiene autorizaci�n para ver este archivo adjunto';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Descripci�n'; // used in Administration Panel too...
$lang['Downloaded'] = 'Descargado';
$lang['Download'] = 'Descargar'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Tama�o';
$lang['Viewed'] = 'Visto';
$lang['Download_number'] = '%d veces'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'La extensi�n \'%s\' no esta habilitada, este adjunto no se mostrar� hasta que un administrador habilite la extensi�n.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Panel de control de publicaci�n de adjuntos';
$lang['Attach_posting_cp_explain'] = 'Si pulsa en agregar un adjunto, ver� el cuadro para agregar adjuntos.<br />Si pulsa en adjuntos publicados, ver� una lista de archivos adjuntados, y podr� editarlos.<br />Si quiere remplazar (subir una nueva version) un adjunto, tendr� que pulsar dos enlaces: agregue el adjunto como lo haria normalmente; luego, no pulse en Agregar Adjunto, sino en Actualizar Versi�n junto al adjunto que quiere actualizar.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Agregar un Adjunto';
$lang['Add_attachment_title'] = 'Agregar un Adjunto';
$lang['Add_attachment_explain'] = 'Si no quiere agregar archivos adjuntos a su mensaje, deje en blanco estos campos.';
$lang['File_name'] = 'Nombre del archivo';
$lang['File_comment'] = 'Comentario del archivo';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Adjuntos agregados';
$lang['Options'] = 'Opciones';
$lang['Update_comment'] = 'Actualizar comentario';
$lang['Delete_attachments'] = 'Eliminar adjuntos';
$lang['Delete_attachment'] = 'Eliminar adjunto';
$lang['Delete_thumbnail'] = 'Eliminar imagen preliminar';
$lang['Upload_new_version'] = 'Subir nueva versi�n';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s no es un nombre v�lido'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'El adjunto es muy grande.<br />No se pudo determinar cu�nto es el maximo soportado por php.<br />El File Attachment mod no pudo determinar el tama�o m�ximo en el php.ini';
$lang['Attachment_php_size_overrun'] = 'El adjunto es muy grande.<br />El tama�o maximo de subida son %d MB.<br />Este tamalo lo define el php.ini, por lo que el Attachment MOD no pueda pasar ese tama�o'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'La extensi�n %s no est� permitida'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'No puede publicar mensajes con adjuntos con la extensi�n %s en este foro'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'El adjunto es demasiado grande.<br />El tama�o m�ximo es %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Lo sentimos, pero el tama�o total de adjuntos est� completo. Comun�quese con un administrador para mas informaci�n.';
$lang['Too_many_attachments'] = 'No se pueden agregar mas adjuntos porque el m�ximo de %d ha sido alcanzado.'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'La imagen no puede tener mas de %d p�xeles de ancho y %d p�xeles de largo'; 
$lang['General_upload_error'] = 'Error: no se ha podido subir adjunto a %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Tiene que escribir algo en el campo \'Agregar un adjunto\'';
$lang['Error_missing_old_entry'] = 'No se ha podido actualizar el adjunto, no se ha podido encontrar la entrada anterior.';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Lo sentimos, pero ha alcanzado el l�mite de mensajes privados en sus carpetas. Por favor, borre algunos adjuntos de su carpeta enviados, por ejemplo.';
$lang['Attach_quota_receiver_pm_reached'] = 'Lo sentimos, pero el destinatario ha alcanzado el l�mite de mensajes privados en sus carpetas. Av�sele de que borre algo para poder enviarle los archivos.';

// Errors -> Download
$lang['No_attachment_selected'] = 'No ha seleccionado un archivo para ver o bajar';
$lang['Error_no_attachment'] = 'El adjunto selccionado no existe';

// Delete Attachments
$lang['Confirm_delete_attachments'] = '�Est� seguro de que desea borrar los archivos adjuntos?';
$lang['Deleted_attachments'] = 'Los adjuntos seleccionados han sido borrados.';
$lang['Error_deleted_attachments'] = 'No se han podido borrar los archivos adjuntos';
$lang['Confirm_delete_pm_attachments'] = '�Est� seguro e que desea borrar todos los archivos adjuntos que hay en este mensaje privado?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Los archivos adjuntos est�n deshabilitados';

$lang['Directory_does_not_exist'] = 'El directorio \'%s\' no existe o no se ha podido acceder a �l.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Compruebe si \'%s\' es un directorio.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'No se ha podido escribir en \'%s\'. Tiene que poner los permisos del directorio en 777.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'No se ha podido conectar con el servidor FTP: \'%s\'. Por favor, compruebe la configuracion FTP';
$lang['Ftp_error_login'] = 'No se ha podido entrar al servidor. El usuario \'%s\' o la contrase�a son incorrectos.';
$lang['Ftp_error_path'] = 'No se ha podido acceder al directorio: \'%s\'. Revise las configuraciones FTP';
$lang['Ftp_error_upload'] = 'No se pueden subir archivos al servidor FTP: \'%s\'. Revise las configuraciones FTP.';
$lang['Ftp_error_delete'] = 'No se pueden eliminar archivos: \'%s\'. Revise las configuraciones FTP.<br />Es probable que el adjunto no exista.';
$lang['Ftp_error_pasv_mode'] = 'No se ha podido habilitar o deshabilitar el modo pasivo del FTP';

// Attach Rules Window
$lang['Rules_page'] = 'Reglas de los Adjuntos';
$lang['Attach_rules_title'] = 'Extensiones y tama�os permitidos';
$lang['Group_rule_header'] = '%s -> Tama�o m�ximo de subida: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Extensiones y tama�os permitidos';
$lang['Note_user_empty_group_permissions'] = 'NOTA:<br />Normalmente, se le permite adjuntar archivos en este Foro.<br />Pero si a su Grupo no se le permite, <br />usted no podr� adjuntar nada. Si lo intenta<br />recibir� un mensaje de error.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Cuota';
$lang['Pm_quota'] = 'Cuota de mensajes privados';
$lang['User_upload_quota_reached'] = 'Lo sentimos, pero ha alcanzado el l�mite de su cuota de %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Panel de control de adjuntos del usuario';
$lang['UACP'] = 'Panel de control de adjuntos del usuario';
$lang['User_uploaded_profile'] = 'Subidos: %s';
$lang['User_quota_profile'] = 'Cuota: %s';
$lang['Upload_percent_profile'] = '%d%% del total';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Buscar Adjuntos';
$lang['Test_settings'] = 'Probar configuraci�n';
$lang['Not_assigned'] = 'Sin asignar';
$lang['No_file_comment_available'] = 'Sin comentario';
$lang['Attachbox_limit'] = 'Est� usando el %d%% de su cuota';
$lang['No_quota_limit'] = 'Sin l�mite de couta';
$lang['Unlimited'] = 'Ilimitado';

?>