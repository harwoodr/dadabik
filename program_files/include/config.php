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
// this is the configuration file
// to install DaDaBIK you have to specify *at least* $dbms_type, $host, $db_name, $user, $pass, $site_url, $site_path, $timezone

///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
// please specify at least the following parameters

// dbms type ('mysql'|'postgres'|'postgres64'|'sqlite') (postgres64 is for PostgreSQL vers. <= 6.4)
$dbms_type = '';

// DBMS server host
$host = ''; // the name or the IP of the host where the DBMS is running e.g. "localhost"; for SQLite this parameter is not needed

// database name
$db_name = ''; // for sqlite not only the name but the full path is also needed, e.g. '/my_databases/music_databases/songs.db' and write permissions on the database file is needed for the Web server

// database user
$user = ''; // this user must have select, insert, update, delete permissions, create and drop permissions are also needed for installation and administration area e.g. 'root'; for SQLite this parameter is not needed

// database password
$pass = ''; // for sqlite this parameter is not needed

// DaDaBIK complete url (e.g. http://www.mysite.com/path_to_dadabik/)
$site_url = 'http://';

// DaDaBIK url path (e.g. if $site_url is http://www.mysite.com/path_to_dadabik/ this should be /path_to_dadabik/, put slashes at the beginning and at the end; put just one slash if DaDaBIK is installed in the root of a Website, e.g. a $site_url like http://www.mysite.com)
$site_path = '//';

// timezone, specify here your timezone (a list of available timezone here: http://php.net/manual/en/timezones.php)
$timezone = 'Europe/Rome';

// please specify at least the above parameters
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////

// enable the users authentication (0|1). If 1 you have to login to use DaDaBIK
// you *must* set it to 1 if you want to enable one of the authorization features below or if you want to use the ID_user field type
// by default DaDaBIK create an administrator user (username: root password: letizia); for security reasons please change the password as soon as possible and never publish a DaDaBIK application having the default root password 
$enable_authentication = 0;

// information about the users table: change the following 6 parameters just if you want to use your own authentication table and not the DaDaBIK's default one or if the table name 'users_tab' conflicts with another table with the same name in the same db (in the second case just change $users_table_name)
$users_table_name = 'users_tab';
$users_table_username_field = 'username_user';
$users_table_password_field = 'password_user';
$users_table_user_type_field = 'user_type_user';
$users_table_user_type_administrator_value = 'admin'; // the value of the $users_table_user_type_field field used to identify the administrator role  (must be a string)
$users_table_user_type_normal_user_value = 'normal'; // the value of the $users_table_user_type_field field used to identify the normal user role  (must be a string)

// enable delete authorization, only who inserted a record can delete it (0|1)
$enable_delete_authorization = 0;

// enable update authorization, only who inserted a record can modify it (0|1)
$enable_update_authorization = 0;

// enable browse authorization, only who inserted a record can view it (0|1)
$enable_browse_authorization = 0;

// enable delete all feature (delete feature must be enabled too, from the administration interface) (0|1)
$enable_delete_all_feature = 0;

// when a record is deleted, delete also the uploaded files related to that record (0|1)
$delete_files_when_delete_record = 1;

// enable export to csv for excel feature (0|1)
$export_to_csv_feature = 1;

// csv separator
$csv_separator = ",";

// set to 0 if you don't want the NULL checkbox in the insert/update form. WARNING: if you set to 0 there is no way to insert a NULL value as a field value of a record
// note that, if the record you are editing contains a NULL value for one or more fields, the NULL checboxes are displayed anyway, even if $null_checkbox is set to 0.
$null_checkbox = 0;

// relative URL from the DaDaBIK root dir to the upload folder; you can leave the default one, remember to put a slash (/) at the end if you change it
$upload_relative_url = 'uploads/';

// absolute path of the upload dir - please put slash (/) at the end
// e.g. 'c:\\data\\web\\dadabik\\uploads\\' on windows systems
// e.g. '/home/my/path/dadabik/uploads/' on unix systems
// make sure the webserver can write in this folder and in the temporary upload folder used by PHP (see php.ini for details)
$upload_directory = '';

