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
	"insert"    => "Uuden tietueen lisäys",
	"search/update/delete" => "Etsi/päivitä/poista tietueita",
	"insert_short"    => "Lisää",
	"search_short" => "Etsi",
	"new_mailing" => "Uusi postitus",
	"check_existing_mailing" => "Tarkista olemassaolevat postitukset",
	"send_mailing" => "Lähetä olemassaoleva postitus",
	"insert_anyway"    => "Lisää kaikesta huolimatta",
	"search"    => "Etsi tietuetta",
	"update"    => "Tallenna",
	"ext_update"    => "Päivitä käyttäjätietosi",
	"yes"    => "Kyllä",
	"no"    => "Ei",
	"go_back" => "Palaa takaisin",
	"edit" => "Muokkaa",
	"delete" => "Poista",
	"details" => "Tiedot",
	"remove_from_mailing" => "Poista postituksesta",
	"remove_all_from_mailing" => "Poista kaikki postituksesta",
	"send" => "Lähetä",
	"add_to_mailing" => "Lisää postitukseen",
	"print_labels" => "Tulosta tarrat",
	"create_this_mailing" => "                 Luo tämä postitus                ",
	"change_table" => "Vaihda taulua"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Näytä kaikki tietueet",
	"logout" => "Kirjaudu ulos",
	"top" => "Ylös",
	"last_search_results" => "Viimeisimmän haun tulokset",
	"show_all" => "Näytä kaikki",
	"home" => "Aloitus",
	"select_operator" => "Valitse vertailutapa:",
	"all_conditions_required" => "Kaikkien ehtojen on täytyttävä",
	"any_conditions_required" => "Vähintään yhden ehdon on täytyttävä",
	"all_contacts" => "Kaikki yhteystiedot",
	"removed" => "poistettu",
	"please" => "Ole hyvä",
	"and_check_form" => "ja tarkista lomake.",
	"and_try_again" => "ja yritä uudelleen.",
	"none" => "ei lainkaan",
	"are_you_sure" => "Oletko varma?",
	"delete_all" => "poista kaikki",
	"really?" => "Todellako?",
	"delete_are_you_sure" => "Olet poistamassa oheista tietuetta, oletko aivan varma?",
	"required_fields_missed" => "Et ole täyttänyt kaikkia vaadittuja tietoja.",
	"alphabetic_not_valid" => "Sopimattomia merkkejä kentässä, johon hyväksytään vain aakkosia (a-ö).",
	"numeric_not_valid" => "Sopimattomia merkkejä kentässä, johon hyväksytään vain numeroita (0-9).",
	"email_not_valid" => "Antamasi sähköpostiosoite ei ole kelvollinen.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Antamasi url (www-osoite) ei ole kelvollinen.",
	"phone_not_valid" => "Antamasi puhelinnumero ei ole kelvollinen.<br>Käytä muotoa \"+(maatunnus)(aluetunnus)(numero)\" esim. +358401235678.",
	"date_not_valid" => "Antamasi päivämäärä ei ole kelvollinen.",
	"similar_records" => "Oheiset tietueet ovat yhteneväisiä antamiesi tietojen kanssa.<br>Mitä haluat tehdä?",
	"no_records_found" => "Yhtään tietuetta ei löytynyt.",
	"records_found" => "tietuetta löytyi",
	"number_records" => "Tietueiden lukumäärä: ",
	"details_of_record" => "Tietueen tiedot",
	"edit_record" => "Muokkaa tietuetta",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "Edellinen",
	"next" => "Seuraava",
	"edit_profile" => "Päivitä käyttäjätietosi",
	"i_think_that" => "Oletan, että ",
	"is_similar_to" => " on samanlainen kuin ",
	"page" => "Sivu ",
	"of" => " / ",
	"records_per_page" => "tietuetta sivulla",
	"day" => "Päivä",
	"month" => "Kuukausi",
	"year" => "Vuosi",
	"administration" => "Ylläpito",
	"create_update_internal_table" => "Luo tai päivitä sisäinen taulu",
	"other...." => "Muu, mikä? ...",
	"insert_record" => "Lisää uusi tietue",
	"search_records" => "Etsi tietueita",
	"exactly" => "täsmälleen",
	"like" => "melkein kuin",
	"required_fields_red" => "Vaaditut tiedot merkitty punaisella.",
	"insert_result" => "Tallennus:",
	"record_inserted" => "Tietue lisätty ongelmitta.",
	"update_result" => "Päivitys:",
	"record_updated" => "Tietue päivitetty ongelmitta.",
	"profile_updated" => "Käyttäjätietosi on päivitetty ongelmitta.",
	"delete_result" => "Poisto:",
	"record_deleted" => "Tietue poistettu ongelmitta.",
	"duplication_possible" => "Kahdentuminen on mahdollinen",
	"mail_to_records" => "lähetä sähköpostia kaikille löydetyille tietueille",
	"number_mails" => "Lähdössä olevien sähköpostien lukumäärä: ",
	"specify_subject_body" => "Määritä sähköpostiviestin otsikko ja itse viesti",
	"create_new_mailing" => "Luo uusi postitus",
	"mailing_name" => "Postituksen nimi: ",
	"mailing_type" => "Postituksen tyyppi: ",
	"specify_mailing_name" => "(Nimeä postitus, esim. muistio_2006, mutta ÄLÄ KÄYTÄ nimessä LAINAUSMERKKEJÄ!!)",
	"email_specific_fields" => "Siniset kentät koskevat sähköpostia, joten niitä ei tarvita mikäli valitsit perinteisen postin.",
	"from" => "Lähettäjä: ",
	"subject" => "Otsikko: ",
	"body" => "Viesti: ",
	"dear" => "Arvoisa",
	"john_smith" => "Matti Meikäläinen",
	"start_sending" => "Aloitetaan lähetys......",
	"mailing_sent" => "...... Postitus lähetetty!",
	"mail_to" => "Vastaanottaja",
	"sent" => "lähetetty",
	"send" => "Lähetä",
	"e-mail" => "sähköposti",
	"normal_mail" => "tavallinen posti",
	"attachment" => "Liite: ",
	"additional_notes_mailing" => "Huomautuksia<br>(esim. postituksen syy)",
	"please_specify_mailing_name" => "Ole hyvä ja valitse postitukselle nimi.",
	"please_specify_mailing_type" => "Ole hyvä ja valitse postituksen tyyppi.",
	"please_specify_mailing_subject" => "Ole hyvä ja määrittele postituksen otsikko.",
	"please_specify_mailing_body" => "Ole hyvä ja määrittele postituksen viesti.",
	"mailing_name_already_used" => "Valitsemasi nimi on jo käytössä. Ole hyvä ja valitse toinen nimi.",
	"filename_already_used" => "Samanniminen liitetiedosto on jo olemassa. Ole hyvä ja valitse toinen nimi.",
	"mailing" => "Postitus",
	"created" => "luotu",
	"all_records_found" => "kaikki tietueet löydetty",
	"add_contacts_to" => "Lisää yhteystiedot:",
	"check_mailing" => "Tarkista postitus",
	"the_mailing" => "Postitus",
	"mailing_already_sent" => "Tämä postitus on jo lähetetty!!",
	"was_composed_by" => "kirjoittaja oli",
	"contacts" => "yhteystiedot",
	"you_have_added" => "Olet lisännyt",
	"of_which_duplicated" => "joista kahdennettuja oli",
	"of_which_with_no_info" => "joista riittämättömät tiedot oli",
	"is_composed_by" => "jonka toteutti:",
	"go_back_to_home_send_or_add" => "Voit nyt palata aloitussivulle ja lähettää postituksen, tai etsiä ja lisätä uusia yhteystietoja tähän postitukseen.",
	"fields_max_length" => "Sisältö yhdessä tai useammassa kentässä on liian pitkä.",
	"you_are_going_unsubscribe" => "sinut poistetaan postituslistaltamme. Oletko varma?",
	"you_have_unsubscribed" => "sinut on onnistuneesti poistettu postituslistaltamme.",
	"change_profile_url" => "Muuttaaksesi käyttäjätietojasi vieraile tällä sivulla: ",
	"removed_mailing_list_url" => "Poistaaksesi itsesi postituslistaltamme vieraile tällä sivulla: ",
	"city" => "Postitoimipaikka",
	"province" => "Maakuntia ei löydetty",
	"zip_code" => "Postinumero",
	"prefix" => "Alkuliite",
	"no_city_found" => "Postitoimipaikkoja ei löydetty",
	"print_warning" => "Ole hyvä ja aseta tulostusmarginaali (0,0,0,0) (ylä, ala, vasen, oikea) selaimessasi, jotta osoitelipukkeet tulostuvat oikein.",
	"current_upload" => "Nykyinen tiedosto",
	"delete" => "poista",
	"total_records" => "Tietueita yhteensä",
	"confirm_delete?" => "Vahvista poisto?",
	"is_equal" => "on yhtä kuin",
	"contains" => "sisältää",
	"starts_with" => "alussa",
	"ends_with" => "lopussa",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Vie CSV-muotoon",
	"new_insert_executed" => "Uusi lisäys suoritettu",
	"new_update_executed" => "Uusi päivitys suoritettu",
	"null" => "Tyhj&auml;",
	"is_null" => "on tyhj&auml;",
	"is_empty" => "arvoa ei asetettu"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Virhe. Sisäinen tietokanta on tyhjä.",
	"get" => "Virhe haettaessa muuttujia.",
	"no_unique_update_id" => "Päivityslinkkisi on vanhentunut.<br>Ota yhteyttä ylläpitoon osoitteessa <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> saadaksesi uuden linkin.<br>Pahoittelemme aiheutunutta vaivaa.",
	"no_unique_unsubscribe_id" => "Virheellinen tilauksen peruutuslinkki.<br>Ota yhteyttä ylläpitoon osoitteessa <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> mikäli sinulla on kysyttävää<br>Pahoittelemme aiheutunutta vaivaa.",
	"no_functions" => "Virhe. Toimintoja ei valittu.<br>Ole hyvä ja palaa takaisin kotisivulle.",
	"no_unique_key" => "Virhe. Sinulla ei ole yhtään \"primary key\"-kenttää taulussasi.",
	"upload_error" => "Tiedoston latauksessa tapahtui virhe.",
	"no_authorization_update_delete" => "Oikeutesi eivät riitä tämän tietueen muokkaukseen tai poistamiseen.",
	"no_authorization_view" => "Oikeutesi eivät riitä tämän tietueen tarkasteluun.",
	"deleted_only_authorizated_records" => "Vain ne tietueet poistettiin, joiden poistoon sinulla oli oikeudet.",
	"record_from_which_you_come_no_longer_exists" => "Hakemaasi tietuetta ei ole enää olemassa.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Tämä on viimeinen tietue.",
	"this_record_is_the_first_one" => "Tämä on ensimmäinen tietue."
	);

//login messages
$login_messages_ar = array(
	"username" => "Käyttäjätunnus",
	"password" => "Salasana",
	"please_authenticate" => "Kirjautuminen",
	"login" => "Kirjaudu sisään",
	"username_password_are_required" => "Käyttäjätunnus ja salasana vaaditaan",
	"pwd_gen_link" => "Luo salasana",
	"incorrect_login" => "Kirjautumistiedoissa virhe, tarkista tunnus ja salasana.",
	"pwd_explain_text" =>"Kirjoita haluamasi salasana ja paina <b>Salaa salasana!</b>.",
	"pwd_explain_text_2" =>"Paina <b>Rekisteröidy</b> ja kirjoita saamasi salattu salasana ao. kenttään.",
	"pwd_suggest_email_sending"=>"Haluatko että sinulle lähetetään salasana sähköpostitse?",
	"pwd_send_link_text" =>"Lähetä salasana sähköpostitse!",
	"pwd_encrypt_button_text" => "Salaa salasana!",
	"pwd_register_button_text" => "Rekisteröi salasana ja poistu"
);
?>