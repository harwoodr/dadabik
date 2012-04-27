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
	"insert"    => "Vlozit novy zaznam",
	"search/update/delete" => "Hladat/upravit/vymazat zaznamy",
	"insert_short"    => "Vlozit",
	"search_short" => "Hladat",
	"new_mailing" => "Nova posta",
	"check_existing_mailing" => "Kontroluj postu",
	"send_mailing" => "Posli existujucu spravu",
	"insert_anyway"    => "Vlozit aj tak",
	"search"    => "Hladat zaznam",
	"update"    => "Ulozit",
	"ext_update"    => "Zmenit profil",
	"yes"    => "Ano",
	"no"    => "Nie",
	"go_back" => "Spat",
	"edit" => "Zmenit",
	"delete" => "Vymazat",
	"details" => "Detaily",
	"remove_from_mailing" => "Vymazat z posty",
	"remove_all_from_mailing" => "Vymazat zo vsetkych post",
	"send" => "Poslat",
	"add_to_mailing" => "Pridat do posty",
	"print_labels" => "Tlacit vyzitky",
	"create_this_mailing" => "                 Vytvorit tuto postu                 ",
	"change_table" => "Zmenit zoznam"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Ukaz vsetky zaznamy",
	"logout" => "Odhlasit",
	"top" => "Hore",
	"last_search_results" => "Posledne vysledky hladania",
	"show_all" => "Ukaz vsetko",
	"home" => "Start",
	"select_operator" => "Vyber operator:",
	"all_conditions_required" => "Vsetky podmienky su pozadovane",
	"any_conditions_required" => "Niektore podmienky su pozadovane",
	"all_contacts" => "Vsetky kontakty",
	"removed" => "vymazane",
	"please" => "Prosim",
	"and_check_form" => "a skontroluj formular.",
	"and_try_again" => "a skus znova.",
	"none" => "nic",
	"are_you_sure" => "Si si isty?",
	"delete_all" => "vymazat vsetko",
	"really?" => "Naozaj?",
	"delete_are_you_sure" => "Ides vymazat zaznam, si si isty?",
	"required_fields_missed" => "Nemas vyplnene niektore pozadovane polozky!.",
	"alphabetic_not_valid" => "Mas nejake cisla v pismenovom poli.",
	"numeric_not_valid" => "V ciselnom poli mas nejake ine znaky.",
	"email_not_valid" => "E-mailova adresa nie je platna.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Url adresa nie je platna.",
	"phone_not_valid" => "Telefonne cislo nie je platne.<br>Prosim, pouzi format \"+(kod štatu)(kod oblasti)(cislo)\"  napr. +4210523599318.",
	"date_not_valid" => "Vlozil si jeden alebo viac nespravnych datumov.",
	"similar_records" => "Zaznam sa zda byt podobny uz zapisanemu udaju.<br>Co chces urobit?",
	"no_records_found" => "nenajdeny ziadny zaznam.",
	"records_found" => "zaznamov najdenych",
	"number_records" => "Pocet zaznamov: ",
	"details_of_record" => "Detaily zaznamu",
	"edit_record" => "Zmenit zaznam",
	"back_to_the_main_table" => "Back to the main table", // to change
	"last_search_results" => "Posledne vysledky hladania", 
	"next" => "dalej", 
	"edit_profile" => "Zmenit udaje Tvojho profilu",
	"i_think_that" => "Myslim si ze, ",
	"is_similar_to" => " je ",
	"page" => "Strana ",
	"of" => " z ",
	"records_per_page" => "záznamov na stranku", 
	"day" => "Den",
	"month" => "Mesiac",
	"year" => "Rok",
	"administration" => "Administrator",
	"create_update_internal_table" => "Vytvorit, alebo zmenit internu tabulku",
	"other...." => "iny....",
	"insert_record" => "Vlozit novy zaznam",
	"search_records" => "Hladat zaznamy",
	"exactly" => "presne",
	"like" => "podobne",
	"required_fields_red" => "Pozadovane udaje su cervene.",
	"insert_result" => "Vloz vysledok:",
	"record_inserted" => "Zaznam vlozeny korektne.",
	"update_result" => "Obnov vysledok:",
	"record_updated" => "Zaznam obnoveny korektne.",
	"profile_updated" => "Tvoj profil bol obnoveny korektne.",
	"delete_result" => "Vymaz vysledok:",
	"record_deleted" => "Zaznam bol vymazany korektne.",
	"duplication_possible" => "Povolit duplikacie",
	"mail_to_records" => "mail bol najdeny k vsetkym zaznamoch",
	"number_mails" => "Pocet sprav, ktore ides poslat: ",
	"specify_subject_body" => "Prosim, napis nazov alebo obsah spravy",
	"create_new_mailing" => "Vytvor novu spravu",
	"mailing_name" => "Nazov spravy: ",
	"mailing_type" => "Typ spravy: ",
	"specify_mailing_name" => "(Napis nazov pre identifikaciu tejto spravy, napr. hodnotenie_2005, prosim, nepouzivaj uvodzovky!!!!!!)",
	"email_specific_fields" => "Modre policka sa vztahuju k typu mailu, nevyplnuj, ak posielas normalny mail",
	"from" => "Od: ",
	"subject" => "Nazov: ",
	"body" => "Obsah: ",
	"dear" => "Vazeny",
	"john_smith" => "pan Jan Vesely",
	"start_sending" => "Odosielam......",
	"mailing_sent" => "......Odoslane",
	"mail_to" => "Sprava komu",
	"sent" => "odoslane",
	"send" => "Odoslat",
	"e-mail" => "e-mail",
	"normal_mail" => "normalny mail",
	"attachment" => "Priloha: ",
	"additional_notes_mailing" => "Doplnujuce poznamky<br>(napr. dovod spravy)",
	"please_specify_mailing_name" => "Prosim, urci meno spravy.",
	"please_specify_mailing_type" => "Prosim urci typ spravy.",
	"please_specify_mailing_subject" => "Prosim, urci nazov spravy.",
	"please_specify_mailing_body" => "Prosim, napis obsah spravy.",
	"mailing_name_already_used" => "Meno, ktore si vybral, je uz pouzite, vyber ine.",
	"filename_already_used" => "Meno prilohy je uz pouzite, vyber ine.",
	"mailing" => "Posta",
	"created" => "vytvorene",
	"all_records_found" => "najdene vsetky zaznamy",
	"add_contacts_to" => "Pridat kontakt do: ",
	"check_mailing" => "Kontrola posty",
	"the_mailing" => "Posta",
	"mailing_already_sent" => "Tato posta uz bola odoslana!!",
	"was_composed_by" => "vytvorena ",
	"contacts" => "kontakty",
	"you_have_added" => "Pridane",
	"of_which_duplicated" => "z coho je duplikat?",
	"of_which_with_no_info" => "preco nemas dostatok informacii",
	"is_composed_by" => "vytvorene ",
	"go_back_to_home_send_or_add" => "Mozes sa vratit na domovsku stranku a poslat mail, alebo hladat a pridat iny kontakt k tomuto mailu.",
	"fields_max_length" => "Privela textu alebo poloziek.",
	"you_are_going_unsubscribe" => "Ides sa vymazat z nasho zoznamu. Pokracovat?",
	"you_have_unsubscribed" => "Bol si vymazany z nasho zoznamu.",
	"change_profile_url" => "Ak chces zmenit svoj profil, navstiv stranku: ",
	"removed_mailing_list_url" => "Pre vymazanie zo zoznamu navstiv stranku: ",
	"city" => "Mesto",
	"province" => "Kraj",
	"zip_code" => "PSC",
	"prefix" => "Prefix",
	"no_city_found" => "Mesta nenajdena",
	"print_warning" => "Prosim nastav parametre tlace (0,0,0,0) (hore, dolu, vlavo, vpravo) na Tvojom prehladavaci, pre korektnu tlac.",
	"current_upload" => "Aktualny subor",
	"delete" => "vymazat",
	"total_records" => "Celkovy pocet zaznamov",
	"confirm_delete?" => "Potvrdzujes vymazanie?",
	"is_equal" => " je ",
	"contains" => "obsahuje",
	"starts_with" => "zacina s",
	"ends_with" => "konci na",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Export do CSV",
	"new_insert_executed" => "Novy zaznam vykonany", 
	"new_update_executed" => "Nova zmena vykonana",
	"null" => "Null", // to change
	"is_null" => "is null", // to change
	"is_empty" => "is empty" // to change
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Chyba, interna databaza je prazdna.",
	"get" => "Chyba v premennych.",
	"no_unique_update_id" => "Tvoje pripojenie vyprsalo.<br>Kontaktuj spravcu na <a href=\"mailto:bajusd@netscape.net\">bajusd@netscape.net</a><br>Opravedlnujeme sa.",
	"no_unique_unsubscribe_id" => "Tvoje pripojenie nie je korektné.<br>Kontaktuj správcu na <a href=\"mailto:bajusd@netscape.net\">bajusd@netscape.net</a> Opravedlnujeme sa.",
	"no_functions" => "Chyba, ziadna funkcia nebola vybrata<br>Vrat sa na domovsku stranku.",
	"no_unique_key" => "Chyba, nemas urèeny primary key v Tvojej tabulke.",	
	"upload_error" => "Chyba pri obnovovani suboru.",
	"no_authorization_update_delete" => "Nemas opravnenie zmenit / vymazat tento zaznam.",
	"no_authorization_view" => "Nemas opravnenie vidiet tento zaznam.",
	"deleted_only_authorizated_records" => "Boli vymazane len zaznamy, na ktore mas opravnenie.",
	"record_from_which_you_come_no_longer_exists" => "Zaznam, z ktoreho si prisiel uz neexistuje.", 
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Tento zaznam je posledny.", 
	"this_record_is_the_first_one" => "Tento zaznam je prvy." 
	);

//login messages
$login_messages_ar = array(
	"username" => "meno",
	"password" => "heslo",
	"please_authenticate" => "Musis sa prihlasit pre pokracovanie",
	"login" => "prihlasit",
	"username_password_are_required" => "Musis vypnit meno a heslo",
	"pwd_gen_link" => "vytvorenie hesla",
	"incorrect_login" => "Meno alebo heslo su nespravne!",
	"pwd_explain_text" =>"Napis slovo pre heslo a  <b>Zasifruj to!</b>.",
	"pwd_explain_text_2" =>"Stlac <b>Register</b> pre zapisanie do formulara",
	"pwd_suggest_email_sending"=>"Mozes si poslat mail pre zapamatanie hesla",
	"pwd_send_link_text" =>"posli mail!",
	"pwd_encrypt_button_text" => "Zasifruj!",
	"pwd_register_button_text" => "Zaregistruj heslo a ukonc"
);
?>