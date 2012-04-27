<?php
/*
***********************************************************************************
DaDaBIK (DaDaBIK is a DataBase Interfaces Kreator) http://www.dadabik.org/
Copyright (C) 2001-2012  Eugenio Tacchini

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

If you want to contact me by e-mail, this is my address: eugenio.tacchini@unicatt.it
***********************************************************************************
*/
?>
<?php
// submit buttons
$submit_buttons_ar = array (
	"insert"    => "Inserte un nuevo registro",
	"search/update/delete" => "Buscar/actualizar/borrar registros",
	"insert_short"    => "Insertar", 
	"search_short" => "Buscar", 
	"new_mailing" => "Nuevo envio",
	"check_existing_mailing" => "Revisar envios existentes",
	"send_mailing" => "Mandar envios existentes",
	"insert_anyway"    => "Insertar de todos modos",
	"search"    => "Buscar registro",
	"update"    => "Actualizar",
	"ext_update"    => "Actualizar su perfil",
	"yes"    => "Si",
	"no"    => "No",
	"go_back" => "Atrás",
	"edit" => "Editar",
	"delete" => "Borrar",
	"details" => "Detalles",
	"remove_from_mailing" => "Quitar de envios",
	"remove_all_from_mailing" => "Quitar todos de envios",
	"send" => "Mandar",
	"add_to_mailing" => "Agregar a los envios",
	"print_labels" => "Mostrar etiquetas",
	"create_this_mailing" => "                 Crear este envio                 ",
	"change_table" => "Cambiar tabla" 
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Mostrar todos los registros", 
	"logout" => "Cerrar sesión",
	"top" => "Tope",
	"last_search_results" => "últimos resultados",
	"show_all" => "Mostrar todo", 
	"home" => "Principal",
	"select_operator" => "Seleccione el operador:",
	"all_conditions_required" => "Todas las condiciones requeridas",
	"any_conditions_required" => "Cualquiera de las condiciones requeridas",
	"all_contacts" => "Todos los contactos", 
	"removed" => "removido",
	"please" => "Por Favor",
	"and_check_form" => "y revise la forma.",
	"and_try_again" => "e intente de nuevo.",
	"none" => "ninguno",
	"are_you_sure" => "¿Esta seguro?",
	"delete_all" => "borrar todo",
	"really?" => "Seguro?",
	"delete_are_you_sure" => "Esta a punto de borrar el registro inferior, esta seguro?",
	"required_fields_missed" => "No ha llenado algunos de los campos requeridos.",
	"alphabetic_not_valid" => "Ha insertado números en un campo alfabético.",
	"numeric_not_valid" => "Ha insertado caracteres no numéricos en un campo numérico.",
	"email_not_valid" => "La dirección de e-mail que especificó no es valida.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "la(s) URL(s) especificadas no es/son valida(s)",
	"phone_not_valid" => "El numero telefonico insertado no es valido.",
	"date_not_valid" => "Ha insertado una o mas fechas erradas.",
	"similar_records" => "Los registros inferiores son similares a los que esta a puntop de agregar.<br>¿Qué desea hacer?",
	"no_records_found" => "No se encontraron registos.",
	"records_found" => "registros encontrados",
	"number_records" => "Numero de registros: ",
	"details_of_record" => "Detalles del registro",
	"edit_record" => "Editar el registro",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "Anterior",
	"next" => "Siguiente",
	"edit_profile" => "Editar su perfil",
	"i_think_that" => "Creo que ",
	"is_similar_to" => " es similar a ",
	"page" => "Página ",
	"of" => " de ",
	"records_per_page" => "registros por página",
	"day" => "Día",
	"month" => "Mes",
	"year" => "Año",
	"administration" => "Administración",
	"create_update_internal_table" => "Crear o modificar tabla interna",
	"other...." => "other....",
	"insert_record" => "Agregar nuevo registro",
	"search_records" => "Buscar registros",
	"exactly" => "exacto",
	"like" => "similar",
	"required_fields_red" => "Los campos requeridos estan en rojo.",
	"insert_result" => "Insertar resultado:",
	"record_inserted" => "registro exitosamente agregado.",
	"update_result" => "Actualizar resultado:",
	"record_updated" => "Reistro actualizado.",
	"profile_updated" => "Su perfil ha sido actualizado.",
	"delete_result" => "Borrar resultado:",
	"record_deleted" => "Reistro eliminado.",
	"duplication_possible" => "Es posible duplicar",
	"mail_to_records" => "correo a todos los registros encontrados",
	"number_mails" => "Numero de mensajes que se enviarán: ",
	"specify_subject_body" => "Por favor especifique el asunto y cuerpo del mansaje",
	"create_new_mailing" => "Crear un nuevo envio",
	"mailing_name" => "Nombre del envio: ",
	"mailing_type" => "Tipo de envio: ",
	"specify_mailing_name" => "(Especifique un nombre para identificar este envio, e.g. trabajos_2002, por favor no use comillas!!!!!!)",
	"email_specific_fields" => "Los campos azules estan relacionados al e-mail, ignorelos si elije enviar un correo normal",
	"from" => "De: ",
	"subject" => "Asunto: ",
	"body" => "Cuerpo: ",
	"dear" => "Estimado",
	"john_smith" => "Sr. John B. Smith",
	"start_sending" => "Comenzar a enviar......", 
	"mailing_sent" => "......Correo enviado",
	"mail_to" => "Para",
	"sent" => "enviado",
	"send" => "Enviar",
	"e-mail" => "e-mail",
	"normal_mail" => "correo normal",
	"attachment" => "Datos Adjuntos: ",
	"additional_notes_mailing" => "Notas adicionales<br>(e.g. razon del envio)",
	"please_specify_mailing_name" => "Por favor especifique un nombre para el envio.",
	"please_specify_mailing_type" => "Por favor especifique un tipo de envio.",
	"please_specify_mailing_subject" => "Por favor especifique unasunto para el envio.",
	"please_specify_mailing_body" => "Por favor especifique un cuerpo para el envio.",
	"mailing_name_already_used" => "El nombre que eligio ya ha sido usado, cambielo.",
	"filename_already_used" => "Nombre de los datos adjuntos ya ha sido usado, cambielo.",
	"mailing" => "Envio",
	"created" => "creado",
	"all_records_found" => "todos los registros encontrados",
	"add_contacts_to" => "Agregar contactos a",
	"check_mailing" => "Revisar Envio",
	"the_mailing" => "El envio",
	"mailing_already_sent" => "Este envio ya fue mandado!",
	"was_composed_by" => "fue compuesto por",
	"contacts" => "contactos",
	"you_have_added" => "Ud. ha agregado",
	"of_which_duplicated" => "de los cuales estan duplicados",
	"of_which_with_no_info" => "de los cuales no contienen suficiente información",
	"is_composed_by" => "ahora ha sido compuesto por",
	"go_back_to_home_send_or_add" => "Ahora puede volver a la pagina de inicio y enviar el correo, o buscar y agregar mas contactos a este correo.", 
	"fields_max_length" => "Ha insertado demasiado texto en uno o mas campos.",
	"you_are_going_unsubscribe" => "Ud. esta a punto de ser eliminado de nuestra lista de envios. ¿Desea continuar?", 
	"you_have_unsubscribed" => "ha desuscrito exitosamente la lista de envios.",
	"change_profile_url" => "Para cambiar su informacion o perfil por favor visite esta página: ",
	"removed_mailing_list_url" => "Para ser eliminado de la lista de envios por favor visite esta página: ", 
	"city" => "Ciudad",
	"province" => "Región",
	"zip_code" => "Código postal",
	"prefix" => "Prefijo",
	"no_city_found" => "No se encontraron ciudades",
	"print_warning" => "Por favor configure su margen de impresón a 0,0,0,0 (arriba, abajo, izquierda, derecha) en su navegador, a fin de imprimir correctamente las etiquetas.",
	"current_upload" => "Archivo actual",
	"delete" => "Borrar",
	"total_records" => "Total de registros",
	"confirm_delete?" => "Confirma el borrado?",
	"is_equal" => "es igual a",
	"contains" => "contiene",
	"starts_with" => "comienza con",
	"ends_with" => "termina con",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Exportar a CSV",
	"new_insert_executed" => "Inserción ejecutada",
	"new_update_executed" => "modificación ejecutada",
	"null" => "Null", // to change
	"is_null" => "is null", // to change
	"is_empty" => "is empty" // to change
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Error, la base de datos interna esta vacia.",
	"get" => "Error obteniendo variables.",
	"no_unique_update_id" => "Su vinculo de actualización ha expirado.", 
	"no_unique_unsubscribe_id" => "Su vinculo de desuscripción no es correcto.", 
	"no_functions" => "Error, no se eligieron funciones<br>Por favor vuelva a la pagina principal.",
	"no_unique_key" => "Error, no se determino clave primaria en su tabla.",
	"upload_error" => "Un error ha ocurrido mientras se subia el archivo.",
	"no_authorization_update_delete" => "No tienes autorización para modificar/eliminar este registro.",
	"no_authorization_view" => "No tienes autorización para consultar este registro.",
	"deleted_only_authorizated_records" => "Han sido borrados los registros sobre los cuales tienes autorización.",
	"record_from_which_you_come_no_longer_exists" => "El registro del que proviene ya no existe.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Este es el último registro.",
	"this_record_is_the_first_one" => "Este es el primer registro."
	);

//login messages
$login_messages_ar = array(
	"username" => "usuario",
	"password" => "clave",
	"please_authenticate" => "Necesitas identificarte para continuar",
	"login" => "login",
	"username_password_are_required" => "Se requiere Usuario y Clave",
	"pwd_gen_link" => "crear clave",
	"incorrect_login" => "Usuario o clave incorrectos",
	"pwd_explain_text" =>"Inserte una palabra a ser usada como clave y presione <b>Encriptar!</b>",
	"pwd_suggest_email_sending"=>"Si lo desea puede enviar un mensaje usted mismo para recordar la clave",
	"pwd_send_link_text" =>"enviar mensaje!",
	"pwd_encrypt_button_text" => "Encriptar!",
	"pwd_register_button_text" => "Registrar clave y salir"
)
?>