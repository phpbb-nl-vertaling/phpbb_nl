<?php
/**
*
* acp_common [Dutch]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Beheerders',
	'ACP_ADMIN_LOGS'			=> 'Beheerderslog',
	'ACP_ADMIN_ROLES'			=> 'Beheerdersrollen',
	'ACP_ATTACHMENTS'			=> 'Bijlagen',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Bijlageninstellingen',
	'ACP_AUTH_SETTINGS'			=> 'Authenticatie',
	'ACP_AUTOMATION'			=> 'Automatisering',
	'ACP_AVATAR_SETTINGS'		=> 'Avatarinstellingen',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Verbannen',
	'ACP_BAN_EMAILS'			=> 'Verban e-mails',
	'ACP_BAN_IPS'				=> 'Verban IPs',
	'ACP_BAN_USERNAMES'			=> 'Verban gebruikersnamen',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Foruminstellingen',
	'ACP_BOARD_FEATURES'		=> 'Forumfuncties',
	'ACP_BOARD_MANAGEMENT'		=> 'Forumbeheer',
	'ACP_BOARD_SETTINGS'		=> 'Foruminstellingen',
	'ACP_BOTS'					=> 'Spiders/Robots',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Extensies',
	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Forums',
	'ACP_CAT_GENERAL'			=> 'Algemeen',
	'ACP_CAT_MAINTENANCE'		=> 'Onderhoud',
	'ACP_CAT_PERMISSIONS'		=> 'Permissies',
	'ACP_CAT_POSTING'			=> 'Berichten',
	'ACP_CAT_STYLES'			=> 'Stijlen',
	'ACP_CAT_SYSTEM'			=> 'Systeem',
	'ACP_CAT_USERGROUP'			=> 'Gebruikers en groepen',
	'ACP_CAT_USERS'				=> 'Gebruikers',
	'ACP_CLIENT_COMMUNICATION'	=> 'Cliënt communicatie',
	'ACP_COOKIE_SETTINGS'		=> 'Cookieinstellingen',
	'ACP_CRITICAL_LOGS'			=> 'Foutenlog',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Aangepaste profielvelden',

	'ACP_DATABASE'				=> 'Databasebeheer',
	'ACP_DISALLOW'				=> 'Niet toestaan',
	'ACP_DISALLOW_USERNAMES'	=> 'Niet toegestane gebruikersnamen',

	'ACP_EMAIL_SETTINGS'		=> 'E-mailinstellingen',
	'ACP_EXTENSION_GROUPS'		=> 'Beheer bijlage extensiegroepen',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Extensiebeheer',
	'ACP_EXTENSIONS'			=> 'Extensies',


	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forum gebaseerde permissies',
	'ACP_FORUM_LOGS'				=> 'Forumlogs',
	'ACP_FORUM_MANAGEMENT'			=> 'Forumbeheer',
	'ACP_FORUM_MODERATORS'			=> 'Forummoderators',
	'ACP_FORUM_PERMISSIONS'			=> 'Forumpermissies',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopieer forumpermissies',
	'ACP_FORUM_ROLES'				=> 'Forumrollen',

	'ACP_GENERAL_CONFIGURATION'		=> 'Algemene instellingen',
	'ACP_GENERAL_TASKS'				=> 'Algemene taken',
	'ACP_GLOBAL_MODERATORS'			=> 'Globale moderators',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globale permissies',
	'ACP_GROUPS'					=> 'Groepen',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Groep forumpermissies',
	'ACP_GROUPS_MANAGE'				=> 'Beheer groepen',
	'ACP_GROUPS_MANAGEMENT'			=> 'Groepsbeheer',
	'ACP_GROUPS_PERMISSIONS'		=> 'Groepspermissies',
	'ACP_GROUPS_POSITION'			=> 'Beheer groepposities',

	'ACP_ICONS'					=> 'Onderwerpiconen',
	'ACP_ICONS_SMILIES'			=> 'Onderwerpiconen/smilies',
	'ACP_INACTIVE_USERS'		=> 'Inactieve gebruikers',
	'ACP_INDEX'					=> 'ACP index',

	'ACP_JABBER_SETTINGS'		=> 'Jabber-instellingen',

	'ACP_LANGUAGE'				=> 'Taalbeheer',
	'ACP_LANGUAGE_PACKS'		=> 'Taalpaketten',
	'ACP_LOAD_SETTINGS'			=> 'Laadinstellingen',
	'ACP_LOGGING'				=> 'Logging',

	'ACP_MAIN'					=> 'Beheerdersoverzicht',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Beheer bijlagen',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Hier kan je bestanden toegevoegd aan berichten en privéberichten bekijken en verwijderen.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Beheer bijlage-extensies',
	'ACP_MANAGE_FORUMS'			=> 'Beheer forums',
	'ACP_MANAGE_RANKS'			=> 'Beheer rangen',
	'ACP_MANAGE_REASONS'		=> 'Beheer meldingen/afkeurredenen',
	'ACP_MANAGE_USERS'			=> 'Beheer gebruikers',
	'ACP_MASS_EMAIL'			=> 'Massa e-mail',
	'ACP_MESSAGES'				=> 'Berichten',
	'ACP_MESSAGE_SETTINGS'		=> 'Privéberichten instellingen',
	'ACP_MODULE_MANAGEMENT'		=> 'Modulebeheer',
	'ACP_MOD_LOGS'				=> 'Moderatorlog',
	'ACP_MOD_ROLES'				=> 'Moderatorrollen',

	'ACP_NO_ITEMS'				=> 'Er zijn nog geen items.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Berichtloze bijlagen',

	'ACP_PERMISSIONS'			=> 'Permissies',
	'ACP_PERMISSION_MASKS'		=> 'Permissiemaskers',
	'ACP_PERMISSION_ROLES'		=> 'Permissierollen',
	'ACP_PERMISSION_TRACE'		=> 'Permissietracering',
	'ACP_PHP_INFO'				=> 'PHP-informatie',
	'ACP_POST_SETTINGS'			=> 'Berichtinstellingen',
	'ACP_PRUNE_FORUMS'			=> 'Opschonen forums',
	'ACP_PRUNE_USERS'			=> 'Opschonen gebruikers',
	'ACP_PRUNING'				=> 'Opschonen',

	'ACP_QUICK_ACCESS'			=> 'Snelle toegang',

	'ACP_RANKS'					=> 'Rangen',
	'ACP_REASONS'				=> 'Melding/afkeurredenen',
	'ACP_REGISTER_SETTINGS'		=> 'Gebruikersregistratie-instellingen',

	'ACP_RESTORE'				=> 'Herstellen',

	'ACP_FEED'					=> 'Feedbeheer',
	'ACP_FEED_SETTINGS'			=> 'Feedinstellingen',

	'ACP_SEARCH'				=> 'Zoekinstellingen',
	'ACP_SEARCH_INDEX'			=> 'Zoekindex',
	'ACP_SEARCH_SETTINGS'		=> 'Zoekinstellingen',

	'ACP_SECURITY_SETTINGS'		=> 'Beveiliginsinstellingen',
	'ACP_SEND_STATISTICS'		=> 'Verstuur statistische informatie',
	'ACP_SERVER_CONFIGURATION'	=> 'Serverinstellingen',
	'ACP_SERVER_SETTINGS'		=> 'Serverinstellingen',
	'ACP_SIGNATURE_SETTINGS'	=> 'Onderschriftinstellingen',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_STYLE_MANAGEMENT'		=> 'Stijlbeheer',
	'ACP_STYLES'				=> 'Stijlen',
	'ACP_STYLES_CACHE'			=> 'Leeg Cache',
	'ACP_STYLES_INSTALL'		=> 'Installeer Stijlen',

	'ACP_SUBMIT_CHANGES'		=> 'Verstuur veranderingen',

	'ACP_TEMPLATES'				=> 'Sjablomen',
	'ACP_THEMES'				=> 'Thema\'s',

	'ACP_UPDATE'					=> 'Updating',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Gebruikers forumpermissies',
	'ACP_USERS_LOGS'				=> 'Gebruikerslogs',
	'ACP_USERS_PERMISSIONS'			=> 'Gebruikerspermissies',
	'ACP_USER_ATTACH'				=> 'Bijlagen',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Groepen',
	'ACP_USER_MANAGEMENT'			=> 'Gebruikersbeheer',
	'ACP_USER_OVERVIEW'				=> 'Overzicht',
	'ACP_USER_PERM'					=> 'Permissies',
	'ACP_USER_PREFS'				=> 'Voorkeuren',
	'ACP_USER_PROFILE'				=> 'Profiel',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Gebruikersrollen',
	'ACP_USER_SECURITY'				=> 'Gebruikersbeveiliging',
	'ACP_USER_SIG'					=> 'Onderschrift',
	'ACP_USER_WARNINGS'				=> 'Waarschuwingen',

	'ACP_VC_SETTINGS'					=> 'Spambot tegenmaatregelen',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA voorbeeld',
	'ACP_VERSION_CHECK'					=> 'Controleer op updates',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Bekijk beheerderspermissies',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Bekijk forum moderatiepermissies',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Bekijk forum gebaseerde permissies',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Bekijk globale moderatiepermissies',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Bekijk gebruikers gebaseerde permissies',

	'ACP_WORDS'					=> 'Woordcensuur',

	'ACTION'				=> 'Actie',
	'ACTIONS'				=> 'Acties',
	'ACTIVATE'				=> 'Activeer',
	'ADD'					=> 'Toevoegen',
	'ADMIN'					=> 'Administratie',
	'ADMIN_INDEX'			=> 'Beheerdersindex',
	'ADMIN_PANEL'			=> 'Beheerderspaneel',

	'ADM_LOGOUT'			=> 'ACP&nbsp;Afmelden',
	'ADM_LOGGED_OUT'		=> 'Succesvol afgemeld van het beheerderspaneel',

	'BACK'					=> 'Terug',

	'COLOUR_SWATCH'			=> 'Web-veilige kleurenpalet',
	'CONFIG_UPDATED'		=> 'Instellingen succesvol bijgewerkt.',

	'DEACTIVATE'				=> 'Deactiveer',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Het opgegeven pad “%s” bestaat niet.',
	'DIRECTORY_NOT_DIR'			=> 'Het opgegeven pad “%s” is geen map.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Het opgegeven pad “%s” is niet schrijfbaar.',
	'DISABLE'					=> 'Uitschakelen',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Download als',
	'DOWNLOAD_STORE'			=> 'Download of bestand opslaan',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Je kan het bestand direct downloaden of het bewaren in je <samp>store/</samp> map.',
	'DOWNLOADS'          		=> 'Downloads',

	'EDIT'					=> 'Wijzig',
	'ENABLE'				=> 'Inschakelen',
	'EXPORT_DOWNLOAD'		=> 'Download',
	'EXPORT_STORE'			=> 'Opslaan',

	'FILES_GONE'			=> 'Sommige bijlagen die je hebt geselecteerd om te verwijderen, bestaan niet. Ze kunnen al verwijderd zijn. De bijlagen die wel bestonden zijn verwijderd.',
	'FILES_STATS_WRONG'		=> 'Je bestandsstatistieken zijn mogelijk niet nauwkeurig en zal gesynchroniseerd moeten worden. Actuele waardes: aantal bijlagen = %1$d, totale grootte van bijlagen = %2$s.',

	'GENERAL_OPTIONS'		=> 'Algemene opties',
	'GENERAL_SETTINGS'		=> 'Algemene instellingen',
	'GLOBAL_MASK'			=> 'Globale permissiemasker',

	'INSTALL'				=> 'Installeer',
	'IP'					=> 'Gebruikers-IP',
	'IP_HOSTNAME'			=> 'IP-adres of hostnamen',

	'LOAD_NOTIFICATIONS'			=> 'Notificaties weergeven',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Geef de notificatielijst weer op iedere pagina (meestal in de kop).',
	'LOGGED_IN_AS'			=> 'Je bent aangemeld als:',
	'LOGIN_ADMIN'			=> 'Om het forum te beheren moet je aangemeld zijn als een geverifieerde gebruiker.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Om het forum te beheren moet je jezelf herverifiëren.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Je bent succesvol geverifieerd en je wordt nu doorgeleid naar het beheerderspaneel.',
	'LOOK_UP_FORUM'			=> 'Selecteer een forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Je kan meer dan één forum selecteren.',

	'MANAGE'				=> 'Beheer',
	'MENU_TOGGLE'			=> 'Verberg of geef het zijmenu weer',
	'MORE'					=> 'Meer',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Meer informatie »',
	'MOVE_DOWN'				=> 'Omlaag verplaatsen',
	'MOVE_UP'				=> 'Omhoog verplaatsen',

	'NOTIFY'				=> 'Notificatie',
	'NO_ADMIN'				=> 'Je hebt niet de juiste permissies om dit forum te beheren.',
	'NO_EMAILS_DEFINED'		=> 'Geen geldig e-mailadres gevonden.',
	'NO_FILES_TO_DELETE'	=> 'Bijlagen die je hebt geselecteerd om te verwijderen bestaan niet.',
	'NO_PASSWORD_SUPPLIED'	=> 'Je moet je wachtwoord invoeren om toegang te krijgen tot het beheerderspaneel.',

	'OFF'					=> 'Uit',
	'ON'					=> 'Aan',

	'PARSE_BBCODE'						=> 'Verwerk BBCode', //verwerk? voor parse?
	'PARSE_SMILIES'						=> 'Verwerk smilies',
	'PARSE_URLS'						=> 'Verwerk links',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissies overgebracht',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Je hebt momenteel de permissies van %1$s. Je kan nu het forum bezoeken met de permissies van deze gebruiker, maar niet het beheerderspaneel omdat beheerderspermissies niet zijn overgebracht. Je kan <a href="%2$s"><strong>je eigen permissies terugzetten</strong></a> elk moment.',
	'PROCEED_TO_ACP'					=> '%sGa door naar het beheerderspaneel%s',

	'REMIND'							=> 'Herinner',
	'RESYNC'							=> 'Synchroniseer',
	'RESYNC_FILES_STATS'				=> 'Synchroniseer bestandenstatistieken',
	'RESYNC_FILES_STATS_EXPLAIN'		=> 'Herberekend het totaal aantal en grootte van bestanden die zijn bijgevoegd aan berichten en privéberichten.',
	'RETURN_TO'							=> 'Terug naar…',

	'SELECT_ANONYMOUS'		=> 'Selecteer gastgebruiker',
	'SELECT_OPTION'			=> 'Selecteer optie',

	'SETTING_TOO_LOW'		=> 'De opgegeven waarde voor de instelling “%1$s” is te laag. De minimum geaccepteerde waarde is %2$d.',
	'SETTING_TOO_BIG'		=> 'De opgegeven waarde voor de instelling “%1$s” is te hoog. De maximum geaccepteerde waarde is %2$d.',
	'SETTING_TOO_LONG'		=> 'De opgegeven waarde voor de instelling “%1$s” is te lang. De maximum geaccepteerde lengte is %2$d.',
	'SETTING_TOO_SHORT'		=> 'De opgegeven waarde voor de instelling “%1$s” is te kort. De mimimum geaccepteerde lengte is %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Toon alle operaties',

	'TOTAL_SIZE'      		=> 'Totale grootte',

	'UCP'					=> 'Gebruikerspaneel',
	'USERNAMES_EXPLAIN'		=> 'Plaats iedere gebruikersnaam op een aparte regel.',
	'USER_CONTROL_PANEL'	=> 'Gebruikerspaneel',

	'WARNING'				=> 'Waarschuwing',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Deze pagina geeft de informatie over de versie van PHP die geïnstalleerd is op deze server. Het bevat detail van geladen modules, beschikbare variabelen en standaard instellingen. Deze informatie kan bruikbaar zijn bij het oplossen van problemen. Let op dat sommige hostingsbedrijven de informatie die hier getoond wordt limiteren voor beveiligingsredenen. Je wordt geadviseerd om geen details van deze pagina openbaar te maken tenzij er naar gevraagd wordt door een <a href="https://www.phpbb.com/about/team/">officiële phpBB.com teamlid</a>, <a href="http://www.phpbbservice.nl/forum/memberlist.php?mode=leaders">officiële phpBBservice.nl teamleden</a> of <a href="http://www.phpbb.nl/medewerkers">officiële phpbb.nl teamleden</a> op de supportforums.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informatie over je PHP configuratie kan niet vastgesteld worden. Phpinfo() is uitgeschakeld vanwege beveiliginsredenen.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Dit toont alle acties die uitgevoerd worden door de beheerders. Je kan sorteren op gebruikersnaam, datum, IP of actie. Als je de juiste permissies hebt, kan je ook individuele acties opschonen of de hele log.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Dit toont alle acties die uitgevoerd worden door het forum zelf. Deze log geeft je de informatie waarmee je specifieke problemen kan oplossen, bijvoorbeeld niet afgeleverde e-mails. Je kan sorteren op gebruikersnaam, datum, IP of actie. Als je de juiste permissies hebt, kan je ook individuele acties opschonen of de hele log.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Dit toont alle acties die uitgevoerd worden op forums, onderwerpen en berichten alsmede acties die uitgevoerd worden op gebruikers door moderators, inclusief verbanningen. Je kan sorteren op gebruikersnaam, datum, IP of actie. Als je de juiste permissies hebt, kan je ook individuele acties opschonen of de hele log.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Dit toont alle acties die uitgevoerd worden door gebruikers of op gebruikers (meldingen, waarschuwingen en gebruikersnotities).',
	'ALL_ENTRIES'				=> 'Alle vermeldingen',

	'DISPLAY_LOG'	=> 'Toon vermeldingen van vorige',

	'NO_ENTRIES'	=> 'Geen logvermeldingen voor deze periode.',

	'SORT_IP'		=> 'IP-adres',
	'SORT_DATE'		=> 'Datum',
	'SORT_ACTION'	=> 'Logactie',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Dank je wel voor het kiezen van phpBB als je forumoplossing. Dit scherm geeft je een snel overzicht van alle verschillende statistieken van je forum. The links aan de linkerkant van dit scherm staan je toe om ieder aspect van je forum te controleren. Iedere pagina zal instructies hebben over hoe je die pagina kan gebruiken.',
	'ADMIN_LOG'					=> 'Gelogde beheerdersacties',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Dit geeft een overzicht van de laatste vijf acties die uitgevoerd zijn door de beheerders. Een volledig overzicht van de log kan bekijken worden via het juiste menu-item of via de link hieronder.',
	'AVATAR_DIR_SIZE'			=> 'Avatar mapgrootte',

	'BOARD_STARTED'		=> 'Forum gestart op',
	'BOARD_VERSION'		=> 'Forumversie',

	'DATABASE_SERVER_INFO'	=> 'Databaseserver',
	'DATABASE_SIZE'			=> 'Databasegrootte',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Functie overloading is niet goed ingesteld',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> moet ingesteld zijn op 0 of 4. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparante karakter encoding is niet goed ingesteld',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> moet ingesteld zijn op 0. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input karakter conversie is niet goed ingesteld',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> moet ingesteld zijn op <samp>pass</samp>. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output karakter conversie is niet goed ingesteld',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> moet ingesteld zijn op <samp>pass</samp>. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',

	'FILES_PER_DAY'		=> 'Bijlagen per dag',
	'FORUM_STATS'		=> 'Forumstatistieken',

	'GZIP_COMPRESSION'	=> 'GZip-compressie',

	'NO_SEARCH_INDEX'	=> 'De geselecteerde zoek-backend heeft geen zoekindex.<br >Maak de index aan voor “%1$s” in de %2$szoekindex%3$s sectie.',
	'NOT_AVAILABLE'		=> 'Niet beschikbaar',
	'NUMBER_FILES'		=> 'Aantal bijlagen',
	'NUMBER_POSTS'		=> 'Aantal berichten',
	'NUMBER_TOPICS'		=> 'Aantal onderwerpen',
	'NUMBER_USERS'		=> 'Aantal gebruikers',
	'NUMBER_ORPHAN'		=> 'Berichtloze bijlagen',

	'PHP_VERSION_OLD'	=> 'De versie van PHP op deze server zal binnenkort niet meer ondersteund worden door toekomstige versies van phpBB. %sDetails%s',

	'POSTS_PER_DAY'		=> 'Berichten per dag',

	'PURGE_CACHE'			=> 'Cache legen',
	'PURGE_CACHE_CONFIRM'	=> 'Weet je zeker dat je de cache wilt legen?',
	'PURGE_CACHE_EXPLAIN'	=> 'Leeg alle cache gerelateerde items, dit omvat alle gecachede templatebestanden of queries.',
	'PURGE_CACHE_SUCCESS'	=> 'Cache succesvol geleegd.',

	'PURGE_SESSIONS'			=> 'Alle sessies opschonen',
	'PURGE_SESSIONS_CONFIRM'	=> 'Weet je zeker dat je alle sessies wilt opschonen? Dit zal alle gebruikers afmelden.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Alle sessies opschonen. Dit zal alle gebruikers afmelden door het legen van de sessietabel.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sessies succesvol opgeschoond.',

	'RESET_DATE'					=> 'Opstartdatum van het forum resetten',
	'RESET_DATE_CONFIRM'			=> 'Weet je zeker dat je de opstartdatum van het forum wilt resetten?',
	'RESET_DATE_SUCCESS'				=> 'Opstartdatum van het forum gereset',
	'RESET_ONLINE'					=> 'De meeste gebruikers tegelijkertijd online resetten',
	'RESET_ONLINE_CONFIRM'			=> 'Weet je zeker dat je de meeste gebruikers tegelijkertijd online wilt resetten?',
	'RESET_ONLINE_SUCCESS'				=> 'Meeste gebruikers tegelijkertijd online gereset',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Weet je zeker dat je de bestandenstatistieken wilt synchroniseren?',
	'RESYNC_POSTCOUNTS'				=> 'Berichtentellers synchroniseren',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Alleen bestaande berichten worden meegenomen. Opgeschoonde berichten zullen niet geteld worden.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Weet je zeker dat je de berichtentellers wilt synchroniseren?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Berichtentellers gesynchroniseerd',
	'RESYNC_POST_MARKING'			=> 'Gestipte onderwerpen synchroniseren',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Weet je zeker dat je de gestipte onderwerpen wilt synchroniseren?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Eerst worden alle onderwerpen ongemarkeerd, daarna worden onderwerpen die de afgelopen zes maanden activiteit hebben gehad opnieuw gemarkeerd.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Gestipte onderwerpen gesynchroniseerd',
	'RESYNC_STATS'					=> 'Statistieken synchroniseren',
	'RESYNC_STATS_CONFIRM'			=> 'Weet je zeker dat je de statistieken wilt synchroniseren?',
	'RESYNC_STATS_EXPLAIN'			=> 'Herberekend het aantal berichten, onderwerpen, gebruikers en bestanden.',
	'RESYNC_STATS_SUCCESS'			=> 'Statistieken gesynchroniseerd',
	'RUN'							=> 'Nu uitvoeren',

	'STATISTIC'					=> 'Statistieken',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synchroniseer of reset statistieken',

	'TIMEZONE_INVALID'	=> 'De tijdzone die je hebt geselecteerd is ongeldig.',
	'TIMEZONE_SELECTED'	=> '(momenteel geselecteerd)',
	'TOPICS_PER_DAY'	=> 'Onderwerpen per dag',

	'UPLOAD_DIR_SIZE'	=> 'Grootte van geplaatste bijlagen',
	'USERS_PER_DAY'		=> 'Gebruikers per dag',

	'VALUE'						=> 'Waarde',
	'VERSIONCHECK_FAIL'			=> 'Het verkrijgen van de laatste versie-informatie is mislukt.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Hercontroleer versie',
	'VIEW_ADMIN_LOG'			=> 'Bekijk beheerderslog',
	'VIEW_INACTIVE_USERS'		=> 'Bekijk inactieve gebruikers',

	'WELCOME_PHPBB'			=> 'Welkom bij phpBB',
	'WRITABLE_CONFIG'		=> 'Je config-bestand (config.php) is momenteel wereld-schrijfbaar. We bevelen sterk aan om de permissies te veranderen naar 640 of minstens naar 644 (bijvoorbeeld: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> (helaas geen nederlandse pagina beschikbaar) 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inactieve datum',
	'INACTIVE_REASON'				=> 'Reden',
	'INACTIVE_REASON_MANUAL'		=> 'Account gedeactiveerd door beheerder',
	'INACTIVE_REASON_PROFILE'		=> 'Profieldetails veranderd',
	'INACTIVE_REASON_REGISTER'		=> 'Nieuw geregistreerd account',
	'INACTIVE_REASON_REMIND'		=> 'Geforceerde gebruikersaccount heractivatie',
	'INACTIVE_REASON_UNKNOWN'		=> 'Onbekend',
	'INACTIVE_USERS'				=> 'Inactieve gebruikers',
	'INACTIVE_USERS_EXPLAIN'		=> 'Dit is een lijst van gebruikers die zich geregistreerd hebben maar waarvan hun accounts inactief zijn. Je kan deze gebruikers activeren, verwijderen of herinneren (door het sturen van een e-mail) als je wilt.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Dit is een lijst van de laatste 10 geregistreerde gebruikers welke een inactieve account hebben. Accounts zijn inactief of vanwege accountactivatie is ingeschakeld in gebruikersregistratie-instellingen en deze gebruikers accounts zijn nog niet geactiveerd, of vanwege het feit dat deze accounts zijn gedeactiveerd. Een volledige lijst is beschikbaar door op de link hieronder te klikken en daar kan je deze gebruikers activeren, verwijderen of herinneren (door een e-mail te versturen) mocht je dat willen.',

	'NO_INACTIVE_USERS'	=> 'Geen inactieve gebruikers',

	'SORT_INACTIVE'		=> 'Inactieve datum',
	'SORT_LAST_VISIT'	=> 'Laatste bezoek',
	'SORT_REASON'		=> 'Reden',
	'SORT_REG_DATE'		=> 'Registratiedatum',
	'SORT_LAST_REMINDER'=> 'Laatste herinnering',
	'SORT_REMINDER'		=> 'Herinnering verstuurd',

	'USER_IS_INACTIVE'		=> 'Gebruiker is inactief',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Verstuur informatie over je server en foruminstellingen naar phpBB voor statistische analyse. Alle informatie dat je of je website kan indentificeren is verwijderd - de data is compleet <strong>anoniem</strong>. We baseren beslissingen over de toekomstige phpBB versies op deze informatie. De statistieken zullen openbaar worden gemaakt. We delen ook deze data met het PHP project, de programeertaal waarin phpBB is geschreven.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Door gebruik te maken van de knop hieronder kan je bekijken welke variabelen verstuurd zullen worden.',
	'DONT_SEND_STATISTICS'		=> 'Ga terug naar de ACP als je geen statistische informatie naar phpBB wilt versturen.',
	'GO_ACP_MAIN'				=> 'Ga naar de ACP startpagina',
	'HIDE_STATISTICS'			=> 'Verberg details',
	'SEND_STATISTICS'			=> 'Verstuur statistische informatie',
	'SHOW_STATISTICS'			=> 'Toon details',
	'THANKS_SEND_STATISTICS'	=> 'Dank je wel voor het versturen van je informatie.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Gebruikers gebruikersrechtenpermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Groeps gebruikerspermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Gebruikers globale moderatorpermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Groeps globale moderatorpermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Gebruikers beheerderspermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Groeps beheerderspermissies toegevoegd of gewijzigd</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Beheerders toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Globale moderators toegevoegd of gewijzigd</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Gebruikers forumtoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Gebruikers forum-moderatortoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Groeps forumtoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Groeps forum-moderatortoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderators toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Forumpermissies toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Beheerders verwijderd</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Globale moderators verwijderd</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderators verwijderd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Gebruiker/Groep forumpermissies verwijderd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissies overgebracht van</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Eigen permissies teruggezet na gebruik permissies van</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Mislukte beheerders aanmeldpoging</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Succesvolle beheerdersaanmelding</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Gebruikersbijlagen verwijderd</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Bijlage-extensie toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Bijlage-extensie verwijderd</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Bijlage-extensie geüpdate</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Extensiegroep toegevoegd</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Extensiegroep gewijzigd</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Extensiegroep verwijderd</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Weesbestand geüpload naar bericht</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Weesbestanden verwijderd</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Gebruiker uitgesloten van verbanning</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP uitgesloten van verbanning</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-mail uitgesloten van verbanning</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Gebruiker verbannen</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP verbannen</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mail verbannen</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Unbanned user</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Unbanned IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Unbanned email</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Added new BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Edited BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Deleted BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>New bot added</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Deleted bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Existing bot updated</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Cleared admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Cleared error log</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Cleared moderator log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Cleared user log</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Cleared user logs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Altered attachment settings</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Altered authentication settings</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Altered avatar settings</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Altered cookie settings</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Altered email settings</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Altered load settings</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Altered private message settings</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Altered post settings</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Altered user registration settings</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Altered syndication feeds settings</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Altered search settings</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Altered security settings</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Altered server settings</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Altered board settings</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Altered signature settings</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Altered anti-spambot settings</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approved topic</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>User bumped topic</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Deleted post “%1$s” written by</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Deleted shadow topic</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Deleted topic “%1$s” written by</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>Copied topic</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Locked topic</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Locked post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Merged posts</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Moved topic</strong><br />» from %1$s to %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Closed PM report</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Deleted PM report</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Approved post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Disapproved post “%1$s” with the following reason</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Edited post “%1$s” written by</strong><br />» %2$s',
	'LOG_POST_RESTORED'			=> '<strong>Restored post</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Closed report</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Deleted report</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Restored topic “%1$s” written by</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Soft deleted post “%1$s” written by</strong><br />» %2$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Soft deleted topic “%1$s” written by</strong><br />» %2$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Moved split posts</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Split posts</strong><br />» from %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Approved topic</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Restored topic</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Disapproved topic “%1$s” with the following reason</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronised topic counters</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Changed topic type</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Unlocked topic</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Unlocked post</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Added disallowed username</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Deleted disallowed username</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Database backup</strong>',
	'LOG_DB_DELETE'			=> '<strong>Deleted database backup</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restored database backup</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluded IP/hostname from download list</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Added IP/hostname to download list</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removed IP/hostname from download list</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber error</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email error</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Created new forum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Copied forum permissions</strong> from %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Deleted forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Deleted forum and its subforums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Deleted forum and moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Deleted forum and moved posts </strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Deleted forum and its subforums, moved posts</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deleted forum and its posts</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deleted forum, its posts and subforums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deleted forum and its posts, moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Edited forum details</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Moved forum</strong> %1$s <strong>below</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Moved forum</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Re-synchronised forum</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>A general error occurred</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>New usergroup created</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group “%1$s” made default for members</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Users requested to join group “%1$s” and need to be approved</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Error while creating image</strong><br />» Error in %1$s on line %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder emails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Deleted language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installed language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Updated language pack details</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Replaced language file</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Submitted language file and placed in store folder</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass email</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic “%1$s”</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module disabled</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module enabled</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module removed</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module added</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module edited</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin role added</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin role edited</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin role removed</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum role added</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum role edited</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum role removed</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderator role added</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderator role edited</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderator role removed</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>User role added</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>User role edited</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>User role removed</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Unable to open %1$s for tidying, check permissions.</strong><br />Exception: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profile field activated</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profile field added</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profile field deactivated</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profile field changed</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profile field removed</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-pruned forums</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Users deactivated</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Users pruned and posts deleted</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Users pruned and posts retained</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Purged cache</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Purged sessions</strong>',


	'LOG_RANK_ADDED'		=> '<strong>Added new rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Removed rank</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Updated rank</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Referer validation failed</strong><br />»Referer was “<em>%1$s</em>”. The request was rejected and the session killed.',
	'LOG_RESET_DATE'			=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Files statistics resynchronised</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Created search index for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removed search index for</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx Error</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Added new style</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Deleted style</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Edited style</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exported style</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Added new template set to database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Add new template set on filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deleted template set</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edited template details</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exported template set</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed template set</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Added new theme to database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Add new theme on filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme deleted</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edited theme details</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edited theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exported theme</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Refreshed theme</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Updated Database from version %1$s to version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Updated phpBB from version %1$s to version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>User activated</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Banned User via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Banned IP via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned email via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Deleted user</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removed all attachments made by the user</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removed user avatar</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Emptied user outbox</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removed all posts made by the user</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removed user signature</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>User deactivated</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Removed newly registered flag from user</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed email</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Added user feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entry added:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'				=> '<strong>User locked own topic</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Moved all posts to forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account reactivation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>User unlocked own topic</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>The following warning was issued to this user</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>User changed default group</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>User demoted as leaders from usergroup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>User joined group</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>User joined group and needs to be approved</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>User resigned membership from group</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Deleted user warning</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Deleted %2$s user warnings</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Deleted all user warnings</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Added word censor</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deleted word censor</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edited word censor</strong><br />» %s',
));
