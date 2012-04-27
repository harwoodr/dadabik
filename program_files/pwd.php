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
include('./include/config.php');

if ($db_library === 'adodb'){
	include('./include/adodb'.DADABIK_ADODB_VERSION.'/adodb.inc.php');
	
	// hack for oracle, all field names fetched in lower case
	if ($dbms_type === 'oci8po') {
		define('ADODB_ASSOC_CASE', 0); 
	} // end if
}

include ("./include/languages/".$language.".php");
?>
<html>
	<head>
	<title></title>
	<link rel="stylesheet" href="./css/styles_screen.css" type ="text/css" media="screen">
	<script>
	function register_pwd(pwd){
		opener.document.forms['contacts_form'].elements['<?php echo $users_table_password_field; ?>'].value = document.forms['encrypter'].elements['encrypted'].value;
		self.close();
	}
	</script>
	<body>
<?php
echo "<table class=\"main_table\" cellpadding=\"5\"><tr><td valign=\"top\"><b>Password md5 crypter</b></td></tr><tr><td valign=\"top\">";
echo $login_messages_ar['pwd_explain_text'];
echo "<form action=\"pwd.php\" name=\"pwd_gen\" method=\"POST\">";
echo "<input type=\"text\" name=\"pwd\" value=\"";
if (isset($_POST['pwd'])) {
	echo $_POST['pwd'];
} // end if
echo "\" size=\"40\"><br>";
echo "<input type=\"submit\" name=\"\" value=\"".$login_messages_ar['pwd_encrypt_button_text']."\">";
echo "</form>";
if(isset($_POST['pwd'])){
	$encrypted = md5($_POST['pwd']);
	echo $login_messages_ar['pwd_explain_text_2'];
	echo "<form name=\"encrypter\">";
	echo "<input type=\"text\" name=\"encrypted\" value=\"$encrypted\" size=\"40\"><br>";
	echo "<input type=\"button\" name=\"encrypt-it\" value=\"".$login_messages_ar['pwd_register_button_text']."\" onclick=register_pwd('".$encrypted."')>";
	echo "</form>";
	//echo $login_messages_ar['pwd_suggest_email_sending']." ( <a href=\"mailto:?subject=password&body=".$_POST['pwd']."\">".$login_messages_ar['pwd_send_link_text']."</a> )";
}
echo "</td></tr></table>";
?>
	</body>
	</head>
</html>