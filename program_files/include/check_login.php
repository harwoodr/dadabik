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
if ($enable_authentication === 1) {
	if ( !isset($_SESSION['logged_user_infos_ar']) ) {
		header ('Location: '.$site_url.$dadabik_login_file.'?function=show_login_form');
		die();
	} // end if

	// get the current user
	$current_user = $_SESSION['logged_user_infos_ar']['username_user'];

	// if the user type correspond to the administrator type
	if ($_SESSION['logged_user_infos_ar']['user_type_user'] === $users_table_user_type_administrator_value) {
		$current_user_is_administrator = 1;
	} // end if
	else {
		$current_user_is_administrator = 0;
	} // end else

} // end if
else {
	// set the username to 'nobody' if the authentication is disabled (useful if there are some ID_user fields)
	$current_user = 'nobody';
	$current_user_is_administrator = 0;
} // end else

?>