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
	"insert"    => "Umetni novi podatak",
	"search/update/delete" => "Traži/uredi/poništi podatak",
	"insert_short"    => "Umetni",
	"search_short" => "Traži",
	"new_mailing" => "Novi mail",
	"check_existing_mailing" => "Provjeri postojeæi mail",
	"send_mailing" => "Pošalji mail",
	"insert_anyway"    => "Svejedno umetni",
	"search"    => "Traži podatak",
	"update"    => "Ažuriraj podatak",
	"ext_update"    => "Ažuriraj svoje podatke",
	"yes"    => "Da",
	"no"    => "Ne",
	"go_back" => "Natrag",
	"edit" => "Uredi",
	"delete" => "Poništi",
	"details" => "Detalji",
	"remove_from_mailing" => "Ukloni iz maila",	
	"remove_all_from_mailing" => "Ukloni sve iz maila",
	"send" => "Pošalji",
	"add_to_mailing" => "Dodaj u mail",
	"print_labels" => "Odštampaj etikete",
	"create_this_mailing" => "Kreiraj ovaj mail",
	"change_table" => "Promjeni tablicu"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Prikaži sve podatke", 
	"logout" => "Logout",
	"top" => "Na vrh",
	"last_search_results" => "zadnji rezultat pretrage", //to change 
	"show_all" => "Prikaži sve",
	"home" => "Poèetna",
	"select_operator" => "Izaberi operatora:",
	"all_conditions_required" => "Svi uvjeti",
	"any_conditions_required" => "Bilo koji uvjet",
	"all_contacts" => "Svi kontakti",
	"removed" => "Poništeno",
	"please" => "Molimo vas",
	"and_check_form" => "i provjeri obrazac.",
	"and_try_again" => "pokušaj ponovno",
	"none" => "Niti jedan",
	"are_you_sure" => "Da li ste sigurni?",
	"delete_all" => "Poništi sve",
	"really?" => "Zaista?",
	"delete_are_you_sure" => "Poništiti æe te ovaj podatak, da li ste sigurni?",
	"required_fields_missed" => "Niste ispunili obavezna polja.",
	"alphabetic_not_valid" => "Umetnuli ste znamenke u polje za slova.",
	"numeric_not_valid" => "Umetnuli ste slova u numerièko polje.",
	"email_not_valid" => "Umetnuli ste jednu ili više neispravnih email adresa.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Umetnuli ste jednu ili više neispravnih URL adresa.",
	"phone_not_valid" => "Umetnuli ste jedan ili više neispravnih telefonskih brojeva. <br>Molimo vas da koristite format \"+(country code)(area code)(number)\" npr. +3850523599318.",
	"date_not_valid" => "Umetnuli ste jedan ili više neispravnih datuma.",
	"similar_records" => "Podaci ispod slièni su podacima koje želite umetnuti. <br>Što želite uèiniti?",
	"no_records_found" => "Nije pronaðen niti jedan podatak.",
	"records_found" => "Pronaðeni podaci.",
	"number_records" => "Ukupno podataka: ",
	"details_of_record" => "Detalji podatka",
	"edit_record" => "Ažuriraj podatak",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "prijasnji", 
	"next" => "sljedeci", 
	"edit_profile" => "Ažurirajte informacije o vašem profilu",
	"i_think_that" => "Mislim da  ",
	"is_similar_to" => "slièno je ",
	"page" => "Stranica  ",
	"of" => " od ",
	"records_per_page" => "podaci po stranici",
	"day" => "Dan ",
	"month" => "Mjesec",
	"year" => "Godina",
	"administration" => "Administracija",
	"create_update_internal_table" => "Kreirajte ili ažurirajte internu tablicu",
	"other...." => "drugo....",
	"insert_record" => "Umetni novi podatak",
	"search_records" => "Traži podatke",	
	"exactly" => "toèno kao",
	"like" => "kao",
	"required_fields_red" => "Obavezna polja su oznaèena crvenom bojom.",
	"insert_result" => "Rezultati umetanja:",
	"record_inserted" => "Podatak ispravno umetnut.",
	"update_result" => "Rezultat ažuriranja:",
	"record_updated" => "Podatak je ispravno ažuriran.",
	"profile_updated" => "Vaš profil ispravno je ažuriran.",
	"delete_result" => "Rezultat poništavanja:",
	"record_deleted" => "Podatak je ispravno poništen.",
	"duplication_possible" => "Duplikacija je moguæa",
	"mail_to_records" => "Email za sve pronaðene podatke",
	"number_mails" => "Broj poruka koje æe te poslati: ",
	"specify_subject_body" => "Odredite predmet i sadržaj poruke",
	"create_new_mailing" => "Kreirajte novi mail",
	"mailing_name" => "Naziv maila: ",
	"mailing_type" => "Vrsta mailia: ",
	"specify_mailing_name" => "(Izaberite naziv po kojemu æe te identificirati ovaj mail, npr. grupa_2002, nemojte koristiti navodnike!!!",
	"email_specific_fields" => "Plava polja povezana su s mailom, ignorirajte ih ako izaberet obièan mail",
	"from" => "Od: ",
	"subject" => "Predmet: ",
	"body" => "Sadržaj: ",
	"dear" => "Poštovani",
	"john_smith" => "Gosp.Ivica Maric",
	"start_sending" => "Zapoèni sa slanjem......",
	"mailing_sent" => "....Mailing poslan ......",
	"mail_to" => "Mail za",
	"sent" => "poslan",
	"send" => "Pošalji",
	"e-mail" => "e-mail",
	"normal_mail" => "obièan mail",
	"attachment" => "Prilog:",
	"additional_notes_mailing" => "Dodatne bilješke<br>(npr. razlog za slanje maila)",
	"please_specify_mailing_name" => "Trebate odrediti ime za mail.",
	"please_specify_mailing_type" => "Trebate odrediti vrstu maila.",
	"please_specify_mailing_subject" => "Trebate odrediti predmet maila.",
	"please_specify_mailing_body" => "Trebate odrediti sadržaj maila.",
	"mailing_name_already_used" => "Ime koje ste izabrali veæ je bilo u upotrebi, promjenite ga.",
	"filename_already_used" => "Naziv priloga veæ je korišten, promjenite ga.",
	"mailing" => "Mail",
	"created" => "kreiran",
	"all_records_found" => "svi podaci pronaðeni",
	"add_contacts_to" => "Dodajte kontakte za",
	"check_mailing" => "Provjerite mail",
	"the_mailing" => "Mail",
	"mailing_already_sent" => "Ovaj mail veæ je poslan!",
	"was_composed_by" => "sastavio je",
	"contacts" => "kontakti",
	"you_have_added" => "Dodali ste",
	"of_which_duplicated" => "od kojih je/su duplikat",
	"of_which_with_no_info" => "od kojih nemaju dovoljno informacija",
	"is_composed_by" => "Sastavio je",
	"go_back_to_home_send_or_add" => "Sada se možete vratiti na poèetnu stranicu i poslati mail, ili pretražiti i dodati druge primatelje za ovaj mail.",
	"fields_max_length" => "Upisali ste previše teksta u jedno ili više polja.",
	"you_are_going_unsubscribe" => "biti æe te izbrisani iz našeg mailing popisa. Želite li nastaviti?",
	"you_have_unsubscribed" => "Uspješno ste izbrisani iz našeg mailing popisa.",
	"change_profile_url" => "Za izmjene korisnièkog profila posjetite ovu stranicu: ",
	"removed_mailing_list_url" => "Za brisanje iz mailing popisa posjetite ovu stranicu: ",
	"city" => "Grad",
	"province" => "Zupanija",
	"zip_code" => "Postanski broj",
	"prefix" => "Prefiks",
	"no_city_found" => "Nijedan grad nije pronaðen",
	"print_warning" => "Postavite rubove za štampanje na (0,0,0,0) (vrh, dno, lijevo, desno) u vašem browseru kako bi ispravno odštampali etikete.",
	"current_upload" => "Sadašnji dokument",
	"delete" => "Izbriši",
	"total_records" => "Ukupno podataka",
	"confirm_delete?" => "Potvrditi brisanje?",
	"is_equal" => "jednak je",
	"contains" => "sadržava",
	"starts_with" => "pocinje s",
	"ends_with" => "zavrsava s",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Eksportiraj u CSV",
	"new_insert_executed" => "novi podatak izvrsen", 
	"new_update_executed" => "izvrseno novo azuriranje",
	"null" => "Null", // to change
	"is_null" => "is null", // to change
	"is_empty" => "is empty" // to change
);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Pogreška, baza podataka prazna je.",
	"get" => "Pogreška u varijabli get.",
	"no_unique_update_id" => "Vaš link za ažuriranje je istekao.<br>Kontaktirajte webmastera.",
	"no_unique_unsubscribe_id" => "Vaš link za brisanje je neispravan. Kontaktirajte webmastera za dodatne informacije.",
	"no_functions" => "Pogreška, nije izabrana niti jedna funkcija. Vratite se na poèetnu stranicu.",
	"no_unique_key" => "Pogreška, nemate niti jedan primarni kljuè u vašoj tablici.",	
	"upload_error" => "Došlo je do pogreške prilikom upload-a dokumenta.",
	"no_authorization_update_delete" => "Nemate autorizaciju za promjene/poništavanje ovog podatka.",
	"no_authorization_view" => "Nemate autorizaciju za pregledavanje ovog podatka.",
	"deleted_only_authorizated_records" => "Poništeni su samo podaci za koje imate autorizaciju.",
	"record_from_which_you_come_no_longer_exists" => "registar odakle dolazite vise ne postoji",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "ovo je zadnji podatak", 
	"this_record_is_the_first_one" => "ovo je prvi podatak" 
	);

//login messages - new -
$login_messages_ar = array(
	"username" => "korisnik",
	"password" => "lozinka",
	"please_authenticate" => "Morate biti identificirani da bi ste nastavili",
	"login" => "login",
	"username_password_are_required" => "Trebate korisnièko ime i lozinku",
	"pwd_gen_link" => "Kreirajte lozinku",
	"incorrect_login" => "Korisnièko ime ili lozinka neispravni",
	"pwd_explain_text" =>"Upišite rijeè koja æe biti vaša lozinka i pritisnite <b>Kriptiraj!</b>.",
	"pwd_explain_text_2" =>"Pritisnite <b>Registriraj</b> kako bi ste ju upisali u obrazac ispod",
	"pwd_suggest_email_sending"=>"Možete si poslati email poruku s podacima o lozinki",
	"pwd_send_link_text" =>"pošaljite poruku",
	"pwd_encrypt_button_text" => "Kriptiraj!",
	"pwd_register_button_text" => "Registrirajte lozinku i izaðite"
)
?>
