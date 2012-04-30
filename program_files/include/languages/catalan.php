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
	"insert"    => "Entrar una fitxa nova",
	"search/update/delete" => "Cercar/modificar/esborrar fitxes",
	"insert_short"    => "Entrar",
	"search_short" => "Cercar",
	"new_mailing" => "Nou enviament",
	"check_existing_mailing" => "Revisar enviament existent",
	"send_mailing" => "Emetre enviament existent",
	"insert_anyway"    => "Entrar igualment",
	"search"    => "Cercar fitxa",
	"update"    => "Desar",
	"ext_update"    => "Actualitzar el vostre perfil",
	"yes"    => "Sí",
	"no"    => "No",
	"go_back" => "Enrere",
	"edit" => "Editar",
	"delete" => "Esborrar",
	"details" => "Detalls",
	"remove_from_mailing" => "Suprimir d\'enviaments",
	"remove_all_from_mailing" => "Suprimir de tots els enviaments",
	"send" => "Enviar",
	"add_to_mailing" => "Afegir a l\'enviament",
	"print_labels" => "Imrpimir etiquetes",
	"create_this_mailing" => "               Crear aquest enviament               ",
	"change_table" => "Canviar de taula"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Mostrar totes les fitxes",
	"logout" => "Sortir",
	"top" => "Dalt",
	"last_search_results" => "Darrers resultats de la cerca",
	"show_all" => "Totes les fitxes",
	"home" => "Inici de la taula",
	"select_operator" => "Seleccionau l\'operador:",
	"all_conditions_required" => "Cal que es compleixin totes les condicions",
	"any_conditions_required" => "Basta amb que es compleixi una condició",
	"all_contacts" => "Tots els contactes",
	"removed" => "suprimit",
	"please" => "Si us plau anau",
	"and_check_form" => "i reviseu el formulari.",
	"and_try_again" => "i proveu-ho un altre cop.",
	"none" => "cap",
	"are_you_sure" => "Estau segur?",
	"delete_all" => "esborrar-ho tot",
	"really?" => "De bon de veres?",
	"delete_are_you_sure" => "Esteu a punt d'esborrar la fitxa.  Segur?",
	"required_fields_missed" => "No heu emplenat alguns camps necessaris.",
	"alphabetic_not_valid" => "Heu teclejat números a un camp només alfabètic.",
	"numeric_not_valid" => "Heu teclejat lletres o símbols a un camp només numèric.",
	"email_not_valid" => "L\'adreça de correu entrada no és correcte.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "L\'adreça de plana web entrada no és correcte.",
	"phone_not_valid" => "El número de telèfon entrat no és correcte.<br>Si us plau, useu el format \"+(codi país)(codi àrea)(número)\" per exemple +34971855141.",
	"date_not_valid" => "Una data entrada no és correcte.",
	"similar_records" => "Les fitxes devall s\'assemblen molt a la que heu entrat.<br>Què voleu fer?",
	"no_records_found" => "Cap fitxa trobada.",
	"records_found" => "fitxes trobades",
	"number_records" => "Fitxes: ",
	"details_of_record" => "Detalls de la fitxa",
	"edit_record" => "Editar la fitxa",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "Previ",
	"next" => "Següent",
	"edit_profile" => "Actualitzar les dades del vostre perfil",
	"i_think_that" => "Em sembla que ",
	"is_similar_to" => " és assemblant a ",
	"page" => "Pàgina ",
	"of" => " de ",
	"records_per_page" => "registres per plana",
	"day" => "Dia",
	"month" => "Mes",
	"year" => "Any",
	"administration" => "Administració",
	"create_update_internal_table" => "Crear o actualitzar la taula interna",
	"other...." => "una altre ...",
	"insert_record" => "Entrar una fitxa nova",
	"search_records" => "Cercar fitxes",
	"exactly" => "exactament",
	"like" => "com",
	"required_fields_red" => "Els camps indispensables estan en vermell.",
	"insert_result" => "Entreu resultat:",
	"record_inserted" => "Fitxa desada correctament.",
	"update_result" => "Actualitzat el resultat:",
	"record_updated" => "Fitxa actualitzada correctament.",
	"profile_updated" => "El vostre perfil està actualitzat.",
	"delete_result" => "Resultat de l\'esborrat:",
	"record_deleted" => "Fitxa esborrada correctament.",
	"duplication_possible" => "La duplicació està permesa",
	"mail_to_records" => "Missatge a totes les fitxes trobades",
	"number_mails" => "Missatges que s\'enviaran: ",
	"specify_subject_body" => "Si us plau especifiqueu l\'assumpte i el cos del missatge",
	"create_new_mailing" => "Crear un nou enviament",
	"mailing_name" => "Nom de l\'enviament: ",
	"mailing_type" => "Tipus de l\'enviament: ",
	"specify_mailing_name" => "(Entreu un nom per indentificar aquest enviament, p.e. treball_2002.  Si us plau, no useu cometes simples o dobles!)",
	"email_specific_fields" => "Els camps blaus estan relacionats amb el correu electrònic, ignoreu-los si voleu fer un missatge normal",
	"from" => "De: ",
	"subject" => "Assumpte: ",
	"body" => "Cos: ",
	"dear" => "Dear",
	"john_smith" => "Sr. Joan Garcia",
	"start_sending" => "Preparant l\'enviament ...",
	"mailing_sent" => "... enviament fet",
	"mail_to" => "Missatge a",
	"sent" => "enviat",
	"send" => "Enviar",
	"e-mail" => "correu-e",
	"normal_mail" => "missatge normal",
	"attachment" => "Annex: ",
	"additional_notes_mailing" => "Notes addicionals<br>(per exemple, motiu de l\'enviament)",
	"please_specify_mailing_name" => "Si us plau, entreu un nom pel enviament.",
	"please_specify_mailing_type" => "Si us plau, entreu un tipus pel enviament.",
	"please_specify_mailing_subject" => "Si us plau, entreu un assumpte per l\'enviament.",
	"please_specify_mailing_body" => "Si us plau, especifiqueu un text per l\'enviament.",
	"mailing_name_already_used" => "El nom escollit ja estava ocupat, si us plau, canvieu-lo.",
	"filename_already_used" => "L\'annex ja estava usat, si us plau, canvieu-li el nom.",
	"mailing" => "Enviament",
	"created" => "creat",
	"all_records_found" => "totes les fitxes trobades",
	"add_contacts_to" => "Afegir contactes a",
	"check_mailing" => "Revisar enviament",
	"the_mailing" => "L\'enviament",
	"mailing_already_sent" => "Ja estava enviat!",
	"was_composed_by" => "està composat per",
	"contacts" => "contactes",
	"you_have_added" => "Heu afegit",
	"of_which_duplicated" => "dels que estan duplicats",
	"of_which_with_no_info" => "dels que no hi ha abastament informació",
	"is_composed_by" => "ara està emplenat per",
	"go_back_to_home_send_or_add" => "Ara podeu anar enrere a la plana principal i enviar la tramesa, o cercar i afegir altres contactes a l\'enviament.",
	"fields_max_length" => "Heu entrat massa text i un o més camps.",
	"you_are_going_unsubscribe" => "Quedareu exclòs de la llista d\'enviaments.  D\'acord?",
	"you_have_unsubscribed" => "Esteu exclòs de la llista d\'enviaments.",
	"change_profile_url" => "To change your profile information please visit this page: ",
	"removed_mailing_list_url" => "Per a ser exclòs de la llista d\'enviaments, visiteu aquesta plana: ",
	"city" => "Ciutat",
	"province" => "Provincia",
	"zip_code" => "Codi postal",
	"prefix" => "Prefix",
	"no_city_found" => "Cap ciutat trobada",
	"print_warning" => "Si us plau, ajusteu el marge d\'impressió a (0,0,0,0) (dalt, baix, esquerra, dreta) al vostre navegador per imprimir correctament les etiquetes.",
	"current_upload" => "Arxiu actual",
	"delete" => "esborrar",
	"total_records" => "Fitxes",
	"confirm_delete?" => "Esborrar la fitxa?",
	"is_equal" => "és igual a",
	"contains" => "conté",
	"starts_with" => "comença amb",
	"ends_with" => "acaba amb",
	"greater_than" => "és més gran que",
	"less_then" => "és més petit que",
	"export_to_csv" => "Exportar a CSV",
	"new_insert_executed" => "Nova inserció feta",
	"new_update_executed" => "Nova actualització feta",
	"null" => "Null",
	"is_null" => "is null",
	"is_empty" => "és buit"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Error: la base de dades interna està buida.",
	"get" => "Error al agafar les variables.",
	"no_unique_update_id" => "El vostre enllaç d\'actualització ha caducat.<br>Si us plau, contacteu amb el webmestre a l\'adreça <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> per aconseguir un nou enllaç.<br>Us demanem disculpes per l\'inconvenient.",
	"no_unique_unsubscribe_id" => "El vostre enllaç de subscripció no és correcte.<br>Si us plau, contecteu el webmstre a l\'adreça <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> per qualsevol consulta.<br>Us demanem disculpes per l\'inconvenient.",
	"no_functions" => "Error, cap funció seleccionada<br>Si us plau, torneu a la plana d\'inici.",
	"no_unique_key" => "Error, no teniu cap clau primària a la taula.",	
	"upload_error" => "Errors amb l\'enviament de l\'arxiu.",
	"no_authorization_update_delete" => "No esteu autoritzat per modificar o esborrar aquesta fitxa.",
	"no_authorization_view" => "No esteu autoritzat per veure aquesta fitxa.",
	"deleted_only_authorizated_records" => "Només podeu esborrar les fitxes per les que hi teniu autorització.",
	"record_from_which_you_come_no_longer_exists" => "El registre de partida no existeix.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Aquest registre és el darrer.",
	"this_record_is_the_first_one" => "Aquest registre és el primer."
	);



//login messages
$login_messages_ar = array(
	"username" => "Usuari",
	"password" => "Contrasenya",
	"please_authenticate" => "Necesitau identificació per a continuar",
	"login" => "entrada",
	"username_password_are_required" => "Cal nom d'usuari i contrasenya",
	"pwd_gen_link" => "crear contrasenya",
	"incorrect_login" => "Usuari o contrasenya incorrectes",
	"pwd_explain_text" =>"Entreu la paraula que usareu de contrasenya i polseu <b>Xifra-la!</b>.",
	"pwd_explain_text_2" =>"Premeu <b>Registrar</b> per a escriure-la en el formulari que hi ha devall",
	"pwd_suggest_email_sending"=>"Podeu demanar un missatge per a recordar la contrasenya",
	"pwd_send_link_text" =>"enviar missatge!",
	"pwd_encrypt_button_text" => "Xifra-la!",
	"pwd_register_button_text" => "Registrar contrasenya i sortir"
)
?>