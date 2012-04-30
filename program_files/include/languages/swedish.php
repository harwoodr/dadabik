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
	"insert"    => "Infoga ny datapost",
	"search/update/delete" => "Sök/uppdatera/radera dataposter",
	"insert_short"    => "Infoga",
	"search_short" => "Sök",
	"new_mailing" => "Nytt utskick",
	"check_existing_mailing" => "Kolla befintligt utskick",
	"send_mailing" => "Sänd utskick",
	"insert_anyway"    => "Infoga ändå",
	"search"    => "Sök",
	"update"    => "Spara",
	"ext_update"    => "Uppdatera din profil",
	"yes"    => "Ja",
	"no"    => "Nej",
	"go_back" => "gå tillbaka",
	"edit" => "Editera",
	"delete" => "Radera",
	"details" => "Detaljer",
	"remove_from_mailing" => "Ta bort från utskick",
	"remove_all_from_mailing" => "Ta bort allt från utskick",
	"send" => "Skicka",
	"add_to_mailing" => "Lägg till utskick",
	"print_labels" => "Skriv etiketter",
	"create_this_mailing" => "                 Skapa detta utskick                 ",
	"change_table" => "Ändra tabell"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Visa alla poster",
	"logout" => "Logout",
	"top" => "Top",
	"last_search_results" => "Senaste sökningen", 
	"show_all" => "Visa alla",
	"home" => "Hem",
	"select_operator" => "Välj operator:",
	"all_conditions_required" => "Alla villkor sanna",
	"any_conditions_required" => "Något vilkor sant",
	"all_contacts" => "Alla kontakter",
	"removed" => "borttaget",
	"please" => "Vänligen",
	"and_check_form" => "och kolla formuläret.",
	"and_try_again" => "och prova igen.",
	"none" => "ingen",
	"are_you_sure" => "Är du säker?",
	"delete_all" => "radera allt",
	"really?" => "Verkligen?",
	"delete_are_you_sure" => "Du kommer att radera nedanstående datapost, är du säker?",
	"required_fields_missed" => "Du har inte fyllt i vissa nödvändiga fält.",
	"alphabetic_not_valid" => "Du har infogat nummer i ett textfält.",
	"numeric_not_valid" => "Du har infogat nonnumeriska tecken i ett nummerfält.",
	"email_not_valid" => "Den infogade utskicksadressen är ogiltig.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Den infogade url är oglitig.",
	"phone_not_valid" => "Det infogade telefonnumret är ogiltigt.<br>Använd formatet \"+(landskod)(riktnummer)(nummer)\" formatet d.v.s +390523599318.",
	"date_not_valid" => "Du har infogat ett ogiltigt datum.",
	"similar_records" => "Dataposterna nedanför liknar den du vill infoga.<br>Vad vill du göra?",
	"no_records_found" => "Hittar inga dataposter.",
	"records_found" => "dataposter hittats",
	"number_records" => "Antal dataposter: ",
	"details_of_record" => "Detaljer för datapost",
	"edit_record" => "Ändra datapost",
	"back_to_the_main_table" => "Back to the main table", // to change
	"last_search_results" => "Senaste sökningen",
	"next" => "Nästa",
	"edit_profile" => "Uppdatera din profil",
	"i_think_that" => "Jag tror att ",
	"is_similar_to" => " liknar ",
	"page" => "Sida ",
	"of" => " av ",
	"records_per_page" => "poster / sida",
	"day" => "dag",
	"month" => "månad",
	"year" => "år",
	"administration" => "Administration",
	"create_update_internal_table" => "Skapa eller ändra intern tabell",
	"other...." => "annan....",
	"insert_record" => "Infoga ny datapost",
	"search_records" => "Sök dataposter",
	"exactly" => "exakt",
	"like" => "liknar",
	"required_fields_red" => "Nödvändiga fält är röda.",
	"insert_result" => "Infoga resultat:",
	"record_inserted" => "Datapost infogad.",
	"update_result" => "Uppdatera resultatet:",
	"record_updated" => "Datapost uppdaterad.",
	"profile_updated" => "Din profil har uppdaterats.",
	"delete_result" => "Radera resultatet:",
	"record_deleted" => "Datapost raderad.",
	"duplication_possible" => "En möjlig dubblering",
	"mail_to_records" => "sänd utskick till alla funna dataposter",
	"number_mails" => "Antal epostmeddelanden som kommer att skickas: ",
	"specify_subject_body" => "Vänligen specificera meddelandets rubrik och text",
	"create_new_mailing" => "Skapa nytt utskick",
	"mailing_name" => "Utskick namn: ",
	"mailing_type" => "Utskick typ: ",
	"specify_mailing_name" => "(Specificera ett namn för detta utskick, t ex workshop_2002. Använd inte enkla eller dubbla citationestecken!!!!!!)",
	"email_specific_fields" => "Blå fält är relaterade till epost, ignorera dem om du väljer normal post",
	"from" => "Från: ",
	"subject" => "Rubrik: ",
	"body" => "Text: ",
	"dear" => "Bäste",
	"john_smith" => "herr Karl Svensson",
	"start_sending" => "Börja skicka......",
	"mailing_sent" => "......utskicket är sänt",
	"mail_to" => "Till",
	"sent" => "skickad",
	"send" => "Skicka",
	"e-mail" => "epost",
	"normal_mail" => "normal post",
	"attachment" => "Bifogat: ",
	"additional_notes_mailing" => "Övriga anteckningar<br>(t ex skäl till utskicket)",
	"please_specify_mailing_name" => "Specificera namn för detta utskick.",
	"please_specify_mailing_type" => "Specificera typen av utskick.",
	"please_specify_mailing_subject" => "Specificera ämnet för utskicket.",
	"please_specify_mailing_body" => "Specificera utskickets text.",
	"mailing_name_already_used" => "Det valda namnet har redan använts, vänligen ändra.",
	"filename_already_used" => "Namnet för en bifogad fil har redan använts, vänligen ändra.",
	"mailing" => "Utskick",
	"created" => "skapat",
	"all_records_found" => "alla dataposter",
	"add_contacts_to" => "Lägg till kontakter till",
	"check_mailing" => "Kolla utskick",
	"the_mailing" => "Utskick",
	"mailing_already_sent" => "Detta utskick har redan sänts!!",
	"was_composed_by" => "skriven av",
	"contacts" => "kontakter",
	"you_have_added" => "Du har lagts till",
	"of_which_duplicated" => "därav är dubblerade",
	"of_which_with_no_info" => "därav saknar information",
	"is_composed_by" => "är nu skriven av",
	"go_back_to_home_send_or_add" => "Du kan nu gå till hemsidan och sända utskicket eller söka och lägga till andra kontakter till detta utskick.",
	"fields_max_length" => "För mycket text i något fält.",
	"you_are_going_unsubscribe" => "du kommer att tas bort från utskickslistan. Vill du det?",
	"you_have_unsubscribed" => "du har tagits bort från utskickslistan.",
	"change_profile_url" => "För att ändra din profil vänligen gå till denna sida: ",
	"removed_mailing_list_url" => "För att tas bort från utskickslistan vänligen gå till följande sida: ",
	"city" => "Stad",
	"province" => "Län",
	"zip_code" => "Postnummer",
	"prefix" => "Riktnummer",
	"no_city_found" => "Ingen stad hittad",
	"print_warning" => "Justera utskriftsmarginalen till (0,0,0,0) (top, botten, vänster, höger) i din webläsare för att skriva ut etiketterna korrekt.",
	"current_upload" => "Aktuell fil",
	"delete" => "radera",
	"total_records" => "Totalt antal dataposter",
	"confirm_delete?" => "Bekräfta radering?",
	"is_equal" => "är lika med",
	"contains" => "innehåller",
	"starts_with" => "börjar med",
	"ends_with" => "slutar med",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Export till CSV",
	"new_insert_executed" => "Ny infogning klar",
	"new_update_executed" => "Ny uppdatering klar",
	"null" => "Null",
	"is_null" => "ä null",
	"is_empty" => "är tom"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Fel, interna databasen är tom.",
	"get" => "Fel i get variables.",
	"no_unique_update_id" => "Din uppdateringslänk är gammal.<br>Vänligen kontakta webmastern för <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> för att få ny länk.<br>Vi beklagar besväret.",
	"no_unique_unsubscribe_id" => "Din länk för att tas bort från tjänsten är felaktig.<br>Vänligen kontakta webmastern för <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> för eventuella frågor.<br>Vi beklagar besväret.",
	"no_functions" => "Fel, ingen funktion vald<br>Vänligen gå tillbaka till hemsidan.",
	"no_unique_key" => "Fel, du har ingen primärnyckel i tabellen.",	
	"upload_error" => "Fel uppstod under uppladdning av filen.",
	"no_authorization_update_delete" => "Du är inte auktoriserad för att ändra/radera denna datapost.",
	"no_authorization_view" => "Du är inte auktoriserad för att se denna datapost.",
	"deleted_only_authorizated_records" => "Endast dataposter för vilka du har auktorisation har raderats.",
	"record_from_which_you_come_no_longer_exists" => "Den ursprungliga posten finns inte kvar.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Detta är den sista posten.",
	"this_record_is_the_first_one" => "Detta är den första posten."
	);

//login messages
$login_messages_ar = array(
	"username" => "användarnamn",
	"password" => "passord",
	"please_authenticate" => "Du måste identifiera dig för att kunna gå vidare",
	"login" => "login",
	"username_password_are_required" => "Användarnamn och passord krävs",
	"pwd_gen_link" => "skapa passord",
	"incorrect_login" => "Användarnamn eller passord felaktiga",
	"pwd_explain_text" =>"Mata in ett ord som ska användas till passord och tryck <b>Kryptera!</b>.",
	"pwd_explain_text_2" =>"Tryck <b>Registrera</b> för att skriva in det i formuläret nedan",
	"pwd_suggest_email_sending"=>"Du kanske vill skicka dig själv ett epost meddelande för att minnas passordet",
	"pwd_send_link_text" =>"skicka epost!",
	"pwd_encrypt_button_text" => "Kryptera!",
	"pwd_register_button_text" => "Registrera passordet och avsluta"
);
?>