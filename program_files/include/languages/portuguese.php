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
	"insert"    => "Inserir",
	"search/update/delete" => "Buscar/atualizar/cancelar",
	"insert_short"    => "Inserir",
	"search_short" => "Buscar",
	"new_mailing" => "Nova mensagem",
	"check_existing_mailing" => "Verificar mensagem existente",
	"send_mailing" => "Enviar mensagem",
	"insert_anyway"    => "Inserir sempre",
	"search"    => "Buscar",
	"update"    => "Atualizar",
	"ext_update"    => "Estender atualização",
	"yes"    => "Sim",
	"no"    => "Nao",
	"go_back" => "Retornar",
	"edit" => "Editar",
	"delete" => "Cancelar",
	"details" => "Detalhes",
	"remove_from_mailing" => "Remover da mensagem",	
	"remove_all_from_mailing" => "Remover todos da mensagem",
	"send" => "Enviar",
	"add_to_mailing" => "Adicionar à mensagem",
	"print_labels" => "Imprimir etiquetas",
	"create_this_mailing" => "                 Criar esta mensagem                 ",
	"change_table" => "Modificar tabela"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Visualizar todos os dados",
	"logout" => "Logout",
	"top" => "Top",
	"last_search_results" => "Resultados da última pesquisa",
	"show_all" => "Visualizar todos",
	"home" => "Início",
	"select_operator" => "Selecionar operador",
	"all_conditions_required" => "Todas as condições necessárias",
	"any_conditions_required" => "Quaisquer condições necessárias",
	"all_contacts" => "Todos os contatos",
	"removed" => "Cancelado",
	"please" => "Por favor",
	"and_check_form" => "E verificar a forma",
	"and_try_again" => "E tentar novamente",
	"none" => "Nenhum",
	"are_you_sure" => "Tem certeza?",
	"delete_all" => "Cancelar todos",
	"really?" => "Tem certeza?",
	"delete_are_you_sure" => "Tem certeza de que quer cancelar este dado?",
	"required_fields_missed" => "Faltam alguns campos necessários",
	"alphabetic_not_valid" => "alfabéticos não válidos",
	"numeric_not_valid" => "Você inseriu um/alguns caráter/es não numéricos em um campo numérico",
	"email_not_valid" => "Email não vãlido",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Url não válida",
	"phone_not_valid" => "Numero de telefone não válido",
	"date_not_valid" => "Data não válida",
	"similar_records" => "Dados semelhantes",
	"no_records_found" => "Os dados não foram encontrados",
	"records_found" => "Dados encontrados",
	"number_records" => "Número de dados",
	"details_of_record" => "Detalhes do dado",
	"edit_record" => "Modificar o dado",
	"previous" => "Anteriores",
	"next" => "Próximos",
	"back_to_the_main_table" => "Back to the main table", // to change
	"edit_profile" => "Editar o perfil",	
	"i_think_that" => "Eu acho que",
	"is_similar_to" =>" É parecido com ",
	"page" => "Página ",
	"of" => " de ",
	"records_per_page" => "registros por página",
	"day" => "Dia",	
	"month" => "Mês",
	"year" => "Ano",
	"administration" => "Administração",
	"create_update_internal_table" => "Criar ou atualizar a tabela interna",
	"other...." => "outro....",
	"insert_record" => "Inserir un novo dado",
	"search_records" => "Buscar dados",	
	"exactly" => "Exatamente",
	"like" => "parecido",
	"required_fields_red" => "Os campos necessários estão em vermelho",
	"insert_result" => "Inserir o resultado",
	"record_inserted" => "Dado inserido",
	"update_result" => "Resultado da atualização",
	"record_updated" => "Dado atualizado",
	"profile_updated" => "Perfil atualizado",
	"delete_result" => "Cancelar resultado",
	"record_deleted" => "Dado cancelado",
	"duplication_possible" => "Duplicaçao possível",
	"mail_to_records" => "endereçar a todos os dados",
	"number_mails" => "Número de mensagens ",
	"specify_subject_body" => "Especificar o texto do objeto",	
	"create_new_mailing" => "Criar nova mensagem",
	"mailing_name" => "Nome da mensagem: ",
	"mailing_type" => "Tipo de mensagem: ",
	"specify_mailing_name" => "Especificar o nome da mensagem",
	"email_specific_fields" => "mensagem campos especificos",
	"from" => "De: ",
	"subject" => "assunto",
	"body" => "Texto: ",
	"dear" => "prezado",
	"john_smith" => "Senhor José da Silva",
	"start_sending" => "Começar enviando",
	"mailing_sent" => "Mensagem enviada",
	"mail_to" => "Endereçar a",
	"sent" => "Enviada",
	"send" => "Enviar",
	"e-mail" => "Mensagem",
	"normal_mail" => "Mensagem normal",
	"attachment" => "Anexo",
	"additional_notes_mailing" => "Notas adicionais_mensagem",
	"please_specify_mailing_name" => "Por favor especificar um nome para a mensagem",
	"please_specify_mailing_type" => "Por favor especificar o tipo de mensagem",
	"please_specify_mailing_subject" => "Por favor especificar o assunto da mensagem",
	"please_specify_mailing_body" => "Por favor especificar o texto da mensagem",
	"mailing_name_already_used" => "O nome da mensagem já existe",
	"filename_already_used" => "O nome do arquivo já existe",
	"mailing" => "Mensagem",
	"created" => "criado",
	"all_records_found" => "Todos os dados encontrados",
	"add_contacts_to" => "Adicionar os contatos a",
	"check_mailing" => "Verificar mensagem",
	"the_mailing" => "a mensagem",
	"mailing_already_sent" => "Mensagem já enviada",
	"was_composed_by" => "foi composto por",	
	"contacts" => "contatos",
	"you_have_added" => "Você adicionou",	
	"of_which_duplicated" => "Dos quais_duplicatas",
	"of_which_with_no_info" => "Dos quais_sem informação",
	"is_composed_by" => "è atualmente composto por",
	"go_back_to_home_send_or_add" => "Voltar ao início_enviar ou adicionar",
	"fields_max_length" => "Campos_máximo_comprimento",
	"you_are_going_unsubscribe" => "Você será cancelado da mensagem",
	"you_have_unsubscribed" => "Voce foi cancelado da mensagem",
	"change_profile_url" => "Mudar perfil_URL",
	"removed_mailing_list_url" => "Remover da mensagem _URL",
	"city" => "Cidade",
	"province" => "Provincia",
	"zip_code" => "Código postal",
	"prefix" => "Prefixo",
	"no_city_found" => "Nenhuma cidade encontrada",
	"print_warning" => "aviso de impressão",
	"current_upload" => "Upload corrente",
	"delete" => "Cancelar",
	"total_records" => "Dados totais",
	"confirm_delete?" => "Confirmar o cancelamento?",
	"is_equal" => "è igual a",
	"contains" => "Contém",
	"starts_with" => "Começa com",
	"ends_with" => "Termina com",
	"greater_than" => "Maior do que",
	"less_then" => "Menos que",
	"export_to_csv" => "Exportar a CSV",
	"new_insert_executed" => "Novos dados inseridos",
	"new_update_executed" => "Novas atualizações inseridas",
	"null" => "Nulo",
	"is_null" => "è nulo",
	"is_empty" => "è vazio"
);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "A base de dados interna está vazia",
	"get" => "obter",
	"no_unique_update_id" => " não foi identificada atualização específica",
	"no_unique_unsubscribe_id" => "não foi identificado cancelameto específico ",
	"no_functions" => "nenhuma função ",
	"no_unique_key" => "nenhuma tecla específica ",	
	"upload_error" => "erro de upload ",
	"no_authorization_update_delete" => "não foi autorizado, atualizar cancelamento ",
	"no_authorization_view" => "não existe visualização de autorização",
	"deleted_only_authorizated_records" => "somente cancelados dados autorizados ",
	"record_from_which_you_come_no_longer_exists" => "O registro de onde você vem não existe mais.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Este registro é o último.",
	"this_record_is_the_first_one" => "Este registro é o primeiro."
	);
	
//login messages
$login_messages_ar = array(
	"username" => "nome do usuário",
	"password" => "senha",
	"please_authenticate" => "Por favor autenticar",
	"login" => "nome do usuário",
	"username_password_are_required" => "Username and password são necessárias",
	"pwd_gen_link" => "criar senha",
	"incorrect_login" => "nome do usuário incorreto.",
	"pwd_explain_text" =>"Inserir uma palavra para ser usada como senha e apertar <b>Crypt it!</b>.",
	"pwd_explain_text_2" =>"Apertar <b>Registrar</b> para escreve-la na forma abaixo",
	"pwd_suggest_email_sending"=>"Sugerir mensagem a ser enviada",
	"pwd_send_link_text" =>"enviar mensagem!",
	"pwd_encrypt_button_text" => "cifrar o proximo botão",
	"pwd_register_button_text" => "Registrar a senha e sair"
)
?>
