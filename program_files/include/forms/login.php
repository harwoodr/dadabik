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


<br>
<form method="post" action="<?php echo $dadabik_login_file; ?>?function=check_login">
<table>
<tr><td class="td_label_login_form"><?php echo $login_messages_ar['username']; ?></td><td><input type="text" name="username_user" class="input_login_form"></td></tr>
<tr><td class="td_label_login_form"><?php echo $login_messages_ar['password']; ?></td><td><input type="password" name="password_user" class="input_login_form"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="login_button" value="<?php echo $login_messages_ar['login']; ?> >>"></td></tr>
</table>

</form>

