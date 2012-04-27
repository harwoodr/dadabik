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
// submit buttons
$submit_buttons_ar = array (
	"insert"    => "Insert a new record",
	"search/update/delete" => "Search/update/delete records",
	"insert_short"    => "Create new",
	"search_short" => "Search",
	"new_mailing" => "New mailing",
	"check_existing_mailing" => "Check existing mailing",
	"send_mailing" => "Send existing mailing",
	"insert_anyway"    => "Insert anyway",
	"search"    => "Search for record",
	"update"    => "Save",
	"ext_update"    => "Update your profile",
	"yes"    => "Yes",
	"no"    => "No",
	"go_back" => "Go back",
	"edit" => "Edit",
	"delete" => "Delete",
	"details" => "Details",
	"remove_from_mailing" => "Remove from mailing",
	"remove_all_from_mailing" => "Remove all from mailing",
	"send" => "Send",
	"add_to_mailing" => "Add to the mailing",
	"print_labels" => "Print labels",
	"create_this_mailing" => "                 Create this mailing                 ",
	"change_table" => "Change table"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Create new item",
	"show_all_records" => "Show all records",
	"logout" => "Logout",
	"top" => "Top",
	"last_search_results" => "Last search results",
	"show_all" => "Show all",
	"home" => "Home",
	"select_operator" => "Select the operator:",
	"all_conditions_required" => "All the conditions required",
	"any_conditions_required" => "Any of the conditions required",
	"all_contacts" => "All contacts",
	"removed" => "removed",
	"please" => "Please",
	"and_check_form" => "and check the form.",
	"and_try_again" => "and try again.",
	"none" => "none",
	"are_you_sure" => "Are you sure?",
	"delete_all" => "delete all",
	"really?" => "Really?",
	"delete_are_you_sure" => "You are going to delete the record below, are you sure?",
	"required_fields_missed" => "You haven't filled out some required fields.",
	"alphabetic_not_valid" => "You have inserted a/some number/s into an alphabetic field.",
	"numeric_not_valid" => "You have inserted a/some non-numeric characters into a numeric field.",
	"email_not_valid" => "The e-mail address/es you have inserted is/are not valid.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.",
	"url_not_valid" => "The url/s you have inserted is/are not valid.",
	"phone_not_valid" => "The phone number/s you have inserted is/are not valid.<br>Please use the \"+(country code)(area code)(number)\" format e.g. +390523599318.",
	"date_not_valid" => "You have inserted one or more not valid dates.",
	"similar_records" => "The records below seem similar to the one you want to insert.<br>What do you want to do?",
	"no_records_found" => "No records found.",
	"records_found" => "records found",
	"number_records" => "Number of records: ",
	"details_of_record" => "Details of the record",
	"edit_record" => "Edit the record",
	"back_to_the_main_table" => "Back to the main table",
	"previous" => "Previous",
	"next" => "Next",
	"edit_profile" => "Update your profile information",
	"i_think_that" => "I think that ",
	"is_similar_to" => " is similar to ",
	"page" => "Page ",
	"of" => " of ",
	"records_per_page" => "records per page",
	"day" => "Day",
	"month" => "Month",
	"year" => "Year",
	"administration" => "Administration",
	"create_update_internal_table" => "Create or update internal table",
	"other...." => "other....",
	"insert_record" => "Insert a new record",
	"search_records" => "Search for records",
	"exactly" => "exactly",
	"like" => "like",
	"required_fields_red" => "Required fields are in red.",
	"insert_result" => "Insert result:",
	"record_inserted" => "Record correctly inserted.",
	"update_result" => "Update result:",
	"record_updated" => "Record correctly updated.",
	"profile_updated" => "Your profile has been correctly updated.",
	"delete_result" => "Delete result:",
	"record_deleted" => "Record correctly deleted.",
	"duplication_possible" => "Duplication is possible",
	"mail_to_records" => "mail to all records found",
	"number_mails" => "Number of message you are going to send: ",
	"specify_subject_body" => "Please specify subject and body of the message",
	"create_new_mailing" => "Create a new mailing",
	"mailing_name" => "Mailing name: ",
	"mailing_type" => "Mailing type: ",
	"specify_mailing_name" => "(Specify a name to identify this mailing, e.g. workshop_2002, please don't use single/double quote!!!!!!)",
	"email_specific_fields" => "Blue fields are e-mail related, ignore them if you choose normal mail",
	"from" => "From: ",
	"subject" => "Subject: ",
	"body" => "Body: ",
	"dear" => "Dear",
	"john_smith" => "Mr. John B. Smith",
	"start_sending" => "Start sending......",
	"mailing_sent" => "......Mailing sent",
	"mail_to" => "Mail to",
	"sent" => "sent",
	"send" => "Send",
	"e-mail" => "e-mail",
	"normal_mail" => "normal mail",
	"attachment" => "Attachment: ",
	"additional_notes_mailing" => "Additional notes<br>(e.g. reason of the mailing)",
	"please_specify_mailing_name" => "Please specify a name for the mailing.",
	"please_specify_mailing_type" => "Please specify a type for the mailing.",
	"please_specify_mailing_subject" => "Please specify a subject for the mailing.",
	"please_specify_mailing_body" => "Please specify a body for the mailing.",
	"mailing_name_already_used" => "The name you have choosed has been already used, please change it.",
	"filename_already_used" => "Attachment filename already used, please change name.",
	"mailing" => "Mailing",
	"created" => "created",
	"all_records_found" => "all records found",
	"add_contacts_to" => "Add contacts to",
	"check_mailing" => "Check mailing",
	"the_mailing" => "The mailing",
	"mailing_already_sent" => "This mailing has been already sent!!",
	"was_composed_by" => "was composed by",
	"contacts" => "contacts",
	"you_have_added" => "You have added",
	"of_which_duplicated" => "of which is/are duplicated",
	"of_which_with_no_info" => "of which having not enough information",
	"is_composed_by" => "is now composed by",
	"go_back_to_home_send_or_add" => "You can now go back to the home page and send the mailing, or search and add other contacts to this mailing.",
	"fields_max_length" => "You have inserted too much text in one or more field.",
	"you_are_going_unsubscribe" => "you are going to be removed from our mailing list. Proceed?",
	"you_have_unsubscribed" => "you have been successfully removed from our mailing list.",
	"change_profile_url" => "To change your profile information please visit this page: ",
	"removed_mailing_list_url" => "To be removed from the mailing list please visit this page: ",
	"city" => "City",
	"province" => "Province",
	"zip_code" => "ZIP code",
	"prefix" => "Prefix",
	"no_city_found" => "No cities found",
	"print_warning" => "Please set the print margin to (0,0,0,0) (top, bottom, left, right) in your browser in order to print correctly the labels.",
	"current_upload" => "Current file",
	"delete" => "delete",
	"total_records" => "Total records",
	"confirm_delete?" => "Confirm delete?",
	"is_equal" => "is equal to",
	"contains" => "contains",
	"starts_with" => "starts with",
	"ends_with" => "ends with",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Export to CSV",
	"new_insert_executed" => "New insert executed",
	"new_update_executed" => "New update executed",
	"null" => "Null",
	"is_null" => "is null",
	"is_empty" => "is empty"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Error, the internal database is empty.",
	"get" => "Error in get variables.",
	"no_unique_update_id" => "Your update link has expired.<br>Please contact the webmaster at <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> to get a new link.<br>We apologies for the inconvenience caused.",
	"no_unique_unsubscribe_id" => "Your unsubscribe link is not correct.<br>Please contact the webmaster at <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> for any questions you may have.<br>We apologies for the inconvenience caused.",
	"no_functions" => "Error, no functions selected<br>Please go back to the homepage.",
	"no_unique_key" => "Error, you haven't any primary key in your table.",	
	"upload_error" => "An error occurred when uploading a file.",
	"no_authorization_update_delete" => "You don't have the authorization to modify/delete this record.",
	"no_authorization_view" => "You don't have the authorization to view this record.",
	"deleted_only_authorizated_records" => "Only the records on which you have the authorization have been deleted.",
	"record_from_which_you_come_no_longer_exists" => "The record from which you come no longer exists.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ",
	"this_record_is_the_last_one" => "This record is the last one.",
	"this_record_is_the_first_one" => "This record is the first one."
	);

//login messages
$login_messages_ar = array(
	"username" => "username",
	"password" => "password",
	"please_authenticate" => "You need to be identified to continue",
	"login" => "login",
	"username_password_are_required" => "Username and password are required",
	"pwd_gen_link" => "create password",
	"incorrect_login" => "Username or password incorrect",
	"pwd_explain_text" =>"Insert a word to be used as password and press <b>Crypt it!</b>.",
	"pwd_explain_text_2" =>"Press <b>Register</b> to write it in the below form",
	"pwd_suggest_email_sending"=>"You may want to send yourself a mail to remeber the password",
	"pwd_send_link_text" =>"send mail!",
	"pwd_encrypt_button_text" => "Cript it!",
	"pwd_register_button_text" => "Register password and exit"
);
?>