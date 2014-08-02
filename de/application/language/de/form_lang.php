<?php
/*
|--------------------------------------------------------------------------
| Ionize Form library Language file
|
| Copy this file to /themes/<my_theme/language/xx/form_lang.php
| to replace these translations with your one.
|
|
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Labels
| To be used for form labels.
| Also used by Form Validation to display "human" name for each field in the errors messages.
| Declared as "label" for each fields of forms set in /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_label_email'] = 'E-Mail';
$lang['form_label_name'] = 'Name';
$lang['form_label_firstname'] = 'Vorname';
$lang['form_label_lastname'] = 'Nachname';
$lang['form_label_subject'] = 'betreff';
$lang['form_label_message'] = 'nachricht';
$lang['form_label_screen_name'] = 'Anzeigename';
$lang['form_label_username'] = 'Benutzername';
$lang['form_label_birthdate'] = 'Geburtsdatum';
$lang['form_label_gender'] = 'Geschlecht';
$lang['form_label_gender_female'] = 'weiblich';
$lang['form_label_gender_male'] = 'männlich';
$lang['form_label_gender_unisex'] = 'keine Angabe';
$lang['form_label_address'] = 'Adresse';
$lang['form_label_phone'] = 'Telefonnummer';
$lang['form_label_company'] = 'Firma';
$lang['form_label_country'] = 'Land';
$lang['form_label_city'] = 'Stadt';
$lang['form_label_state'] = 'Staat';
$lang['form_label_zip'] = 'PLZ';
$lang['form_label_login'] = 'Login';
$lang['form_label_password'] = 'Passwort';
$lang['form_label_password_confirmation'] = 'Passwort bestätigen';
$lang['form_label_delete_account'] = 'Konto löschen';


/*
|--------------------------------------------------------------------------
| Placeholders
|--------------------------------------------------------------------------
*/
$lang['form_placeholder_email'] = 'E-Mail eingeben';
$lang['form_placeholder_name'] = 'Name eingeben';
$lang['form_placeholder_firstname'] = 'Vorname eingeben';
$lang['form_placeholder_lastname'] = 'Nachname eingeben';
$lang['form_placeholder_subject'] = 'Betreff eingeben';
$lang['form_placeholder_message'] = 'Nachricht eingeben';
$lang['form_placeholder_screen_name'] = 'Anzeigename eingeben';
$lang['form_placeholder_username'] = 'Benutzername eingeben';
$lang['form_placeholder_birthdate'] = 'Geburtsdatum eingeben';
$lang['form_placeholder_gender'] = 'Geschlecht eingeben';
$lang['form_placeholder_address'] = 'Adresse eingeben';
$lang['form_placeholder_phone'] = 'Telefonnummer eingeben';
$lang['form_placeholder_company'] = 'Firma eingeben';
$lang['form_placeholder_country'] = 'Land eingeben';
$lang['form_placeholder_city'] = 'Stadt eingeben';
$lang['form_placeholder_state'] = 'Staat eingeben';
$lang['form_placeholder_zip'] = 'Postleitzahl eingeben';
$lang['form_placeholder_login'] = 'Benutezrname eingeben';
$lang['form_placeholder_password'] = 'Passwort eingeben';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['form_button_send'] = "Senden";
$lang['form_button_send_message'] = "Nachrichte senden";
$lang['form_button_save'] = "Speichern";
$lang['form_button_register'] = "Registrieren";
$lang['form_button_login'] = "Login";
$lang['form_button_logout'] = "Logout";
$lang['form_button_post'] = "Post";
$lang['form_button_answer'] = "Antworten";
$lang['form_button_save_profile'] = "Profil speichern";
$lang['form_button_password_back'] = "Passwort anfordern";

/*
|--------------------------------------------------------------------------
| Emails
|--------------------------------------------------------------------------
*/
// Registration : Email to Admin
$lang['mail_website_registration_subject'] = "Jemand hat sich auf der Website registriert";
$lang['mail_website_registration_message'] = "Hier sind die Details des neuen Benutzers.";

// Registration : Email to user
$lang['mail_user_registration_subject'] = "Registrierung bei %s";
$lang['mail_user_registration_intro'] = "Liebe(r) %s,";
$lang['mail_user_registration_message'] = "Sie haben sich soben bei <b>%s</b> registriert.<br/>Hier sind Ihre Anmeldedaten.";
$lang['mail_user_registration_activate'] = "Vor dem ersten Login muss das Konto noch aktiviert werden. Folgend Sie dazu bitten diesem Link:";

