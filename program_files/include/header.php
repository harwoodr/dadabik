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
<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>DaDaBIK database front-end - www.dadabik.org</title>
<link rel="stylesheet" href="css/styles_screen.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/styles_print.css" type="text/css" media="print">
<meta name="Generator" content="DaDaBIK 2.0 beta  - http://www.dadabik.org/">
<script language="JavaScript">
<!--
function fill_cap(city_field){

	temp = 'document.contacts_form.'+city_field+'.value';

	city = eval(temp);
	cap=open("fill_cap.php?city="+escape(city),"schermo","toolbar=no,directories=no,menubar=no,width=170,height=250,resizable=yes");
}
//-->
</script>

<script language="javascript" type="text/javascript" src="include/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "specific_textareas",
	theme : "advanced",
	editor_selector : "rich_editor"
});
</script>

<script language="Javascript">
function show_admin_help(title, content)
{
    if (document.all) {
        topoffset=document.body.scrollTop;
        leftoffset=document.body.scrollLeft;
        WIDTH=document.body.clientWidth;
        HEIGHT=document.body.clientHeight;
    } else {
        topoffset=pageYOffset;
        leftoffset=pageXOffset;
        WIDTH=window.innerWidth;
        HEIGHT=window.innerHeight;
    }

    newtop=((HEIGHT-200)/2)+topoffset;
    
    if (document.all) {
        newleft=150;
    } else {
        newleft=((WIDTH-400)/2)+leftoffset;
    }

    document.getElementById('div_help').style.left=newleft;
    document.getElementById('div_help').style.top=newtop;

    document.getElementById('div_help_content_title').innerHTML = '<div align="right"><a href="javascript:hide_help();" style="text-decoration:none;color:#ff7700">X</a></div>'+title;
    document.getElementById('div_help_content_text').innerHTML = content;
    document.getElementById('div_help').style.display = 'block';
}

function hide_help()
{
    document.getElementById('div_help').style.display = 'none';
    document.getElementById('div_help_content_title').innerHTML = "";
    document.getElementById('div_help_content_text').innerHTML = "";
}

</script>


<script language="Javascript">
//opens a js popup with customizable options. Popup will close and open
//again upon call from pwd-generator link
var mywindow;
function generic_js_popup(url,name,w,h){
	if (mywindow!=null && !mywindow.closed){
	mywindow.close();
	}
var options;
options = "resizable=yes,toolbar=0,status=1,menubar=0,scrollbars=1, width=" + w + ",height=" + h + ",left="+(screen.width-w)/2+",top="+(screen.height-h)/6; 
mywindow = window.open(url,name,options);
mywindow.focus();
}

function enable_disable_input_box_insert_edit_form(null_checkbox_prefix, year_field_suffix, month_field_suffix, day_field_suffix)
// goal: set the status (disabled|enabled) of each input element of the insert|edit form, depending on the status (checked|not checked) of the corresponding null value checkbox (if it exists)
// input: null_checkbox_prefix, year_field_suffix, month_field_suffix, day_field_suffix
{
	var count = document.getElementById('dadabik_main_form').length;
	var null_checkbox_prefix_length = null_checkbox_prefix.length;

	// for each element of the form
	for (i=0;i<count;i++)
	{
		// if the element is a null value checkbox element
		if (document.getElementById('dadabik_main_form').elements[i].name.substr(0,null_checkbox_prefix_length) == null_checkbox_prefix){

			// check if the field is a date field type

			var year_field_name = document.getElementById('dadabik_main_form').elements[i].name.substr(null_checkbox_prefix_length) + year_field_suffix;
				
			var a = new Array;
			a = document.getElementsByName(year_field_name);

			if (a[0]){ // if the relative year field exists
				field_type_is_date = 1;
			} // end if
			else {
				field_type_is_date = 0;
			} // end else

			if (field_type_is_date == 1){
				// get the name of the relative input controls

				var month_field_name = document.getElementById('dadabik_main_form').elements[i].name.substr(null_checkbox_prefix_length) + month_field_suffix;

				var day_field_name = document.getElementById('dadabik_main_form').elements[i].name.substr(null_checkbox_prefix_length) + day_field_suffix;

				// and set the relative input controls enabled/disabled depending on the null value checkbox status (checked|not checked)
				var a = new Array;
				a = document.getElementsByName(year_field_name);
				
				var b = new Array;
				b = document.getElementsByName(month_field_name);

				var c = new Array;
				c = document.getElementsByName(day_field_name);


				if (document.getElementById('dadabik_main_form').elements[i].checked == true){
					a[0].disabled = true;
					b[0].disabled = true;
					c[0].disabled = true;
				} // end if
				else{
					a[0].disabled = false;
					b[0].disabled = false;
					c[0].disabled = false;
				} // end else
			} // end if
			else {
				// get the name of the relative input control
				var field_name = document.getElementById('dadabik_main_form').elements[i].name.substr(null_checkbox_prefix_length);

				// and set the relative input control enabled/disabled depending on the null value checkbox status (checked|not checked)
				var a = new Array;
				a = document.getElementsByName(field_name);

				if (document.getElementById('dadabik_main_form').elements[i].checked == true){
					a[0].disabled = true;
				} // end if
				else{
					a[0].disabled = false;
				} // end else
			} // end else
		} // end if
	} // end for
} // end function

