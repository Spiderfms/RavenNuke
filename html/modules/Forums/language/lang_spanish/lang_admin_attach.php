<?php
/** 
*
* attachment mod admin [Spanish]
*
* @package attachment_mod
* @version $Id: lang_admin_attach.php,v 1.3 2005/11/20 13:38:55 acydburn Exp $
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

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Panel de Control';
$lang['Shadow_attachments'] = 'Adjuntos Sombreados';
$lang['Forbidden_extensions'] = 'Extensiones Prohibidas';
$lang['Extension_control'] = 'Control de Extensiones';
$lang['Extension_group_manage'] = 'Control de grupos de extensiones';
$lang['Special_categories'] = 'Categorias Especiales';
$lang['Sync_attachments'] = 'Sincronizar Adjuntos';
$lang['Quota_limits'] = 'Cuotas';

// Attachments -> Management
$lang['Attach_settings'] = 'Configuraci�n de los adjuntos';
$lang['Manage_attachments_explain'] = 'Aqu� podr� manejar las configuraciones generales del Attachment MOD. Si pulsa el bot�n Probar Configuraci�n, ser�n autom�ticamente probados los sistemas para ver si el Attachment MOD puede funcionar bien en este foro. Si tiene problemas subiendo archivos, haga esta prueba para obtener un mensaje m�s detallado sobre el error.';
$lang['Attach_filesize_settings'] = 'Configuraci�n del tama�o de los Adjuntos';
$lang['Attach_number_settings'] = 'Configuraci�n de la cantidad de Adjuntos';
$lang['Attach_options_settings'] = 'Opciones de los Adjuntos';

$lang['Upload_directory'] = 'Directorio para los Adjuntos';
$lang['Upload_directory_explain'] = 'Escriba la direcci�n para guardar los archivos subidos. La direcci�n es relativa a la de la instalaci�n del Icy Phoenix. Por ejemplo, escriba \'files\' si la instalaci�n fue en http://www.sudominio.com/ip/ y su directorio de subida est� en http://www.sudominio.com/ip/files/.';
$lang['Attach_img_path'] = 'Icono de los Adjuntos';
$lang['Attach_img_path_explain'] = 'Esta imagen se muestra al lado de los enlaces de los adjuntos en los mensajes. Deje este campo en blanco si no quiere ningun imagen. Esta opci�n es sobrescrita por la que se encuentra en la administracion de grupos de extensiones.';
$lang['Attach_topic_icon'] = 'Icono de adjunto en tema';
$lang['Attach_topic_icon_explain'] = 'Esta imagen se muestra en los foros antes del t�tulo de aquellos que contienen adjuntos. Deje este di�logo en blanco si no quiere ningun icono.';
$lang['Attach_display_order'] = 'Orden de muestra de los adjuntos';
$lang['Attach_display_order_explain'] = 'Aqu� puede elegir c�mo mostrar los adjuntos en mensajes/MPs con Orden descendente (Adjuntos m�s nuevos primero) u Orden ascendente (Archivos m�s antiguos primero).';
$lang['Show_apcp'] = 'Mostrar el nuevo sistema de publicaci�n de adjuntos';
$lang['Show_apcp_explain'] = 'Elija qu� sistema de publicaci�n de adjuntos quiere mostrar (s�) o el metodo viejo con dos cuadros para publicar adjuntos y editar adjuntos publicados (no) en la ventana de publicaci�n. La apariencia es muy dif�cil de explicar, pero vale la pena probarlo.';

$lang['Max_filesize_attach'] = 'Tama�o del archivo';
$lang['Max_filesize_attach_explain'] = 'Tama�o m�ximo de los adjuntos. 0 es ilimitado \'ilimitado\'. Esta opcion est� restringida por el servidor. Por ejemplo, si la configuraci�n de su PHP no soporta mas de 2MB, el Attachment MOD no puede hacer nada para superarla.';
$lang['Attach_quota'] = 'Couta total de Adjuntos';
$lang['Attach_quota_explain'] = 'Espacio m�ximo para guardar todos los adjuntos de su foro. 0 equivale a \'ilimitado\'.';
$lang['Max_filesize_pm'] = 'Tama�o m�ximo en la carpeta de los mensajes privados.';
$lang['Max_filesize_pm_explain'] = 'Tama�o m�ximo de almacenamiento de archivos en los mensajes privados de los usuarios. 0 equivale a \'ilimitado\'.';
$lang['Default_quota_limit'] = 'Cuota predeterminada';
$lang['Default_quota_limit_explain'] = 'Aqu� puede poner qu� cuota quiere que tengan los usuarios que se registren a partir de la instalaci�n del Attachment MOD. La opci�n \'sin l�mite de cuota\' es por si no usa cuotas. En ese caso, se usar� la opci�n definida en la configuraci�n general.';

$lang['Max_attachments'] = 'Numero m�ximo de adjuntos.';
$lang['Max_attachments_explain'] = 'Cantidad m�xima de adjuntos por mensaje.';
$lang['Max_attachments_pm'] = 'Cantidad m�xima de adjuntos en un mensaje privado.';
$lang['Max_attachments_pm_explain'] = 'Define el n�mero m�ximo de adjuntos que puede incluir un usuario en un mensaje privado.';

$lang['Disable_mod'] = 'Deshabilitar Attachmente MOD';
$lang['Disable_mod_explain'] = 'Esta opci�n es b�sicamente para probar estilos. Deshabilita todo el Attachment MOD excepto el panel de control.';
$lang['PM_Attachments'] = 'Permitir adjuntos en mensajes privados';
$lang['PM_Attachments_explain'] = 'Habilita/Deshabilita adjuntos en mensajes privados.';
$lang['Ftp_upload'] = 'Habilitar FTP';
$lang['Ftp_upload_explain'] = 'Habilita o deshabilita el FTP. Si pone s� deber� definir los campos de FTP, y entonces no se usar� el directorio de subida.';
$lang['Attachment_topic_review'] = '�Mostrar adjuntos en la ventana de revisi�n del tema?';
$lang['Attachment_topic_review_explain'] = 'Si pone s� se mostraran los adjuntos en la ventana de revisi�n al contestar un mensaje.';

$lang['Ftp_server'] = 'Servidor FTP';
$lang['Ftp_server_explain'] = 'Ac� puede ingresar la IP o el nombre del servidor para subir archivos. Si deja esto en blanco se usar� el servidor donde est� el phpBB2. No est� habilitado ftp:// ni nada parecido, s�lo la direcci�n plana, ejemplo ftp.foo.com o la direcci�n IP (as� es mucho mas r�pido).';

$lang['Attach_ftp_path'] = 'Camino del FTP para el directorio de subida';
$lang['Attach_ftp_path_explain'] = 'El directorio donde seran alojados los archivos subidos por FTP. Este directorio no debe tener los permisos CHMOD cambiados. No escriba ac� la IP o el nombre del servidor, s�lo el camino del directorio.<br />Por ejemplo: /home/web/uploads';
$lang['Ftp_download_path'] = 'Link de baja al FTP';
$lang['Ftp_download_path_explain'] = 'Escriba la url de su servidor FTP, donde los archivos est�n guardados.<br />Si est� usando un FTP remoto ponga la ruta completa, por ejemplo, http://www.mystorage.com/phpBB2/upload.<br />Si est� usando un servidor local para los archivos, puede ingresar una ruta relativa, por ejemplo \'upload\'.<br />La barra inicial ser� removida. Deje este campo en blanco si la ruta no es accesible desde internet. Con este campo en blanco no podr� habilitar el modo de baja fisico.';
$lang['Ftp_passive_mode'] = 'Habilitar FTP Pasivo';
$lang['Ftp_passive_mode_explain'] = 'El comando PASV pide al servidor remoto abrir una conexi�n para los datos y devolver la direcci�n de este puerto. El servidor remoto se queda escuchando en ese puerto esperando una conexi�n por parte del cliente.';

$lang['No_ftp_extensions_installed'] = 'No puede usar el FTP para subir archivos porque las extensiones de subida de archivos por FTP no est�n instaladas en su PHP';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Aqu� puede suprimir datos de los adjuntos de mensajes cuando el fichero se ha perdido, y suprimir el fichero que ya no tiene adjuntos en ning�n mensaje. Puede descargar o ver el fichero si pulsa en �l; si no hay ning�n enlace presente, el fichero no existe.';
$lang['Shadow_attachments_file_explain'] = 'Suprimir todos los ficheros que existen en el sistema de ficheros y que no est�n asignados a ning�n mensaje existente.';
$lang['Shadow_attachments_row_explain'] = 'Suprimir todas las informaciones de los adjuntos en los /files/ que no existen en el sistema de ficheros.';
$lang['Empty_file_entry'] = 'Entrada del archivo vac�a';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Imagen previa regenerada para: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Sincronizaci�n de Adjuntos terminada.';
$lang['Sync_topics'] = 'Sinc. Temas';
$lang['Sync_posts'] = 'Sinc. Mensajes';
$lang['Sync_thumbnails'] = 'Sinc. Miniaturas';


// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Administrar Extensiones';
$lang['Manage_extensions_explain'] = 'Aqu� puede manejar las extensiones. Si quiere habilitar o deshabilitar una extensi�n use el Administrador de grupos de extensiones.';
$lang['Explanation'] = 'Explicaci�n';
$lang['Extension_group'] = 'Grupos de extensiones';
$lang['Invalid_extension'] = 'Extensi�n no valida';
$lang['Extension_exist'] = 'La extensi�n %s ya existe'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'La extensi�n %s est� prohibida, no est� usted autorizado para agregar Extensiones Habilitadas'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Administrar Grupos de extensiones';
$lang['Manage_extension_groups_explain'] = 'Aqu� puede agregar y modificar sus grupos de extensiones, puede deshabilitar grupos de extensiones, asignarles una categor�a especial, cambiar el m�todo de bajada, o poner un icono de subida.';
$lang['Special_category'] = 'Categor�a especial';
$lang['Category_images'] = 'Im�genes';
$lang['Category_stream_files'] = 'Streamimg';
$lang['Category_swf_files'] = 'Archivos Flash';
$lang['Allowed'] = 'Permitido';
$lang['Allowed_forums'] = 'Foros permitidos';
$lang['Ext_group_permissions'] = 'Grupos de permisos';
$lang['Download_mode'] = 'M�todo de bajada';
$lang['Upload_icon'] = 'Icono';
$lang['Max_groups_filesize'] = 'Tama�o m�ximo';
$lang['Extension_group_exist'] = 'El grupo de extensiones %s ya existe'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Administrar categor�as especiales';
$lang['Manage_categories_explain'] = 'Aqu� puede configurar categor�as especiales. Puede elegir par�metros especiales y asignaciones para las categor�as especiales de un grupo de extensiones';
$lang['Settings_cat_images'] = 'Configuraciones para la categoria: Im�genes';
$lang['Settings_cat_streams'] = 'Configuraciones para la categor�a: Archivos de Audio';
$lang['Settings_cat_flash'] = 'Configuraciones para la categor�a: Archivos en Flash';
$lang['Display_inlined'] = 'Mostrar im�genes en l�nea';
$lang['Display_inlined_explain'] = 'Seleccione si quiere mostrar las imagenes directamente en los mensajes (s�) o mostrar las imagenes como un enlace.';
$lang['Max_image_size'] = 'Dimensiones m�ximas de las im�genes';
$lang['Max_image_size_explain'] = 'Aqu� puede definir el tama�o m�ximo de las im�genes a adjuntar (Ancho x Alto en p�xeles).<br />Si pone 0x0, esta funci�n se deshabilita. Con algunas im�genes esto puede no funcionar debido a limitaciones de PHP.';
$lang['Image_link_size'] = 'Dimensiones para enlazarlas';
$lang['Image_link_size_explain'] = 'Si la imagen alcanza esta medida se mostrar� un enlace a la imagen en el mensaje,<br />Si la vista en el foro est� habilitada (anchura y altura en pixels).<br />Si pone esto a 0x0, se deshabilitar� esta funci�n. Esta funci�n puede no funcionar con algunas im�genes por limitaciones de PHP.';
$lang['Assigned_group'] = 'Grupo Asignado';

$lang['Image_create_thumbnail'] = 'Crear imagen previa';
$lang['Image_create_thumbnail_explain'] = 'Siempre crear imagen previa. Esta caracter�stica elimina casi todos los ajustes en esta categor�a especial, excepto las dimensiones m�ximas de la imagen. Con esta caracter�stica que el Thumbnail ser� mostrado dentro del mensaje, el usuario puede hacer clic para abrir la imagen a su tama�o real.<br />Observar por favor que esta caracter�stica requiere que est� instalado Imagick, si no est� instalado o si permite el modo seguro la extensi�n GD de PHP ser� utilizada. Si el tipo de imagen no es soportada por el PHP, esta caracter�stica no ser� utilizada.';
$lang['Image_min_thumb_filesize'] = 'Tama�o m�nimo para crear imagen previa';
$lang['Image_min_thumb_filesize_explain'] = 'Si la imagen pesa menos del tama�o definido, no se crear� imagen previa porque la imagen ya es muy chica.';
$lang['Image_imagick_path'] = 'Imagick (Ruta completa)';
$lang['Image_imagick_path_explain'] = 'Introduzca la ruta donde est� el programa Imagick, normalmente /usr/bin/convert (en windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Buscar Imagick';

$lang['Use_gd2'] = 'Crear usando la extensi�n GD2';
$lang['Use_gd2_explain'] = 'PHP puede compilar con la extension GD1 o GD2 para manipular la imagen. Para crear correctamente las miniaturas sin imagemagick, el MOD de Adjuntos utiliza dos m�todos basados en lo que selecciones aqu�.  Si sus miniaturas aparecen con mala calidad o se descuadran para arriba, intente cambiar este ajuste.';
$lang['Attachment_version'] = 'Version de MOD de Adjuntos (Attachment MOD) %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Administrar extensiones prohibidas';
$lang['Manage_forbidden_extensions_explain'] = 'Aqu� puede agregar extensiones prohibidas. Las extensiones php, php3 and php4 estan prohibidas por seguridad, no puede habilitarlas.';
$lang['Forbidden_extension_exist'] = 'La extensi�n %s ya est� prohibida'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'La extensi�n %s est� en las extensiones permitidas. Antes de prohibirla, deshabil�tela.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Permisos de grupos de extensiones -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Aqu� puede restringir extensiones del foro que quiera (definido en el cuadro de foros permitidos). La opci�n predeterminada es TODOS los grupos de extensiones en todos los foros (como hac�a el Attachmente MOD desde su primera version). S�lo agregue los foros a los grupos permitidos para habilitarlos. La opci�n predeterminada TODOS desaparecer� cuando agregue foros a la lista. En todo caso, puede volver a TODOS en cualquier momento. Si agrega un foro nuevo a su sitio y los permisos est�n en TODOS, nada cambiar�. Pero si ya hab�a restringido el uso de las extensiones en los foros, deber� aplicarlo otra vez a todos los foros nuevos. Es f�cil hacer eso autom�ticamente, pero forzar�a el tener que editar muchos archivos';
$lang['Note_admin_empty_group_permissions'] = 'NOTA:<br />Dentro de los foros, en la parte inferior se permite a sus usuarios adjuntar archivos. Pero puesto que no se permite a ningun grupo de usuarios adjuntar archivos, sus usuarios no pueden adjuntar archivos. Si lo intentan, recibir�n mensajes de error. Quiz� quiera fijar los permisos del ADMIN en \'Archivos en Mensajes\' de estos foros.<br /><br />';
$lang['Add_forums'] = 'Agregar foros';
$lang['Add_selected'] = 'Agregar seleccionados';
$lang['Perm_all_forums'] = 'TODOS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Administrar Cuotas';
$lang['Manage_quotas_explain'] = 'Aqu� puede a�adir/borrar/cambiar los l�mites de cuota. Puede asignar estos l�mites de cuota a los usuarios y a los grupos m�s adelante. Para asignar un limite de cuota a un usuario, debe ir a Usuarios --> Administraci�n, seleccionar al usuario y ver las opciones. Para asignar un l�mite de cuota a un grupo, vaya a Grupos --> Administraci�n, seleccione el grupo que quiere editar, y podr� ver las opciones de configuraci�n. Si desea ver, que tienen asignado los Usuarios y Grupos de l�mite de cuota, haga clic en \'Ver\' a la izquierda de la descripci�n de cuota.';
$lang['Assigned_users'] = 'Usuarios asignados';
$lang['Assigned_groups'] = 'Grupos asignados';
$lang['Quota_limit_exist'] = 'El l�mite de couta %s ya existe.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Panel de control de archivos adjuntos';
$lang['Control_panel_explain'] = 'Aqu� puede ver y administrar archivos adjuntos basados en Usuarios, Adjuntos, cantidad de veces vistos, etc.';
$lang['File_comment_cp'] = 'Comentario del Archivo';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Use * como comod�n para resultados parciales';
$lang['Size_smaller_than'] = 'Tama�o menor que (bytes)';
$lang['Size_greater_than'] = 'Tama�o mayor que (bytes)';
$lang['Count_smaller_than'] = 'Contador de bajadas menor a';
$lang['Count_greater_than'] = 'Contador de bajadas mayor a';
$lang['More_days_old'] = 'Que tenga m�s de esta cantidad de dias de antig�edad';
$lang['No_attach_search_match'] = 'No se ha encontrado ningun adjunto con las caracter�sticas que busc�';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Cantidad de Archivos Adjuntos';
$lang['Total_filesize'] = 'Espacio total utilizado';
$lang['Number_posts_attach'] = 'N�mero de mensajes con adjuntos';
$lang['Number_topics_attach'] = 'N�mero de temas con adjuntos';
$lang['Number_users_attach'] = 'Cantidad de usuarios que han publicado adjuntos';
$lang['Number_pms_attach'] = 'Adjuntos totales en mensajes privados';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Estad�sticas de %s'; // replace %s with username
$lang['Size_in_kb'] = 'Tama�o (KB)';
$lang['Downloads'] = 'Descargas';
$lang['Post_time'] = 'Hora del mensaje';
$lang['Posted_in_topic'] = 'Publicado en el tema';
$lang['Submit_changes'] = 'Enviar cambios';

// Sort Types
$lang['Sort_Attachments'] = 'Adjuntos';
$lang['Sort_Size'] = 'Tama�o';
$lang['Sort_Filename'] = 'Nombre del Archivo';
$lang['Sort_Comment'] = 'Comentario';
$lang['Sort_Extension'] = 'Extensi�n';
$lang['Sort_Downloads'] = 'Descargas';
$lang['Sort_Posttime'] = 'Hora del mensaje';
$lang['Sort_Posts'] = 'Mensajes';

// View Types
$lang['View_Statistic'] = 'Estad�sticas';
$lang['View_Search'] = 'Buscar';
$lang['View_Username'] = 'Usuario';
$lang['View_Attachments'] = 'Adjuntos';

// Successfully updated
$lang['Attach_config_updated'] = 'Configuraci�n de los adjuntos actualizada';
$lang['Click_return_attach_config'] = 'Pulse %sAqu�%s para volver a la configuraci�n de los adjuntos';
$lang['Test_settings_successful'] = 'Prueba finalizada, todo parece estar bien.';

// Some basic definitions
$lang['Attachments'] = 'Adjuntos';
$lang['Attachment'] = 'Adjunto';
$lang['Extensions'] = 'Extensiones';
$lang['Extension'] = 'Extensi�n';

// Auth pages
$lang['Auth_attach'] = 'Subir Archivos';
$lang['Auth_download'] = 'Descargar';

?>