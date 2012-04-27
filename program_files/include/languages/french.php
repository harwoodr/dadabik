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
	"insert"    => "Insérer un nouvel enregistrement",
	"search/update/delete" => "Chercher/Mettre à jour/Effacer un enregistrement",
	"insert_short"    => "Insérer",
	"search_short" => "Chercher",
	"new_mailing" => "Nouveau Mailing",
	"check_existing_mailing" => "Contrôler le mailing existant",
	"send_mailing" => "Envoyer le mailing existant",
	"insert_anyway"    => "Insérer quand même",
	"search"    => "Chercher un enregistrement",
	"update"    => "Mettre à jour un enregistrement",
	"ext_update"    => "Mettre à jour votre profil",
	"yes"    => "Oui",
	"no"    => "Non",
	"go_back" => "Retour",
	"edit" => "Editer",
	"delete" => "Effacer",
	"details" => "Détails",
	"remove_from_mailing" => "Retirer du mailing",
	"remove_all_from_mailing" => "Retirer tous du mailing",
	"send" => "Envoyer",
	"add_to_mailing" => "Ajouter au mailing",
	"print_labels" => "Imprimer les étiquettes",
	"create_this_mailing" => "                 Créer ce mailing                 ",
	"change_table" => "Changer de table"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "InsŽrer un ŽlŽment",
	"show_all_records" => "Montrer tous les enregistrements",
	"logout" => "Se deconnecter",
	"top" => "Haut",
	"last_search_results" => "Résultats de la dernière recherche",
	"show_all" => "Tout Montrer",
	"home" => "Accueil",
	"select_operator" => "Sélectionner l'opérateur:",
	"all_conditions_required" => "Toutes conditions requises",
	"any_conditions_required" => "N'importe quelle condition requise",
	"all_contacts" => "Tous les contacts",
	"removed" => "retiré",
	"please" => "SVP",
	"and_check_form" => "et contrôler le formulaire.",
	"and_try_again" => "et essayer à nouveau.",
	"none" => "aucun",
	"are_you_sure" => "Etes-vous sûr?",
	"delete_all" => "Effacer tout",
	"really?" => "Vraiment?",
	"delete_are_you_sure" => "Effacer l'enregistrement ci-dessous, êtes-vous sûr?",
	"required_fields_missed" => "Vous n'avez pas rempli tous les champs requis.",
	"alphabetic_not_valid" => "Vous avez inséré un/plusieurs nombre(s) dans un champ lettre.",
	"numeric_not_valid" => "Vous avez inséré un/plusieurs caractères non numériques dans un champ numérique.",
	"email_not_valid" => "L'e-mail inséré n'est pas valide.",
	"timestamp_not_valid" => "L'horodatage insŽrŽ n'est pas valide.",
	"url_not_valid" => "Le(s) URL insérée(s) ne sont pas valides.",
	"phone_not_valid" => "Numéro de téléphone non valide.",
	"date_not_valid" => "Date(s) non valide(s)",
	"similar_records" => "Les enregistrements ci-dessous semblent être identiques à celui que vous voulez inséré.<br>Que voulez-vous faire?",
	"no_records_found" => "Pas d'enregistrement trouvé.",
	"records_found" => "enregistrements trouvés",
	"number_records" => "Nombre d'enregistrement: ",
	"details_of_record" => "Détails de l'enregistrement",
	"edit_record" => "Editer l'enregistrement",
	"back_to_the_main_table" => "Retour ˆ la table principale",
	"previous" => "Précédent",
	"next" => "Suivant",
	"edit_profile" => "Mettre à jour vos informations de profil",
	"i_think_that" => "Je pense que ",
	"is_similar_to" => " est identique à ",
	"page" => "Page ",
	"of" => " de ",
	"records_per_page" => "enregistrements par page",
	"day" => "Jour",
	"month" => "Mois",
	"year" => "Année",
	"administration" => "Administration",
	"create_update_internal_table" => "Créer ou mettre à jour une table interne",
	"other...." => "autres....",
	"insert_record" => "Insérer un nouvel enregistrement",
	"search_records" => "Chercher les enregistrements",
	"exactly" => "exactement",
	"like" => "comme",
	"required_fields_red" => "Les champs requis sont en rouge.",
	"insert_result" => "Insérer le résultat:",
	"record_inserted" => "Enregistrement correctement inséré.",
	"update_result" => "Mettre à jour le résultat:",
	"record_updated" => "Enregistrement correctement mis à jour.",
	"profile_updated" => "Votre profil a correctement été mis à jour.",
	"delete_result" => "Effacer le résultat:",
	"record_deleted" => "Enregistrement correctement éffacé.",
	"duplication_possible" => "Duplication possible",
	"mail_to_records" => "mailer à tous les enregistrements trouvés",
	"number_mails" => "Nombre de messages que vous allez envoyer: ",
	"specify_subject_body" => "Spécifier le sujet et le corps SVP",
	"create_new_mailing" => "Créer un nouveau mailing",
	"mailing_name" => "Nom du mailing: ",
	"mailing_type" => "Type du mailing: ",
	"specify_mailing_name" => "(Specifiez un nom pour identifier ce mailing, ex. bonjour_2002, n'utilisez pas de citation simple/double SVP!!!!!!)",
	"email_specific_fields" => "Les champs bleus concernent les suivis de mailing, ignorez pour un mail normal",
	"from" => "De: ",
	"subject" => "Sujet: ",
	"body" => "Corps: ",
	"dear" => "Cher",
	"john_smith" => "Mr. John B. Smith",
	"start_sending" => "Envoyer......",
	"mailing_sent" => "......Mailing envoyé",
	"mail_to" => "Envoyer à",
	"sent" => "envoyé",
	"send" => "Envoyer",
	"e-mail" => "e-mail",
	"normal_mail" => "mail normal",
	"attachment" => "Pièces jointes: ",
	"additional_notes_mailing" => "Notes<br>(ex. raison du mail)",
	"please_specify_mailing_name" => "Specifiez un nom pour le mailing, SVP.",
	"please_specify_mailing_type" => "Specifiez un type pour le mailing, SVP.",
	"please_specify_mailing_subject" => "Specifiez un sujet pour le mailing, SVP.",
	"please_specify_mailing_body" => "Specifiez un corps pour le mailing, SVP.",
	"mailing_name_already_used" => "Le nom que vous avez choisi est déjà utilisé, choisissez en un autre.",
	"filename_already_used" => "Le nom de la pièce jointe éxiste déjà, choisissez en un autre.",
	"mailing" => "Mailing",
	"created" => "créé",
	"all_records_found" => "tous les enregistrements trouvés",
	"add_contacts_to" => "Ajouter des contacts à",
	"check_mailing" => "Contrôler le mailing",
	"the_mailing" => "Le mailing",
	"mailing_already_sent" => "Ce mailing a déjà été envoyé!!",
	"was_composed_by" => "a été rédigé par",
	"contacts" => "contacts",
	"you_have_added" => "Vous avez ajouté",
	"of_which_duplicated" => "dupliqué(s) de",
	"of_which_with_no_info" => "duquel il n'y a pas assez d'informations",
	"is_composed_by" => "est maintent rédigé par",
	"go_back_to_home_send_or_add" => "Vous pouvez retourner à la page d'accueil et envoyer le mail, ou chercher et ajouter d'autres contacts au mail.",
	"fields_max_length" => "Vous avez inséré trop de texte dans un/plusieur(s) champs.",
	"you_are_going_unsubscribe" => "Voulez-vous vraiment vous désabonner de la mailing list ?",
	"you_have_unsubscribed" => "vous êtes à présent désinscrit de la mailing list.",
	"change_profile_url" => "Si vous désirez faire partie de notre communauté, cliquez le lien suivant pour vérifier vos informations: ",
	"removed_mailing_list_url" => "Pour vous désabonner, visitez ce: ",
	"city" => "Ville",
	"province" => "Région",
	"zip_code" => "Code Postal",
	"prefix" => "Préfixe",
	"no_city_found" => "Pas de ville trouvée",
	"print_warning" => "Etablissez la marge d'impression à (0,0,0,0) (top, bottom, left, right) dans votre navigateur de façon à correctement imprimer les étiquettes.",
	"current_upload" => "Fichier en cours",
	"delete" => "Effacer",
	"total_records" => "Total Enregistrements",
	"confirm_delete?" => "Confirmer la supression ?",
	"is_equal" => "est égal à",
	"contains" => "contient",
	"starts_with" => "commence par",
	"ends_with" => "se termine par",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Exporte en format CSV",
	"new_insert_executed" => "Nouvelle insertion effectuée",
	"new_update_executed" => "Nouvelle mise à jour effectuée",
	"null" => "Null",
	"is_null" => "est NULL",
	"is_empty" => "est vide"

	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Erreur, la base interne est vide.",
	"get" => "Erreur dans la récupération des variables.",
	"no_unique_update_id" => "Votre lien de mise à jour a expiré.",
	"no_unique_unsubscribe_id" => "Votre lien de désabonnement est incorrect.",
	"no_functions" => "Erreur, pas de fonction sélectionnée.<br>Retournez à l'accueil.",
	"no_unique_key" => "Erreur, vous n'avez pas de clé primaire dans votre base.",	
	"upload_error" => "Une erreur est intervenue durant le transfert.",
	"no_authorization_update_delete" => "Vous n'avez pas l'autorisation de modifier / detruire cet enregistrement.",
	"no_authorization_view" => "Vous n'avez pas l'autorisation de voir cet enregistrement.",
	"deleted_only_authorizated_records" => "Seuls les enregistrements pour lesquels vous etes autorise ont ete detruits.",
	"record_from_which_you_come_no_longer_exists" => "L'enregistrement d'où vous venez n'existe plus.",
	"date_not_representable" => "Une date dans cet enregistrement ne correspond pas au format 'Jour / Mois / AnnŽe' de DaDaBIK. Sa valeur est :  ", // to change
	"this_record_is_the_last_one" => "Cet enregistrement est le dernier.",
	"this_record_is_the_first_one" => "Cet enregistrement est le premier."
	);

//login messages
$login_messages_ar = array(
	"username" => "nom d'utilisateur",
	"password" => "mot de passe",
	"please_authenticate" => "Vous devez vous identifier pour continuer",
	"login" => "login", 
	"username_password_are_required" => "nom d'utilisateur et mot de passe sont obligatoires", 
	"pwd_gen_link" => "créer un mot de passe",
	"incorrect_login" => "Nom d'utilisateur ou Mot de passe incorrect",
	"pwd_explain_text" =>"Tapez un mot à utiliser comme mot de passe et pressez <b>Cryptage !</b>.",
	"pwd_explain_text_2" =>"Pressez <b>Enregistrer le Mot de passe et Quitter</b> pour l'écrire sur le formulaire ci-dessous", 
	"pwd_suggest_email_sending"=>"Vous pouvez vous envoyer un email pour mémoriser le mot de passe", 
	"pwd_send_link_text" =>"Envoi courrier!",
	"pwd_encrypt_button_text" => "Cryptage !", 
	"pwd_register_button_text" => "Enregistrer le Mot de passe et Quitter" 
)
?>