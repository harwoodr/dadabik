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
	"insert"    => "Új bejegyzés hozzáadása",
	"search/update/delete" => "Bejegyzés(ek) keresése/frissítése/törlése",
	"insert_short"    => "Hozzáad",
	"search_short" => "Keres",
	"new_mailing" => "Új levél",
	"check_existing_mailing" => "Címjegyzék ellenõrzése",
	"send_mailing" => "Címjegyzék elküldése",
	"insert_anyway"    => "Mégiscsak illessze be",
	"search"    => "Bejegyzés(ek) keresése",
	"update"    => "Mentés",
	"ext_update"    => "Profil frissítése",
	"yes"    => "Igen",
	"no"    => "Nem",
	"go_back" => "Vissza",
	"edit" => "Szerkesztés",
	"delete" => "Törlés",
	"details" => "Részletek",
	"remove_from_mailing" => "Eltávolítás a címjegyzékbõl",
	"remove_all_from_mailing" => "Címjegyzék tartalmának törlése",
	"send" => "Küldés",
	"add_to_mailing" => "Hozzáadás a címjegyzékhez",
	"print_labels" => "Címkék nyomtatása",
	"create_this_mailing" => "                 Címjegyzék létrehozása                 ",
	"change_table" => "Tábla hozzáadása"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Create new item", // to change
	"show_all_records" => "Összes bejegyzés megjelenítése",
	"logout" => "Kijelentkezés",
	"top" => "Tetejére",
	"last_search_results" => "Legutóbbi keresés eredménye",
	"show_all" => "Összes",
	"home" => "Kezdõlap",
	"select_operator" => "Válasszon elválasztót:",
	"all_conditions_required" => "Minden feltételnek feleljen meg",
	"any_conditions_required" => "Bármely feltételnek megfelehet",
	"all_contacts" => "Minden kapcsolat",
	"removed" => "eltávolításra került",
	"please" => "Kérem",
	"and_check_form" => "és nézze át a táblát.",
	"and_try_again" => "és próbálja újra.",
	"none" => "egy sem",
	"are_you_sure" => "Biztos benne?",
	"delete_all" => "összes törlése",
	"really?" => "Valóban?",
	"delete_are_you_sure" => "Kitörli az összes alábbi bejegyzést? Biztos ebben?",
	"required_fields_missed" => "Nem töltött ki egy/néhány kötelezõ mezõt.",
	"alphabetic_not_valid" => "Számokat írt egy mezõbe, amelybe betûk valók.",
	"numeric_not_valid" => "Helytelen betûket írt egy mezõbe, melybe számok valók.",
	"email_not_valid" => "Az email cím(ek), amely(ek)et megadott helytelen(ek).",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Az URL(ek), amely(ek)et megadott, helytelen(ek).",
	"phone_not_valid" => "A telefonszám(ok), amely(ek)et megadott, helytelen(ek).<br>Használja az alábbi formátumot: \"+(ország kód)(területi kód)(telefonszám)\" pl. +36301234567.",
	"date_not_valid" => "Egy, vagy több megadott dátum helytelen formátumú.",
	"similar_records" => "Az alábbi bejegyzések hasonlóak ahhoz, amelyet hozzá szeretne adni.<br>Mit szeretne tenni?",
	"no_records_found" => "Nincs megfelelõ bejegyzés.",
	"records_found" => "megfelelõ bejegyzés található",
	"number_records" => "Bejegyzések száma: ",
	"details_of_record" => "Bejegyzés részletei",
	"edit_record" => "Bejegyzés szerkesztése",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "Elõzõ",
	"next" => "Következõ",
	"edit_profile" => "Profil adatok szerkesztése",
	"i_think_that" => "Azt gondolom, hogy ",
	"is_similar_to" => " hasonlít ehhez: ",
	"page" => "Oldalszám: ",
	"of" => " összes oldal: ",
	"records_per_page" => "Oldalankénti bejegyzés",
	"day" => "Nap",
	"month" => "Hónap",
	"year" => "Év",
	"administration" => "Adminisztráció",
	"create_update_internal_table" => "Belsõ tábla létrehozása/frissítése.",
	"other...." => "más....",
	"insert_record" => "Új bejegyzés hozzáadása",
	"search_records" => "Bejegyzés keresése",
	"exactly" => "ugyanolyan",
	"like" => "hasonló",
	"required_fields_red" => "A kötelezõ mezõk pirosak.",
	"insert_result" => "Hozzáadás eredménye:",
	"record_inserted" => "Bejegyzés sikeresen hozzáadva.",
	"update_result" => "Frissítés eredménye:",
	"record_updated" => "Bejegyzés sikeresen frissítve.",
	"profile_updated" => "Profil sikeresen frissítve.",
	"delete_result" => "Törlés eredménye:",
	"record_deleted" => "Bejegyzés sikeresen törölve.",
	"duplication_possible" => "Ismételt elõfordulás megengedett",
	"mail_to_records" => "email küldése az összes alábbi bejegyzés címére",
	"number_mails" => "Az elküldésre kerülõ levelek száma: ",
	"specify_subject_body" => "Kérem adja meg a levél címét és tartalmát",
	"create_new_mailing" => "Új levélcím hozzáadása a címjegyzékhez",
	"mailing_name" => "Levelezés azonosító: ",
	"mailing_type" => "Levelezés típusa: ",
	"specify_mailing_name" => "(Adjon meg egy nevet a bejegyzés azonostásához (pl. workshop_2002) Kérem ne használjon idézõ jeleket!!!!!!)",
	"email_specific_fields" => "A kék mezõk email-re vonatkoznak; hagyja figyelmen kívül, ha hagyományos levélcímrõl van szó",
	"from" => "Küldõ: ",
	"subject" => "Cím: ",
	"body" => "Tárgy: ",
	"dear" => "Kedves",
	"john_smith" => "Kovács János Úr",
	"start_sending" => "Küldés......",
	"mailing_sent" => "......Elküldve",
	"mail_to" => "Címzett",
	"sent" => "elküldve",
	"send" => "Elküldés",
	"e-mail" => "email",
	"normal_mail" => "hagyományos",
	"attachment" => "Csatolmány: ",
	"additional_notes_mailing" => "További megjegyzés<br>(pl.: levelél küldésének az oka)",
	"please_specify_mailing_name" => "Adja meg a levelezési azonosítót.",
	"please_specify_mailing_type" => "Adja meg a levelezés típusát.",
	"please_specify_mailing_subject" => "Adja meg a levél címét.",
	"please_specify_mailing_body" => "Adja meg a levél tárgyát.",
	"mailing_name_already_used" => "A kiválasztott név már szerepel, kérem válasszon másikat.",
	"filename_already_used" => "A csatolmány neve már szerepel, kérem válasszon másik nevet .",
	"mailing" => "Cím",
	"created" => "létrehozva",
	"all_records_found" => "összes megtalált bejegyzés",
	"add_contacts_to" => "Add contacts to",
	"check_mailing" => "Címjegyzék ellenõrzése",
	"the_mailing" => "A levelezés",
	"mailing_already_sent" => "A levél már elküldésre került!!",
	"was_composed_by" => "írója",
	"contacts" => "kapscolatok",
	"you_have_added" => "Hozzáadta",
	"of_which_duplicated" => "melyek közül ismétlõdõ",
	"of_which_with_no_info" => "melyek közül nincs elég információ",
	"is_composed_by" => "immár az írója",
	"go_back_to_home_send_or_add" => "You can now go back to the home page and send the mailing, or search and add other contacts to this mailing.",
	"fields_max_length" => "Túl sok adatot vitt be valamelyik beviteli mezõbe.",
	"you_are_going_unsubscribe" => "eltávolításra kerül a levelezõ listáról. Folytatja?",
	"you_have_unsubscribed" => "eltávolításra került a levelezõ listáról.",
	"change_profile_url" => "Profilja megváltoztatásához látogassa meg a következõ oldalt: ",
	"removed_mailing_list_url" => "A levelezõ listáról történõ leíratkozáshoz látogasson a következõ oldalra: ",
	"city" => "Város",
	"province" => "Megye",
	"zip_code" => "Irányító szám",
	"prefix" => "Elõtag",
	"no_city_found" => "Nem található ilyen város",
	"print_warning" => "Állítsa be a margókat a nyomtatáshoz (0,0,0,0) (felsõ, alsó, bal, jobb) a böngészõjében a kívánt címkékhez.",
	"current_upload" => "Aktuális feltöltendõ fájl",
	"delete" => "törlés",
	"total_records" => "Összes bejegyzés",
	"confirm_delete?" => "Megerõsíti a törlést?",
	"is_equal" => "azonos",
	"contains" => "tartalmazza",
	"starts_with" => "kezdõdik",
	"ends_with" => "végzõdik",
	"greater_than" => "nagyobb",
	"less_then" => "kisebb",
	"export_to_csv" => "CSV exporálás",
	"new_insert_executed" => "Beillesztés végrehajtve",
	"new_update_executed" => "Frissítés végrehajtva",
	"null" => "Null",
	"is_null" => "nulla",
	"is_empty" => "&uuml;res"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Hiba: a belsõ adatbázis üres.",
	"get" => "Hiba: a változók lekérdezése közben.",
	"no_unique_update_id" => "Az egyedi frissítõ azonosítója lejárt.<br>Vegye fel a kapcsolatot a renszergazdával <a href=\"mailto:atoth@atoth.sote.hu\">atoth@atoth.sote.hu</a>, hogy a frissítés link ismét mûködjön.<br>Elnézést a kellemetlenségért.",
	"no_unique_unsubscribe_id" => "Hibás a leíratkozó link.<br>Vegye fel a kapcsolatot a rendszergazdával a következõ címen: <a href=\"mailto:atoth@atoth.sote.hu\">atoth@atoth.sote.hu</a> és értesítse a problémáról.<br>Elnézést a kellemetlenségért.",
	"no_functions" => "Hiba: válasszon a leehtõségek közül<br>Kérem menjen vissza a kiiduló lapra.",
	"no_unique_key" => "Hiba: nincsen elsõdleges azonosító kulcs az adatbázisban.",	
	"upload_error" => "Hiba jelentkezett a fájl feltöltése során.",
	"no_authorization_update_delete" => "Nincs meg a jogosultsága a bejegyzés frissítéséhez/törléséhez.",
	"no_authorization_view" => "Nincs joga, hogy megnézze a bejegyzést.",
	"deleted_only_authorizated_records" => "Csak azon bejegyzések törlõdtek, melyekhez jogosultsággal rendelkezett.",
	"record_from_which_you_come_no_longer_exists" => "A bejegyzés már nem létezik.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Ez az utolsó bejegyzés.",
	"this_record_is_the_first_one" => "Ez az elsõ bejegyzés."
	);

//login messages
$login_messages_ar = array(
	"username" => "Felhasználó",
	"password" => "Jelszó",
	"please_authenticate" => "Folytatáshoz be kell jelentkeznie",
	"login" => "bejelentkezés",
	"username_password_are_required" => "Username and password are required",
	"pwd_gen_link" => "jelszó létrehozása",
	"incorrect_login" => "Helytelen felhasználó, vagy jelszó",
	"pwd_explain_text" =>"Írja be a kívánt jelszót és kattintson a <b>Titkosítás!</b> gombra.",
	"pwd_explain_text_2" =>"Nyomja meg a <b>Regisztrálás</b> gombot, hogy átmásolódjon a megfelelõ mezõbe.",
	"pwd_suggest_email_sending"=>"Elküldheti magának a jelszót egy emailben, ha kívánja.",
	"pwd_send_link_text" =>"email küldése!",
	"pwd_encrypt_button_text" => "Titkosítás!",
	"pwd_register_button_text" => "A jelszó regisztrálása és kilépés"
);
?>