function enable_disable_input_box_search_form(field_name, select_type_select_suffix, year_field_suffix, month_field_suffix, day_field_suffix)
// goal: set the status (disabled|enabled) of an input element of the search form, depending on the status of the corresponding select_type_select field
// input: field_name, select_type_select_suffix, year_field_suffix, month_field_suffix, day_field_suffix
{
	
	// check if the field is a date field type

	var year_field_name = field_name + year_field_suffix;
		
	var a = new Array;
	a = document.getElementsByName(year_field_name);

	if (a[0]){ // if the relative year field exists
		field_type_is_date = 1;
	} // end if
	else {
		field_type_is_date = 0;
	} // end else

	if (field_type_is_date == 1){
		// get the name of the relative input controls

		var month_field_name = field_name + month_field_suffix;

		var day_field_name = field_name + day_field_suffix;

		// and set the relative input controls enabled/disabled depending on the null value checkbox status (checked|not checked)
		var a = new Array;
		a = document.getElementsByName(year_field_name);

		var b = new Array;
		b = document.getElementsByName(month_field_name);

		var c = new Array;
		c = document.getElementsByName(day_field_name);

		var d = new Array;
		d = document.getElementsByName(field_name+select_type_select_suffix);

		if (d[0].value == 'is_null'){
			a[0].disabled = true;
			b[0].disabled = true;
			c[0].disabled = true;
		} // end if
		else{
			a[0].disabled = false;
			b[0].disabled = false;
			c[0].disabled = false;
		} // end else
	} // end if
	else{
		// set the relative input control enabled/disabled depending on the null value checkbox status (checked|not checked)
		var a = new Array;
		a = document.getElementsByName(field_name);

		var b = new Array;
		b = document.getElementsByName(field_name+select_type_select_suffix);

		if (b[0].value == 'is_null' || b[0].value == 'is_empty'){
			a[0].disabled = true;
		} // end if
		else{
			a[0].disabled = false;
		} // end else
	} // end else

} // end function

</script>
</head>

<body 
<?php
if (isset($_GET["type_mailing"])){
	if ($_GET["type_mailing"] == "labels") {
		echo " leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" onload=\"javascript:alert('".$normal_messages_ar["print_warning"]."')\"";
	} // end if
} // end if
?>
<?php
if ($page_name === 'main' && ($function === 'insert' || $function === 'edit' || $function === 'update')) {
?>
onload="javascritp:enable_disable_input_box_insert_edit_form('<?php echo $null_checkbox_prefix.'\', \''.$year_field_suffix.'\', \''.$month_field_suffix.'\', \''.$day_field_suffix; ?>')"
<?php
} // end if
?>
>
<div id="div_help">
<div id="div_help_content">
<div id="div_help_content_title"></div>
<div id="div_help_content_text"></div>
</div>
</div>
<table class="main_table" cellpadding="10">
<tr>
<td valign="middle" align="center">
<!--<h1 class="onlyscreen" align="center">DaDaBIK</h1>-->


