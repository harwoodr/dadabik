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
	"insert"    => "Inserisci un nuovo record",
	"search/update/delete" => "Cerca/aggiorna/cancella record",
	"insert_short"    => "Inserisci",
	"search_short" => "Cerca",
	"new_mailing" => "Nuovo mailing",
	"check_existing_mailing" => "Controlla mailing esistente",
	"send_mailing" => "Invia mailing esistente",
	"insert_anyway"    => "Inserisci comunque",
	"search"    => "Cerca record",
	"update"    => "Salva",
	"ext_update"    => "Aggiorna il tuo profilo",
	"yes"    => "Sì",
	"no"    => "No",
	"go_back" => "Torna indietro",
	"edit" => "Modifica",
	"delete" => "Cancella",
	"details" => "Dettagli",
	"remove_from_mailing" => "Rimuovi dal mailing",	
	"remove_all_from_mailing" => "Rimuovi tutti dal mailing",
	"send" => "Invia",
	"add_to_mailing" => "Aggiungi al mailing",
	"print_labels" => "Stampa etichette",
	"create_this_mailing" => "                 Crea questo mailing                 ",
	"change_table" => "Cambia tabella"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Inserisci item",
	"show_all_records" => "Visualizza tutti i records",
	"logout" => "Logout",
	"top" => "Top",
	"last_search_results" => "Risultati ultima ricerca",
	"show_all" => "Visualizza tutti",
	"home" => "Home",
	"select_operator" => "Seleziona operatore:",
	"all_conditions_required" => "Tutte le condizioni",
	"any_conditions_required" => "Almeno una condizione",
	"all_contacts" => "Tutti i contatti",
	"removed" => "cancellato/i",
	"please" => "",
	"and_check_form" => "e controlla il form.",
	"and_try_again" => "e prova ancora.",
	"none" => "nessuno",
	"are_you_sure" => "Sei sicuro?",
	"delete_all" => "cancella tutti",
	"really?" => "Veramente?",
	"delete_are_you_sure" => "Stai per cancellare questo record, sei sicuro?",
	"required_fields_missed" => "Non hai compilato alcuni campi obbligatori.",
	"alphabetic_not_valid" => "Hai inserito un/alcuni numero/i in un campo alfabetico.",
	"numeric_not_valid" => "Hai inserito un/alcuni carattere/i non numerici in un campo numerico.",
	"email_not_valid" => "Hai inserito uno o piu' indirizzi e-mail non validi.",
	"timestamp_not_valid" => "Hai inserito uno o piu' timestamp non validi.",
	"url_not_valid" => "Hai inserito uno o più URL non validi.",
	"phone_not_valid" => "Hai inserito uno o piu' numeri di telefono non validi.<br>Devi utilizzare il formato \"+(codice nazionale)(prefisso)(numero)\" es.. +390523599318.",
	"date_not_valid" => "Hai inserito una o più date non valide.",
	"similar_records" => "I seguenti record sembrano simili a quello che vuoi inserire.<br>Come vuoi procedere?",
	"no_records_found" => "Non è stato trovato nessun record.",
	"records_found" => "record trovati.",
	"number_records" => "Numero di record: ",
	"details_of_record" => "Dettagli del record",
	"edit_record" => "Modifica il record",
	"back_to_the_main_table" => "Torna alla tabella principale",
	"previous" => "Precedente",
	"next" => "Successivo",
	"edit_profile" => "Aggiorna le informazioni relative al tuo profilo",
	"i_think_that" => "Penso che  ",
	"is_similar_to" => " sia simile a ",
	"page" => "Pagina ",
	"of" => " di ",
	"records_per_page" => "record per pagina",
	"day" => "Giorno",
	"month" => "Mese",
	"year" => "Anno",
	"administration" => "Amministrazione",
	"create_update_internal_table" => "Crea o aggiorna la tabella interna",
	"other...." => "altro....",
	"insert_record" => "Inserisci un nuovo record",
	"search_records" => "Cerca record",	
	"exactly" => "uguale",
	"like" => "simile",
	"required_fields_red" => "I campi obbligatori sono in rosso.",
	"insert_result" => "Risultato dell'inserimento:",
	"record_inserted" => "Il record è stato inserito correttamente.",
	"update_result" => "Risultato dell'aggiornamento:",
	"record_updated" => "Il record è stato aggiornato correttamente.",
	"profile_updated" => "Il tuo profilo è stato correttamente aggiornato.",
	"delete_result" => "Risultato della cancellazione:",
	"record_deleted" => "Il record è stato cancellato correttamente.",
	"duplication_possible" => "E' possibile che si verifichi una duplicazione",
	"mail_to_records" => "mail a tutti i record trovati",
	"number_mails" => "Numero di messaggi che stai per inviare: ",
	"specify_subject_body" => "Indica oggetto e corpo del messaggio",
	"create_new_mailing" => "Crea un nuovo mailing",
	"mailing_name" => "Nome del mailing: ",
	"mailing_type" => "Tipo mailing: ",
	"specify_mailing_name" => "(Specifica un nome per identificare questo mailing, ad es. workshop_2002)",
	"email_specific_fields" => "I campi in blu sono specifici per e-mail, ignorali in caso di mailing cartaceo",
	"from" => "Da: ",
	"subject" => "Oggetto: ",
	"body" => "Testo: ",
	"dear" => "Caro",
	"john_smith" => "Sig. Marco Rossi",
	"start_sending" => "Inizio invio......",
	"mailing_sent" => "......Mailing inviato",
	"mail_to" => "Mail a",
	"sent" => "inviata",
	"send" => "Invia",
	"e-mail" => "e-mail",
	"normal_mail" => "lettera cartacea",
	"attachment" => "Allegato",
	"additional_notes_mailing" => "Note addizionali<br>(es. la ragione del mailing)",
	"please_specify_mailing_name" => "Devi specificare un nome per il mailing.",
	"please_specify_mailing_type" => "Devi specificare un tipo per il mailing.",
	"please_specify_mailing_subject" => "Devi specificare un oggetto per il mailing.",
	"please_specify_mailing_body" => "Devi specificare un testo per il mailing.",
	"mailing_name_already_used" => "Il nome che hai scelto è già stato utilizzato, cambialo.",
	"filename_already_used" => "Il nome del file allegato è già stato utilizzato, cambialo.",
	"mailing" => "Mailing",
	"created" => "creato",
	"all_records_found" => "tutti i record trovati",
	"add_contacts_to" => "Aggiunta contatti a",
	"check_mailing" => "Controlla mailing",
	"the_mailing" => "Il mailing",
	"mailing_already_sent" => "Questo mailing è già stato spedito!!",
	"was_composed_by" => "era composto da",
	"contacts" => "contatti",
	"you_have_added" => "Hai aggiunto",
	"of_which_duplicated" => "dei quali è/sono duplicati",
	"of_which_with_no_info" => "dei quali non hanno sufficienti informazioni",
	"is_composed_by" => "è attualmente composto da",
	"go_back_to_home_send_or_add" => "Puoi tornare alla home page e inviare il mailing, oppure cercare e aggiungere altri contatti al mailing.",
	"fields_max_length" => "Hai inserito troppo testo in uno o più caratteri.",
	"you_are_going_unsubscribe" => "stai per essere cancellato dalla mailing list. Contuini?",
	"you_have_unsubscribed" => "hai cancellato correttamente la sottoscrizione alla mailing list.",
	"change_profile_url" => "Per modificare le informazioni associate al tuo profilo visita questa pagina: ",
	"removed_mailing_list_url" => "Per essere cancellato dalla mailing list visita questa pagina: ",
	"city" => "Ciità",
	"province" => "Provincia",
	"zip_code" => "CAP",
	"prefix" => "Prefisso",
	"no_city_found" => "Nessuna città trovata",
	"print_warning" => "Settare i margini di stampa a (0,0,0,0) (superiore, inferiore, sinistro, destro) nel browser per stampare correttamente le etichette.",
	"current_upload" => "File corrente",
	"delete" => "cancella",
	"total_records" => "Record totali",	
	"confirm_delete?" => "Confermi la cancellazione?",
	"is_equal" => "è uguale a",
	"contains" => "contiene",
	"starts_with" => "inizia con",
	"ends_with" => "finisce con",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Esporta a CSV",
	"new_insert_executed" => "Nuovo inserimento eseguito",
	"new_update_executed" => "Nuovo aggiornamento eseguito",
	"null" => "Null",
	"is_null" => "è null",
	"is_empty" => "è vuoto"
);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Errore, il database interno è vuoto.",
	"get" => "Errore nelle variabili get.",
	"no_unique_update_id" => "Il tuo link di aggiornamento non è più valido.<br>Contatta il webmaster all'indirizzo <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> per avere un nuovo link.<br>Ci scusiamo per l'inconveniente.",
	"no_unique_unsubscribe_id" => "Il tuo link di cancellazione non è corretto.<br>Contatta il webmaster all'indirizzo <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> per qualsiasi domanda.<br>Ci scusiamo per l'inconveniente.",
	"no_functions" => "Errore, non è stata selezionata alcuna funzione<br>Torna alla homepage.",
	"no_unique_key" => "Errore, non e' stata impostato nessuna chiave primaria nella tabella.",	
	"upload_error" => "Si è verificato un errore durante l'upload del file.",
	"no_authorization_update_delete" => "Non hai l'autorizzazione per modificare/cancellare questo record.",
	"no_authorization_view" => "Non hai l'autorizzazione per vedere questo record.",
	"deleted_only_authorizated_records" => "Sono stati cancellati solo i record che sei autorizzato a cancellare.",
	"record_from_which_you_come_no_longer_exists" => "Il record dal quale provieni non esiste più.",
	"date_not_representable" => "Una data presente in questo record non pu˜ essere rappresentata con le listbox giorno-mese-anno, la data : ",
	"this_record_is_the_last_one" => "Questo record è l'ultimo.",
	"this_record_is_the_first_one" => "Questo record è il primo."
	);
	
//login messages
$login_messages_ar = array(
	"username" => "username",
	"password" => "password",
	"please_authenticate" => "Devi identificarti per procedere",
	"login" => "login",
	"username_password_are_required" => "Username e password sono obbligatori",
	"pwd_gen_link" => "crea password",
	"incorrect_login" => "Username o password errati",
	"pwd_explain_text" =>"Inserisci una parola da utilizzare come password e premi <b>Cripta!</b>.",
	"pwd_explain_text_2" =>"Premi <b>Registra</b> per scriverla nella form sottostante",
	"pwd_suggest_email_sending"=>"Puoi inviarti una mail come promemoria della password",
	"pwd_send_link_text" =>"invia mail!",
	"pwd_encrypt_button_text" => "Cripta!",
	"pwd_register_button_text" => "Registra password ed esci"
)
?>