// max allowed size for the uploaded files (in bytes)
$max_upload_file_size = 20000000;

// allowed file extensions (users will be able to upload only files having these extensions); you can add new extensions and/or delete the default ones
$allowed_file_exts_ar[0] = 'jpg';
$allowed_file_exts_ar[1] = 'gif';
$allowed_file_exts_ar[2] = 'tif';
$allowed_file_exts_ar[3] = 'tiff';
$allowed_file_exts_ar[4] = 'png';
$allowed_file_exts_ar[5] = 'txt';
$allowed_file_exts_ar[6] = 'rtf';
$allowed_file_exts_ar[7] = 'doc';
$allowed_file_exts_ar[8] = 'xls';
$allowed_file_exts_ar[9] = 'htm';
$allowed_file_exts_ar[10] = 'html';
$allowed_file_exts_ar[11] = 'csv';
$allowed_file_exts_ar[12] = 'pdf';

$allowed_all_files = 0; // set to 1 if you want to allow all extensions, and files without extension too

// items of the menu used to choose the number of result records displayed per page, you can add new numbers and/or delete the default ones
$records_per_page_ar[0] = 10;
$records_per_page_ar[1] = 20;
$records_per_page_ar[2] = 50;
$records_per_page_ar[3] = 100;

// ask confirmation before deleting a record? (0|1)
$ask_confirmation_delete = 1;

// show update and search button also at the top of the form (0|1)
$show_top_buttons = 0;

// maximum number of records to be displayed as duplicated during insert
$number_duplicated_records = 30;

// select similarity percentage for duplicated insert check
$percentage_similarity = 80;

// display the main sql statements of insert/search/edit/detail operations for debugging (0|1)
// note that the insert sql statement is will be displayed only if insert_again_after_insert is set to 1
$display_sql = 0;

// display all the sql statements and the MySQL error messages in case of DB error for debugging (0|1)
$debug_mode = 0;

// display the "I think that x is similar to y......" statement during duplication check (0|1)
$display_is_similar = 0;

// allow the  "and/or" choice directly in the form during the search (0|1)
$select_operator_feature = 1;

// default operator (or/and), if the previous is set to 0
$default_operator = 'and';

// target window for details/edit, 'self' is the same window, 'blank' a new window
$edit_target_window = 'self';

// coloumn at which a text, textarea, password and select_single field will be wrapped in the results page, this value determines also the width of the coloumn in the results table if $word_wrap_fix_width is 1
$word_wrap_col = '25';

// allow that $word_wrap_col value also determines the width of the coloumn in the results table (0|1)
$word_wrap_fix_width = 0;

// always wrap words at the $word_wrap_col column, even if it is necessary to cut them (0|1)
$enable_word_wrap_cut = 1;

// format used to display date fields ('literal_english', 'latin' or 'numeric_english')
// 'literal_english': May 31, 2010
// 'latin': 31-5-2010
// 'numeric_english': 5-31-2010
// note that, depending on your system, you can have problem displaying dates prior to 01-01-1970 or after 19-01-2038 if you use the literal english format; in particular, it is known that this problem affects windows systems
$date_format = 'latin';

// date field separator (divides day, month and year; used only with latin and numeric_english date format)
$date_separator = "-";

// start and end year for date field, used to build the year combo box for date fields
$start_year = 1968;
$end_year = 2015;

// image files to use as icons for delete, edit, details
// you can use both relative or absoulute url here
$delete_icon = 'images/delete.png';
$edit_icon = 'images/edit.png';
$details_icon = 'images/details.png';

// enable results table row highlighting (0|1). Disable it if you don't like it or if your browser doesn't support it
$enable_row_highlighting = 1;

// force the change table control to autosumbit when the user changes the table
$autosumbit_change_table_control = 1;

// choose language ('english', 'italian', 'german', 'dutch', 'spanish', 'french', 'portuguese', 'croatian', 'polish', 'catalan', 'estonian', 'rumanian', 'hungarian', 'slovak', 'swedish' or 'finnish')
$language = 'english';

// choose if, after an insert, want to see again the insert form (1) or not (0)
$insert_again_after_insert = 0;

