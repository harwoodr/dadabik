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


<p>
<form method="post" action="admin.php?function=process_donation">

<table cellpadding="5">
<tr>
<td valign="top">
<img src="http://www.dadabik.org/images/eugenio.jpg"></td>
<td>Hi, I'm Eugenio Tacchini, the author of DaDaBIK.</br></br>

You have installed DaDaBIK on <?php echo substr($date_time_installation, 0, 10); ?>: if you are using it and you find this program useful, you are supposed to donate some money, based on how much you can afford and how much DaDaBIK is useful for you. Consider that in the last years many commercial applications having the same purposes of DaDaBIK has been created and to use them you have to pay a price, even if you don't get the source code.</p>

<p>DaDaBIK is made of thousands of code lines and costed me hundreds of work hours; if you can't afford a big donation (for example you are a student or you live in a poor country) consider that even one euro could be a good contribution if everybody gave it.</p>


<input type="radio" name="dan" value="1" checked>Ok, I want to make a donation
</br><input type="radio" name="dan" value="2">I already made a donation in the past
<!--</br><input type="radio" name="dan" value="3">Remind me in a week-->
</br><input type="radio" name="dan" value="4">I don't want to donate (if you want you can specify the reason in the feedback box below)

<p>You also have the opportunity to send a feedback about your DaDaBIK experience (also specify your name and e-mail if you need an answer)</p>
<textarea name="dfe" cols="80" rows="10"></textarea>

</br></br><input type="submit" value="Next &gt;&gt;"> (the information you submit in this page will be send to www.dadabik.org, you need an Internet connection)
</td>
</tr>

</form>

