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
include ("./include/config.php");

if ($db_library === 'adodb'){
	include('./include/adodb'.DADABIK_ADODB_VERSION.'/adodb.inc.php');
	
	// hack for oracle, all field names fetched in lower case
	if ($dbms_type === 'oci8po') {
		define('ADODB_ASSOC_CASE', 0); 
	} // end if
}

require ("./include/htmlawed/htmLawed.php");
include ("./include/languages/".$language.".php");
include ("./include/functions.php");
include ("./include/common_start.php");
include ("./include/check_installation.php");
include ("./include/check_login.php");
include ("./include/check_table.php");

// HTTP Variables:
/***************** GET ***************************
***************************************************/
// link export_to_csv, set to 1
if (isset($_GET["export_to_csv"])){
	$export_to_csv = $_GET["export_to_csv"];
} // end if

// flag, set to 1 means we are going to perform the $function on an items table
// edit, details, insert item, delete and delete all links of an items table
if (isset($_GET['is_items_table'])) {
	$is_items_table = (int)$_GET['is_items_table'];
} // end if

// flag, set to 1 means to store where_clause, order, page, records_per_page etc info in session for the items table and not for the main one
// navigation bar, order, records_per_page form
if (isset($_GET['store_session_table_infos_for_items_table'])) {
	$store_session_table_infos_for_items_table = (int)$_GET['store_session_table_infos_for_items_table'];
} // end if

// the name of the master table
// edit, details, insert item, delete and delete all links of an items table
if (isset($_GET['master_table_name'])) {
	$master_table_name = $_GET['master_table_name'];
} // end if

// the name of the master table function (edit or details)
// edit, details, insert item, delete and delete all links of an items table
if (isset($_GET['master_table_function'])) {
	$master_table_function = $_GET['master_table_function'];
} // end if

// the name of the master table where field
// edit, details, insert item, delete and delete all links of an items table
if (isset($_GET['master_table_where_field'])) {
	$master_table_where_field = $_GET['master_table_where_field'];
} // end if

// the name of the master table where value
// edit, details, insert item, delete and delete all links of an items table
if (isset($_GET['master_table_where_value'])) {
	$master_table_where_value = $_GET['master_table_where_value'];
} // end if

if (isset($store_session_table_infos_for_items_table) and $store_session_table_infos_for_items_table === 1) {

	// the name of the items table I wrote about just above
	// navigation bar, order, records_per_page form of an items table
	if (isset($_GET['items_table_name'])) {
		$items_table_name = $_GET['items_table_name'];

		$info_to_store_table_name = $items_table_name;
	} // end if

} // end if
else {
	$info_to_store_table_name = $table_name;
} // end else

// I keep in session where_clause, page, order and order_by in order to save a results view, even if a change table

// contains the where clause, without limit and order e.g. "field = 'value'" (all url encoded)
// navigation bar, order, delete and delete all links, export to csv, show_all link, check existing mail
// why strepslashes? The first time $where_clause is calculated from build_where_clause, and it's ok because all the field contents come from POST with slashes, so when I pass it through links new slashes are added and I have to strip them
if (isset($_GET["where_clause"])){
	$where_clause = stripslashes($_GET["where_clause"]);
	$_SESSION['where_clause_'.$info_to_store_table_name] = $where_clause;
} // end if
elseif (isset($_SESSION['where_clause_'.$info_to_store_table_name])){
	$where_clause = $_SESSION['where_clause_'.$info_to_store_table_name];
} // end if

// the current page in records results (0......n)
// navigation bar, order, delete and delete all links, export to csv, show_all link
if (isset($_GET["page"])){
	$page = $_GET["page"];
	$_SESSION['page_'.$info_to_store_table_name] = $page;
} // end if
elseif (isset($_SESSION['page_'.$info_to_store_table_name])){
	$page = $_SESSION['page_'.$info_to_store_table_name];
} // end if

// the field used to order the results
// navigation bar, order, delete and delete all links, export to csv
// why strepslashes? The first time $order is calculated in the code, so when I pass it through links new slashes are added if the field name contains quotes and I have to strip them
if (isset($_GET["order"])){
	$order = stripslashes($_GET["order"]);
	$_SESSION['order_'.$info_to_store_table_name] = $order;
} // end
elseif (isset($_SESSION['order_'.$info_to_store_table_name])){
	$order = $_SESSION['order_'.$info_to_store_table_name];
} // end if

// the order type ('ASC'|'DESC')
// navigation bar, order, delete and delete all links, export to csv
if (isset($_GET["order_type"])){
	$order_type = $_GET["order_type"];
	$_SESSION['order_type_'.$info_to_store_table_name] = $order_type;
} // end
elseif (isset($_SESSION['order_type_'.$info_to_store_table_name])){
	$order_type = $_SESSION['order_type_'.$info_to_store_table_name];
} // end if

// the number of result records to be displayed in a page
// records_per_page listbox
if (isset($_GET["records_per_page"])){ // the user set a new value from the listbox
	$records_per_page = (int)$_GET["records_per_page"];
	$_SESSION['records_per_page_'.$info_to_store_table_name] = $records_per_page;
} // end
elseif (isset($_SESSION['records_per_page_'.$info_to_store_table_name])){ // otherwise use the value saved for this table
	$records_per_page = $_SESSION['records_per_page_'.$info_to_store_table_name];
} // end if
else{ // otherwise (first time the table is accessed or session expired) use the first value of the listbox
	$records_per_page = $records_per_page_ar[0];
} // end else

// set to 1 when the user click on "show all"
// show_all link (footer.php)
// why isset()? All variables should be set because if empty_search_variables the user comes from a show results page, but could ben unset if the session has expired
if (isset($_GET['empty_search_variables'])){
	$empty_search_variables = $_GET['empty_search_variables'];
}
if (isset($empty_search_variables) && (int)$empty_search_variables === 1) {
	if (isset($where_clause)) {
		unset($where_clause);
	} // end if
	if (isset($page)) {
		unset($page);
	} // end if
	if (isset($order)) {
		unset($order);
	} // end if
	if (isset($order_type)) {
		unset($order_type);
	} // end if
} // end if

// the function of this page I wanto to execute ('edit'|'delete'|'search'....)
// navigation bar, order, edit, detail, delete and delete all links, export to csv, bottom links, insert/edit/search form, insert_duplication form
if (isset($_GET["function"])){ // from the homepage
	$function = $_GET["function"];
} // end
else{
	$function = "search";
} // end else

// the function ('edit'|'delete') from which the user click on previous/next buttons
// previous/next links
if (isset($_GET["from_function"])){
	$from_function = $_GET["from_function"];
} // end

// the field used to identify a single record in edit, delete and detail functions
// edit, delete, detail links, edit form
if (isset($_GET["where_field"])){
	$where_field = $_GET["where_field"];
} // end if

// the value (of where_field) used to identify a single record in edit, delete and detail functions
// edit, delete, detail links, edit form
if (isset($_GET["where_value"])){
	$where_value = $_GET["where_value"];
} // end if

// set to 1 when a research has been just executed
// from the search form
if (isset($_GET["execute_search"])){
	$execute_search = $_GET["execute_search"];
} // end if

// set to 1 after an update
// redirect after update
if (isset($_GET["just_updated"])){
	$just_updated = $_GET["just_updated"];
} // end if

// set to 1 after an update with no authorization
// update case
if (isset($_GET["just_updated_no_authorization"])){
	$just_updated_no_authorization = $_GET["just_updated_no_authorization"];
} // end if

// set to 1 after a delete with no authorization
// delete case
if (isset($_GET["just_delete_no_authorization"])){
	$just_delete_no_authorization = $_GET["just_delete_no_authorization"];
} // end if

// set to 1 after an insert
// redirect after insert
if (isset($_GET["just_inserted"])){
	$just_inserted = $_GET["just_inserted"];
} // end if

// set to 1 after a delete multiple with authentication enabled
// redirect after delete_all
if (isset($_GET["just_delete_all_authorizated"])){
	$just_delete_all_authorizated = $_GET["just_delete_all_authorizated"];
} // end if

// set to 1 after a next record on the last one
// redirect after choose_next_record
if (isset($_GET["just_next_record_on_last_one"])){
	$just_next_record_on_last_one = (int)$_GET["just_next_record_on_last_one"];
} // end if

