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
include ("./include/functions.php");
include ("./include/common_start.php");
include ("./include/check_installation.php");
include ("./include/check_admin_login.php");

$page_name = 'admin';


// variables:
// GET
// $table_name
// POST
// 
// $function from this page ("delete_records", "refresh_table",......)

// get the array containing the names of the tables installed
$installed_tables_ar = build_tables_names_array(0, 1, 1);

// get the table name to use in the second part of the administration
if (isset($_GET["table_name"])){
	$table_name = $_GET["table_name"];
} // end if
else{
	if (count($installed_tables_ar)>0){
		// get the first table
		$table_name = $installed_tables_ar[0];
	} // end if
} // end else

if (isset($_POST["function"])){
	$function = $_POST["function"];
} // end if
elseif (isset($_GET["function"])){
	$function = $_GET["function"];
} // end if
else{
	$function = "";
} // end else

include ("./include/header.php");
?>

<?php
// POST
// $allow_table_ar from this page
// $deleted_fields from this page
// field_to_change_name from this page
// field_to_change_new_position from this page
// old_field_name
// new_field_name
// $table_name from this page
// $enable_insert from this file
// $enable_edit from this file
// $enable_delete from this file
// $enable_details from this file
// $enable_list from this file
// $donation_answer from this file
// $dan from this file
// $dfe from this file

if (isset($_POST["allow_table_ar"])){
	$allow_table_ar = $_POST["allow_table_ar"];
} // end if
if (isset($_POST["deleted_fields_ar"])){
	$deleted_fields_ar = $_POST["deleted_fields_ar"];
} // end if
if (isset($_POST["field_to_change_name"])){
	$field_to_change_name = $_POST["field_to_change_name"];
} // end if
if (isset($_POST["field_to_change_name"])){
	$field_to_change_name = $_POST["field_to_change_name"];
} // end if
if (isset($_POST["field_to_change_new_position"])){
$field_to_change_new_position = $_POST["field_to_change_new_position"];
} // end if
if (isset($_POST["old_field_name"])){
	$old_field_name = $_POST["old_field_name"];
} // end if
if (isset($_POST["new_field_name"])){
	$new_field_name = $_POST["new_field_name"];
} // end if
if (isset($_POST["new_field_name"])){
	$new_field_name = $_POST["new_field_name"];
} // end if
if (isset($_POST["enable_insert"])){
	$enable_insert = $_POST["enable_insert"];
} // end if
if (isset($_POST["enable_edit"])){
	$enable_edit = $_POST["enable_edit"];
} // end if
if (isset($_POST["enable_delete"])){
	$enable_delete = $_POST["enable_delete"];
} // end if
if (isset($_POST["enable_details"])){
	$enable_details = $_POST["enable_details"];
} // end if
if (isset($_POST["enable_list"])){
	$enable_list = $_POST["enable_list"];
} // end if
if (isset($_POST["alias_table"])){
	$alias_table = $_POST["alias_table"];
} // end if
if (isset($_POST["dan"])){
	$dan = $_POST["dan"];
} // end if
if (isset($_POST["dfe"])){
	$dfe = $_POST["dfe"];
} // end if

$confirmation_message = "";

if (isset($table_name)){
	// build the select with all installed table
	$change_table_select = build_change_table_select(0, 1);
	$table_internal_name = $prefix_internal_table.$table_name;
} // end if

// this is useful to display the tables that could be installed
$complete_tables_names_ar = build_tables_names_array(0, 0, 1);

