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
	
		try {
  			$conn = new PDO($dbms_type.":".$name_db);
  			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		}
		catch(PDOException $e)
    	{
    		echo '<b>[06] Error:</b> during database connection.';
    		if ($debug_mode === 1){
    			echo '<br/>The DBMS server said: '.$e->getMessage();
    		}
    	}
    	
	return $conn;
}

function create_table_db($conn, $table_name, $fields)
{
	$sql = "CREATE TABLE ".$table_name." (".$fields;

	execute_db($sql, $conn);
}
/*
function add_table_column_db($conn, $data_dictionary, $table_name, $fields)
{
	$sql_ar = $data_dictionary->AddColumnSQL($table_name, $fields);

	foreach ($sql_ar as $sql){
		execute_db($sql, $conn);
	} // end foreach
} // end function add_table_column_db()
*/

function drop_table_db($conn, $table_name)
{
	if (table_exists($table_name)) {
		$sql = "DROP TABLE $table_name";

		execute_db($sql, $conn);
	} // end if
}

function create_index_db($conn, $data_dictionary, $table_name, $index_name, $index_fields, $options_ar)
{
	$sql_ar = $data_dictionary->CreateIndexSQL($index_name, $table_name, $index_fields, $options_ar);
	foreach ($sql_ar as $sql){
		execute_db($sql, $conn);
	} // end foreach
}

/*
function drop_index_db($conn, $data_dictionary, $table_name, $index_name)
{
	$sql_ar = $data_dictionary -> DropIndexSQL ($index_name, $table_name);
	foreach ($sql_ar as $sql){
		execute_db($sql, $conn);
	} // end foreach
}
*/

function execute_db($sql, $conn)
{
	global $debug_mode;
    	
    try {
    	$results = $conn->query($sql);
    	//$results->setFetchMode(PDO::FETCH_BOTH);
    }
    catch(PDOException $e){
    	echo '<p><b>[08] Error:</b> during query execution.';
    	if ($debug_mode === 1){
    		echo '<br/>The DBMS server said: '.$e->getMessage();
    	}
    	exit();
    }
    
	return $results;
}

function format_date_for_dbms($date)
{
	return "'".$date."'";
}



function execute_db_limit($sql, $conn, $records_page, $start_from)
{
	global $debug_mode;
	
	$sql .= " LIMIT ".$start_from.", ".$records_page;
	try {
    	$results = $conn->query($sql);
    	//$results->setFetchMode(PDO::FETCH_BOTH);
    }
    catch(PDOException $e){
    	echo '<p><b>[08] Error:</b> during query execution.';
    	if ($debug_mode === 1){
    		echo '<br/>The DBMS server said: '.$e->getMessage();
    	}
    	exit();
    }
    
	return $results;
}

function fetch_row_db(&$rs)
{
	//return mysql_fetch_array ($rs);
	
	return $rs->fetch();
	
}

function get_num_rows_db($rs)
{
	global $conn;
	
	$temp_ar = explode("FROM", $rs->queryString);
	
	$sql = "SELECT COUNT(*) FROM ".$temp_ar[1];
	
	$res = execute_db($sql, $conn);
	
	$row = fetch_row_db($res);
	
	return (int)($row[0]);
}

function get_last_ID_db()
{
	global $conn;
	return $conn->lastInsertId();
}
 
function list_fields_db($db_name, $table_name, $conn)
{
	//return mysql_list_fields ($db_name, $table_name, $conn);
	return $conn->MetaColumns($table_name);
}
 
function num_fields_db($fields)
{
	//return mysql_num_fields ($fields);
	return $fields->columnCount();
}

function get_unique_field_db($table_name)
// goal: get the name of the first uniqe field in a table
// input: $table_name
// output: $unique_field_name, the name of the first unique field in the table
{
	global $conn;
	
	$sql = "PRAGMA table_info(".$table_name.")";
	
	foreach ($conn->query($sql) as $row){
		if ($row['pk'] == 1){
			return $row['name'];
		}
	}
	
	return NULL;
	
} // end function get_unique_field_db


function get_tables_list()
// goal: get a list of the tables available in the current database
// input:
// output: $tables_ar, an array containing all the table names
{
	global $conn;
	$tables_ar = array();
	$sql = "SELECT name FROM sqlite_master WHERE type='table' ORDER BY name";
	
	foreach ($conn->query($sql) as $row) $tables_ar[] = $row['name'];
	
	return $tables_ar;
	
}


function get_fields_list($table_name)
// goal: get a list of the fields available in a table
// input:
// output: $fields_ar, an array containing all the field names
{
	global $conn;
	$fields_ar = array();
	$sql = "PRAGMA table_info(".$table_name.")";
	
	foreach ($conn->query($sql) as $row) $fields_ar[] = $row[1];
	
	return $fields_ar;
	
}

function escape($string)
{
	global $conn;
	return substr($conn->quote($string),1,-1);
}


?>