// set to 1 after a previous record on the first one
// redirect after choose_previous_record
if (isset($_GET["just_previous_record_on_first_one"])){
	$just_previous_record_on_first_one = (int)$_GET["just_previous_record_on_first_one"];
} // end if

// from index.php: when the user want to check an existing mailing, set 0 because I don't want to show the add to mailing form below the results table. Otherwise I set it to 1
if (isset($_GET['show_add_to_mailing_form'])) {
	$show_add_to_mailing_form = (int)$_GET['show_add_to_mailing_form'];
} // end if
else {
	$show_add_to_mailing_form = 1;
} // end else

// insert_duplication_form, set to 1 if the user want to insert anyway
if (isset($_GET["insert_duplication"])){
	$insert_duplication = $_GET["insert_duplication"];
} // end if

// set to 1 when I want to set a default value for a field for the insert form
// insert link of an items table
if (isset($_GET["set_field_default_value"])){
	$set_field_default_value = (int)$_GET["set_field_default_value"];
} // end if

// field name for the default value
// insert link of an items table
if (isset($_GET["default_value_field_name"])){
	$default_value_field_name = $_GET["default_value_field_name"];
} // end if

// deafult value I want to set
// insert link of an items table
if (isset($_GET["default_value"])){
	$default_value = $_GET["default_value"];
} // end if

/***************** POST ***************************
All the field contents come from POST, and I use them directly ($_POST)


***************************************************/
$page_name = 'main';

include ("./include/header.php");

$action = $dadabik_main_file;


// get the array containg label ant other information about the fields
$fields_labels_ar = build_fields_labels_array($table_internal_name, "1");


switch($function){
	case "insert":
		if ($enable_insert == "1") {
//			if (!isset($insert_duplication) || $insert_duplication != '1'){ // otherwise would be checked for two times
				// check values
				$check = 0;
				//$check = check_required_fields($_POST, $fields_labels_ar);
				$check = check_required_fields($_POST, $_FILES, $fields_labels_ar, $function);
				if ($check == 0){
					txt_out($normal_messages_ar["required_fields_missed"], "error_messages_form");
				} // end if ($check == 0)
				else{ // required fields are ok
					// check field lengths
					$check = 0;
					$check = check_length_fields($_POST, $fields_labels_ar);
					if ($check == 0){
						txt_out($normal_messages_ar["fields_max_length"], "error_messages_form");
					} // end if ($check == 0)
					else{ // fields length are ok
						$check = 0;
						$content_error_type = "";
						$check = check_fields_types($_POST, $fields_labels_ar, $content_error_type);
						if ($check == 0){
							txt_out($normal_messages_ar["{$content_error_type}_not_valid"], "error_messages_form");
						} // end if ($check == 0)
						else{ // type field are ok
							$check = 0;
							$check = write_temp_uploaded_files($_FILES, $fields_labels_ar);
							if ($check == 0){
								//Need to add the reason why the upload failed: file too large, improper filename (such as a .php file), or the file couldn't be found.
								txt_out($error_messages_ar["upload_error"], "error_messages_form");
							} // end if ($check == 0)
							else{ // uploaded files are ok
								if (!isset($insert_duplication) || $insert_duplication != '1'){
									// check for duplicated insert in the database
									$sql = build_select_duplicated_query($_POST, $table_name, $fields_labels_ar, $string1_similar_ar, $string2_similar_ar);

									if ($sql != ""){ // if there are some duplication
										$check = 0;
										txt_out("<h3>".$normal_messages_ar["duplication_possible"]."</h3>");
										if ($display_is_similar == 1){
											for ($i=0; $i<count($string1_similar_ar); $i++){
												txt_out("<br>");
												txt_out($normal_messages_ar["i_think_that"]);
												txt_out($string1_similar_ar[$i]);
												txt_out($normal_messages_ar["is_similar_to"]);
												txt_out($string2_similar_ar[$i]);
											} // end for
										} // end if ($display_is_similar == 1)
												
										txt_out("<br>");
										
										display_sql($sql);
										// execute the select query
										//$res_records = execute_db($sql, $conn);
										$res_records = execute_db_limit($sql, $conn, $number_duplicated_records, 0);

										$results_type = "possible_duplication";
										$where_clause = ""; // I don't need it here, I've just a fixed number of results.

										$results_table = build_results_table($fields_labels_ar, $table_name, $res_records, $results_type, "", "", $action, $where_clause, "", "", "", "", "", "", "", 0);

										txt_out ($normal_messages_ar["similar_records"]);

										$insert_duplication_form = build_insert_duplication_form($_POST, $fields_labels_ar, $table_name, $table_internal_name);

										echo $insert_duplication_form;
										echo $results_table;
									} // end if
								} // end if
								if ($check === 1){
									
									// insert a new record
									insert_record($_FILES, $_POST, $fields_labels_ar, $table_name, $table_internal_name);

									if ($enable_insert_notice_email_sending === 1) {

										$unique_field_name = get_unique_field_db($table_name);

										$last_inserted_ID = get_last_ID_db();

										if (isset($unique_field_name) && $unique_field_name !== '' && isset($last_inserted_ID) && $last_inserted_ID !== false) {


											$sql = build_select_part($fields_labels_ar, $table_name);

											$sql .= " WHERE ".$quote.$table_name.$quote.".".$quote.$unique_field_name.$quote." = '".$last_inserted_ID."'";

											// execute the select query
											$res_details = execute_db($sql, $conn);
											
											// build the insert notice message
											$insert_notice_email = build_insert_update_notice_email_record_details($fields_labels_ar, $res_details);

											$to_addresses = '';
											$cc_addresses = '';
											$bcc_addresses = '';

											foreach ($insert_notice_email_to_recipients_ar as $insert_notice_email_to_recipient){
												$to_addresses .= $insert_notice_email_to_recipient.', ';
											} // end foreach

											$to_addresses = substr($to_addresses, 0, -2); // delete the last ', '

											foreach ($insert_notice_email_cc_recipients_ar as $insert_notice_email_cc_recipient){
												$cc_addresses .= $insert_notice_email_cc_recipient.', ';
											} // end foreach

											$cc_addresses = substr($cc_addresses, 0, -2); // delete the last ', '

											foreach ($insert_notice_email_bcc_recipients_ar as $insert_notice_email_bcc_recipient){
												$bcc_addresses .= $insert_notice_email_bcc_recipient.', ';
											} // end foreach

											$bcc_addresses = substr($bcc_addresses, 0, -2); // delete the last ', '

											$additional_headers = '';

											if ($cc_addresses != '') {
												$additional_headers .= "Cc:".$cc_addresses."\n";
											} // end if

											if ($bcc_addresses != '') {
												$additional_headers .= "Bcc:".$bcc_addresses;
											} // end if

											mail($to_addresses, $db_name.' - '.$table_name.' - '.$normal_messages_ar['new_insert_executed'], $insert_notice_email, $additional_headers);
											
											
										} // end if
									} // end if

									

									if ($insert_again_after_insert == 1) {
										//txt_out("<p>".$normal_messages_ar["insert_result"]);
										txt_out($normal_messages_ar["record_inserted"]);

										txt_out("<h3>".$normal_messages_ar["insert_record"]."</h3>");

										$form_type = "insert";
										$res_details = "";

										// re-get the array containg label ant other information about the fields, could be changed in the insert (other choices......)
										$fields_labels_ar = build_fields_labels_array($table_internal_name, "1");

										$show_insert_form_after_error = 0;
										$show_edit_form_after_error = 0;

										if (!isset($master_table_name)) {
											$master_table_name = '';
										} // end if

										if (!isset($master_table_function)) {
											$master_table_function = '';
										} // end if

										if (!isset($master_table_where_field)) {
											$master_table_where_field = '';
										} // end if

										if (!isset($master_table_where_value)) {
											$master_table_where_value = '';
										} // end if

										if (!isset($is_items_table)) {
											$is_items_table = 0;
										} // end if

										if (!isset($set_field_default_value)) {
											$set_field_default_value = 0;
										} // end if

										if (!isset($default_value_field_name)) {
											$default_value_field_name = '';
										} // end if

										if (!isset($default_value)) {
											$default_value = '';
										} // end if

										if (isset($is_items_table) && $is_items_table === 1) {// it's an insert form of a record of an items table, we need a link to go back to the master table record
											txt_out('<p><a href="'.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value).'">'.$normal_messages_ar["back_to_the_main_table"].'</a></p>');
										} // end if

										// display the form
										$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, "", "", $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table, $set_field_default_value, $default_value_field_name, $default_value);
										echo $form;
									} // end if
									else{
										$unique_field_name = get_unique_field_db($table_name);

										if (isset($is_items_table) && $is_items_table === 1) { // insert of a record from an item table, after the insert we need to redirect to the edit/detil of a the master table
											$location_url = $site_url.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value);
										} // end if
										else {
											$location_url=$site_url.$dadabik_main_file.'?table_name='.urlencode($table_name).'&function=search&where_clause=&page=0&just_inserted=1';
											if ($unique_field_name != '') {
												$location_url .= '&order='.$unique_field_name.'&order_type=desc';
											} // end if
										} // end else
										

										header('Location: '.$location_url);

									} // end else
								} // end if
							} // end else
						} // end else
					} // end else
				} // end else
				if ($check === 0) {
					txt_out("<h3>".$normal_messages_ar["insert_record"]."</h3>");
					$form_type = "insert";
					$res_details = "";

					$show_insert_form_after_error = 1;
					$show_edit_form_after_error = 1;

					if (!isset($master_table_name)) {
						$master_table_name = '';
					} // end if

					if (!isset($master_table_function)) {
						$master_table_function = '';
					} // end if

					if (!isset($master_table_where_field)) {
						$master_table_where_field = '';
					} // end if

					if (!isset($master_table_where_value)) {
						$master_table_where_value = '';
					} // end if

					if (!isset($is_items_table)) {
						$is_items_table = 0;
					} // end if

					if (!isset($set_field_default_value)) {
						$set_field_default_value = 0;
					} // end if

					if (!isset($default_value_field_name)) {
						$default_value_field_name = '';
					} // end if

					if (!isset($default_value)) {
						$default_value = '';
					} // end if

					if (isset($is_items_table) && $is_items_table === 1) {// it's an insert form of a record of an items table, we need a link to go back to the master table record
						txt_out('<p><a href="'.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value).'">'.$normal_messages_ar["back_to_the_main_table"].'</a></p>');
					} // end if

					// display the form
					$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, "", "", $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table, $set_field_default_value, $default_value_field_name, $default_value);
					echo $form;
				} // end if