switch($function){
	case "show_help":
		
		require './include/forms/help.php';
		exit;
		break;
	case "show_hotscripts_feedback":
		
		require './include/forms/hotscripts_feedback.php';
		exit;
		break;
	case "show_donation_form":
		$sql = "SELECT date_time_installation FROM ".$prefix_internal_table."installation_tab";
		
		$res = execute_db($sql, $conn);
	
		$num_rows= get_num_rows_db($res);

		if ($num_rows === 1){ // just one record should be available
			$row = fetch_row_db($res);
			$date_time_installation = $row['date_time_installation'];
		} // end if
		else{
			echo "<p>An error occured";
		} // end else
		
		require './include/forms/donation.php';
		manage_other_infos_installation('update', 'das',time());		
		exit;
		break;
	case "process_donation":
		if ($dan === '1'){
			require './include/forms/paypal.php';
		} // end if
		
		manage_other_infos_installation('update', 'dan',$dan);
		
		$date_time = date("Y-m-d H:i:s");
		
		$sql = "SELECT id_installation, code_installation FROM ".$prefix_internal_table."installation_tab";
		
		$res = execute_db($sql, $conn);
		
		$num_rows= get_num_rows_db($res);
		
		if ($num_rows === 1){ // just one record should be available
			$row = fetch_row_db($res);
			$id_installation = $row['id_installation'];
			$code_installation = $row['code_installation'];
		}
		else{
			echo "<p>An error occured";
		} // end else
		
		$process_donation_answer = @file_get_contents('http://www.dadabik.org/process_donation.php?dan='.$dan.'&id_installation='.$id_installation.'&code_installation='.$code_installation.'&dfe='.urlencode($dfe).'&date_time='.urlencode($date_time));
		
		if ($dan === '1'){
			exit;
		} // end if
		
		$confirmation_message = "<p>Infomation registered, thanks.";
		
		break;
	case "install_table":
		$table_internal_name_temp = $prefix_internal_table.$table_name;

		$unique_field_name = get_unique_field_db($table_name);
	
		// get the array containing the names of the fields
		$fields_names_ar = build_fields_names_array($table_name);

		// drop (if present) the old internal table and create the new one.
		create_internal_table ($table_internal_name_temp);

		// delete the previous record about the table
		$sql = "delete from ".$quote.$table_list_name.$quote." where ".$quote."name_table".$quote." = '".$table_name."'";			
		$res_delete = execute_db($sql, $conn);
		
		$sql = "insert into ".$quote.$table_list_name.$quote." (".$quote."name_table".$quote.", ".$quote."allowed_table".$quote.", ".$quote."enable_insert_table".$quote.", ".$quote."enable_edit_table".$quote.", ".$quote."enable_delete_table".$quote.", ".$quote."enable_details_table".$quote.", ".$quote."enable_list_table".$quote.", ".$quote."alias_table".$quote.") values ('".$table_name."', '1', '1', '1', '1', '1', '1', '".$table_name."')";
		$res_insert = execute_db($sql, $conn);

		if ($table_name === $users_table_name) {
			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (1, 'id_user', 'id_user', 'text', 'alphanumeric', '0', '0', '0', '0', '1', '0', '0', '0', '', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '100', '', 1, '~')";
			$res_insert = execute_db($sql, $conn);
			
			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (2, 'user_type_user', 'User type', 'select_single', 'alphanumeric', '1', '1', '1', '1', '1', '1', '0', '0', '~admin~normal~', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '100', '', 2, '~')";
			$res_insert = execute_db($sql, $conn);
			
			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (3, 'username_user', 'Username', 'text', 'alphanumeric', '1', '1', '1', '1', '1', '1', '1', '0', '', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '100', '', 3, '~')";
			$res_insert = execute_db($sql, $conn);

			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (4, 'password_user', 'Password (md5 hash)', 'text', 'alphanumeric', '0', '0', '1', '1', '1', '1', '0', '0', '', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '100', '', 4, '~')";
			$res_insert = execute_db($sql, $conn);
		} // end if
		else {
			for ($j=0; $j<count($fields_names_ar); $j++){
				// insert a new record in the internal table with the name of the field as name and label
				$sql = "insert into ".$quote.$table_internal_name_temp.$quote." (".$quote."name_field".$quote.", ".$quote."label_field".$quote.", ".$quote."order_form_field".$quote.") values ('".$fields_names_ar[$j]."', '".$fields_names_ar[$j]."', '".($j+1)."')";
				
				$res_insert = execute_db($sql, $conn);
			} // end for
		} // end else
		
		if (table_exists($table_internal_name_temp)){ // just a check if always is fine
			$confirmation_message = "<p>Internal table <b>".$table_internal_name_temp."</b> correctly created......";
		} // end if
		else{
			$confirmation_message = "<p>An error during installation occured";
			exit;
		} // end else

		if ($unique_field_name == ""){
			$confirmation_message .= "<p><b>Warning:</b> your table <b>".$table_name."</b> hasn't any primary keys set, if you don't set a primary key DaDaBIK won't show the edit/delete/details buttons.";
		} // end if
		
		// re-get the array containing the names of the tables installed
		$installed_tables_ar = build_tables_names_array(0, 1, 1);
		
		// re-build the select with all installed table
		$change_table_select = build_change_table_select(0, 1);

		break;
	case "uninstall_table":
		// delete the table from table_list_name
		$sql = "DELETE FROM ".$quote.$table_list_name.$quote." WHERE name_table = '".$table_name."'";
		execute_db($sql, $conn);

		// drop the internal table
		$sql = "DROP TABLE ".$quote.$table_internal_name.$quote;
		execute_db($sql, $conn);

		$confirmation_message .= "Table ".$table_name." uninstalled.";

		// re-get the array containing the names of the tables installed
		$installed_tables_ar = build_tables_names_array(0, 1, 1);

		if (count($installed_tables_ar)>0){
			// get the first table
			$table_name = $installed_tables_ar[0];
		} // end if

		if (isset($table_name)){
			// build the select with all installed table
			$change_table_select = build_change_table_select(0, 1);
			$table_internal_name = $prefix_internal_table.$table_name;
		} // end if

		break;
	case "include_tables":
		for ($i=0; $i<count($complete_tables_names_ar); $i++){
			if (in_array($complete_tables_names_ar[$i], $installed_tables_ar)){
				if (isset($allow_table_ar[$i])){
					if ($allow_table_ar[$i] == "1"){
						$sql = "update ".$quote."$table_list_name".$quote." set ".$quote."allowed_table".$quote." = '1' where ".$quote."name_table".$quote." = '".$complete_tables_names_ar[$i]."'";
					} // end if
				} // en if
				else{
					$sql = "update ".$quote."$table_list_name".$quote." set ".$quote."allowed_table".$quote." = '0' where ".$quote."name_table".$quote." = '".$complete_tables_names_ar[$i]."'";
				} // end else
			execute_db($sql, $conn);
			}
		} // end for

		//$installed_tables_ar = build_tables_names_array(0, 1); // reload to show the correct values

		$confirmation_message .= "Changes correctly saved.";

		break; // break case "include tables"
	case "change_field_name":
		// change the name of the field
		$sql = "update ".$quote.$table_internal_name.$quote." set ".$quote."name_field".$quote." = '$new_field_name' where ".$quote."name_field".$quote." = '$old_field_name'";

		execute_db($sql, $conn);

		$confirmation_message .= "$old_field_name correctly changed to $new_field_name.";
		
		break;
	case "enable_features":
		if (!isset($enable_insert)){
			$enable_insert = "0";
		} // end if

		if (!isset($enable_edit)){
			$enable_edit = "0";
		} // end if

		if (!isset($enable_delete)){
			$enable_delete = "0";
		} // end if

		if (!isset($enable_details)){
			$enable_details = "0";
		} // end if

		if (!isset($enable_list)){
			$enable_list = "0";
		} // end if

		// save the configuration about features enabled
		$sql = "update ".$quote."$table_list_name".$quote." set ".$quote."enable_insert_table".$quote." = '".$enable_insert."', ".$quote."enable_edit_table".$quote." = '".$enable_edit."', ".$quote."enable_delete_table".$quote." = '".$enable_delete."', ".$quote."enable_details_table".$quote." = '".$enable_details."', ".$quote."enable_list_table".$quote." = '".$enable_list."' where ".$quote."name_table".$quote." = '$table_name'";

		// execute the update
		$res_update = execute_db($sql, $conn);

		$confirmation_message .= "Changes correctly saved.";
		break;
	case "save_table_alias":

		// save the configuration about table alias
		$sql = "UPDATE ".$quote.$table_list_name.$quote." SET ".$quote."alias_table".$quote." = '".$alias_table."' where ".$quote."name_table".$quote." = '".$table_name."'";

		// execute the update
		$res_update = execute_db($sql, $conn);

		$confirmation_message .= "Changes correctly saved.";
		break;
	case "delete_records":
		// get the array containg label and other information about the fields
		$fields_labels_ar = build_fields_labels_array($table_internal_name, "1");
		
		if (isset($deleted_fields_ar)){
			for ($i=0; $i<count($deleted_fields_ar); $i++){
				// delete the record of the internal table
				$sql = "delete from ".$quote."$table_internal_name".$quote." where ".$quote."name_field".$quote." = '".$deleted_fields_ar[$i]."'";
				$res_delete = execute_db("$sql", $conn);

				// get the order_form_field of the field
				for ($j=0; $j<count($fields_labels_ar); $j++){
					if ($deleted_fields_ar[$i] == $fields_labels_ar[$j]["name_field"]){
						$order_form_field_temp = $fields_labels_ar[$j]["order_form_field"];
					} // end if
				} // end for

				// re-get the array containg label and other information about the fields
				$fields_labels_ar = build_fields_labels_array($table_internal_name, "1");

				if (isset($order_form_field_temp)){ // otherwise I could have done a reload of a delete page
					// decrease the order_form_field of all the following record by one
					for ($j=($order_form_field_temp+1); $j<=(count($fields_labels_ar)+1); $j++){
						$sql ="update ".$quote."$table_internal_name".$quote." set ".$quote."order_form_field".$quote." = order_form_field-1 where ".$quote."order_form_field".$quote." = $j";
						$res_update = execute_db("$sql", $conn);
					} // end for
				} // end if

				// re-get the array containg label and other information about the fields
				$fields_labels_ar = build_fields_labels_array($table_internal_name, "1");
			} // end for

			$confirmation_message .= "$i fields correctly deleted from the internal table $table_internal_name.";
		} // end if
		else{
			$confirmation_message .= "Please select one or more fields to delete.";
		} // end else
		break;
	case "refresh_table":
		// get the array containing the names of the fields
		$fields_names_ar = build_fields_names_array($table_name);

		// get the array containg label ant other information about the fields
		$fields_labels_ar = build_fields_labels_array($table_internal_name, "2");

		// get the max order from the table
		$sql_max = "select max(order_form_field) from ".$quote."$table_internal_name".$quote."";
		$res_max = execute_db("$sql_max", $conn);
		while ($max_row = fetch_row_db($res_max)){
			$max_order_form = $max_row[0];
		} // end while

		// drop (if present) the old internal table and create the new one.
		create_internal_table($table_internal_name);

		$j = 0;  // set to 0 the counter for the $fields_labels_ar
		$new_fields_nr = 0; // set to 0 the counter for the number of new fields inserted

		for ($i=0; $i<count($fields_names_ar); $i++){
			if (isset($fields_labels_ar[$j]["name_field"]) and $fields_names_ar[$i] == $fields_labels_ar[$j]["name_field"]){



				// insert a previous present record in the internal table
				$name_field_temp = addslashes($fields_labels_ar[$j]["name_field"]);
				$present_insert_form_field_temp = addslashes($fields_labels_ar[$j]["present_insert_form_field"]);
				$present_search_form_field_temp = addslashes($fields_labels_ar[$j]["present_search_form_field"]);
				$present_ext_update_form_field_temp = addslashes($fields_labels_ar[$j]["present_ext_update_form_field"]);
				$required_field_temp = addslashes($fields_labels_ar[$j]["required_field"]);
				$present_results_search_field_temp = addslashes($fields_labels_ar[$j]["present_results_search_field"]);
				$present_details_form_field_temp = addslashes($fields_labels_ar[$j]["present_details_form_field"]);
				$check_duplicated_insert_field_temp = addslashes($fields_labels_ar[$j]["check_duplicated_insert_field"]);
				$type_field_temp = addslashes($fields_labels_ar[$j]["type_field"]);
				$content_field_temp = addslashes($fields_labels_ar[$j]["content_field"]);
				$separator_field_temp = addslashes($fields_labels_ar[$j]["separator_field"]);
				$items_table_names_field_temp = addslashes($fields_labels_ar[$j]["items_table_names_field"]);
				$items_table_fk_field_names_field_temp = addslashes($fields_labels_ar[$j]["items_table_fk_field_names_field"]);
				$select_options_field_temp = addslashes($fields_labels_ar[$j]["select_options_field"]);
				$select_type_field_temp = addslashes($fields_labels_ar[$j]["select_type_field"]);
				$prefix_field = addslashes($fields_labels_ar[$j]["prefix_field"]);
				$default_value_field = addslashes($fields_labels_ar[$j]["default_value_field"]);
				$label_field_temp = addslashes($fields_labels_ar[$j]["label_field"]);
				$width_field_temp = addslashes($fields_labels_ar[$j]["width_field"]);
				$height_field_temp = addslashes($fields_labels_ar[$j]["height_field"]);
				$maxlength_field_temp = addslashes($fields_labels_ar[$j]["maxlength_field"]);
				$hint_insert_field_temp = addslashes($fields_labels_ar[$j]["hint_insert_field"]);
				$order_form_field_temp = addslashes($fields_labels_ar[$j]["order_form_field"]);
				
				$other_choices_field_temp = addslashes($fields_labels_ar[$j]["other_choices_field"]);

				$primary_key_field_field_temp = addslashes($fields_labels_ar[$j]["primary_key_field_field"]);
				$primary_key_table_field_temp  = addslashes($fields_labels_ar[$j]["primary_key_table_field"]);
				$primary_key_db_field_temp = addslashes($fields_labels_ar[$j]["primary_key_db_field"]);

				$linked_fields_field_temp = addslashes($fields_labels_ar[$j]["linked_fields_field"]);
				$linked_fields_order_by_field_temp = addslashes($fields_labels_ar[$j]["linked_fields_order_by_field"]);
				$linked_fields_order_type_field_temp = addslashes($fields_labels_ar[$j]["linked_fields_order_type_field"]);
			

				$sql = "insert into ".$quote."$table_internal_name".$quote." (".$quote."name_field".$quote.", ".$quote."present_insert_form_field".$quote.", ".$quote."present_search_form_field".$quote.", ".$quote."required_field".$quote.", ".$quote."present_results_search_field".$quote.", ".$quote."present_details_form_field".$quote.", ".$quote."present_ext_update_form_field".$quote.", ".$quote."check_duplicated_insert_field".$quote.", ".$quote."type_field".$quote.", ".$quote."content_field".$quote.", ".$quote."separator_field".$quote.", ".$quote."select_options_field".$quote.", ".$quote."select_type_field".$quote.", ".$quote."prefix_field".$quote.", ".$quote."default_value_field".$quote.", ".$quote."label_field".$quote.", ".$quote."width_field".$quote.", ".$quote."height_field".$quote.", ".$quote."maxlength_field".$quote.", ".$quote."hint_insert_field".$quote.", ".$quote."order_form_field".$quote.", ".$quote."other_choices_field".$quote.", ".$quote."primary_key_field_field".$quote.", ".$quote."primary_key_table_field".$quote.", ".$quote."primary_key_db_field".$quote.", ".$quote."linked_fields_field".$quote.", ".$quote."linked_fields_order_by_field".$quote.", ".$quote."linked_fields_order_type_field".$quote.") values ('$name_field_temp', '$present_insert_form_field_temp', '$present_search_form_field_temp', '$required_field_temp', '$present_results_search_field_temp', '$present_details_form_field_temp', '$present_ext_update_form_field_temp', '$check_duplicated_insert_field_temp', '$type_field_temp', '$content_field_temp', '$separator_field_temp', '$select_options_field_temp', '$select_type_field_temp', '$prefix_field', '$default_value_field', '$label_field_temp', '$width_field_temp', '$height_field_temp', '$maxlength_field_temp', '$hint_insert_field_temp', '$order_form_field_temp', '$other_choices_field_temp', '$primary_key_field_field_temp', '$primary_key_table_field_temp', '$primary_key_db_field_temp', '$linked_fields_field_temp', '$linked_fields_order_by_field_temp', '$linked_fields_order_type_field_temp')";

				$j++; // go to the next record in the internal table
			} // end if
			else{
				$max_order_form++;
				// insert a new record in the internal table with the name of the field
				$sql = "insert into ".$quote."$table_internal_name".$quote." (".$quote."name_field".$quote.", ".$quote."label_field".$quote.", ".$quote."order_form_field".$quote.") values ('$fields_names_ar[$i]', '$fields_names_ar[$i]', '$max_order_form')";
				
				$new_fields_ar[$new_fields_nr] = $fields_names_ar[$i]; // insert the name of the new field in the array to display it in the confirmation message
				$new_fields_nr++; // increment the counter of the $new_fields_ar array
			} // end else	
			$res_insert = execute_db($sql, $conn);
		} // end for
		$confirmation_message .= "Internal table correctly refreshed.<br>$new_fields_nr field/s added";
		if ($new_fields_nr > 0){
			$confirmation_message .= " (";
			for ($i=0; $i<count($new_fields_ar); $i++){
				$confirmation_message .= $new_fields_ar[$i].", ";
			} // end for
			$confirmation_message = substr($confirmation_message, 0, -2); // delete the last ", "
			$confirmation_message .= ")";
		} // end if
		$confirmation_message .= ".";
		break;
	case "change_position":
		// get the array containg label and other information about the fields
		$fields_labels_ar = build_fields_labels_array($table_internal_name, "1");

		// get the order_form_field of the field
		for ($i=0; $i<count($fields_labels_ar); $i++){
			if ($field_to_change_name == $fields_labels_ar[$i]["name_field"]){
				$field_to_change_old_position = $fields_labels_ar[$i]["order_form_field"];
			} // end if
		} // end for

		if ($field_to_change_new_position < $field_to_change_old_position){
			// increase the order_form_field of all the following record by one
			for ($i=$field_to_change_old_position-1; $i>=$field_to_change_new_position; $i--){
				$sql ="update ".$quote.$table_internal_name.$quote." set ".$quote."order_form_field".$quote." = ".$quote."order_form_field".$quote."+1 where ".$quote."order_form_field".$quote." = '".$i."'";
				$res_update = execute_db($sql, $conn);
			} // end for
		} // end if
		else{
			// decrease the order_form_field of all the previous record by one
			for ($i=$field_to_change_old_position+1; $i<=$field_to_change_new_position; $i++){
				$sql ="update ".$quote.$table_internal_name.$quote." set ".$quote."order_form_field".$quote." = ".$quote."order_form_field".$quote."-1 where ".$quote."order_form_field".$quote." = '".$i."'";
				$res_update = execute_db($sql, $conn);
			} // end for
		} // end if

		// change the order_form_field of the field selected
		$sql ="update ".$quote.$table_internal_name.$quote." set ".$quote."order_form_field".$quote." = '".$field_to_change_new_position."' where ".$quote."name_field".$quote." = '".$field_to_change_name."'";
		$res_update = execute_db($sql, $conn);
		$confirmation_message .= "Field $field_to_change_name position correctly changed from $field_to_change_old_position to $field_to_change_new_position.";		
		break;
	default:
		break;
} // end switch
?>

