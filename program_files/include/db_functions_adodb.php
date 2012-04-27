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
// db functions
function connect_db($server, $user, $password, $name_db)
{
	global $debug_mode, $dbms_type;
	if ($debug_mode == 1){
		
		$conn = NewADOConnection($dbms_type) or die($conn->ErrorMsg());
		
		$conn->Connect($server, $user, $password, $name_db) or die ('<b>[06] Error:</b> during database connection.<br>DBMS server said: '.$conn->ErrorMsg());
	} // end if
	else{
		$conn = NewADOConnection($dbms_type);

		$conn->Connect($server, $user, $password, $name_db) or die ('<b>[06] Error:</b> during database connection.');
	} // end else
	return $conn;
}

function create_table_db($conn, $data_dictionary, $table_name, $fields)
{
	$sql_ar = $data_dictionary->CreateTableSQL($table_name, $fields);

	foreach ($sql_ar as $sql){
		execute_db($sql, $conn);
	} // end foreach

	/*
	if ($debug_mode == 1){
		
	var_dump($data_dictionary);
		$data_dictionary->ExecuteSQLArray($sql_ar, false) or die ('<b>[06] Error:</b> [08] Error: during query execution.<br>DBMS server said: '.$conn->ErrorMsg());
	} // end if
	else{
		$data_dictionary->ExecuteSQLArray($sql_ar, false) or die ('<b>[06] Error:</b> [08] Error: during query execution.');
	} // end else
	*/
}

function add_table_column_db($conn, $data_dictionary, $table_name, $fields)
{
	$sql_ar = $data_dictionary->AddColumnSQL($table_name, $fields);

	foreach ($sql_ar as $sql){
		execute_db($sql, $conn);
	} // end foreach
} // end function add_table_column_db()

function drop_table_db($conn, $data_dictionary, $table_name)
{
	if (table_exists($table_name)) {
		$sql_ar = $data_dictionary->DropTableSQL($table_name);

		foreach ($sql_ar as $sql){
			execute_db($sql, $conn);
		} // end foreach
	} // end if
}

function create_index_db($conn, $data_dictionary, $table_name, $index_name, $index_fields, $options_ar)
{
	$sql_ar = $data_dictionary->CreateIndexSQL($index_name, $table_name, $index_fields, $options_ar);
	foreach ($sql_ar as $sql){
		execute_db($sql, $conn);
	} // end foreach
}

function drop_index_db($conn, $data_dictionary, $table_name, $index_name)
{
	$sql_ar = $data_dictionary -> DropIndexSQL ($index_name, $table_name);
	foreach ($sql_ar as $sql){
		execute_db($sql, $conn);
	} // end foreach
}

function execute_db($sql, $conn)
{
	global $debug_mode;
	
	if ($debug_mode == 1){
		$results = $conn->Execute($sql) or die ('<p><b>[08] Error:</b> during query execution.<br>'.$sql.'<br>DBMS server said: '.$conn->ErrorMsg());
	} // end if
	else{
		$results = $conn->Execute($sql) or die ('<p><b>[08] Error:</b> during query execution.');
	} // end else
	return $results;
}

function execute_db_limit($sql, $conn, $records_page, $start_from)
{
	global $debug_mode;
	if ($debug_mode == 1){
		$results = $conn->SelectLimit($sql, $records_page, $start_from) or die ('<p><b>[08] Error:</b> during query execution.<br>'.$sql.'<br>DBMS server said: '.$conn->ErrorMsg());
	} // end if
	else{
		$results = $conn->SelectLimit($sql, $records_page, $start_from) or die ('<p><b>[08] Error:</b> during query execution.');
	} // end else
	return $results;
}

function format_date_for_dbms($date)
{
	global $conn;
	return $conn->DBDate($date);
}

function fetch_row_db(&$rs)
{
	//return mysql_fetch_array ($rs);
	return $rs->FetchRow();
}

function get_num_rows_db($rs)
{
	//return mysql_num_rows($rs);
	return $rs->RecordCount();
}

function get_last_ID_db()
{
	//return mysql_insert_id();
	global $conn;
	return $conn->Insert_ID();
}
 
function list_fields_db($db_name, $table_name, $conn)
{
	//return mysql_list_fields ($db_name, $table_name, $conn);
	return $conn->MetaColumns($table_name);
}
 
function num_fields_db($fields)
{
	//return mysql_num_fields ($fields);
	return $fields->FieldCount();
}

/* 4.0 */
function get_unique_field_db($table_name)
// goal: get the name of the first uniqe field in a table
// input: $table_name
// output: $unique_field_name, the name of the first unique field in the table
{
	//return 'id';
	global $conn, $dbms_type;
	$unique_field_name = "";
	$fields_ar = $conn->MetaPrimaryKeys($table_name);

	if (isset($fields_ar[0])) {
		$unique_field_name = $fields_ar[0];
	} // end if

	// hack for oracle, all field names fetched in lower case
	if ($dbms_type === 'oci8po') {
		return strtolower($unique_field_name);
	} // end if
	else {
		return $unique_field_name;
	} // end else
} // end function get_unique_field_db

function get_tables_list()
// goal: get a list of the tables available in the current database
// input:
// output: $tables_ar, an array containing all the table names
{
	global $conn;
	
	return $conn->MetaTables('TABLES');
	
}


function get_fields_list($table_name)
// goal: get a list of the fields available in a table
// input:
// output: $fields_ar, an array containing all the field names
{
	global $conn;
	
	return $conn->MetaColumns($table_name);
	
}

function escape($string)
{
	global $conn;
	return substr($conn->qstr($string),1,-1);
}

?>