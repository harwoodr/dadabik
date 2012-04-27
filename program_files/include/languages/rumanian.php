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
	"insert"    => "Insereaza o alta înregistrare",
	"search/update/delete" => "Cauta/actualizeaza/sterge înregistrarea",
	"insert_short"    => "Insereaza",
	"search_short" => "Cauta",
	"new_mailing" => "Mailing nou",
	"check_existing_mailing" => "Controleaza mailingul existent",
	"send_mailing" => "Trimite mailingul existent",
	"insert_anyway"    => "Insereaza totusi",
	"search"    => "Cauta înregistrarea",
	"update"    => "Salveaza",
	"ext_update"    => "Actualizeaza-ti profilul",
	"yes"    => "Da",
	"no"    => "Nu",
	"go_back" => "Mergi înapoi",
	"edit" => "Modifica",
	"delete" => "Sterge",
	"details" => "Detalii",
	"remove_from_mailing" => "Elimina din mailing",	
	"remove_all_from_mailing" => "Elimina tot din mailing",
	"send" => "Trimite",
	"add_to_mailing" => "Adauga la mailing",
	"print_labels" => "Tipareste etichete",
	"create_this_mailing" => "Creaza acest mailing",
	"change_table" => "Modifica tabelul"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Vizualizeaza toate înregistrarile",
	"logout" => "Logout",
	"top" => "Top",
	"last_search_results" => "Ultimele rezultate ale cautarii",
	"show_all" => "Vizualizeaza tot",
	"home" => "Home",
	"select_operator" => "Selecteaza operatorul:",
	"all_conditions_required" => "Toate conditiile cerute",
	"any_conditions_required" => "Cel putin o conditie",
	"all_contacts" => "Toate contactele",
	"removed" => "Sters",
	"please" => "",
	"and_check_form" => "si controleaza formularul.",
	"and_try_again" => "si încearca înca o data.",
	"none" => "nici unul",
	"are_you_sure" => "Esti sigur?",
	"delete_all" => "sterge tot",
	"really?" => "Sigur?",
	"delete_are_you_sure" => "Esti sigur ca vrei sa stergi?",
	"required_fields_missed" => "Nu ai completat câteva câmpuri obligatorii.",
	"alphabetic_not_valid" => "Ai inserat cifre în loc de litere.",
	"numeric_not_valid" => "Ai inserat litere în loc de cifre.",
	"email_not_valid" => "Ai inserat una sau mai multe adrese e-mail incorecte.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Ai inserat una sau mai multe adrese URL incorecte.",
	"phone_not_valid" => "Ai inserat unul sau mai multe numere de telefon incorecte.<br>Trebuie sa folosesti formatul \"+(codul national)(prefix)(numar)\" es.. +390523599318.",
	"date_not_valid" => "Ai inserat una sau mai multe date incorecte.",
	"similar_records" => "Înregistrarile care urmeaza par asemanatoare cu cele pe care vrei sa le inserezi.<br>Cum vrei sa procedezi?",
	"no_records_found" => "N-a fost gasita nici o înregistrare.",
	"records_found" => "Înregistrari gasite.",
	"number_records" => "Numarul înregistrarilor: ",
	"details_of_record" => "Detaliile înregistrarii",
	"edit_record" => "Modifica înregistrarea",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "Precedenta",
	"next" => "Urmatoare",
	"edit_profile" => "Actualizeaza-ti informatiile cu privire la profil",
	"i_think_that" => "Cred ca",
	"is_similar_to" => "seamana cu",
	"page" => "Pagina",
	"of" => "din",
	"records_per_page" => "înregistrarile pe pagina",
	"day" => "ziua",
	"month" => "luna",
	"year" => "anul",
	"administration" => "Administrare",
	"create_update_internal_table" => "Creaza sau actualizeaza tabelul intern",
	"other...." => "alt...",
	"insert_record" => "Insereaza o înregistrare noua",
	"search_records" => "Cauta o înregistrare",	
	"exactly" => "identica",
	"like" => "asemanatoare",
	"required_fields_red" => "Câmpurile obligatorii sunt rosii.",
	"insert_result" => "Rezultatul inserarii:",
	"record_inserted" => "Înregistrarea a fost inserata corect.",
	"update_result" => "Rezultatul actualizarii:",
	"record_updated" => "Înregistrarea a fost actualizata corect.",
	"profile_updated" => "Profilul a fost actualizat corect.",
	"delete_result" => "Rezultatul stergerii:",
	"record_deleted" => "Înregistrarea a fost stearsa corect.",
	"duplication_possible" => "Exista posibilitatea unei dublari",
	"mail_to_records" => "Trimite un mail tuturor înregistrarilor gasite",
	"number_mails" => "Numarul mesajelor care vor fi trimise: ",
	"specify_subject_body" => "Specifica subiectul mesajului",
	"create_new_mailing" => "Creaza un mailing nou",
	"mailing_name" => "Denumirea mailingului: ",
	"mailing_type" => "Felul mailingului: ",
	"specify_mailing_name" => "(Insereaza denumirea acestui mailing, de ex. workshop_2002)",
	"email_specific_fields" => "Câmpurile albastre sunt specifice pentru e-mailuri si nu se folosesc în cazul mailingurilor de pe hârtie",
	"from" => "De la: ",
	"subject" => "Subiect: ",
	"body" => "Text: ",
	"dear" => "Draga",
	"john_smith" => "Domnule...",
	"start_sending" => "Începutul trimiterii...",
	"mailing_sent" => "...Mailingul a fost trimis",
	"mail_to" => "Mail la",
	"sent" => "trimis",
	"send" => "Trimite",
	"e-mail" => "e-mailul",
	"normal_mail" => "scrisoare pe hârtie",
	"attachment" => "Fisier atasat",
	"additional_notes_mailing" => "Note suplimentare<br>(de ex. motivul mailingului)",
	"please_specify_mailing_name" => "Specifica o denumire pentru mailing.",
	"please_specify_mailing_type" => "Specifica felul mailingului.",
	"please_specify_mailing_subject" => "Specifica un subiect.",
	"please_specify_mailing_body" => "Specifica un text.",
	"mailing_name_already_used" => "Denumirea aleasa a fost folosita deja si trebuie schimbata.",
	"filename_already_used" => "Denumirea fisierului atasat a fost folosita deja si trebuie schimbata.",
	"mailing" => "Mailingul",
	"created" => "a fost creat",
	"all_records_found" => "Toate înregistrarile au fost gasite",
	"add_contacts_to" => "Adauga contactele la",
	"check_mailing" => "Controleaza mailingul",
	"the_mailing" => "Mailingul",
	"mailing_already_sent" => "Acest mailing a fost trimis deja!",
	"was_composed_by" => "el era alcatuit de",
	"contacts" => "contacte",
	"you_have_added" => "pe care le-ai adaugat",
	"of_which_duplicated" => "dintre care sunt dublete",
	"of_which_with_no_info" => "dintre care n-au informatii destule",
	"is_composed_by" => "acum este alcatuit de",
	"go_back_to_home_send_or_add" => "Du-te la homepage si trimite mailingul sau cauta si adauga-i mai multe contacte.",
	"fields_max_length" => "Ai atins lungimea maxima pentru acest câmp.",
	"you_are_going_unsubscribe" => "Ai cerut sa-ti anulezi înscrierea în lista postala. Confirmi?",
	"you_have_unsubscribed" => "Înscrierea a fost anulata.",
	"change_profile_url" => "Pentru a-ti modifica informatiile privitoare la profilul tau viziteaza aceasta pagina: ",
	"removed_mailing_list_url" => "Daca vrei sa-ti anulezi înscrierea la lista postala viziteaza aceasta pagina: ",
	"city" => "Oras",
	"province" => "Judet",
	"zip_code" => "Cod postal",
	"prefix" => "Prefix",
	"no_city_found" => "Orasul n-a fost gasit",
	"print_warning" => "Configureaza marginile de tiparire la (0,0,0,0) (sus, jos, la stânga, la dreapta) în browser pentru a tipari corect etichetele.",
	"current_upload" => "Fisierul actual",
	"delete" => "sterge",
	"total_records" => "Înregistrarile totale",	
	"confirm_delete?" => "Confirmi stergerea?",
	"is_equal" => "e identic cu",
	"contains" => "contine",
	"starts_with" => "începe cu",
	"ends_with" => "se termina cu",
	"greater_than" => "mai mult decât",
	"less_then" => "mai putin decât",
	"export_to_csv" => "Exporta ca CSV",
	"new_insert_executed" => "noua inserare a fost savârsita",
	"new_update_executed" => "noua actualizare a fost savârsita",
	"null" => "Null",
	"is_null" => "este NULL",
	"is_empty" => "este gol"
);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Eroare, baza de date interna e goala.",
	"get" => "Eroare în variabile get.",
	"no_unique_update_id" => "Linkul tau de actualizare nu mai este valabil.<br>Contacteaza-l pe webmaster la adresa <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> si o sa primesti un alt link.<br>Scuze pentru inconvenient.",
	"no_unique_unsubscribe_id" => "Linkul tau de stergere nu este corect.<br>Contacteaza-l pe webmaster la adresa <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> pentru orice întrebare.<br>Scuze pentru inconvenient.",
	"no_functions" => "Eroare, nici o functie n-a fost selectata<br>Întoarce-te la homepage.",
	"no_unique_key" => "Eroare, nici o cheie unica n-a fost selectata în tabel.",	
	"upload_error" => "În timpul de încarcare al fisierului s-a produs o eroare.",
	"no_authorization_update_delete" => "Nu ai autorizatia sa modifici/stergi aceasta înregistrare.",
	"no_authorization_view" => "Nu ai autorizatia sa vizualizezi aceasta înregistrare.",
	"deleted_only_authorizated_records" => "Numai înregistrarile pentru care ai o autorizatie au fost sterse.",
	"record_from_which_you_come_no_longer_exists" => "Înregistrarea de care ati venit nu mai exista.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Aceasta înregistrare e ultima.",
	"this_record_is_the_first_one" => "Aceasta înregistrare e cea dintâi."
	);
	
//login messages
$login_messages_ar = array(
	"username" => "username",
	"password" => "parola",
	"please_authenticate" => "Trebuie sa te identifici pentru a proceda",
	"login" => "login",
	"username_password_are_required" => "Puneti username si parola",
	"pwd_gen_link" => "Create password",
	"incorrect_login" => "Numele sau parola sunt gresite",
	"pwd_explain_text" =>"Insereaza un cuvânt ca sa fie folosit drept parola a acestui utilizator si apasa <b>Cripteaza!</b> ca sa fie criptat.",
	"pwd_explain_text_2" =>"Apasa <b>Înregistreaza</b> ca sa fie scris în formularul urmator",
	"pwd_suggest_email_sending"=>"daca vrei poti sa-ti trimiti un mesaj ca sa-ti amintesti parola fara criptare",
	"pwd_send_link_text" =>"Trimite!",
	"pwd_encrypt_button_text" => "Cripteaza!",
	"pwd_register_button_text" => "Înregistreaza parola si închide fereastra"
)
?>