//			} // end if (!isset($insert_duplication) || $insert_duplication != '1')
/*
			else{  // $insert_duplication == "1"
				// insert a new record
				insert_record($_FILES, $_POST, $fields_labels_ar, $table_name, $table_internal_name);

				if ($insert_again_after_insert == 1) {
					txt_out("<p>".$normal_messages_ar["insert_result"]);
					txt_out($normal_messages_ar["record_inserted"]);

					txt_out("<h3>".$normal_messages_ar["insert_record"]."</h3>");

					$form_type = "insert";
					$res_details = "";

					// re-get the array containg label ant other information about the fields, could be changed in the insert (other choices......)
					$fields_labels_ar = build_fields_labels_array($table_internal_name, "1");

					// display the form
					$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, "", "");
					echo $form;
				} // end if
				else{
					$unique_field_name = get_unique_field($table_name);
					$location_url=$site_url.'form.php?table_name='.urlencode($table_name).'&function=search&where_clause=&page=0&just_inserted=1';
					if ($unique_field_name != '') {
						$location_url .= '&order='.$unique_field_name.'&order_type=desc';
					} // end if

					header('Location: '.$location_url);
				} // end else
				
			} // end else
			*/
		} // end if
		break;
	case "search":

		// $page if index.php is called without parameters (the first time DaDaBIK is launched)
		if (!isset($page)) {
			$page = 0;
			$_SESSION['page_'.$table_name] = $page;
		} // end if

		// build the select query
		if (isset($execute_search) && $execute_search === '1'){ // it's a search result, the user has just filled the search form, so we have to build the select query
		//if (!isset($where_clause)){ // it's a search result, the user has just filled the search form, so we have to build the select query
			$where_clause = build_where_clause($_POST, $fields_labels_ar, $table_name);
			$page = 0;
			$_SESSION['page_'.$table_name] = $page;
		} // end if
		elseif (!isset($where_clause)) { // when I call index for the first time
			$where_clause = '';
		} // end else

		// save the where_clause without the user part to pass 
		$where_clause_to_pass = $where_clause;

		$_SESSION['where_clause_'.$table_name] = $where_clause;

		if ($enable_authentication === 1 && $enable_browse_authorization === 1) { // $ID_user_field_name = '$current_user' where clause part in order to select only the records the current user owns
			$ID_user_field_name = get_ID_user_field_name($fields_labels_ar);

			if ($ID_user_field_name !== false) { // no ID_user fields available, don't use authorization
				if ($where_clause === '') {
					$where_clause = $quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
				} // end if
				else {
					//$where_clause .= " AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
					$where_clause = "(".$where_clause.") AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
				} // end else
			} // end if

		} // end if
		
		//$sql = "SELECT * FROM ".$quote.$table_name.$quote;
		
		$sql = build_select_part($fields_labels_ar, $table_name);

		if ($where_clause != ""){
			$sql .= " WHERE ".$where_clause;
		} // end if
		// execute the select without limit query to get the number of results
		$res_records_without_limit = execute_db($sql, $conn);

		$select_without_limit = $sql; // I save it because I need it to pass it to build_add_to_mailing_form

		$results_number = get_num_rows_db($res_records_without_limit); // get the number of results

		if ($results_number > 0){ // at least one record found

			$pages_number = get_pages_number($results_number, $records_per_page); // get the total number of pages

			if(isset($export_to_csv) && $export_to_csv == 1 && $export_to_csv_feature == 1) {
				if (isset($csv_creation_time_limt)) {
					set_time_limit($csv_creation_time_limt);
				} // end if
				
				$csv = build_csv($res_records_without_limit, $fields_labels_ar);
				//exit;

				ob_end_clean();
				//header('Content-Type: application/vnd.ms-excel');
				header("Content-Type: text/x-csv");
				header('Content-Disposition: attachment; filename="'.$table_name.'.csv"');
				//header('Content-Type: application/octet-stream');
					
				echo $csv;
				exit;
			} // end if
			
			if (!isset($order)){
				/*
				$order = '';
				if ($fields_labels_ar[0]["primary_key_field_field"] !== ''){
					$linked_fields_ar = explode($fields_labels_ar[$i]['separator_field'], $fields_labels_ar[0]['linked_fields_field']);
					foreach ($linked_fields_ar as $linked_field){
						$order .= $fields_labels_ar[0]['primary_key_table_field'].'.'.$linked_field.'~';
					} //end foreach
					$order = substr($order, 0, -1); // deleter the last '~'
				} // end if
				else{
					$order .= $table_name.'.'.$fields_labels_ar[0]["name_field"];
				} // end else
				*/
				// get the first field present in the results form as order
				$count_temp = 0;
				$fields_labels_ar_count = count($fields_labels_ar);
				while (!isset($order) && $count_temp < $fields_labels_ar_count) {
					if ($fields_labels_ar[$count_temp]["present_results_search_field"] === '1') {
						$order = $fields_labels_ar[$count_temp]["name_field"];
					} // end if
					$count_temp++;
				} // end while
				if (!isset($order)) { // if no fields are present in the results form, just use the first field as order, the form wiil be empty, this is just to prevent error messages when composing the sql query
					$order = $fields_labels_ar[0]["name_field"];
				} // end if
			} // end if

			$_SESSION['order_'.$table_name] = $order;

			if (!isset($order_type)){
				$order_type = "ASC";
				$_SESSION['order_type_'.$table_name] = $order_type;
			} // end if

			if ($page > ($pages_number-1)) {
				$page = $pages_number-1;
			} // end if
			
			$sql .= " ORDER BY ";

			// get the index of $fields_labels_ar corresponding to a field
			$count_temp = 0;
			foreach ($fields_labels_ar as $field){
				if ($field['name_field'] === $order){
					$field_index = $count_temp;
					break;
				} // end if
				$count_temp++;
			} // end foreach
			
			if ($fields_labels_ar[$field_index]["primary_key_field_field"] !== '' && $fields_labels_ar[$field_index]["primary_key_field_field"] !== NULL){

				$linked_fields_ar = explode($fields_labels_ar[$field_index]['separator_field'], $fields_labels_ar[$field_index]['linked_fields_field']);
				$is_first = 1;
				foreach ($linked_fields_ar as $linked_field){
					//$sql .= $quote.$fields_labels_ar[$field_index]['primary_key_table_field'].$alias_prefix.$fields_labels_ar[$field_index]['alias_suffix_field'].$quote.'.'.$quote.$linked_field.$alias_prefix.$fields_labels_ar[$field_index]['alias_suffix_field'].$quote;
					////*$sql .= $quote.$linked_field.$alias_prefix.$fields_labels_ar[$field_index]['alias_suffix_field'].$quote;
					$sql .= $quote.$fields_labels_ar[$field_index]['primary_key_table_field'].$alias_prefix.$linked_field.$alias_prefix.$fields_labels_ar[$field_index]['alias_suffix_field'].$quote;
					

					if ($is_first === 1){ // add the order type just to the first field e.g. order by field_1 DESC, field_2, field_3
						$sql .= ' '.$order_type;
						$is_first = 0;
					} // end if
					$sql .= ', ';
				} //end foreach
				$sql = substr($sql, 0, -2); // deleter the last ', '
			} // end if
			else{
				//$sql .= $table_name.'.'.$fields_labels_ar[$field_index]["name_field"];
				$sql .= $quote.$table_name.$quote.'.'.$quote.$fields_labels_ar[$field_index]["name_field"].$quote;
				$sql .= ' '.$order_type;
			} // end else
			
			// add limit clause
			/* 4.0 */
			//$sql .= " LIMIT ".$page*$records_per_page." , ".$records_per_page;

			// execute the select query
			/* 4.0 */
			//$res_records = execute_db($sql, $conn);
			$res_records = execute_db_limit($sql, $conn, $records_per_page, $page*$records_per_page);
			

			if (isset($just_inserted) && $just_inserted == "1") {
				//txt_out("<p>".$normal_messages_ar["insert_result"]);
				txt_out('<p>'.$normal_messages_ar["record_inserted"]);
			} // end if

			if (isset($just_delete_all_authorizated) && $just_delete_all_authorizated == "1" && $enable_browse_authorization === 0) {
				txt_out('<p>'.$error_messages_ar["deleted_only_authorizated_records"]);
			} // end if

			if (isset($just_delete_no_authorization) && $just_delete_no_authorization == "1") {
				txt_out('<p>'.$error_messages_ar["no_authorization_update_delete"]);
			} // end if

			display_sql($sql);
			
			
			
			
			txt_out("<br>".$results_number." ".$normal_messages_ar["records_found"], "n_results_found");

			// get the number of records in the current table
			$sql = "SELECT COUNT(*) FROM ".$quote.$table_name.$quote;

			if ($enable_authentication === 1 && $enable_browse_authorization === 1) { // $ID_user_field_name = '$_SESSION['logged_user_infos_ar']['username_user']' where clause part in order to select only the records the current user owns
				$ID_user_field_name = get_ID_user_field_name($fields_labels_ar);

				if ($ID_user_field_name !== false) { // no ID_user fields available, don't use authorization
					$sql .= " WHERE ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($_SESSION['logged_user_infos_ar']['username_user'])."'";
				} // end if

			} // end if

			// execute the select query
			$res_count = execute_db($sql, $conn);

			while ($count_row = fetch_row_db($res_count)){
				$records_number = $count_row[0];
			} // end while

			txt_out('&nbsp;&nbsp;('.$normal_messages_ar["total_records"].':'.$records_number.')', 'total_records');

			if ($enable_delete == "1" && $enable_delete_all_feature === 1) {
				echo " <a class=\"onlyscreen\" onclick=\"if (!confirm('".$normal_messages_ar['confirm_delete?']."')){ return false;}else if (!confirm('".$normal_messages_ar['really?']."')){ return false;}\" href=\"".$action."?table_name=". urlencode($table_name)."&function=delete_all&where_clause=".urlencode($where_clause_to_pass)."&page=".$page."&order=".urlencode($order)."&order_type=".$order_type."\">".$normal_messages_ar['delete_all']."</a>";
			} // end if

			if ($results_number > $records_per_page){ // display the navigation bar

				txt_out ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class=\"page_n_of_m\">".$normal_messages_ar["page"].($page+1).$normal_messages_ar["of"].$pages_number."</font>"); // "Page n of x" statement

				// build the navigation tool
				$navigation_tool = build_navigation_tool($where_clause_to_pass, $pages_number, $page, $action, "", $order, $order_type, '', '', '', '', 0);

				// display the navigation tool
				echo "&nbsp;&nbsp;&nbsp;&nbsp;".$navigation_tool."<br><br>";
			} // end if ($results_number > $records_per_page)

			$change_table_form = build_change_table_form();

			$records_per_page_form = build_records_per_page_form($records_per_page, $table_name, "", "", "", "", 0);

			if ($change_table_form != ""){ // if there is more than one table to manage
				txt_out('<table><tr><td>'.$change_table_form.'</td><td>'.$records_per_page_form.'</td></tr></table>');
			} // end if
			else {
				txt_out($records_per_page_form);
			} // end else

			$results_type = "search";

			// build the HTML results table
			$results_table = build_results_table($fields_labels_ar, $table_name, $res_records, $results_type, "", "", $action, $where_clause_to_pass, $page, $order, $order_type, "", "", "", "", 0);

			echo $results_table;

			if ( $export_to_csv_feature == 1) {
				echo "<p><br></p><a href=\"".$action."?table_name=". urlencode($table_name)."&function=".$function."&where_clause=".urlencode($where_clause_to_pass)."&page=".$page."&order=".urlencode($order)."&order_type=".$order_type."&export_to_csv=1\">";

				txt_out ('<img width="46" height="39" border="0" src="images/download.png" align="middle">'.$normal_messages_ar["export_to_csv"]."</a>", "export_to_csv");

				echo "</a>";
			}

			if (isset($mail_feature) && $mail_feature == 1 && $show_add_to_mailing_form === 1){ // e-mail feature activated & show_add_to_mailing_form enabled

				$sql = "select name_mailing from mailing_tab where sent_mailing = '0' order by date_created_mailing desc";
				
				// execute the query
				$res_mailing = execute_db($sql, $conn);
				if (get_num_rows_db($res_mailing) > 0){ // at least one mailing created
					$add_to_mailing_form = build_add_to_mailing_form($res_mailing, $select_without_limit, $results_number);
					txt_out("<br><table><tr><td>".$add_to_mailing_form."</td><td valign=\"top\">".$normal_messages_ar["all_records_found"]."</td></tr></table>");
				} // end if
			} // end if
		} // end if
		else{
			display_sql($sql);

			$change_table_form = build_change_table_form();

			if ($change_table_form != ""){ // if there is more than one table to manage
				txt_out('<table><tr><td>'.$change_table_form.'</td></tr></table>');
			} // end if
			
			txt_out($normal_messages_ar["no_records_found"]);
		} // end else
		break;
	case "details":
		if ($enable_details == "1" && ($enable_authentication === 0 || $enable_browse_authorization === 0 || current_user_is_owner($where_field, $where_value, $table_name, $fields_labels_ar))){
			// build the details select query
			//$sql = "select * from ".$quote.$table_name.$quote." where ".$quote.$where_field.$quote." = '".$where_value."'";

			$sql = build_select_part($fields_labels_ar, $table_name);

			//$sql .= " where ".$quote.$table_name.$quote.'.'.$quote.$where_field.$quote." = '".$where_value."' LIMIT 1";
			$sql .= " where ".$quote.$table_name.$quote.'.'.$quote.$where_field.$quote." = '".$where_value."'";

			if (isset($just_next_record_on_last_one) && $just_next_record_on_last_one === 1) {
				txt_out("<p>".$error_messages_ar["this_record_is_the_last_one"]."</p>");
			} // end if

			if (isset($just_previous_record_on_first_one) && $just_previous_record_on_first_one === 1) {
				txt_out("<p>".$error_messages_ar["this_record_is_the_first_one"]."</p>");
			} // end if
			
			display_sql($sql);

			txt_out("<h3>".$normal_messages_ar["details_of_record"]."</h3>");

			if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need to pass over the variables (master_table_name, master_table_function etc...) needed to go back to the master table
				txt_out('<p><a class="previous_next" href="'.$dadabik_main_file.'?function=choose_previous_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1">&lt;&lt; '.$normal_messages_ar['previous'].'</a>&nbsp;&nbsp;&nbsp;<a class="previous_next" href="'.$dadabik_main_file.'?function=choose_next_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1">'.$normal_messages_ar['next'].' &gt;&gt;</a></p>');
			} // end if
			else {
				txt_out('<p><a class="previous_next" href="'.$dadabik_main_file.'?function=choose_previous_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'">&lt;&lt; '.$normal_messages_ar['previous'].'</a>&nbsp;&nbsp;&nbsp;<a class="previous_next" href="'.$dadabik_main_file.'?function=choose_next_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'">'.$normal_messages_ar['next'].' &gt;&gt;</a></p>');
			} // end else

			// execute the select query
			$res_details = execute_db("$sql", $conn);

			if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need a link to go back to the master table record
				txt_out('<p><a href="'.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value).'">'.$normal_messages_ar["back_to_the_main_table"].'</a></p>');

				$table_name = $master_table_name; // assign to $table_name the master table name, this is useful for the footer
			} // end if

			// build the HTML details table
			$details_table = build_details_table($fields_labels_ar, $res_details);
			
			// display the HTML details table
			echo $details_table;
		} // end if
		else {
			txt_out("<p>".$error_messages_ar["no_authorization_view"]."</p>");
		} // end else
		break;
	case "edit":
		if ($enable_edit == "1" && ($enable_authentication === 0 || $enable_browse_authorization === 0 || current_user_is_owner($where_field, $where_value, $table_name, $fields_labels_ar))){

			if (isset($just_updated) && $just_updated == "1") {
				//txt_out("<h3>".$normal_messages_ar["update_result"]."</h3>");
				txt_out("<p>".$normal_messages_ar["record_updated"]."</p>");
			}

			if (isset($just_updated_no_authorization) && $just_updated_no_authorization == "1") {
				txt_out("<p>".$error_messages_ar["no_authorization_update_delete"]."</p>");
			}

			if (isset($just_next_record_on_last_one) && $just_next_record_on_last_one === 1) {
				txt_out("<p>".$error_messages_ar["this_record_is_the_last_one"]."</p>");
			} // end if

			if (isset($just_previous_record_on_first_one) && $just_previous_record_on_first_one === 1) {
				txt_out("<p>".$error_messages_ar["this_record_is_the_first_one"]."</p>");
			} // end if

			// build the details select query
			$sql = "select * from ".$quote.$table_name.$quote." where ".$quote.$table_name.$quote.'.'.$quote.$where_field.$quote." = '".$where_value."'";

			display_sql($sql);
			
			$sql_details_backup = $sql;
			
			txt_out("<h3>".$normal_messages_ar["edit_record"]."</h3>");

			if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need to pass over the variables (master_table_name, master_table_function etc...) needed to go back to the master table
				txt_out('<p><a class="previous_next" href="'.$dadabik_main_file.'?function=choose_previous_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1">&lt;&lt; '.$normal_messages_ar['previous'].'</a>&nbsp;&nbsp;&nbsp;<a class="previous_next" href="'.$dadabik_main_file.'?function=choose_next_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1">'.$normal_messages_ar['next'].' &gt;&gt;</a></p>');
			} // end if
			else {
				txt_out('<p><a class="previous_next" href="'.$dadabik_main_file.'?function=choose_previous_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'">&lt;&lt; '.$normal_messages_ar['previous'].'</a>&nbsp;&nbsp;&nbsp;<a class="previous_next" href="'.$dadabik_main_file.'?function=choose_next_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'">'.$normal_messages_ar['next'].' &gt;&gt;</a></p>');
			} // end else

			// execute the select query
			$res_details = execute_db($sql, $conn);
			
			$form_type = "update";

			$show_insert_form_after_error = 0;
			$show_edit_form_after_error = 0;

			if (isset($is_items_table) && $is_items_table === 1) {// it's an edit of a record of an items table, we need a link to go back to the master table record
				txt_out('<p><a href="'.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value).'">'.$normal_messages_ar["back_to_the_main_table"].'</a>');

				// display the form
				$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, $where_field, $where_value, $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table, 0 , '', '');

				$table_name = $master_table_name; // assign to $table_name the master table name, this is useful for the footer
			} // end if
			else {
				// display the form
				$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, $where_field, $where_value, $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, '', '', '' , '', 0, 0, '', '');
			} // end else
			
			if (is_array($form)) { // means there was an error during form creation
				switch($form['type']){
					case 'build_date_select':
						txt_out("<p>".$error_messages_ar["date_not_representable"]." ".$form['value']."</p>");
						break;
				}
			}
			else{

				echo $form;

				reset($fields_labels_ar);
				foreach($fields_labels_ar as $field_label){ // for each field of this table
	
					if ($field_label['items_table_names_field'] !== '') { // there are linked item tables
	
						$master_table_name = $table_name;
						$master_table_function = $function;
						$master_table_where_field = $where_field;
						$master_table_where_value = $where_value;
						$is_items_table = 1;
						
						$items_table_names_ar = explode($field_label['separator_field'], $field_label['items_table_names_field']); // build an array containing the linked items table names
	
						$items_table_fk_field_names_ar = explode($field_label['separator_field'], $field_label['items_table_fk_field_names_field']); // build an array containing the linked items table foreign key field names
	
						$linked_tables_count = 0;
	
						foreach ($items_table_names_ar as $items_table_name){ // for each linked table
	
							// go back to the first (and only record) of the edit recordset and fetch again, this is useful later when we need the default value
							
							if ($db_library === 'adodb'){
								$res_details->MoveFirst();
							}
							else{
								$res_details = execute_db($sql_details_backup, $conn);
							}
							
							$details_row = fetch_row_db($res_details);
	
							// re-assign table name and internal table name for this items result view
							$table_name = $items_table_name;
							$table_internal_name = $prefix_internal_table.$table_name;
	
							$items_table_fk_field_name = $items_table_fk_field_names_ar[$linked_tables_count];
	
							$linked_tables_count++;
	
							// get the values stored for this items table
	
							if (isset($where_clause)) {
								unset($where_clause);
							} // end if
							if (isset($page)) {
								unset($page);
							} // end if
							if (isset($order)) {
								unset($order);
							} // end if
							if (isset($order_type)) {
								unset($order_type);
							} // end if
							if (isset($records_per_page)) {
								unset($records_per_page);
							} // end if
	
							if (isset($_SESSION['where_clause_'.$table_name])){
								$where_clause = $_SESSION['where_clause_'.$table_name];
							} // end if
							
							if (isset($_SESSION['page_'.$table_name])){
								$page = $_SESSION['page_'.$table_name];
							} // end if
							
							if (isset($_SESSION['order_'.$table_name])){
								$order = $_SESSION['order_'.$table_name];
							} // end if
							
							if (isset($_SESSION['order_type_'.$table_name])){
								$order_type = $_SESSION['order_type_'.$table_name];
							} // end if
							
							if (isset($_SESSION['records_per_page_'.$table_name])){
								$records_per_page = $_SESSION['records_per_page_'.$table_name];
							} // end if
							else{ // otherwise (first time the table is accessed or session expired) use the first value of the listbox
								$records_per_page = $records_per_page_ar[0];
							} // end else
	
							// get the array containg label ant other information about the fields
							$fields_labels_ar = build_fields_labels_array($table_internal_name, '1');
	
							// $page if index.php is called without parameters (the first time DaDaBIK is launched)
							if (!isset($page)) {
								$page = 0;
								$_SESSION['page_'.$table_name] = $page;
							} // end if
	
							// build the select query
							$where_clause = $items_table_name.".".$items_table_fk_field_name." = '".$details_row[$where_field]."'";
	
							// save the where_clause without the user part to pass 
							$where_clause_to_pass = $where_clause;
	
							$_SESSION['where_clause_'.$table_name] = $where_clause;
	
							if ($enable_authentication === 1 && $enable_browse_authorization === 1) { // $ID_user_field_name = '$current_user' where clause part in order to select only the records the current user owns
								$ID_user_field_name = get_ID_user_field_name($fields_labels_ar);
	
								if ($ID_user_field_name !== false) { // no ID_user fields available, don't use authorization
									if ($where_clause === '') {
										$where_clause = $quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
									} // end if
									else {
										//$where_clause .= " AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
										$where_clause = "(".$where_clause.") AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
									} // end else
								} // end if
	
							} // end if
							
							$sql = build_select_part($fields_labels_ar, $table_name);
	
							if ($where_clause != ""){
								$sql .= " WHERE ".$where_clause;
							} // end if
							// execute the select without limit query to get the number of results
							$res_records_without_limit = execute_db($sql, $conn);
	
							$select_without_limit = $sql; // I save it because I need it to pass it to build_add_to_mailing_form
	
							$results_number = get_num_rows_db($res_records_without_limit); // get the number of results
	
							if ($results_number > 0){ // at least one record found
	
								$pages_number = get_pages_number($results_number, $records_per_page); // get the total number of pages
								
								if (!isset($order)){
	
									// get the first field present in the results form as order
									$count_temp = 0;
									$fields_labels_ar_count = count($fields_labels_ar);
									while (!isset($order) && $count_temp < $fields_labels_ar_count) {
										if ($fields_labels_ar[$count_temp]["present_results_search_field"] === '1') {
											$order = $fields_labels_ar[$count_temp]["name_field"];
										} // end if
										$count_temp++;
									} // end while
									if (!isset($order)) { // if no fields are present in the results form, just use the first field as order, the form wiil be empty, this is just to prevent error messages when composing the sql query
										$order = $fields_labels_ar[0]["name_field"];
									} // end if
								} // end if
	
								$_SESSION['order_'.$table_name] = $order;
	
								if (!isset($order_type)){
									$order_type = "ASC";
									$_SESSION['order_type_'.$table_name] = $order_type;
								} // end if
	
								if ($page > ($pages_number-1)) {
									$page = $pages_number-1;
								} // end if
								
								$sql .= " ORDER BY ";
	
								// get the index of $fields_labels_ar corresponding to a field
								$count_temp = 0;
								foreach ($fields_labels_ar as $field){
									if ($field['name_field'] === $order){
										$field_index = $count_temp;
										break;
									} // end if
									$count_temp++;
								} // end foreach
								
								if ($fields_labels_ar[$field_index]["primary_key_field_field"] !== '' && $fields_labels_ar[$field_index]["primary_key_field_field"] !== NULL){
	
									$linked_fields_ar = explode($fields_labels_ar[$field_index]['separator_field'], $fields_labels_ar[$field_index]['linked_fields_field']);
									$is_first = 1;
									foreach ($linked_fields_ar as $linked_field){
	
										$sql .= $quote.$fields_labels_ar[$field_index]['primary_key_table_field'].$alias_prefix.$linked_field.$alias_prefix.$fields_labels_ar[$field_index]['alias_suffix_field'].$quote;
	
										if ($is_first === 1){ // add the order type just to the first field e.g. order by field_1 DESC, field_2, field_3
											$sql .= ' '.$order_type;
											$is_first = 0;
										} // end if
										$sql .= ', ';
									} //end foreach
									$sql = substr($sql, 0, -2); // deleter the last ', '
								} // end if
								else{
									//$sql .= $table_name.'.'.$fields_labels_ar[$field_index]["name_field"];
									$sql .= $quote.$table_name.$quote.'.'.$quote.$fields_labels_ar[$field_index]["name_field"].$quote;
									$sql .= ' '.$order_type;
								} // end else
	
								// execute the select query
								//$res_records = execute_db($sql, $conn);
								$res_records = execute_db_limit($sql, $conn, $records_per_page, $page*$records_per_page);
	
								if (isset($just_inserted) && $just_inserted == "1") {
									//txt_out("<p>".$normal_messages_ar["insert_result"]);
									txt_out('<p>'.$normal_messages_ar["record_inserted"]);
								} // end if
	
								if (isset($just_delete_all_authorizated) && $just_delete_all_authorizated == "1" && $enable_browse_authorization === 0) {
									txt_out('<p>'.$error_messages_ar["deleted_only_authorizated_records"]);
								} // end if
	
								if (isset($just_delete_no_authorization) && $just_delete_no_authorization == "1") {
									txt_out('<p>'.$error_messages_ar["no_authorization_update_delete"]);
								} // end if
	
								display_sql($sql);
								
								txt_out("<br>".$results_number." ".$normal_messages_ar["records_found"], "n_results_found");
								
								$enabled_features_ar = build_enabled_features_ar($table_name); // re-build the enabled features array, we need to know if the inert and delete is allowed for the items table, we don't need later to re-build again for the master table because we use the variable $enable_insert $enable_edit etc set in check_table.php
	
								$enable_insert_items = $enabled_features_ar["insert"];
								$enable_delete_items = $enabled_features_ar["delete"];
	
								if ($enable_delete_items == "1" && $enable_delete_all_feature === 1) {
									echo " <a class=\"onlyscreen\" onclick=\"if (!confirm('".$normal_messages_ar['confirm_delete?']."')){ return false;}else if (!confirm('".$normal_messages_ar['really?']."')){ return false;}\" href=\"".$action."?table_name=". urlencode($table_name)."&function=delete_all&where_clause=".urlencode($where_clause_to_pass)."&page=".$page."&order=".urlencode($order)."&order_type=".$order_type."&master_table_name=".urlencode($master_table_name)."&master_table_function=".$master_table_function."&master_table_where_field=".urlencode($master_table_where_field)."&master_table_where_value=".urlencode($master_table_where_value)."&is_items_table=1\">".$normal_messages_ar['delete_all']."</a>";
								} // end if
	
								if ($results_number > $records_per_page){ // display the navigation bar
	
									txt_out ("<br><font class=\"page_n_of_m\">".$normal_messages_ar["page"].($page+1).$normal_messages_ar["of"].$pages_number."</font>"); // "Page n of x" statement
	
									// build the navigation tool
									$navigation_tool = build_navigation_tool($where_clause_to_pass, $pages_number, $page, $action, "", $order, $order_type, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table);
	
									// display the navigation tool
									echo "&nbsp;&nbsp;&nbsp;&nbsp;".$navigation_tool."<br><br>";
								} // end if ($results_number > $records_per_page)
	
								$records_per_page_form = build_records_per_page_form($records_per_page, $table_name, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table);
	
								txt_out($records_per_page_form);
								
								if ($enable_insert_items == 1){
	
									txt_out ('<a class="bottom_menu" href="'.$dadabik_main_file.'?function=show_insert_form&table_name='.urlencode($table_name).'&master_table_name='.urlencode($master_table_name).'&master_table_function='.$master_table_function.'&master_table_where_field='.urlencode($master_table_where_field).'&master_table_where_value='.urlencode($master_table_where_value).'&is_items_table=1&set_field_default_value=1&default_value_field_name='.urlencode($items_table_fk_field_name).'&default_value='.urlencode($details_row[$master_table_where_field]).'">'.$normal_messages_ar['insert_item'].'</a> ('.get_table_alias($table_name).')');
								} // end if
	
								$results_type = "search";
	
								// build the HTML results table
								$results_table = build_results_table($fields_labels_ar, $table_name, $res_records, $results_type, "", "", $action, $where_clause_to_pass, $page, $order, $order_type, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table);
	
								echo $results_table;
	
								$table_name = $master_table_name; // assign to $table_name the master table name, this is useful for the footer
							} // end if
							else{
								display_sql($sql);
								txt_out('<p>'.$normal_messages_ar["no_records_found"].'</p>');
	
								txt_out ('<p><a class="bottom_menu" href="'.$dadabik_main_file.'?function=show_insert_form&table_name='.urlencode($table_name).'&master_table_name='.urlencode($master_table_name).'&master_table_function='.$master_table_function.'&master_table_where_field='.urlencode($master_table_where_field).'&master_table_where_value='.urlencode($master_table_where_value).'&is_items_table=1&set_field_default_value=1&default_value_field_name='.urlencode($items_table_fk_field_name).'&default_value='.urlencode($details_row[$master_table_where_field]).'">'.$normal_messages_ar['insert_item'].'</a> ('.get_table_alias($table_name).')</p>');
							} // end else
	
						} // end foreach
					} // end if
				} // end foreach
			} // end else
		} // end if
		else {
			txt_out("<p>".$error_messages_ar["no_authorization_view"]."</p>");
		} // end else
		break;
	case "update":
		if ($enable_edit == "1"){
			$check = 0;
			//$check = check_required_fields($_POST, $fields_labels_ar);
			$check = check_required_fields($_POST, $_FILES, $fields_labels_ar, $function);
			if ($check == 0){
				txt_out($normal_messages_ar["required_fields_missed"], "error_messages_form");
			} // end if ($check == 0)
			else{ // required fields are ok
				// check field lengths
				$check = 0;
				$check = check_length_fields($_POST, $fields_labels_ar);
				if ($check == 0){
					txt_out($normal_messages_ar["fields_max_length"], "error_messages_form");
				} // end if ($check == 0)
				else{ // fields length are ok
					$check = 0;
					$content_error_type = "";
					$check = check_fields_types($_POST, $fields_labels_ar, $content_error_type);
					if ($check == 0){
						txt_out($normal_messages_ar["{$content_error_type}_not_valid"], "error_messages_form");
					} // end if ($check == 0)
					else{ // type field are ok
						$check = 0;
						$check = write_temp_uploaded_files($_FILES, $fields_labels_ar);
						
						if ($check == 0){
							//Need to add the reason why the upload failed: file too large, improper filename (such as a .php file), or the file couldn't be found.
							txt_out($error_messages_ar["upload_error"], "error_messages_form");
						}
						else { // filed uploaded are ok
							$update_type = "internal";

							if( $enable_authentication === 0 ||  $enable_update_authorization === 0 || current_user_is_owner($where_field, $where_value, $table_name, $fields_labels_ar)){

								// update the record
								update_record($_FILES, $_POST, $fields_labels_ar, $table_name, $table_internal_name, $where_field, $where_value, $update_type);

								if ($enable_update_notice_email_sending === 1) {

									$sql = build_select_part($fields_labels_ar, $table_name);

									$sql .= " WHERE ".$quote.$table_name.$quote.".".$quote.$where_field.$quote." = '".$where_value."'";

									// execute the select query
									$res_details = execute_db($sql, $conn);
									
									// build the update notice message
									$update_notice_email = build_insert_update_notice_email_record_details($fields_labels_ar, $res_details);

									$to_addresses = '';
									$cc_addresses = '';
									$bcc_addresses = '';

									foreach ($update_notice_email_to_recipients_ar as $update_notice_email_to_recipient){
										$to_addresses .= $update_notice_email_to_recipient.', ';
									} // end foreach

									$to_addresses = substr($to_addresses, 0, -2); // delete the last ', '

									foreach ($update_notice_email_cc_recipients_ar as $update_notice_email_cc_recipient){
										$cc_addresses .= $update_notice_email_cc_recipient.', ';
									} // end foreach

									$cc_addresses = substr($cc_addresses, 0, -2); // delete the last ', '

									foreach ($update_notice_email_bcc_recipients_ar as $update_notice_email_bcc_recipient){
										$bcc_addresses .= $update_notice_email_bcc_recipient.', ';
									} // end foreach

									$bcc_addresses = substr($bcc_addresses, 0, -2); // delete the last ', '

									$additional_headers = '';

									if ($cc_addresses != '') {
										$additional_headers .= "Cc:".$cc_addresses."\n";
									} // end if

									if ($bcc_addresses != '') {
										$additional_headers .= "Bcc:".$bcc_addresses;
									} // end if

									mail($to_addresses, $db_name.' - '.$table_name.' - '.$normal_messages_ar['new_update_executed'], $update_notice_email, $additional_headers);
								} // end if
								header('Location:'.$site_url.$dadabik_main_file.'?table_name='.urlencode($table_name).'&function=edit&where_field='.urlencode($where_field)."&where_value=".urlencode($where_value).'&just_updated=1&master_table_name='. urlencode($master_table_name).'&master_table_function='.$master_table_function.'&master_table_where_field='.urlencode($master_table_where_field).'&master_table_where_value='.urlencode($master_table_where_value).'&is_items_table='.$is_items_table);

								exit;
							} // end if
							else {
								header('Location:'.$site_url.$dadabik_main_file.'?table_name='.urlencode($table_name).'&function=edit&where_field='.urlencode($where_field)."&where_value=".urlencode($where_value).'&just_updated_no_authorization=1&master_table_name='. urlencode($master_table_name).'&master_table_function='.$master_table_function.'&master_table_where_field='.urlencode($master_table_where_field).'&master_table_where_value='.urlencode($master_table_where_value).'&is_items_table='.$is_items_table);

								exit;
							} // end else
							
						} // end else
					} // end else
				} // end else
			} // end else
			if ($check === 0) {

				txt_out("<h3>".$normal_messages_ar["edit_record"]."</h3>");
/*	I commented out this part because when there is an error on update the next/previous controls didn't work, keeping the update and not edit function, so I prefer to delete them even because they are not so useful there 			
				if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need to pass over the variables (master_table_name, master_table_function etc...) needed to go back to the master table
					txt_out('<p><a class="previous_next" href="'.$dadabik_main_file.'?function=choose_previous_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1">&lt;&lt; '.$normal_messages_ar['previous'].'</a>&nbsp;&nbsp;&nbsp;<a class="previous_next" href="'.$dadabik_main_file.'?function=choose_next_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1">'.$normal_messages_ar['next'].' &gt;&gt;</a></p>');
				} // end if
				else {
					txt_out('<p><a class="previous_next" href="'.$dadabik_main_file.'?function=choose_previous_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'">&lt;&lt; '.$normal_messages_ar['previous'].'</a>&nbsp;&nbsp;&nbsp;<a class="previous_next" href="'.$dadabik_main_file.'?function=choose_next_record&table_name='.$table_name.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&from_function='.$function.'">'.$normal_messages_ar['next'].' &gt;&gt;</a></p>');
				} // end else
*/
				$form_type = "update";

				$res_details = '';

				$show_insert_form_after_error = 1;
				$show_edit_form_after_error = 1;


				if (isset($is_items_table) && $is_items_table === 1) {// it's an edit of a record of an items table, we need a link to go back to the master table record
					txt_out('<p><a href="'.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value).'">'.$normal_messages_ar["back_to_the_main_table"].'</a>');

					// display the form
					$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, $where_field, $where_value, $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table, 0 , '', '');
				} // end if
				else {
					// display the form
					$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, $where_field, $where_value, $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, '', '', '' , '', 0, 0, '', '');
				} // end else

				echo $form;

			} // end if
		} // end if
		break;
	case "delete":
		if ($enable_delete == "1") {

			if (isset($is_items_table) && $is_items_table === 1) { // deletion of a record from an item table, after the deletion we need to redirect to the edit/detil of a the master table
				$location_url = $site_url.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value);
				/*
				if(isset($page) && isset($order) && isset($order_type)) {
					$location_url .= '&page='.$page.'&order='.urlencode($order).'&order_type='.$order_type;
				}
				else{
					$location_url .= '&page=0';
				}
				*/
			} // end if
			else { // deletion of a record from a normal table, after the deletion we need to redirect to the show results mode
				$location_url = $site_url.$dadabik_main_file.'?table_name='.urlencode($table_name).'&function=search&where_clause='.urlencode($where_clause);
				/*
				if(isset($page) && isset($order) && isset($order_type)) {
					$location_url .= '&page='.$page.'&order='.urlencode($order).'&order_type='.$order_type;
				}
				else{
					$location_url .= '&page=0';
				}
				*/
			} // end else
			



			if( $enable_authentication === 0 || $enable_delete_authorization === 0 || current_user_is_owner($where_field, $where_value, $table_name, $fields_labels_ar)){
				delete_record ($table_name, $where_field, $where_value, $fields_labels_ar);
			} // end if
			else {
				$location_url .= '&just_delete_no_authorization=1';
			} // end else

			header('Location: '.$location_url);

			exit;
		} // end if
		break;
	case "delete_all":
		if ($enable_delete == "1" && $enable_delete_all_feature === 1) {

			$ID_user_field_name = get_ID_user_field_name($fields_labels_ar);

			delete_multiple_records ($table_name, $where_clause, $ID_user_field_name, $fields_labels_ar);
			
			if (isset($is_items_table) && $is_items_table === 1) {// it's a delete all of an items table, we need to go back to the master table record
				$location_url = $site_url.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value);
			} // end if
			else{

				$location_url = $site_url.$dadabik_main_file.'?table_name='.urlencode($table_name)."&function=search&where_clause=&page=0";
			} // end else

			if ($enable_browse_authorization === 0 && $ID_user_field_name !== false) { // if the user see just his owns records the message doesn't make sense
				$location_url .= '&just_delete_all_authorizated=1';
			} // end if

			header('Location: '.$location_url);

			exit;
		} // end if
		break;
	case "show_insert_form":
		if ($enable_insert == "1") {
			txt_out("<h3>".$normal_messages_ar["insert_record"]."</h3>");
			$form_type = "insert";
			$res_details = "";

			$show_insert_form_after_error = 0;
			$show_edit_form_after_error = 0;

			if (!isset($master_table_name)) {
				$master_table_name = '';
			} // end if

			if (!isset($master_table_function)) {
				$master_table_function = '';
			} // end if

			if (!isset($master_table_where_field)) {
				$master_table_where_field = '';
			} // end if

			if (!isset($master_table_where_value)) {
				$master_table_where_value = '';
			} // end if

			if (!isset($is_items_table)) {
				$is_items_table = 0;
			} // end if

			if (!isset($set_field_default_value)) {
				$set_field_default_value = 0;
			} // end if

			if (!isset($default_value_field_name)) {
				$default_value_field_name = '';
			} // end if

			if (!isset($default_value)) {
				$default_value = '';
			} // end if

			if (isset($is_items_table) && $is_items_table === 1) {// it's an insert form of a record of an items table, we need a link to go back to the master table record
				txt_out('<p><a href="'.$dadabik_main_file.'?table_name='.urlencode($master_table_name).'&function='.$master_table_function.'&where_field='.urlencode($master_table_where_field).'&where_value='.urlencode($master_table_where_value).'">'.$normal_messages_ar["back_to_the_main_table"].'</a></p>');
			} // end if

			// display the form
			$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, "", "", $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, $master_table_name, $master_table_function, $master_table_where_field , $master_table_where_value, $is_items_table, $set_field_default_value, $default_value_field_name, $default_value);
			echo $form;

			if (isset($is_items_table) && $is_items_table === 1) {// assign to $table_name the master table name, this is useful for the footer
				$table_name = $master_table_name;
			} // end if
		} // end if
		break;
	case "show_search_form":
		txt_out("<h3>".$normal_messages_ar["search_records"]."</h3>");

		$form_type = "search";
		$res_details = "";

		$show_insert_form_after_error = 0;
		$show_edit_form_after_error = 0;

		// display the form
		$form = build_form($table_name, $action, $fields_labels_ar, $form_type, $res_details, "", "", $_POST, $_FILES, $show_insert_form_after_error, $show_edit_form_after_error, '', '', '', '', 0, 0, '', '');
		echo $form;
		break;
	case "choose_next_record";
		if (isset($where_clause) && isset($order) && isset($order_type)) { // could be not set if the session has expired
			
			if ($enable_authentication === 1 && $enable_browse_authorization === 1) { // $ID_user_field_name = '$current_user' where clause part in order to select only the records the current user owns
			$ID_user_field_name = get_ID_user_field_name($fields_labels_ar);

				if ($ID_user_field_name !== false) { // no ID_user fields available, don't use authorization
					if ($where_clause === '') {
						$where_clause = $quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
					} // end if
					else {
						//$where_clause .= " AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
						$where_clause = "(".$where_clause.") AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
					} // end else
				} // end if

			} // end if

			// rebuild the query for the current results

			$sql = build_select_part($fields_labels_ar, $table_name);

			if ($where_clause !== '') {
				$sql .= " WHERE ".$where_clause;
			} // end if
			$sql .= " ORDER BY ".$quote.$table_name.$quote.'.'.$quote.$order.$quote. " ".$order_type;

			// execute the query

			$res = execute_db($sql, $conn);

			// loop through the recordset, when find the current record, read another one and save its where_value

			$record_found = 0;

			while ($row = fetch_row_db($res)) {
				if ($row[$where_field] == $where_value) {
					$record_found = 1;

					if ($row = fetch_row_db($res)) { // could be false if the current is the last record
						$new_where_value = $row[$where_field];
					} // end if
					
				} // end if
			} // end while

			if ($record_found === 0) { // the record has not been found
				txt_out('<p>'.$error_messages_ar['record_from_which_you_come_no_longer_exists'].'</p>');
			} // end if
			elseif (!isset($new_where_value)) { // the current record is the last one
				header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&just_next_record_on_last_one=1');
				if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need to pass over the variables (master_table_name, master_table_function etc...) needed to go back to the master table
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$where_value.'&just_next_record_on_last_one=1&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1');
				} // end if
				else {
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$where_value.'&just_next_record_on_last_one=1');
				} // end else

				exit;
			} // end elseif
			else {
				// redirect to the function from which the user comes (edit or detail) using the where_value just discovered

				header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.urlencode($where_field).'&where_value='.urlencode($new_where_value));
				if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need to pass over the variables (master_table_name, master_table_function etc...) needed to go back to the master table
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$new_where_value.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1');
				} // end if
				else {
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$new_where_value);
				} // end else
			} // end else

		} // end if
		break;
	case "choose_previous_record";
		if (isset($where_clause) && isset($order) && isset($order_type)) { // could be not set if the session has expired
			
			if ($enable_authentication === 1 && $enable_browse_authorization === 1) { // $ID_user_field_name = '$current_user' where clause part in order to select only the records the current user owns
			$ID_user_field_name = get_ID_user_field_name($fields_labels_ar);

				if ($ID_user_field_name !== false) { // no ID_user fields available, don't use authorization
					if ($where_clause === '') {
						$where_clause = $quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
					} // end if
					else {
						//$where_clause .= " AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
						$where_clause = "(".$where_clause.") AND ".$quote.$table_name.$quote.'.'.$quote.$ID_user_field_name.$quote." = '".addslashes($current_user)."'";
					} // end else
				} // end if

			} // end if

			// rebuild the query for the current results

			$sql = build_select_part($fields_labels_ar, $table_name);

			if ($where_clause !== '') {
				$sql .= " WHERE ".$where_clause;
			} // end if
			$sql .= " ORDER BY ".$quote.$table_name.$quote.'.'.$quote.$order.$quote. " ".$order_type;

			// execute the query

			$res = execute_db($sql, $conn);

			// loop through the recordset, when find the current record, read another one and save its where_value

			$record_found = 0;

			while ($row = fetch_row_db($res)) {
				if ($row[$where_field] == $where_value) {
					$record_found = 1;
				} // end if
				if ($record_found === 0) {
					$new_where_value = $row[$where_field];
				} // end if
			} // end while

			if ($record_found === 0) { // the record has not been found
				txt_out('<p>'.$error_messages_ar['record_from_which_you_come_no_longer_exists'].'</p>');
			} // end if
			elseif (!isset($new_where_value)) { // the current record is the first one
				header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.urlencode($where_field).'&where_value='.urlencode($where_value).'&just_previous_record_on_first_one=1');
				if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need to pass over the variables (master_table_name, master_table_function etc...) needed to go back to the master table
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$where_value.'&just_previous_record_on_first_one=1&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1');
				} // end if
				else {
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$where_value.'&just_previous_record_on_first_one=1');
				} // end else

				exit;
			} // end elseif
			else {
				// redirect to the function from which the user comes (edit or detail) using the where_value just discovered

				header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.urlencode($where_field).'&where_value='.urlencode($new_where_value));
				if (isset($is_items_table) && $is_items_table === 1) {// it's a detail of a record of an items table, we need to pass over the variables (master_table_name, master_table_function etc...) needed to go back to the master table
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$new_where_value.'&master_table_name='.$master_table_name.'&master_table_function='.$master_table_function.'&master_table_where_field='.$master_table_where_field.'&master_table_where_value='.$master_table_where_value.'&is_items_table=1');
				} // end if
				else {
					header('Location: '.$site_url.$dadabik_main_file.'?table_name='.$table_name.'&function='.$from_function.'&where_field='.$where_field.'&where_value='.$new_where_value);
				} // end else

				exit;
			} // end else

		} // end if
		break;
} // end swtich ($function)

// include footer
include ("./include/footer.php");
?>