<?php
if ($confirmation_message != ""){
	echo "<p><b><font color=\"#ff0000\">$confirmation_message</font></b>";
} // end if
?>

<table>
<tr><td valign="top">
<p>Some general configuration parameters can be directly set from the file <b>/include/config.php</b>, just by opening it with a plain text editor and editing it. The file is self-explanatory. At that level you can, for example, set the database you want to manage with DaDaBIK or enable/disable/configure some DaDaBIK features (e.g. authentication, authorization, upload, email notices, duplication check, language,...).</p>
<p>For a more analytic tuning you are supposed to use this admin area. At this level you can choose the database tables you want to put in your DaDaBIK application and, for each table, through the Interface configurator, create your own DaDaBIK interface, choosing for example the fields you want to include/exclude from the forms, the content of each field, the labels....
</p>
<p><font size="+1">Which tables of the <font color="#FF0000"><?php echo $db_name; ?></font> database you want to use in DaDaBIK?</font></p>


<p>In order to use a table in a DaDaBIK application, the table must be <i>installed</i> and <i>enabled</i> in DaDaBIK. When you install DaDaBIK the first time, by default all the tables are installed and enabled.</p><p><font color="#ff0000"><b>Here is the list of the available tables:</b></font>
<form name="include_tables_form" method="post" action="admin.php">
<input type="hidden" name="function" value="include_tables">
<?php //if (count($installed_tables_ar) != 0){ ?>