<?php
if ($page_name === 'main' || $page_name === 'admin' || $page_name === 'interface_configurator' || $page_name === 'install' || $page_name === 'upgrade') {
	$class_temp = 'table_interface_container';
}
else{
	$class_temp = 'table_interface_container_login';
}

?>
<table class="<?php echo $class_temp; ?>" cellspacing="0">
<tr class="table_interface_container_tr_logo">
<td>
<?php
if ($page_name === 'main' || $page_name === 'login') {
	echo '<img src="images/logo.gif">';
}
elseif ($page_name === 'admin' || $page_name === 'interface_configurator') {
	echo '<table width="100%" cellspacing="0" cellpadding="0"><tr><td><img src="images/logo.gif">';
	echo '</td><td align="right"><font size="10">ADMIN AREA</font>&nbsp;</td></tr></table>';
}
elseif ($page_name === 'install') {
	echo '<table width="100%" cellspacing="0" cellpadding="0"><tr><td><img src="images/logo.gif">';
	echo '</td><td align="right"><font size="10">INSTALLATION</font>&nbsp;</td></tr></table>';
}
elseif ($page_name === 'upgrade') {
	echo '<table width="100%" cellspacing="0" cellpadding="0"><tr><td><img src="images/logo.gif">';
	echo '</td><td align="right"><font size="10">UPGRADE</font>&nbsp;</td></tr></table>';
}
?>
</td>
</tr>

