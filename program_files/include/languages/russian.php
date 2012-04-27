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
	"insert"    => "Вставить новую запись",
	"search/update/delete" => "Поиск/обновить/удалить",
	"insert_short"    => "Создать новый",
	"search_short" => "Поиск",
	"new_mailing" => "Новая почта",
	"check_existing_mailing" => "Проверить почту",
	"send_mailing" => "Отправить почту",
	"insert_anyway"    => "Вставить полюбому",
	"search"    => "Поиск записи",
	"update"    => "Сохранить",
	"ext_update"    => "Обновить профиль",
	"yes"    => "Да",
	"no"    => "Нет",
	"go_back" => "Назад",
	"edit" => "Правка",
	"delete" => "Удалить",
	"details" => "Детали",
	"remove_from_mailing" => "Удалить из почты",
	"remove_all_from_mailing" => "Удалить все из почты",
	"send" => "Отправить",
	"add_to_mailing" => "Добавить в почту",
	"print_labels" => "Печать меток",
	"create_this_mailing" => "                Создать сообщение                  ",
	"change_table" => "Изменить таблицу"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Создать новый",
	"show_all_records" => "Показать все записи",
	"logout" => "Выход",
	"top" => "Верх",
	"last_search_results" => "Последний поиск",
	"show_all" => "Показать все",
	"home" => "Назад",
	"select_operator" => "Выбрать оператор:",
	"all_conditions_required" => "Поиск по нескольким полям",
	"any_conditions_required" => "Поиск по одному полю",
	"all_contacts" => "Все контакты",
	"removed" => "удалено",
	"please" => "Пожалуйста",
	"and_check_form" => "и проверте форму.",
	"and_try_again" => "и попробуйте снова.",
	"none" => "нет",
	"are_you_sure" => "Вы уверены?",
	"delete_all" => "удалить все",
	"really?" => "Уверены?",
	"delete_are_you_sure" => "Вы собираетесь удалить запись, вы уверены?",
	"required_fields_missed" => "Вы не заполнили некоторые обязательные поля.",
	"alphabetic_not_valid" => "Вы вставили число в текстовую область",
	"numeric_not_valid" => "Вы вставили не цифровое значение в цифровое поле",
	"email_not_valid" => "Не верный адрес e-mail.",
	"timestamp_not_valid" => "Не верный timestamp",
	"url_not_valid" => "The url/s you have inserted is/are not valid.",
	"phone_not_valid" => "Неверный номер телефона.<br>Надо так \"+(код страны)(код области)(номер)\" например +79222359931.",
	"date_not_valid" => "Неверная дата",
	"similar_records" => "Есть совпадающие записи.<br>Что вы хотите?",
	"no_records_found" => "Не найдено записей",
	"records_found" => "записей найдено",
	"number_records" => "Номеров записей: ",
	"details_of_record" => "Детали записей",
	"edit_record" => "Редактировать запись",
	"back_to_the_main_table" => "Назад в главную таблицу",
	"previous" => "Предыдущий",
	"next" => "Следующий",
	"edit_profile" => "Обновить профиль",
	"i_think_that" => "Я думаю, что ",
	"is_similar_to" => " подробно ",
	"page" => "страница ",
	"of" => " из ",
	"records_per_page" => "записей на странице",
	"day" => "День",
	"month" => "Месяц",
	"year" => "год",
	"administration" => "Администрирование",
	"create_update_internal_table" => "Создать или обновить таблицу",
	"other...." => "другие...",
	"insert_record" => "Вставить новую запись",
	"search_records" => "Поиск записей",
	"exactly" => "точно",
	"like" => "содержит",
	"required_fields_red" => "Обязательные поля в красном",
	"insert_result" => "Вставить результат:",
	"record_inserted" => "Запись успешно добавлена.",
	"update_result" => "Обновить результат:",
	"record_updated" => "Запись удачно обновлена.",
	"profile_updated" => "Ваш профиль обновлен.",
	"delete_result" => "Удалить результаты:",
	"record_deleted" => "Запись благополучно удалена",
	"duplication_possible" => "Дублирование возможно",
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
	"you_have_added" => "Успешно добавлено",
	"of_which_duplicated" => "of which is/are duplicated",
	"of_which_with_no_info" => "имеющий недостаточно информации",
	"is_composed_by" => "состоит из",
	"go_back_to_home_send_or_add" => "You can now go back to the home page and send the mailing, or search and add other contacts to this mailing.",
	"fields_max_length" => "Слишком длинный текст.",
	"you_are_going_unsubscribe" => "you are going to be removed from our mailing list. Proceed?",
	"you_have_unsubscribed" => "you have been successfully removed from our mailing list.",
	"change_profile_url" => "To change your profile information please visit this page: ",
	"removed_mailing_list_url" => "To be removed from the mailing list please visit this page: ",
	"city" => "City",
	"province" => "Province",
	"zip_code" => "ZIP code",
	"prefix" => "Prefix",
	"no_city_found" => "No cities found",
	"print_warning" => "Текущий файл",
	"delete" => "удалить",
	"total_records" => "Всего записей",
	"confirm_delete?" => "Точно удалить?",
	"is_equal" => "полностью",
	"contains" => "часть",
	"starts_with" => "с начала",
	"ends_with" => "с конца",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Экспорт в CSV формат",
	"new_insert_executed" => "Запись добавлена",
	"new_update_executed" => "Запись обновлена",
	"null" => "Без записи",
	"is_null" => "без значения",
	"is_empty" => "пусто"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Ошибка, внутренняя база данных пуста.",
	"get" => "Ошибка получения переменной",
	"no_unique_update_id" => "Your update link has expired.<br>Please contact the webmaster at <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> to get a new link.<br>We apologies for the inconvenience caused.",
	"no_unique_unsubscribe_id" => "Your unsubscribe link is not correct.<br>Please contact the webmaster at <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> for any questions you may have.<br>We apologies for the inconvenience caused.",
	"no_functions" => "Выбранная функция<br>Вернитесь на главную страницу.",
	"no_unique_key" => "Нет ключа в таблице",	
	"upload_error" => "Ошибка загрузки файла",
	"no_authorization_update_delete" => "Нужна авторизация для правки и удаления записи",
	"no_authorization_view" => "Вы не авторизированы для просмотра этой записи",
	"deleted_only_authorizated_records" => "Записи, на которых у Вас есть разрешение, были удалены.",
	"record_from_which_you_come_no_longer_exists" => "Отчет, из которого Вы не происходите больше, существует.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ",
	"this_record_is_the_last_one" => "Этот отчет - последний.",
	"this_record_is_the_first_one" => "Этот отчет - первый."
	);

//login messages
$login_messages_ar = array(
	"username" => "Логин",
	"password" => "Пароль",
	"please_authenticate" => "Нужно авторизоваться",
	"login" => "Вход",
	"username_password_are_required" => "Требуется авторизация",
	"pwd_gen_link" => "создать пароль",
	"incorrect_login" => "Введите логин и пароль",
	"pwd_explain_text" =>"Напишите пароль и нажмите <b>Записать!</b>.",
	"pwd_explain_text_2" =>"Нажмите <b>Регистрация</b> для записи в форму",
	"pwd_suggest_email_sending"=>"Вы можете отправить себе email с паролем",
	"pwd_send_link_text" =>"Отправить почту!",
	"pwd_encrypt_button_text" => "Записать!",
	"pwd_register_button_text" => "Зарегистрировать пароль и выйти"
);
?>