<table cellpadding="5">
<tr>
<th>Table name</th>
<th>Installed</th>
<th>Enabled</th>
</tr>
<?php
/*
for ($i=0; $i<count($installed_tables_ar); $i++){
	echo "<tr><td><input type=\"checkbox\" onclick=\"javascript:document.include_tables_form.submit()\" name=\"allow_table_ar[$i]\" value=\"1\"";
	if (table_allowed($installed_tables_ar[$i])){
		echo " checked";
	} // end if
	echo "</td><td><input type=\"checkbox\" onclick=\"javascript:document.include_tables_form.submit()\" name=\"allow_table_ar[$i]\" value=\"1\"";
	if (table_allowed($installed_tables_ar[$i])){
		echo " checked";
	} // end if
	echo "></td><td>".$installed_tables_ar[$i]." <a href=\"admin.php?function=uninstall_table&table_name=".urlencode($installed_tables_ar[$i])."\">Uninstall</a></td></tr>";
} // end for
*/
for ($i=0; $i<count($complete_tables_names_ar); $i++){
	echo "<tr><td>".$complete_tables_names_ar[$i]."</td>";
	
	echo "<td>";
	//echo "<td><input type=\"checkbox\" onclick=\"javascript:document.include_tables_form.submit()\" name=\"install_table_ar[$i]\" value=\"1\"";
	if (in_array($complete_tables_names_ar[$i], $installed_tables_ar)){
		echo "Yes (<a href=\"admin.php?function=uninstall_table&table_name=".urlencode($complete_tables_names_ar[$i])."\">Uninstall</a>)</td>";
	} // end if
	else{
		echo "No (<a href=\"admin.php?function=install_table&table_name=".urlencode($complete_tables_names_ar[$i])."\">Install</a>)</td>";
	}
	
	if (in_array($complete_tables_names_ar[$i], $installed_tables_ar)){
	
		echo "<td><input type=\"checkbox\" onclick=\"javascript:document.include_tables_form.submit()\" name=\"allow_table_ar[$i]\" value=\"1\"";
		if (table_allowed($complete_tables_names_ar[$i])){
			echo " checked";
		} // end if	
		echo ">";
	}
	echo "</td></tr>";
} // end for
?>
</table>
Uncheck enable to temporarily exclude the table from DaDaBIK.<br>Click Uninstall to permanently remove the table from DaDaBKIK (for example if the table doesn't anymore exist in the database).<br>
<br><!--<input type="submit" value="Save changes">-->

<?php
/* } // end if
else{	
	echo "No tables installed.";
} // end else
*/
?>

</form>

<?php if (count($installed_tables_ar)>0){ // otherwise it means that no internal tables are installed

// get the array containg label and other information about the fields
$fields_labels_ar = build_fields_labels_array($table_internal_name, "1"); // because I need it for the display of the select in the form

?>

<p><font size="+1">Configure the DaDaBIK interface of the table <b><?php echo $table_name; ?></b></font></p>

<?php
if ($change_table_select != ""){
?>
<form method="get" action="admin.php" name="change_table_form"><input type="hidden" name="function" value="change_table">
<?php echo $change_table_select; ?>
<?php
if ( $autosumbit_change_table_control == 0) {
?>
<input type="submit" value="Change table">
<?php
}
else{
?>
 Change table
<?php
}
?>

</form>
<?php
}
$enable_features_checkboxes = build_enable_features_checkboxes($table_name);

$only_include_allowed = 0;
$installed_table_infos_ar = build_installed_table_infos_ar($only_include_allowed, 1);

foreach ($installed_table_infos_ar as $installed_table_infos) {
	if ($installed_table_infos['name_table'] === $table_name) {
		$table_alias = $installed_table_infos['alias_table'];
	} // end if
} // end while
?>

<p><form method="post" action="admin.php?table_name=<?php echo urlencode($table_name); ?>"><input type="hidden" name="function" value="enable_features">For this table enable: <?php echo $enable_features_checkboxes ?><input type="submit" value="Enable/disable"></form>

<p><form method="post" action="admin.php?table_name=<?php echo urlencode($table_name); ?>"><input type="hidden" name="function" value="save_table_alias">Table alias (this is what DaDaBIK will displays in the interface) <input type="text" name="alias_table" value="<?php echo $table_alias; ?>"> <input type="submit" value="Save alias"></form>

<p>If you want to configure the interface of the table in detail (e.g. want to specify if a field should be included or not in the search/insert/update form, the content of the field,...) you have to use the <a href="internal_table_manager.php?table_name=<?php echo urlencode($table_name); ?>">Interface configurator</a>.
<p>Directly from here you can, instead, update DaDaBIK when you have modified some fields of your table (e.g. when you have added one or more fields, deleted one or more fields, renamed one or more fields from <b><?php echo $table_name; ?></b>) or you want to modify the displaying order of the fields in the DaDaBIK interface.</p>

<p>Please follow these steps in the correct order:
<p>&nbsp;
<table border="0" cellpadding="6" width="100%">
  <tr bgcolor="#F0F0F0"> 
    <td><b><font color="#ff0000">Step 1:</font></b><br>
      If you have renamed some fields of <b><?php echo $table_name; ?></b> you 
      have to specify here the new names.</b>

	   <p>Select the field name you want to change and specify the new name:<br>
      <form name="change_field_name_form" method="post" action="admin.php?table_name=<?php echo $table_name; ?>">
	  <input type="hidden" name="function" value="change_field_name">
        Old field name: <select name="old_field_name">
          <?php
for ($i=0; $i<count($fields_labels_ar); $i++){
	echo "<option value=\"".$fields_labels_ar[$i]["name_field"]."\">".$fields_labels_ar[$i]["name_field"]."</option>";	
} // end for
?> 
        </select>
		new field name: <input type="text" name="new_field_name">
		<input type="submit" value="Change">
		</form>
    </td>
  </tr>
</table>
<br>
<table border="0" cellpadding="6" width="100%">
  <tr bgcolor="#F0F0F0"> 
    <td>
      <p><b><font color="#ff0000">Step 2:</font></b><br>
        If you have deleted some fields of <b><?php echo $table_name; ?></b> you 
        have to specify here which fields you have deleted
        by selecting it/them and clicking the delete button. 
      <p>Select the field/s you want to delete:<br>
        (multiple selection available) 
      <form name="deleted_fields_form" method="post" action="admin.php?table_name=<?php echo $table_name; ?>">
	  <input type="hidden" name="function" value="delete_records">
        <select multiple name="deleted_fields_ar[]" size="10">
          <?php
for ($i=0; $i<count($fields_labels_ar); $i++){
	echo "<option value=\"".$fields_labels_ar[$i]["name_field"]."\">".$fields_labels_ar[$i]["name_field"]."</option>";	
} // end for
?> 
        </select>
        <input type="submit" value="Delete this/these field/fields" name="submit">
      </form>
    </td>
  </tr>
</table>
<br>
<table border="0" cellpadding="6" width="100%">
  <tr bgcolor="#F0F0F0"> 
    <td>
      <p><b><font color="#ff0000">Step 3:</font></b><br>
        If you have added some fields to <b><?php echo $table_name; ?></b> you 
        have to update DaDaBIK by pressing the refresh installation button: 
      <form name="refresh_form" method="post" action="admin.php?table_name=<?php echo $table_name; ?>">
		<input type="hidden" name="function" value="refresh_table">
        <input type="submit" value="Refresh installation" name="submit">
      </form>
      <br>
      <br>
    </td>
  </tr>
</table>
<br>
<table border="0" cellpadding="6" width="100%">
  <tr bgcolor="#F0F0F0"> 
    <td>
      <p><b><font color="#ff0000">Step 4:</font></b><br>
        If you want to change the displaying order of a field in the DaDaBIK interfaces, you can do it by selecting the field from the following menu and specifying the new position. All the other field positions will be shifted correctly.
		<form name="change_position_form" method="post" action="admin.php?table_name=<?php echo $table_name; ?>">
		<input type="hidden" name="function" value="change_position">
		Field name (position): 
        <select  name="field_to_change_name">
         <?php
		for ($i=0; $i<count($fields_labels_ar); $i++){
			echo "<option value=\"".$fields_labels_ar[$i]["name_field"]."\">".$fields_labels_ar[$i]["name_field"]." (".$fields_labels_ar[$i]["order_form_field"].")</option>";	
		} // end for
		?> 
        </select>
		 New position: 
		<select  name="field_to_change_new_position">
         <?php
		for ($i=0; $i<count($fields_labels_ar); $i++){
			echo "<option value=\"".$fields_labels_ar[$i]["order_form_field"]."\">".$fields_labels_ar[$i]["order_form_field"]."</option>";	
		} // end for
		?> 
        </select>
        <input type="submit" value="Change position" name="submit">
      </form>
	</td>
  </tr>
</table></td><!--<td valign="top"><b>Buying mp3s</b> from Amazon you can support the DaDaBIK project</br></br>-->

<?php
if (date("Ymd") < '2011-01-30'){

?>

<iframe src="http://rcm.amazon.com/e/cm?t=dadabik-20&o=1&p=21&l=ur1&category=50mp3albums5each&banner=19QT8FZHDHFZDN87C482&f=ifr" width="125" height="125" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>

<?php
}
?>

</td></tr></table>


<?php } // end if?>
<?php
// include footer
include ("./include/footer.php");
?>