<?php
if ($page_name === 'main') {
?>

<tr class="table_interface_container_tr_menu">
<td>
	<table class="table_interface_container_table_menu"><tr>
	
	<td><a class="home" href="<?php echo $dadabik_main_file; ?>">&nbsp;&nbsp;<?php echo $normal_messages_ar["home"]; ?>&nbsp;&nbsp;</a>
<?php
if (!isset($is_items_table) || $is_items_table !== 1){ // if it's an item table no insert search show results and show all links
if ($function === 'show_insert_form' || $function === 'insert'){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
<?php
if ($enable_insert == "1"){
?>
	 </td><td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="<?php $dadabik_main_file; ?>?function=show_insert_form&table_name=<?php echo urlencode($table_name); ?>">&nbsp;&nbsp;<?php echo $submit_buttons_ar["insert_short"]; ?>&nbsp;&nbsp;</a>
<?php
}
?>

<?php
if ($function === 'show_search_form'){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
 
 </td><td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="<?php $dadabik_main_file; ?>?function=show_search_form&table_name=<?php echo urlencode($table_name); ?>">&nbsp;&nbsp;<?php echo $submit_buttons_ar["search_short"]; ?>&nbsp;&nbsp;</td>
 
  <?php
if ($function === 'search' && (!isset($empty_search_variables) || (int)$empty_search_variables !== 1)){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
 
 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="<?php $dadabik_main_file; ?>?function=search&table_name=<?php echo urlencode($table_name); ?>">&nbsp;&nbsp;<?php echo $normal_messages_ar["last_search_results"]; ?>&nbsp;&nbsp;</a></td>
 
 
 <?php
if ($function === 'search' && isset($empty_search_variables) && (int)$empty_search_variables === 1){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>

 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="<?php $dadabik_main_file; ?>?function=search&empty_search_variables=1&table_name=<?php echo urlencode($table_name); ?>">&nbsp;&nbsp;<?php echo $normal_messages_ar["show_all"]; ?>&nbsp;&nbsp;</a>
<?php
/*
if ( $table_name === $users_table_name && ($function === 'edit' || $function === 'show_insert_form' || $function === 'insert')){
?>
 </td><td nowrap><a class="bottom_menu" href="javascript:void(generic_js_popup('pwd.php','',600,300))">&nbsp;&nbsp;<?php echo $login_messages_ar['pwd_gen_link']; ?>&nbsp;&nbsp;</a>
 <?php
}
*/
}
?>
<?php
if ($enable_authentication === 1){
?>
	 </td><td style="white-space: nowrap;"><a class="bottom_menu" href="<?php echo $dadabik_login_file; ?>?function=logout">&nbsp;&nbsp;<?php echo $normal_messages_ar["logout"]; ?>&nbsp;&nbsp;</a>
<?php
}
if ($current_user_is_administrator === 1) {
?>
 </td><td style="width:*"><a class="bottom_menu" href="admin.php">&nbsp;&nbsp;<?php echo $normal_messages_ar["administration"]; ?>&nbsp;&nbsp;</a>
 <?php
} // end if
?>
 </td>
 <td style="width:100%"></td>
</tr>
</table>

</td>
</tr>
<?php
}
?>



<?php
// this is just for the admin area
if ($page_name === 'admin' || $page_name === 'interface_configurator') {
?>

<tr class="table_interface_container_tr_menu_admin_area">
<td>
	<table class="table_interface_container_table_menu_admin_area"><tr>
	
	
	
 
  <?php
if ($page_name === 'admin' && $function !== 'show_donation_form' && $function !== 'process_donation_form' && $function !== 'show_help' && $function !== 'show_hotscripts_feedback'){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
 
 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="admin.php">&nbsp;&nbsp;<?php echo 'Admin home'; ?>&nbsp;&nbsp;</a></td>
 
   <?php
if ($page_name === 'interface_configurator'){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
 
 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="internal_table_manager.php?table_name=<?php echo urlencode($table_name); ?>">&nbsp;&nbsp;<?php echo 'Interface configurator'; ?>&nbsp;&nbsp;</a></td>
 
      <?php
if ($page_name === 'admin' && $function === 'show_help'){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
 
 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="admin.php?function=show_help">&nbsp;&nbsp;<?php echo 'Help'; ?>&nbsp;&nbsp;</a></td>
 
    <?php
if ($page_name === 'admin' && ($function === 'show_donation_form' || $function === 'process_donation_form')){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
<!-- 
 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="admin.php?function=show_donation_form">&nbsp;&nbsp;<?php echo 'Donation & feedback'; ?>&nbsp;&nbsp;</a></td>
 
      <?php
if ($page_name === 'admin' && $function === 'show_hotscripts_feedback'){
	$class_temp = 'bottom_menu_active';
}
else{
	$class_temp = 'bottom_menu';
}
?>
 -->
 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="admin.php?function=show_hotscripts_feedback">&nbsp;&nbsp;<?php echo 'Hotscripts feedback'; ?>&nbsp;&nbsp;</a></td>
 


<?php
$class_temp = 'bottom_menu';
?> 
 
 <td style="white-space: nowrap;"><a class="<?php echo $class_temp; ?>" href="<?php echo $dadabik_main_file; ?>">&nbsp;&nbsp;<?php echo 'Exit admin area'; ?>&nbsp;&nbsp;</a></td>
 
 
 <td style="width:100%"></td>
</tr>
</table>

</td>
</tr>
<?php
}
?>

<?php
// this is just for the install page
if ($page_name === 'install') {
?>

<tr class="table_interface_container_tr_menu_admin_area">
<td>
	<table class="table_interface_container_table_menu_admin_area"><tr>
 <td style="width:100%"></td>
</tr>
</table>

</td>
</tr>
<?php
}
?>

<?php
// this is just for the upgrade page
if ($page_name === 'upgrade') {
?>

<tr class="table_interface_container_tr_menu_admin_area">
<td>
	<table class="table_interface_container_table_menu_admin_area"><tr>
 <td style="width:100%"></td>
</tr>
</table>

</td>
</tr>
<?php
}
?>










<tr>
<td>
<?php
if ($page_name === 'main' || $page_name === 'admin' || $page_name === 'interface_configurator' || $page_name === 'install'){
	echo '<table cellpadding="5" height="400">';
}
else{
	echo '<table cellpadding="5">';
}
?>
<tr>
<td valign="top"></br>