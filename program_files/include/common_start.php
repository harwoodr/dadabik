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
ob_start();

ini_set('session.cookie_path', $site_path);

session_start();

if (!isset($_POST)){
	$_POST=$HTTP_POST_VARS;
}
if (!isset($_GET)){
	$_GET=$HTTP_GET_VARS;
}
if (!isset($_FILES)){
	$_FILES=$HTTP_POST_FILES;
}
if (!isset($_SESSION)){
	$_SESSION=$HTTP_SESSION_VARS;
}


if ( (double)phpversion() >= 5.1){
	date_default_timezone_set($timezone);
}

if ($dbms_type != "" && $db_name != "" && $site_url != "" && $site_path != "" &&  $timezone != "" && ($host != "" && $user != "" || $dbms_type === 'sqlite' || $dbms_type === 'sqlite2')) {

	$conn = connect_db($host, $user, $pass, $db_name);
	
	if ($dbms_type !== 'sqlite' && $dbms_type !== 'sqlite2') {
		$conn->SetFetchMode(ADODB_FETCH_BOTH);
	}
	if ($enable_sql_logging === 1 && $dbms_type !== 'sqlite' && $dbms_type !== 'sqlite2') {
		//$conn->LogSQL();
	} // end if

	if ($dbms_type === 'mssql' || $dbms_type === 'oci8po' || $dbms_type === 'sqlite' || $dbms_type === 'sqlite2') { // hack for mssql and oracle
		$quote = '';
	} // end if
	else{
		$quote = $conn->nameQuote;
	}
	
} // end if
else{
	echo "<p><b>[01] Error:</b> please specify host, username, database name, site url, site path and timezone in config.php. If you use sqlite host and username are not needed.";
	exit;
} // end else


if (get_magic_quotes_gpc()==1) {
    function stripslashes_array($var) {
        return is_array($var)? array_map("stripslashes_array", $var):stripslashes($var);
    }

    $_POST = stripslashes_array($_POST);
    $_COOKIE = stripslashes_array($_COOKIE);
    $_GET = stripslashes_array($_GET);
}

function addslashes_array($var) {
	return is_array($var)? array_map("addslashes_array", $var):escape($var);
}

$_POST = addslashes_array($_POST);
$_COOKIE = addslashes_array($_COOKIE);
$_GET = addslashes_array($_GET);

// tables present in the databse
$table_names_ar = build_tables_names_array(0, 0);

if (count($table_names_ar) == 0){ // no table
	echo "<p><b>[02] Error:</b> your database ".$db_name." is empty. No tables found. Please create some tables to manage before using DaDaBIK.";
	exit;
} // end if

// the var is set in check_login but check_login it's not included by e.g. admin, and it's useful for some functions (e.g. build_tables_names_array) to have it set
$current_user_is_administrator = 0;

?>