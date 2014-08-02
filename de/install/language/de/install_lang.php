<?php

$lang = array();

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] = 'Ionize Installation';
$lang['title_welcome'] = 'Willkommen bei Ionize !';

$lang['title_system_check'] = 		'Ergebnis der Systemprüfung';
$lang['title_database_settings'] = 	'Datenbankeinstellungen';
$lang['title_user_account'] = 	'Adminbenutzer';
$lang['title_default_language'] = 	'Standardsprache';
$lang['title_sample_data'] = 	'Beispieldaten installieren?';

$lang['button_next_step'] = 		'Weiter';
$lang['button_skip_next_step'] = 	'Diesen Schritt überspringen';
$lang['button_save_next_step'] = 	'Speichern und weiter';
$lang['button_install_test_data'] = 	"Beispieldaten installieren";
$lang['button_start_migrate'] = 		'Datenbankmigration starten';

$lang['nav_check'] = 'Systemprüfung';
$lang['nav_db'] = 'Datenbank';
$lang['nav_settings'] = 'Einstellungen';
$lang['nav_end'] = 'Ende';
$lang['nav_data'] = 'Beispieldaten';


/*
|--------------------------------------------------------------------------
| System check
|--------------------------------------------------------------------------
*/
$lang['php_version'] = 			'PHP >= 5.3';
$lang['php_version_found'] = 	'PHP version';
$lang['mysql_support'] = 		'MySQL unterstützung';
$lang['mysql_version_found'] = 	'MySQL version';
$lang['file_uploads'] = 		'Dateiupload';
$lang['mcrypt'] = 				'PHP Mcrypt Bibliothek';
$lang['gd_lib'] = 				'PHP GD Bibliothek';
$lang['write_config_dir'] = 	'<strong>/application/config/</strong>';
$lang['write_files'] = 			'<strong>/files/*</strong>';
$lang['write_themes'] = 		'<strong>/themes/*</strong>';
$lang['config_check_errors'] = 	'Einige Grundvoraussetzungen werden nicht erfüllt.<br/>Bitte korrigieren Sie diese, um die Installation fortzusetzen.';
$lang['welcome_text'] = 		"<p>Die folgenden Schritte helfen bei der Installation von ionize.</p><p>Es werden die Ergebnisse der Grundvoraussetzungsüberprüfung angezeigt.<br/>Falls eine VOraussetzung nicht erfültl ist, korrigieren Sie diese bitte und laden die Seite neu.</p>";
$lang['write_check_text'] = 	"<p>Die folgenden Ordner und Dateien müssen beschreibbar sein ...</p>";
$lang['title_folder_check'] = 	"Diese Ordner müssen beschreibbar sein";
$lang['title_files_check'] = 	"Diese Dateien müssen beschreibbar sein";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/
$lang['database_driver'] = 			'Treiber';
$lang['database_hostname'] = 		'Hostname';
$lang['database_name'] = 			'Datenbank';
$lang['database_username'] = 		'Benutzer';
$lang['database_password'] = 		'Passwort';
$lang['database_create'] = 			'Erstelle die Datenbank';
$lang['title_database_create'] = 	'Initialisiere Datenbank';
$lang['db_create_text'] = 			"<p>Geben Sie bitte die Datenbankeinstellungen ein.<br/>Falls ein Upgrade durchgeführt wird, erkennt das ionize und passt die vorhandene Datenbank an.</p><p><strong>Wichtig:</strong> Bei einem update vorher unbedingt ein Datenbankbackup anlegen.</p>";
$lang['db_create_prerequisite'] = 			"Der Benutzer muss zur Datenbankerstellunge berechtigt sein.<br/>Falls die Datenbank bereits besteht, diese Option nicht aktivieren.";
$lang['database_error_missing_settings'] = 	'Einige Angaben fehlen.<br/>Bitte alle Felder ausfüllen!';
$lang['database_success_install'] = 		'<b class="ex">Die Datenbank wurde erfolgreich angelegt.</strong>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">Datenbank OK.</strong><br/>Da die Datenbank bereits besteht, wird der Schritt zu den Website-Einstellungen übersprungen.';
$lang['database_success_migrate'] = 		'<b class="ex">Die Datenbank wurde erfolgreich aktualisiert.</strong>';
$lang['database_error_coud_not_connect'] = 		'Die Verbindung zur Datenbank schlug mit den angegeben Daten fehl.';
$lang['database_error_database_dont_exists'] = 		"Die Datenbank exisitiert nicht!";
$lang['database_error_writing_config_file'] = 		"<strong>Fehler :</strong><br/>Die Datei <b style=\"color:#000;\">/application/config/database.php</strong> konnte nicht geschrieben werden!<br/> Prüfen Sie die Schreibrechte.";
$lang['database_error_coud_not_write_database'] = 		"<strong>Fehler :</strong><br/> Konnte keine Daten in die Datenbank schreiben.<br/>Prüfen Sie die Datenbankrechte.";
$lang['database_error_coud_not_create_database'] = "Der Installer konnte die Datenbank nicht erstellen. Prüfen sie den Datenbanknamen und/oder die Rehte";
$lang['database_error_no_ionize_tables'] = 			"Die gewählte Datenbank scheint keine ionize-Daten zu enthalten. Bitte überprüfen.";
$lang['database_error_no_users_to_migrate'] = 		"Keine Benutzer zum migrieren gefunden";
$lang['database_migration_from'] = 			'Diese Datenbank muss aktualisiert werden.<br/>Upgrade von Version: ';
$lang['database_migration_text'] = 		"<p class=\"error\"><strong>Hinweis :</strong><br/> Die Datenbank wird nun aktualisiert.<strong><br/>Bitte sichern Sie ihre Daten vor diesem Schritt.</p>";


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['lang_code'] = 		'Code (de, de-DE)';
$lang['lang_name'] = 		'Label';
$lang['settings_default_lang_title'] = 		'Standardsprache';
$lang['settings_default_lang_text'] = 		'Die Website benötigt eine Standardsprache.<br/>Unter <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">Wikipedia ISO 639-1 </a> befinden sich weitere Informationen zu Sprachcodes.';
$lang['settings_error_missing_lang_code'] = "Der Sprachcode ist erforderlich";
$lang['settings_error_missing_lang_name'] = "Der Sprachenname ist erforderlinch";
$lang['settings_error_lang_code_2_chars'] = "Der Sprachcode mus zweistellig sein. Bsp.: \"de\"";
$lang['settings_error_lang_code_8_chars'] = "Der Sprachcode darf maximal acht Zeichen enthalten. Bsp.: \"de-DE\"";
$lang['settings_error_write_rights'] = "Keine Schreibrechte für <strong>/application/config/language.php</strong>. Bitte prüfen Sie die Rechte.";
$lang['settings_error_write_rights_config'] = "Keine Schreibrechte für <strong>/application/config/config.php</strong>. Bitte prüfen Sie die Rechte.";
$lang['settings_error_admin_url'] = "Die URL zum Administrationspanel muss ein alphanumerischer String ohne Leerzeichen und ohne Sonderzeichen sein.";
$lang['settings_admin_url_title'] = 		'URL zum Administrationspanel';
$lang['settings_admin_url_text'] = 		'Es wird dringend empfohlen, <strong>nicht</strong> die Standardeinstellung zu verwenden.';
$lang['admin_url'] = 'Admin URL';

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] = 	'Mit diesen Daten können Sie sich im Admin-panel einloggen.';
$lang['username'] = 			'Benutzername (min. 4 Zeichen)';
$lang['firstname'] = 			'Vorname';
$lang['lastname'] = 			'Nachname';
$lang['screen_name'] = 			'Voller Name';
$lang['email'] = 				'Email';
$lang['password'] = 			'Passwort (min. 4 Zeichen)';
$lang['password2'] = 			'Passwort bestätigen';
$lang['user_error_missing_settings'] = 			'Bitte alle Felder ausfüllen!';
$lang['user_error_not_enough_char'] = 			'Benutezrname und Passwort müssen mindesten 4 Zeichen lang sein!';
$lang['user_error_email_not_valid'] = 			'E-Mail scheint nicht gültig zu sein. Bitte überprüfen.';
$lang['user_error_passwords_not_equal'] = 		'Passwörter stimmen nicht überein.	';
$lang['user_info_admin_exists'] = 		'Es gibt bereits einen Admin-Benutzer.<br/>Sie können diesen Schritt überspringen, wenn Sie keinen neuen Account anlegen oder einen bestehenden aktualisieren möchten.<br/><br/>WICHITG : Der Schlüssel der alten Website muss kopiert werden, um sich mit bestehenden Benutzerdaten einloggen zu können:<br/>Siehe: /application/config/config.php -> $config[\'encryption_key\']';
$lang['encryption_key'] = 			'Encryption Key';
$lang['encryption_key_text'] = 		"Ionize benötigt zur Verschlüsselung einen 128 bit Schlüssel.<br />Mit diesem Schlüssel werden die Benutzeraccounts und alle privaten Daten verschlüsselt.<br/>Er wird in <strong>/application/config/config.php</strong> gespeichert.";
$lang['no_encryption_key_found'] = 	"Der Schlüssel wurde nicht gefunden. Der Benutzeraccount wurde nicht migriert. <strong>Sie müssen einen neuen Admin-Benuter anlegen</strong>.";


/*
|--------------------------------------------------------------------------
| Data
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] = 	"<p>Falls Sie ionize das erste mal ausprobieren, wird dringend empfohlen, die Beispieldaten zu installieren.<br/>Die Testinstallation enthält: </p><ul><li>Einen kompletten Datensatz zum Testen des CMS mit einer bestehenden Website,</li><li>eine vollständige Beispielvorlage</li></ul>";
$lang['title_skip_this_step'] = "Überspringe diesen Schritt";

$lang['title_finish'] = 		'Installation abgeschlossen';
$lang['finish_text'] = 			'<strong>WICHTIG</strong>: <br/>Das "<strong>/install</strong>" Verzeichnis muss gelöscht oder umbenannt werden, denn darüber können beliebig viele Admin-Benutzer hinzugefügt werden.';
$lang['button_go_to_admin'] = 	'Zum Administrationspanel';
$lang['button_go_to_site'] = 	'Zur Website';
