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
	"insert"    => "Record toevoegen",
	"search/update/delete" => "Zoek/update/wis records",
	"insert_short"    => "Toevoegen",
	"search_short" => "Zoek",
	"new_mailing" => "Nieuwe mailing",
	"check_existing_mailing" => "Controleer bestaande mailing",
	"send_mailing" => "Verstuur bestaande mailing",
	"insert_anyway"    => "Altijd toevoegen",
	"search"    => "Zoek voor record",
	"update"    => "Update dit record",
	"ext_update"    => "Update je profiel",
	"yes"    => "Ja",
	"no"    => "Nee",
	"go_back" => "Terug",
	"edit" => "Edit",
	"delete" => "Delete",
	"details" => "Details",
	"remove_from_mailing" => "Verwijder van mailing",
	"remove_all_from_mailing" => "Verwijder alles van de mailing",
	"send" => "Verstuur",
	"add_to_mailing" => "Aan mailing toevoegen",
	"print_labels" => "Print labels",
	"create_this_mailing" => "                 Maak deze mailing                 ",
	"change_table" => "Change table"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Item invoegen", // to change
	"show_all_records" => "Toon alle records",
	"logout" => "Log uit",
	"top" => "Top",
	"last_search_results" => "Laatste zoekresultaten",
	"show_all" => "Toon Alles",
	"home" => "Thuis",
	"select_operator" => "Selecteer de operator:",
	"all_conditions_required" => "Alle vereiste condities",
	"any_conditions_required" => "de vereiste condities",
	"all_contacts" => "All contacten",
	"removed" => "verwijderd",
	"please" => "Gelieve",
	"and_check_form" => "en controleer het formulier.",
	"and_try_again" => "en probeer opnieuw.",
	"none" => "Geen",
	"are_you_sure" => "Weet U het zeker?",
	"delete_all" => "Alles wissen",
	"really?" => "Zeker?",
	"delete_are_you_sure" => "U gaat onderstaand record wissen, zeker ?",
	"required_fields_missed" => "Niet alle vereiste velden zijn ingevuld.",
	"alphabetic_not_valid" => "Getallen in een alleen-letters veld ?",
	"numeric_not_valid" => "Niet numerieke tekens in een alleen-cijfer veld.",
	"email_not_valid" => "Het/De emailadress(en) is/zijn ongeldig.",
	"timestamp_not_valid" => "Ingevoegde tijd is ongeldig.",
	"url_not_valid" => "Ongeldig webadres/URL.",
	"phone_not_valid" => "Telefoonnummer niet geldig.",
	"similar_records" => "Onderstaande record gelijken sterk op de toe te voegen record.<br>Wat wilt U doen?",
	"date_not_valid" => "Ongeldige datum.",
	"no_records_found" => "Geen records gevonden.",
	"records_found" => "records gevonden",
	"number_records" => "Aantal records: ",
	"details_of_record" => "Details van het record",
	"edit_record" => "Edit het record",
	"back_to_the_main_table" => "Terug naar hoofdtabel",
	"previous" => "Vorige",
	"next" => "Volgende",
	"edit_profile" => "Update je profiel",
	"i_think_that" => "Ik denk dat ",
	"is_similar_to" => " gelijk is aan ",
	"page" => "Pagina ",
	"of" => " van ",
	"records_per_page" => "records per pagina",
	"day" => "Dag",
	"month" => "Maand",
	"year" => "Jaar",
	"administration" => "Administratie",
	"create_update_internal_table" => "Maak/update interne table",
	"other...." => "Andere....",
	"insert_record" => "New record toevoegen",
	"search_records" => "Zoek voor record",
	"exactly" => "precies",
	"like" => "bevattende",
	"required_fields_red" => "Vereiste velden zijn rood.",
	"insert_result" => "Toevoegen resultaat:",
	"record_inserted" => "Record correct toegevoegd.",
	"update_result" => "Update resultaat:",
	"record_updated" => "Record correctly geupdate.",
	"profile_updated" => "Uw profiel is correct geupdate.",
	"delete_result" => "Wis resultaat:",
	"record_deleted" => "Record correct verwijderd.",
	"duplication_possible" => "Duplicatie is mogelijk",
	"mail_to_records" => "mail naar alle gevonden records",
	"number_mails" => "Berichtnummer dat je gaat versturen: ",
	"specify_subject_body" => "Geef onderwerp en bericht",
	"create_new_mailing" => "Maak een nieuwe mailing",
	"mailing_name" => "Mailing naame ",
	"mailing_type" => "Mailing type: ",
	"specify_mailing_name" => "(geef een omschrijvende naam voor deze mailing. Gebruik GEEN haakjes of afkappingstekens!!)",
	"email_specific_fields" => "Blauwe velden hebben te maken met e-mail, negeer ze als je normale mail kiest",
	"from" => "Van: ",
	"subject" => "Onderwerp: ",
	"body" => "Body: ",
	"dear" => "Beste",
	"john_smith" => "Mr. John B. Smith",
	"start_sending" => "Bezig met versturen.....",
	"mailing_sent" => "......Verstuurd.",
	"mail_to" => "Mail naar",
	"sent" => "verstuurd",
	"send" => "Verstuur",
	"e-mail" => "e-mail",
	"normal_mail" => "normale mail",
	"attachment" => "Attachment: ",
	"additional_notes_mailing" => "Additionele opmeking<br>(e.g. reden van de mailing)",
	"please_specify_mailing_name" => "Geef de mailing naam.",
	"please_specify_mailing_type" => "Geef het mailing type.",
	"please_specify_mailing_subject" => "Geef het onderwerp op.",
	"please_specify_mailing_body" => "Specifieer het hoofdbericht van de mailing.",
	"mailing_name_already_used" => "Naam is reeds in gebruik, kies een andere.",
	"filename_already_used" => "Attachment filenaam in gebruik, verander de naam",
	"mailing" => "Mailing",
	"created" => "gemaakt",
	"all_records_found" => "all records gevonden",
	"add_contacts_to" => "Voeg contacts toe",
	"check_mailing" => "Check mailing",
	"the_mailing" => "De mailing",
	"mailing_already_sent" => "Deze mailing is reeds verzonden!",
	"was_composed_by" => "was gemaakt door",
	"contacts" => "contacts",
	"you_have_added" => "U heeft toegevoegd",
	"of_which_duplicated" => "waarvan zijn gekopieerd",
	"of_which_with_no_info" => "van degene met niet genoeg informatie",
	"is_composed_by" => "is nu gemaakt door",
	"go_back_to_home_send_or_add" => "U kan terugkeren naar de homepagina en de mailing versturen of zoeken en andere contacten toevoegen aan deze mailing.",
	"fields_max_length" => "Teveel tekst in 1 of meerdere velden.",
	"you are_going_unsubscribe" => "U gaat verwijderd worden van de mailinglijst. Verder gaan ?",
	"you_have_unsubscribed" => "U bent successvol van de mailing lijst verwijderd.",
	"change_profile_url" => "Om uw profiel te veranderen, bezoek : ",
	"removed_mailing_list_url" => "Om verwijderd te worden van de mailinglijst bezoek volgende pagina: ",
	"city" => "Stad",
	"province" => "Provincie",
	"zip_code" => "Postnummer",
	"prefix" => "Prefix",
	"no_city_found" => "Geen steden gevonden",
	"print_warning" => "Set de marge correct op (0,0,0,0) (boven, onder, links, rechts) in je browser om de labels correct af te drukken.",
	"current_upload" => "Huidig bestand",
	"delete" => "delete",
	"total_records" => "Totaal records",
	"confirm_delete?" => "Bevestig wissen ?",
	"is_equal" => "is gelijk aan",
	"contains" => "bevat",
	"starts_with" => "begint met",
	"ends_with" => "eindigt met",
	"greater_than" => " groter dan ",
	"less_then" => " kleiner dan ",
	"export_to_csv" => "Export naar CSV",
	"new_insert_executed" => "Nieuwe insert doorgevoerd",
	"new_update_executed" => "Nieuwe update doorgevoerd",
	"null" => "Nul",
	"is_null" => "is nul",
	"is_empty" => "is leeg"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Error, de interne database is leeg.",
	"get" => "Error, kan de variabelen niet bekomen.",
	"no_unique_update_id" => "Uw update link is vervallen.",
	"no_unique_unsubscribe_id" => "De unsubscribe link is not correct.",
	"no_functions" => "Error, geen functies geselecteerd<br>Ga terug naar de homepagina.",
	"no_unique_key" => "Error, U heeft geen primaire sleutel in je tabel.",
	"upload_error" => "Er is een probleem met het uploaden van een bestand.",
	"no_authorization_update_delete" => "U heeft geen rechten om dit record te wijzigen/wissen.",
	"no_authorization_view" => "U heeft geen rechten om dit record te bekijken.",
	"deleted_only_authorizated_records" => "Enkel de records waar U rechten op heeft zijn verwijderd.",
	"record_from_which_you_come_no_longer_exists" => "Startrecord bestaat niet meer.",
	"date_not_representable" => "Een datumwaarde in dit record kan niet getoond worden met de DaDaBIK dag-maand-jaar lijstbox, de waarde is: ",
	"this_record_is_the_last_one" => "Dit is het laatste record.",
	"this_record_is_the_first_one" => "Dit is het eerste record."
	);

//login messages
$login_messages_ar = array(
	"username" => "gebruikersnaam",
	"password" => "paswoord",
	"please_authenticate" => "Geef Uw logingegevens",
	"login" => "login",
	"username_password_are_required" => "Gebruikersnaam en paswoord vereist",
	"incorrect_login" => "Gebruikersnaam of paswoord niet correct",
	"pwd_gen_link" => "maak paswoord",
	"pwd_explain_text" =>"Geef uw paswoord en druk <b>Versleutel!</b>.",
	"pwd_explain_text_2" =>"Klik <b>Register</b> om in onderstaande te plaatsen",
	"pwd_suggest_email_sending"=>"Je kan jezelf een mail sturen om het paswoord te onthouden",
	"pwd_send_link_text" =>"Verstuur email!",
	"pwd_encrypt_button_text" => "Versleutel!",
	"pwd_register_button_text" => "Registreer paswoord en be-eindig"
)
?>
