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
<?php
if ($page_name === 'main' || $page_name === 'admin' || $page_name === 'interface_configurator'){
	echo '<br><br>';
	$powered_alignment = 'right';
}
else{
	$powered_alignment = 'center';
}
	
?>

</td>
</tr>
</table>

</td>
</tr>
</table>


<br><br>
<div class="powered_by_dadabik" align="<?php echo $powered_alignment; ?>">Powered by: <a href="http://www.dadabik.org/">DaDaBIK</a> database front-end</div>
</td>
</tr>
</table>

</body>
</html>