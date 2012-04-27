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

// include config, functions, common and header
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

$page_name = 'upgrade';

include ("./include/check_installation.php");
include ("./include/header.php");

// variables:

if (isset($_POST["upgrade"])){
	$upgrade = (int)$_POST["upgrade"];
} // end if
else{
	$upgrade = "";
} // end else

if ($upgrade === 1){
			
	$date_time = date("Y-m-d H:i:s");
			
	if (isset($_POST['register']) && (int)$_POST['register'] === 1){
	
		$sql = "SELECT id_installation, code_installation FROM ".$quote.$prefix_internal_table.'installation_tab'.$quote;
		
		$res = execute_db($sql, $conn);
		
		$row = fetch_row_db($res);
		
		$id_installation = $row['id_installation'];
		$code_installation = $row['code_installation'];
			
		$upgrade_process_result = @file_get_contents('http://www.dadabik.org/process_upgrade.php?id_installation='.$id_installation.'&code_installation='.urlencode($code_installation).'&dbms_type='.$dbms_type.'&dadabik_version='.urlencode('4.4'));
			
		if ($upgrade_process_result === false){
			echo '<p>There are problems with the Internet connection, the on-line registration is not possible......</p>';
		} // end if
		else{
			echo '<p>On-line registration done......</p>';
		} // end else
	}
	
	manage_other_infos_installation('update', 'upgrade_version','4.4');
	manage_other_infos_installation('update', 'upgrade_time',time());
	manage_other_infos_installation('update', 'upgrade_dbms',$dbms_type);
	
	echo "<p>......DaDaBIK correctly upgraded!!";
} // end if ($upgrade === 1)
else{
	echo '<p>This upgrade procedure can be used just to upgrade DaDaBIK 4.4 beta to DaDaBIK 4.4. The upgrade will not affect your DaDaBIK configuration and your data but please create a backup of your database before upgrading';
	echo '<form action="upgrade_4.4.php" method="post">';
	echo '<input type="hidden" name="upgrade" value="1">';
	
	echo "<input type=\"checkbox\" name=\"register\" value=\"1\" checked> Communicate this upgrade to www.dadabik.org<br>Just the DBMS type (e.g. MySQL) and the DaDaBIK version (e.g. 4.3) will be transmitted, NO PERSONAL INFORMATION. This is usefult to keep track of the DaDaBIK installation upgrades worldwide.<br><br>";
	echo '<input type="submit" value="Click this button to upgrade DaDaBIK from 4.4 beta to 4.4">';
	echo '</form>';
} // end else

// include footer
include ("./include/footer.php");
?>