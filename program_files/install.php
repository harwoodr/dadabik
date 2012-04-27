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

$page_name = 'install';
include ("./include/header.php");

// variables:
// GET
// table_name form admin.php
if (isset($_GET["table_name"])){
	$table_name = urldecode($_GET["table_name"]);
} // end if
else{
	$table_name = "";
} // end else

// POST
// $install from install.php (set to 1 when user click on install)

if (isset($_POST["install"])){
	$install = $_POST["install"];
} // end if
else{
	$install = "";
} // end else

if ($install == "1"){
	if ($table_name != ""){
		$tables_names_ar[0] = $table_name;
		
		if (!table_exists($table_list_name)){
			// drop (if present) the old table list table and create the new one
			create_table_list_table();
		} // end if
	} // end if
	else{
		// drop (if present) the old users table and create the new one
		create_users_table();
		
		if (!table_exists($prefix_internal_table.'installation_tab')){
		
			create_installation_table();
			
			$date_time = date("Y-m-d H:i:s");
			
			if (isset($_POST['register']) && (int)$_POST['register'] === 1){
			
				$id_code_installation = @file_get_contents('http://www.dadabik.org/get_installation_id_3.php?dbms_type='.$dbms_type.'&dadabik_version='.urlencode('4.4').'&os='.urlencode(php_uname('s')).'&php_version='.urlencode(phpversion()).'&date_time='.urlencode($date_time));
			
				if ($id_code_installation === false){
					echo '<p>There are problems with the Internet connection, the on-line registration is not possible......</p>';
					$id_installation = 'NULL';
					$code_installation = '0';
				}
				else{
					echo '<p>On-line registration done......</p>';
					$id_code_installation_ar = explode('|', $id_code_installation);
					$id_installation = (int)$id_code_installation_ar[0];
					$code_installation = $id_code_installation_ar[1];
				}
			}
			else{
				$id_installation = 'NULL';
				$code_installation = '0';
			}
			
			$sql = "INSERT INTO ".$quote.$prefix_internal_table.'installation_tab'.$quote." (date_time_installation, id_installation, code_installation, dbms_type_installation, dadabik_version_installation) VALUES ('".$date_time."', ".$id_installation.", '".$code_installation."', '".$dbms_type."', '4.4')";						
				
			$res_insert = execute_db($sql, $conn);
			
		} // end if

		// get the array containing the names of the tables (excluding "dadabik_" ones)
		$tables_names_ar = build_tables_names_array(0, 0, 1);

		// drop (if present) the old table list table and create the new one
		create_table_list_table();
	} // end else

	for ($i=0; $i<count($tables_names_ar); $i++){
		$table_name_temp = $tables_names_ar[$i];
		$table_internal_name_temp = $prefix_internal_table.$table_name_temp;

		$unique_field_name = get_unique_field_db($table_name_temp);
	
		// get the array containing the names of the fields
		$fields_names_ar = build_fields_names_array($table_name_temp);

		// drop (if present) the old internal table and create the new one.
		create_internal_table ($table_internal_name_temp);


		// delete the previous record about the table
		$sql = "delete from ".$quote.$table_list_name.$quote." where ".$quote."name_table".$quote." = '".$table_name_temp."'";			
		$res_delete = execute_db($sql, $conn);

		// add the table to the table list table and set allowed to 1
		//$sql = "insert into ".$quote.$table_list_name.$quote." (".$quote."name_table".$quote.", ".$quote."allowed_table".$quote.", ".$quote."enable_insert_table".$quote.", ".$quote."enable_edit_table".$quote.", ".$quote."enable_delete_table".$quote.", ".$quote."enable_details_table".$quote.") values ('".$table_name_temp."', '1', '1', '1', '1', '1')";
		$sql = "insert into ".$quote.$table_list_name.$quote." (".$quote."name_table".$quote.", ".$quote."allowed_table".$quote.", ".$quote."enable_insert_table".$quote.", ".$quote."enable_edit_table".$quote.", ".$quote."enable_delete_table".$quote.", ".$quote."enable_details_table".$quote.", ".$quote."enable_list_table".$quote.", ".$quote."alias_table".$quote.") values ('".$table_name_temp."', '1', '1', '1', '1', '1', '1', '".$table_name_temp."')";
		$res_insert = execute_db($sql, $conn);

		if ($table_name_temp === $users_table_name) {
			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (1, 'id_user', 'id_user', 'text', 'alphanumeric', '0', '0', '0', '0', '1', '0', '0', '0', '', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '', '', '100', '', 1, '~')";
			$res_insert = execute_db($sql, $conn);
			
			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (2, 'user_type_user', 'User type', 'select_single', 'alphanumeric', '1', '1', '1', '1', '1', '1', '0', '0', '~admin~normal~', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '', '', '100', '', 2, '~')";
			$res_insert = execute_db($sql, $conn);

			//$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES ('username_user', 'Username', 'text', 'alphanumeric', '1', '1', '1', '1', '1', '1', '0', '0', '', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '100', '', 3, '~')";
			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (3, 'username_user', 'Username', 'text', 'alphanumeric', '1', '1', '1', '1', '1', '1', '1', '0', '', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '', '', '100', '', 3, '~')";
			$res_insert = execute_db($sql, $conn);
			
			$link_popup = escape('\'pwd.php\',\'\',600,300');

			$sql = "INSERT INTO ".$quote.$table_internal_name_temp.$quote." VALUES (4, 'password_user', 'Password (md5 hash)', 'text', 'alphanumeric', '0', '0', '1', '1', '1', '1', '0', '0', '', '', '', '', '', '', '', 'is_equal/contains/starts_with/ends_with/greater_than/less_then', '', '', '', '', '', '', '100', '<a href=\"javascript:void(generic_js_popup(".$link_popup."))\">md5 crypter</a>', 4, '~')";
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
			echo "<p>Internal table <b>".$table_internal_name_temp."</b> correctly created......";
		} // end if
		else{
			echo "<p>An error during installation occured";
			exit;
		} // end else

		if ($unique_field_name == ""){
			echo "<p><b>Warning:</b> your table <b>".$table_name_temp."</b> hasn't any primary keys set, if you don't set a primary key DaDaBIK won't show the edit/delete/details buttons.";
		} // end if
	} // end for
	echo "<p>......DaDaBIK correctly installed!!";
	echo "<p>You can now view the database application just created with DaDaBIK, starting from <a href=\"".$dadabik_main_file."\">".$dadabik_main_file."</a>";
	echo "<p>In order to customize DaDaBIK go to the <a href=\"admin.php\">homepage</a> of the admin area.";
} // end if ($install == "1")
else{
	echo "<p><form name=\"install_form\" action=\"install.php?table_name=".urlencode($table_name)."\" method=\"post\">";
	echo "<input type=\"hidden\" name=\"install\" value=\"1\">";
	if ( $table_name != "") {
		echo "<input type=\"submit\" value=\"Click this button to install ".$table_name." table\">";
	} // end if
	if ( $table_name == "") {
		echo "<input type=\"checkbox\" name=\"register\" value=\"1\" checked> Communicate this installation to www.dadabik.org<br>Just the DBMS type (e.g. MySQL), the Operating System (e.g. Linux), the PHP version and the DaDaBIK version (e.g. 4.2) will be transmitted, NO PERSONAL INFORMATION. This is usefult to keep track of the number of DaDaBIK installations worldwide.<br><br>";
		echo "<input type=\"submit\" value=\"Click this button to install DaDaBIK\">";
		echo "<p>Please note that if DaDaBIK is already installed in the ".$db_name." database, the installation will overwrite the previous DaDaBIK configuration. The installation will also overwrite the users table ".$prefix_internal_table.$users_table_name.", if you want to keep the pre-existent one, just backup it and import it after the installation.";
		if ($dbms_type === 'oci8po') {
			echo "<p>Please note that, if you are re-installing DaDaBIK int the ".$db_name." database, you should manually delete the SEQ_USERS_TAB sequence automatically created by DaDaBIK in the previous installation before proceeding this installation.";
		} // end if
	}
	echo "</form>";
} // end else

// include footer
include ("./include/footer.php");
?>