// prefix to use for the name of the tables created by DaDaBIK
$prefix_internal_table = 'dadabik_'; // you can safety leave this option as is

// alias_prefix
$alias_prefix = '__'; // you can safety leave this option as is

// table_list_name name
$table_list_name = "dadabik_table_list"; // you can safety leave this option as is, you *must* leave this option as is after the installation

// enable_insert_notice_email_sending: when a new record is inserted an e-mail containing the record details will be sent to the addresses below (0|1)
$enable_insert_notice_email_sending = 0;

// set here the recipient addresses of the insert notice e-mail
// Here is an example
// $insert_notice_email_to_recipients_ar[0] = 'my_account_1@my_provider.com';
// $insert_notice_email_to_recipients_ar[1] = 'my_account_2@my_provider.com';
// $insert_notice_email_cc_recipients_ar[0] = 'my_account_3@my_provider.com';
// $insert_notice_email_bcc_recipients_ar[0] = 'my_account_4@my_provider.com';

$insert_notice_email_to_recipients_ar[0] = '';

$insert_notice_email_cc_recipients_ar[0] = '';

// please note that on some PHP versions, probably only on MS Windows, the mail() function doesn't work fine: the messages are not send to the bcc addresses and the bcc addresses are shown in clear!!!
$insert_notice_email_bcc_recipients_ar[0] = '';

// enable_update_notice_email_sending: when a record is updated an e-mail containing the new record details will be sent to the addresses below (0|1)
$enable_update_notice_email_sending = 0;

// set here the recipient addresses of the update notice e-mail
// Here is an example
// $update_notice_email_to_recipients_ar[0] = 'my_account_1@my_provider.com';
// $update_notice_email_to_recipients_ar[1] = 'my_account_2@my_provider.com';
// $update_notice_email_cc_recipients_ar[0] = 'my_account_3@my_provider.com';
// $update_notice_email_bcc_recipients_ar[0] = 'my_account_4@my_provider.com';

$update_notice_email_to_recipients_ar[0] = '';

$update_notice_email_cc_recipients_ar[0] = '';

// please note that on some PHP versions, probably only on MS Windows, the mail() function doesn't work fine: the messages are not send to the bcc addresses and the bcc addresses are shown in clear!!!
$update_notice_email_bcc_recipients_ar[0] = '';

// CSV file creation time limit (in seconds), in order to use it uncomment the line below by removing // and set the number of seconds. This feature makes use of the set_time_limit() function and has no effect when PHP is running in safe mode
//$csv_creation_time_limt = 30;

// the word used to display a NULL content (could also be a blank string '')
$null_word = '';

// advanced configuration settings, you can safety leave the following settings as they are

// the name of the main file of DaDaBIK, you can safety leave this option as is unless you need to rename index.php to something else
$dadabik_main_file = 'index.php';

// the name of the login page of DaDaBIK, you can safety leave this option as is unless you need to rename login.php to something else
$dadabik_login_file = 'login.php';

// prefix of the NULL checkbox name
$null_checkbox_prefix = 'null_value__';

// suffix of the select type (contains, is_null....) listbox
$select_type_select_suffix = '__select_type';

// suffix of the date type year, month and day fields
$year_field_suffix = '__year';
$month_field_suffix = '__month';
$day_field_suffix = '__day';

// htmLawed configuration, you shouldn't change this parameter, changing this parameter can lead to security problems, read documentation for more information
$htmlawed_config = array('safe'=>1, 'deny_attribute'=>'style, class');

// warning: this feature ($enable_sql_logging) doesn't work anymore
$enable_sql_logging = 0;

// choose the correct db library; you shouldn't change this parameter
if ($dbms_type === 'sqlite' || $dbms_type === 'sqlite2'){
	$db_library = 'pdo';
}
else{
	$db_library = 'adodb';
	
	// choose the adodb version according to the php version; you shouldn't change this parameter
	if ((double)phpversion() >= 5.0){
		define("DADABIK_ADODB_VERSION", 5);
	} // end if
	else{
		define("DADABIK_ADODB_VERSION", 4);
	} // end else
}	
?>