// New Password : Email to user
$lang['mail_user_password_subject'] = "Neues Passwort für Ihren Account bei %s";
$lang['mail_user_password_intro'] = "Liebe(r) %s,";
$lang['mail_user_password_message'] = "Sie haben soeben ein neues Passwort für die Website unter <b>%s</b> angefordert.<br/>Hier sind die neuen Daten:";

// Contact : Email to Admin
$lang['mail_website_contact_subject'] = "Nachricht vom Kontaktformular";
$lang['mail_website_contact_message'] = "Ein Besucher hat eine Nachricht mittels Kontaktformular versendet.";

// Contact : Email to user
$lang['mail_user_contact_subject'] = "Vielen Dank für ihre Nachricht an %s";
$lang['mail_user_contact_intro'] = "Liebe(r) %s,";
$lang['mail_user_contact_message'] = "Vielen Dank für Ihre Nachricht.<br/>WIr werden so schnell als möglich antworten.";
$lang['mail_user_contact_posted_data'] = "Hier sind die Daten, welche vom Kontaktformular übermittelt wurden.";

// Message about automatic message
$lang['mail_automatic_message_warning'] = "Bitte antworten Sie nicht auf diese E-Mail. Die Nachricht wurde automatisch generiert.";


/*
|--------------------------------------------------------------------------
| Messages
| Success messages for contact / login / registration forms
| Declared as 'success' for each form in form setup : /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_not_logged'] = "Sie sind nicht eingeloggt.";

$lang['form_alert_success_title'] = 'Erfolg!';
$lang['form_alert_success_message'] = 'Alles in Ordnung!';
$lang['form_alert_error_title'] = 'Hoppala! Etwas ist schiefgelaufen!';
$lang['form_alert_error_message'] = 'Überprüfen Sie Ihre Angaben, warscheinlich fehlt etwas ...';

$lang['form_login_success_message'] = "Erfolgreich eingeloggt.";
$lang['form_login_error_message'] = "Fehler : Überprüfen SIe Ihren Benutzernamen und Ihr Passwort.";
$lang['form_login_not_found_message'] = "Benutername nich gefunden.";
$lang['form_login_not_activated_message'] = "Dieser Benutzeraccount wurde noch nicht aktiviert. Durchsuchen Sie Ihren Posteingang nach der Mail mit dem Aktivierungslink.";

$lang['form_register_success_message'] = "Sie wurden erfolgreich registriet.<br/>Wir haben soeben eine E-Mail mit weiteren Anweisungen zur Aktivirung des Kontos an Ihre Adresse gesendet.";
$lang['form_register_error_message'] = "Fehler: registrirung nicht erfolgreich.";

$lang['form_profile_success_message'] = "Profil gespeichert";
$lang['form_profile_error_message'] = "Dieser Benutzer existiert bereits. Bitte einen anderen Benutzernamen oder E-Mail verwenden.";
$lang['form_profile_account_deleted'] = "Konto gelöscht";

$lang['form_password_error_message'] = "Hoppala, es ist ein Fehler aufgetreten.";
$lang['form_password_not_found_message'] = "Diese E-Mail Adresse scheint nicht im System zu sein";
$lang['form_password_success_message'] = "Eine E-Mail mit dem neuen Passwort wurde an die angegebene Adresse gesendet.";

$lang['form_contact_error_title'] = 'Hoppala, es ist ein Fehler aufgetreten.';
$lang['form_contact_error_message'] = 'vermutlich wurde ein Feld nicht ausgefüllt. Überprüfen sie Bitte das Formular ...';
$lang['form_contact_success_title'] = 'Ihre nachricht wurde erfolgreich abgesendet!';
$lang['form_contact_success_message'] = 'Vielen Dank für Ihre Nachricht, wir werden sobald als möglich antowrten!';

$lang['form_note_password_change'] = 'Leer lassen, wenn das Passwort nicht geändert werden soll';




/*
|--------------------------------------------------------------------------
| Validation Errors of custom callbacks
|
| For custom form validation translation, copy the wished file from
| /system/language/xx/form_validation_lang.php to your theme language folder
| /themes/my_theme/language/xx/form_validation_lang.php and adapt it.
|
|--------------------------------------------------------------------------
|
*/

