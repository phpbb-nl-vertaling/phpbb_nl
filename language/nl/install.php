<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
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

// Common installer pages
$lang = array_merge($lang, array(
    'INSTALL_PANEL'	=> 'Installatiepaneel',
	'SELECT_LANG'	=> 'Taal selecteren',

	'STAGE_INSTALL'	=> 'phpBB Installeren',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introductie',
	'INTRODUCTION_BODY'		=> 'Welkom bij phpBB3!<br /><br />phpBB® is wereldwijd de meest gebruikte open source forumsoftware. phpBB3 is de laatste versie van een pakket dat is gestart met de ontwikkeling in 2000. Zoals zijn voorgangers is phpBB3 functie-rijk, het is gebruiksvriendelijk, en wordt volledig ondersteunt door het phpBB-team. phpBB3 verbeterd alles wat phpBB2 zo populair maakte, en voegt de meest gevraagde functies toe die nog niet aanwezig waren in vorige versies. Wij hopen dat het je verwachtingen overtreft.<br /><br />Het installatiesysteem doorloopt samen met je de stappen om phpBB3 te installeren, bij te werken van oudere versies naar de meest recente phpBB3-versie, en ook nog het converteren naar phpBB3 vanaf een andere forumsoftware (inclusief phpBB2). Voor meer informatie adviseren we je dat je de <a href="../docs/INSTALL.html">installatie handleiding</a> leest. Als je de phpBB3-licentie wilt lezen, of als je wilt weten hoe je ondersteuning kan krijgen, dan kies je de juiste optie in het zij-menu aan de linkerkant van deze pagina. Om verder te gaan selecteer je het juiste tabblad bovenaan de pagina.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Volledige ondersteuning word gegegeven voor de huidige stabiele versie van phpBB3, helemaal gratis. Dit is inclusief:</p><ul><li>Installatie</li><li>Configuratie</li><li>Technische vragen</li><li>Problemen die zijn gerelateerd aan potentiële fouten in de software</li><li>Updaten van een Release Candidate (RC) versie naar de laatste stabiele versie</li><li>Converteren van phpBB 2.0.x naar phpBB3</li><li>Converteren van een ander discussie forumsoftware naar phpBB3 (bekijk het <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=6">SupportForum</a>)</li></ul><p>Wij moedigen gebruikers aan die nog steeds beta-versies hebben van phpBB3, dat ze hun installatie vervangen met een nieuwe kopie van de laatste versie.</p><h2>Extensies / Stijlen</h2><p>Voor problemen die zijn gerelateerd aan extensies kan je terecht in de <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=12">Extensies Forums</a>.<br />Voor problemen die gerelateerd zijn aan stijlen, templates of afbeeldingensets, kan je terecht in de <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=13">Stijlen Forums</a>.<br /><br />Als je vraag is gerelateerd aan een specifiek pakket, dan plaats je het direct in het onderwerp dat gaat over dat pakket.</p><h2>Verkijgen van support</h2><p><ul><li><a href="http://www.phpBBservice.nl/forum/">Supportforums</a></li><li><a href="http://www.phpBBservice.nl/docs/">Documentatie</a></li><li><a href="http://www.phpBBservice.nl/forum/viewforum.php?f=66">phpBB3 handleidingen</a></li><li><a href="http://www.phpbbservice.nl/docs/handleiding/3.0/snellestart/index.php">Snelle Start Handleiding</a></li></ul><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Welkom bij de installatie',
	'INSTALL_INTRO_BODY'	=> 'Met deze optie, is het mogelijk om phpBB3 te kunnen installeren op je server.</p><p>Om verder te gaan heb je de database-instellingen nodig. Als je niet je database-instellingen weet, neem dan contact op met je host en vraag het aan hun. Je zal niet door kunnen gaan met de installatie zonder die gegevens. Je hebt nodig:</p>

		<ul>
			<li>Het Database-type - De database dat je wilt gebruiken.</li>
			<li>De Database-server hostnaam of DSN - Het adres van de database-server.</li>
			<li>De Database-serverpoort - De poort van de database-server (in de meeste gevallen is dit niet nodig).</li>
			<li>De Database-naam - De naam van de database op de server.</li>
			<li>De Database-gebruikersnaam en Database-wachtwoord - De aanmeldingsgegevens om toegang te hebben tot de database.</li>
		</ul>

		<p><strong>Opmerking:</strong> Als je de installatie uitvoert met SQLite, zal je het volledige pad moet invoeren van je database-bestand in het DSN-veld en het veld van de gebruikersnaam en wachtwoord leeglaten. Voor veiligheidsredenen, zal je er zeker van moeten zijn dat je database-bestand niet is opgeslagen in een openbare toegankelijke locatie die je kan bezoeken via het internet.</p>

		<p>phpBB3 ondersteunt de volgende databases:</p>
		<ul>
			<li>MySQL 3.23 of hoger (MySQLi ondersteuning)</li>
			<li>PostgreSQL 8.3+</li>
			<li>SQLite 2.8.2+</li>
			<li>SQLite 3.6.15+</li>
			<li>MS SQL Server 2000 of hoger (direct of met ODBC)</li>
			<li>MS SQL Server 2005 of hoger (native)</li>
			<li>Oracle</li>
		</ul>

		<p>Alleen deze databases die worden ondersteunt door uw server zullen worden weergegeven.',

	'ACP_LINK'	=> 'Take me to <a href="%1$s">the ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB is al geïnstalleerd.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB is nog niet al geïnstalleerd.'		
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'Het bestand bestaat niet',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'Om phpBB te kunnen installeren moet het bestand %1$s op de server aanwezig zijn.',
	'FILE_NOT_WRITABLE'			=> 'Het bestand is niet schrijfbaar',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'Om phpBB te kunnen installeren moet het bestand %1$s schrijfbaar zijn.',

	'DIRECTORY_NOT_EXISTS'				=> 'De map bestaat niet',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> 'Om phpBB te kunnen installeren moet de map %1$s op de server aanwezig zijn.',
	'DIRECTORY_NOT_WRITABLE'			=> 'De map is niet schrijfbaar',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'Om phpBB te kunnen installeren moet de map %1$s schrijfbaar zijn.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP-versie',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB vereist PHP versie 5.4.0 of hoger.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-functie getimagesize() is beschikbaar',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vereist</strong> - Om phpBB correct te laten functioneren, zal de getimagesize-functie beschikbaar moeten zijn.',
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 onderteuning',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB zal <strong>niet</strong> werken als je PHP-installatie niet is gecompileerd met UTF-8 ondersteuning in de PCRE-extensie.',
	'PHP_JSON_SUPPORT'				=> 'PHP-JSON ondersteuning',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Verplicht</strong> - Om phpBB correct te laten functioneren, zal de PHP-JSON extensie beschikbaar moeten zijn.',
	'PHP_SUPPORTED_DB'				=> 'Ondersteunende databases',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Verplicht</strong> - Er moet tenminste één type database-module worden ondersteund binnen PHP. Als er geen database-module beschikbaar is moet je contact opnemen met je webhost of de documentatie van de betreffende PHP-installatie bekijken voor advies.',

	'RETEST_REQUIREMENTS'	=> 'Vereisten opnieuw controleren',

	'STAGE_REQUIREMENTS'	=> 'Controleer vereisten'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Alle velden in dit blok moeten ingevuld zijn.',
	'PHPBB_ALREADY_INSTALLED'	=> 'phpBB is al geïnstalleerd.'
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Set installation data',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Gegevensbeheerder',

	// Form labels
	'ADMIN_CONFIG'				=> 'Beheerdersconfiguratie',
	'ADMIN_PASSWORD'			=> 'Beheerderswachtwoord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bevestig beheerderswachtwoord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Voer een wachtwoord in die tussen de 6 en 30 tekens lang is.',
	'ADMIN_USERNAME'			=> 'Beheerdersgebruikersnaam',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Voer een gebruikersnaam in die tussen de 3 en 20 tekens lang is.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Het e-mailadres dat je hebt ingevoerd is ongeldig.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'De wachtwoorden die je hebt ingevoerd komen niet overeen.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Het wachtwoord dat je hebt ingevoerd is te lang. De maximale lengte is 30 tekens.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Het wachtwoord dat je hebt ingevoerd is te kort. De minimale lengte is 6 tekens.',
	'INST_ERR_USER_TOO_LONG'		=> 'De gebruikersnaam die je hebt ingevoerd is te lang. De maximale lengte is 20 tekens.',
	'INST_ERR_USER_TOO_SHORT'		=> 'De gebruikersnaam die je hebt ingevoerd is te kort. De minimale lengte is 3 tekens.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Forum configuratie',
	'DEFAULT_LANGUAGE'	=> 'Standaard taal',
	'BOARD_NAME'		=> 'Sitenaam',
	'BOARD_DESCRIPTION'	=> 'Korte site beschrijving',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Database instellingen',

	// Form labels
	'DB_CONFIG'				=> 'Database-configuratie',
	'DBMS'					=> 'Database-type',
	'DB_HOST'				=> 'Database-server hostnaam of DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN staat voor Data Source Name en is alleen relevant voor ODBC-installaties. Gebruik op PostgreSQL de localhost om verbinding te maken met de lokale server via de UNIX-domein socket en via 127.0.0.1 om verbinding te maken via TCP. Voor SQLite moet je het volledige pad invoeren van uw database-bestand.',
	'DB_PORT'				=> 'Database-serverpoort',
	'DB_PORT_EXPLAIN'		=> 'Laat dit veld leeg tenzij de server op een niet-standaard poort werkt.',
	'DB_PASSWORD'			=> 'Database-wachtwoord',
	'DB_NAME'				=> 'Database-naam',
	'DB_USERNAME'			=> 'Database-gebruikersnaam',
	'TABLE_PREFIX'			=> 'Prefix voor tabellen in de database',
	'TABLE_PREFIX_EXPLAIN'	=> 'De prefix moet starten met een letter en mag alleen letters, getallen en onderstrepingen bevatten.',

	// Database options
	'DB_OPTION_MSSQL'		=> 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'De PHP-module kon niet worden geladen voor het geselecteerde database-type.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'De prefix die je hebt ingevoerd is onjuist. Het moet starten met een letter en mag alleen letters, getallen en onderstrepingen bevatten.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'De tabelprefix dat je hebt ingevoerd is te lang. De maximale lengte is %d tekens.',
	'INST_ERR_DB_NO_NAME'			=> 'Geen database-naam opgegeven.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Het database-bestand dat is opgegeven bevindt zich in de forummappen-hiërarchie. Je zal dit bestand moeten plaatsen in een locatie die niet via het web toegankelijk is.',
	'INST_ERR_DB_CONNECT'			=> 'Kon geen verbinding leggen met de database, zie de foutmelding hieronder.',
	'INST_ERR_DB_NO_ERROR'			=> 'Geen foutmelding gegeven.',
	'INST_ERR_PREFIX'				=> 'Tabellen met de opgegeven prefix bestaan al, kies een andere prefix als alternatief.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'De versie van MySQL die geïnstalleerd is op deze server werkt niet met de “MySQL met MySQLi-extensie”-optie die je hebt geselecteerd. Probeer in plaats daarvan de optie “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'			=> 'De versie van de SQLite-extensie die je hebt geïnstalleerd is te oud, het moet bijgewerkt worden naar versie 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'De versie van de SQLite-extensie die je hebt geïnstalleerd is te oud, het moet bijgewerkt worden naar versie 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'De versie van Oracle die geïnstalleerd is op deze server verplicht je om de <var>NLS_CHARACTERSET</var>-parameter te laten instellen naar <var>UTF8</var>. Je kan de installatie updaten naar 9.2+ of de parameter veranderen.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'De database die je hebt geselecteerd is niet aangemaakt in <var>UNICODE</var> of <var>UTF8</var>-codering. Probeer de database te installeren in <var>UNICODE</var> of <var>UTF8</var>-codering.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail-configuratie',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Server-configuratie',
	'SCRIPT_PATH'				=> 'Scriptpad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Het pad waar phpBB zich bevindt, relatief naar het domeinnaam, bijvoorbeeld <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Bedankt, het beheer',
	'CONFIG_SITE_DESC'				=> 'Een korte beschrijving van je forum',
	'CONFIG_SITENAME'				=> 'jedomein.nl',

	'DEFAULT_INSTALL_POST'			=> 'Dit is een voorbeeldbericht van je phpBB3-installatie. Je mag dit bericht, dit onderwerp, en ook nog dit forum verwijderen als je wilt, aangezien alles correct werkt. Tijdens het installatieproces is je eerste categorie en je eerste forum ingesteld voor de voor-geïnstalleerde groepen; beheerders, zoekrobots, forummoderators, gasten, geregistreerde gebruikers en de geregistreerde COPPA-gebruikers. Als je je eerste categorie en je eerste forum wilt verwijderen, vergeet dan niet voor alle nieuwe categorieën en forums die je hebt aangemaakt de permissies voor alle gebruikersgroepen in te stellen. Het is aanbevolen om je eerste categorie en je eerste forum te hernoemen, en de permissies hiervan te kopiëren wanneer je nieuwe categorieën en forums aanmaakt. Veel plezier!',

	'FORUMS_FIRST_CATEGORY'			=> 'Je eerste categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beschrijving van je eerste forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Je eerste forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Beheerder',
	'REPORT_WAREZ'					=> 'Dit bericht bevat links naar illegale software.',
	'REPORT_SPAM'					=> 'Het gemelde bericht heeft als enig doel om te adverteren voor een website of ander product.',
	'REPORT_OFF_TOPIC'				=> 'Het gemelde bericht is off-topic.',
	'REPORT_OTHER'					=> 'Het gemelde bericht valt niet in een andere categorie, gebruik het informatieveld hieronder:',

	'SMILIES_ARROW'					=> 'Pijl',
	'SMILIES_CONFUSED'				=> 'Verward',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Huilen',
	'SMILIES_EMARRASSED'			=> 'Beschaamd',
	'SMILIES_EVIL'					=> 'Erg boos',
	'SMILIES_EXCLAMATION'			=> 'Uitroep',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Lachend',
	'SMILIES_MAD'					=> 'Gek',
	'SMILIES_MR_GREEN'				=> 'Mr. Groen',
	'SMILIES_NEUTRAL'				=> 'Neutraal',
	'SMILIES_QUESTION'				=> 'Vraag',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rollende ogen',
	'SMILIES_SAD'					=> 'Bedroefd',
	'SMILIES_SHOCKED'				=> 'Geschokt',
	'SMILIES_SMILE'					=> 'Lach',
	'SMILIES_SURPRISED'				=> 'Verrast',
	'SMILIES_TWISTED_EVIL'			=> 'Kwaadaardig',
	'SMILIES_UBER_GEEK'				=> 'Uber geek',
	'SMILIES_VERY_HAPPY'			=> 'Erg blij',
	'SMILIES_WINK'					=> 'Knipoog',

	'TOPICS_TOPIC_TITLE'			=> 'Welkom bij phpBB3',
));
	
// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Overzicht',
	'MENU_INTRO'		=> 'Introductie',
	'MENU_LICENSE'		=> 'Licentie (Engelstalig)',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Creating configuration file',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'		=> 'Adding configuration settings',
	'TASK_ADD_DEFAULT_DATA'			=> 'Adding default settings to the database',
	'TASK_CREATE_DATABASE_SCHEMA'	=> 'Creating database schema',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registering bots',
	'TASK_ADD_LANGUAGES'	=> 'Installing available languages',
	'TASK_ADD_MODULES'		=> 'Installing modules',

	// Install finish tasks
	'TASK_NOTIFY_USER'			=> 'Sending notification e-mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Populating migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'The installer has finished successfully',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Module not found',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'A module could not be found because the service, %s, is undefined.',

	'TASK_NOT_FOUND'				=> 'Task not found',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'A task could not be found because the service, %s, is undefined.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'All installer task services should start with “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installer task service definition is invalid. Service name “%1$s” given, the expected class namespace is “%2$s” for that. For more information please see the documentation of task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'The installer config file is not writable.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Install phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Show the configuration which will be used',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validate a configuration file',
	'CLI_CONFIG_FILE'				=> 'Config file to use',
	'MISSING_FILE'					=> 'Unable to access file %1$s',
	'MISSING_DATA'					=> 'Config file is missing data or might contain invalid settings.',
	'INVALID_YAML_FILE'				=> 'Could not parse YAML file %1$s',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'phpBB-installatie bijwerken',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Met deze optie, is het mogelijk om je phpBB-installatie te updaten naar de laatste versie.<br />Tijdens het proces zullen alle bestanden gecontroleerd worden op hun aanwezigheid. Je kan ook alle verschillen bekijken van de bestanden voordat je gaat updaten.<br /><br />De bestandsupdate kan je op twee manieren doen.</p><h2>Handmatige update</h2><p>Met deze update download je alleen je persoonlijke set van gewijzigde bestanden om er zeker van te zijn dat je geen extensies kwijt raakt die je hebt geïnstalleerd. Nadat je dit pakket hebt gedownload, zal je de bestanden handmatig moeten uploaden naar hun correcte plaats in je phpBB-hoofdmap, dus waar je de bestanden config.php, memberlist.php, enz kan terugvinden. Wanneer je dat hebt gedaan, kan je een bestandscontrole doen dat je laat zien of de bestanden correct zijn geüpload naar de juiste locatie.</p><h2>Automatische update met de FTP</h2><p>Deze methode is bijna hetzelfde als de eerste, maar met deze methode hoef je niet de gewijzigde bestanden te downloaden naar je eigen computer. Dit wordt namelijk gedaan voor je. Om deze methode te gebruiken heb je de FTP-aanmeldgegevens nodig wanneer er naar wordt gevraagd. Wanneer dat klaar is, zal je worden herleidt naar de bestandscontrolemethode dat controleert of alles correct is bijgewerkt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Versiemededeling</h1>
		
		<p>Lees de (Engelstalige) aankondiging voordat je begint met het updaten van je forum, het kan belangrijke informatie bevatten. Je vindt daar ook de volledige downloadlinks en een overzicht van de wijzigingen ( changelog ).</p>
		
		<br />
		
		<h1>Hoe kan ik mijn forum updaten met het Automatische update-pakket?</h1>
		
		<p>De aanbevolen manier van updaten die hieronder staat beschreven is alleen geldig voor het Automatische update-pakket. Je mag je forum ook updaten met de methodes die beschreven zijn in het <a href="../docs/INSTALL.html">INSTALL.html</a> document. De stappen om phpBB3 automatisch te updaten zijn als volgt:</p>
		
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Ga naar de downloadspagina van <a href="https://www.phpbb.nl/downloads/" title="http://www.phpbb.nl/downloads/">phpBB.nl</a> of <a href="https://www.phpBBservice.nl/downloads/" title="http://www.phpBBservice.nl/downloads/">phpBBservice.nl</a> en download het "Automatisch update-pakket".<br /><br /></li>
            <li>Pak het archiefbestand uit.<br /><br /></li>
			<li>Upload de uitgepakte "install" en "vendor" mappen naar je phpBB-hoofdmap (waar je config.php staat).<br /><br /></li>
		</ul>
		
		<p>Eenmaal geüpload, zal je forum, door het uploaden van de install-map, voor gewone gebruikers uitgeschakeld zijn.<br /><br />
		<strong><a href="%1$s" title="%1$s">Ga nu naar de install-map en begin met het updaten van je forum</a>.</strong><br />
		<br />
		Daar zal je geholpen worden met het updaten. Je wordt ook op de hoogte gebracht zodra alles geüpdatet is.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Type of update to run',

	'UPDATE_TYPE_ALL'		=> 'Update filesystem and database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Update database only',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'File updater methods',

	'UPDATE_FILE_METHOD'			=> 'File updater method',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Download modified files in an archive',
	'UPDATE_FILE_METHOD_FTP'		=> 'Update files via FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Update files via direct file access (Automatic)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP settings',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No valid update directory was found, please make sure you uploaded the relevant files.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'OLD_UPDATE_FILES'				=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Update files',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Check files to update',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'		=> 'Diffing changed files',
	'ALL_FILES_DIFFED'		=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Bestanden updaten',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Conflicten voor dit bestand downloaden',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Zoek voor &lt;&lt;&lt; om te kijken voor conflicten',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Aangepast bestandsarchief downloaden',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Wanneer je het archief hebt gedownload, moet je het archief uitpakken. Je vindt de aangepaste bestanden die je moet uploaden naar je phpBB-hoofdmap (waar je o.a het bestand config.php, memberlist.php etc kan terugvinden) in het archief. Upload de bestanden dan naar de juiste locaties. Wanneer je alle bestanden hebt geüpload, controleer je alle bestanden opnieuw met de andere knop hieronder.',
	
	'FILE_ALREADY_UP_TO_DATE'		=> 'Bestand is al bijgewerkt.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Bestand niet toegestaan om gediffed te worden.',
	'FILE_USED'						=> 'Informatie gebruikt van',			// Single file
	'FILES_CONFLICT'				=> 'Conflicterende bestanden',
	'FILES_CONFLICT_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. phpBB heeft gevonden dat deze bestanden conflicten veroorzaken als ze worden samengevoegd. Onderzoek deze conflicten en probeer ze handmatig op te lossen, of hervat het bijwerkingsproces en kies dan de voorkeurs-samenvoegingsmethode. Wanneer je de conflicten handmatig oplost vergeet dan niet om de bestanden daarna opnieuw te controleren nadat je ze hebt aangepast. Je kan ook nog kiezen welke samenvoegingsmethode je wilt gebruiken voor elk bestand. De eerste methode zal het resultaat hebben dat de regels die een conflict veroorzaakten in het bestand zullen worden verwijderd, de andere manier zal als resultaat hebben dat je al je aanpassingen kwijtraakt van het nieuwere bestand.',
	'FILES_DELETED'					=> 'Verwijderde bestanden',
	'FILES_DELETED_EXPLAIN'			=> 'De volgende bestanden bestaan niet meer in de nieuwe versie. Deze bestanden zullen verwijderd moeten worden van je installatie.',
	'FILES_MODIFIED'				=> 'Aangepaste bestanden',
	'FILES_MODIFIED_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. Het bijgewerkte bestand zal worden samengevoegd met je aanpassingen en het nieuwe bestand.',
	'FILES_NEW'						=> 'Nieuwe bestanden',
	'FILES_NEW_EXPLAIN'				=> 'De volgende bestanden bestaan momenteel niet in je installatie. Deze bestanden zullen worden toegevoegd aan je installatie.',
	'FILES_NEW_CONFLICT'			=> 'Nieuwe conflicterende bestanden',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'De volgende bestanden zijn nieuw in de laatste versie, maar er is bepaald dat er al een bestand bestaat met dezelfde naam op dezelfde positie. Dit bestand zal worden overschreven door het nieuwe bestand.',
	'FILES_NOT_MODIFIED'			=> 'Niet aangepaste bestanden',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'De volgende bestanden zijn niet aangepast, en zijn gelijk aan de originele phpBB-bestanden van de versie die je wilt bijwerken.',
	'FILES_UP_TO_DATE'				=> 'Bestanden die al zijn bijgewerkt',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'De volgende bestanden zijn al up-to-date en hoeven niet te worden bijgewerkt.',
	'TOGGLE_DISPLAY'				=> 'Bestandslijst bekijken/verbergen',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Check files again',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Database updaten',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Het bijwerken van de database is succesvol voltooid.',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'De opgegeven convertor bestaat niet.',
	'DEV_NO_TEST_FILE'			=> 'Geen waarde is er opgegeven voor de test_file variabele in de convertor. Als je een gebruiker bent van deze convertor hoor je deze foutmelding niet te zien, meld dit bericht aan de auteur van de convertor. Als je de convertor-auteur bent, moet je de naam of een bestand opgeven die bestaat in het bronforum om het pad te bevestigen.',
	'COULD_NOT_FIND_PATH'		=> 'Kan het pad naar je oude forum niet vinden. Controleer je instellingen en probeer het opnieuw.<br />» %s was het opgegeven doelpad.',
	'CONFIG_PHPBB_EMPTY'		=> 'De phpBB3 configuratievariabele voor “%s” is leeg.',

	'MAKE_FOLDER_WRITABLE'		=> 'Wees er zeker van dat de map bestaat en schrijfbaar is voor de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Wees er zeker van dat deze mappen bestaan en schrijfbaar zijn voor de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Opnieuw testen',

	'NO_TABLES_FOUND'			=> 'Er zijn geen tabellen gevonden.',
	'TABLES_MISSING'			=> 'De volgende tabellen kunnen niet worden gevonden<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Controleer de tabel prefix en probeer opnieuw.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Conversie hervatten',
	'CONTINUE_CONVERT_BODY'		=> 'Een vorige conversiepoging is gevonden. Je kan nu kiezen tussen het starten van een nieuwe conversie of doorgaan met de vorige conversie.',
	'CONVERT_NEW_CONVERSION'	=> 'Nieuwe conversie',
	'CONTINUE_OLD_CONVERSION'	=> 'Doorgaan met vorige conversie',

	// Start conversion
	'SUB_INTRO'					=> 'Introductie',
	'CONVERT_INTRO'				=> 'Welkom bij de phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Vanuit hier kan je de data van andere geïnstalleerde forumsoftware overzetten. Hieronder zie je alle convertors die momenteel beschikbaar zijn. Als er geen convertor is weergegeven voor de forumsoftware die je wenst te gaan converteren, controleer dan op onze website of de modules beschikbaar zijn om te kunnen downloaden.',
	'AVAILABLE_CONVERTORS'		=> 'Beschikbare convertors',
	'NO_CONVERTORS'				=> 'Er zijn geen convertors beschikbaar om te gebruiken.',
	'CONVERT_OPTIONS'			=> 'Opties',
	'SOFTWARE'					=> 'Forumsoftware',
	'VERSION'					=> 'Versie',
	'CONVERT'					=> 'Converteer',

	// Settings
	'STAGE_SETTINGS'			=> 'Instellingen',
	'TABLE_PREFIX_SAME'			=> 'De tabelprefix moet hetzelfde zijn als de software waarvan je wilt converteren.<br />» Ingevoerde tabelprefix was %s.',
	'DEFAULT_PREFIX_IS'			=> 'De convertor was niet in staat om de tabel te vinden met de opgegeven prefix. Wees er zeker van dat je de juiste gegevens hebt ingevuld van het forum waarvan je wilt converteren. De standaard tabel prefix voor %1$s is <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Opties opgeven voor de conversie',
	'FORUM_PATH'				=> 'Forumpad',
	'FORUM_PATH_EXPLAIN'		=> 'Dit is het <strong>relatieve</strong> pad op de server naar je oude forum vanaf de <strong>root van je phpBB3-installatie</strong>.',
	'REFRESH_PAGE'				=> 'Vernieuw de pagina om door te gaan met de conversie',
	'REFRESH_PAGE_EXPLAIN'		=> 'Als je dit instelt op ja, dan zal de convertor de pagina vernieuwen om door te gaan met de conversie nadat er een stap is voltooid. Als dit je eerste conversie is voor test doeleinden en om te bepalen of er enige fouten optreden, raden wij je aan om deze optie op nee in te stellen.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Bezig met converteren',

	'AUTHOR_NOTES'				=> 'Auteur notities<br />» %s',
	'STARTING_CONVERT'			=> 'Conversieproces starten',
	'CONFIG_CONVERT'			=> 'Bezig met het converteren van de configuratie',
	'DONE'						=> 'Klaar',
	'PREPROCESS_STEP'			=> 'Bezig met het uitvoeren van de voorprocedure van functies/queries',
	'FILLING_TABLE'				=> 'Vullen van tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Vullen van tabellen',
	'DB_ERR_INSERT'				=> 'Fout tijdens het verwerken van de <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Fout tijdens het verwerken van de <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fout tijdens het verwerken van de <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fout tijdens het verwerken van de <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error while running <code>SELECT</code> query.',
	'STEP_PERCENT_COMPLETED'	=> 'Stap <strong>%d</strong> van <strong>%d</strong>',
	'FINAL_STEP'				=> 'Doorgaan met de laatste stap',
	'SYNC_FORUMS'				=> 'Synchronisatie van forums gestart',
	'SYNC_POST_COUNT'			=> 'Bezig met het synchroniseren van post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Bezig met het synchroniseren van post_counts van <var>entry</var> %1$s tot en met %2$s.',
	'SYNC_TOPICS'				=> 'Synchronisatie van onderwerpen gestart',
	'SYNC_TOPIC_ID'				=> 'Bezig met het synchroniseren van onderwerpen van <var>topic_id</var> %1$s tot %2$s.',
	'PROCESS_LAST'					=> 'Bezig met de laatste stappen',
	'UPDATE_TOPICS_POSTED'		=> 'Genereren van geplaatste onderwerpsinformatie',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Er is een fout ontstaan terwijl er geplaatse onderwerpsinformatie werd gegenereerd. Je kan deze stap opnieuw uitvoeren in het beheerderspaneel nadat het conversieproces is voltooid.',
	'CONTINUE_LAST'				=> 'Doorgaan met de laatste stappen',
	'CLEAN_VERIFY'				=> 'Opschonen en bevestigen van de uiteindelijke structuur',
	'NOT_UNDERSTAND'			=> 'Kan het volgende niet begrijpen %s #%d, tabel %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Benamingsconflict: %s en %s zijn beide aliasen<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversie compleet',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Je hebt succesvol je forum geconverteerd naar phpBB 3.2. Je kan je nu <a href="../">aanmelden op je forum</a>. Voordat je de install-map verwijderd en je forum ingeschakeld, controleer of alle instellingen correct zijn overgezet. Online hulp is beschikbaar via de online <a href="https://www.phpbbservice.nl/docs/handleiding/3.0/">documentatie</a> en de <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=2">supportforums</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-upload voor bijlagen is ingeschakeld op het oude forum. Schakel de FTP-upload optie uit en zorg ervoor dat je een geldige uploadmap opgeeft, kopieer daarna alle bijlagenbestanden naar de nieuwe web toegankelijke map. Wanneer je dit hebt gedaan, herstart je de convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Er is geen configuratie-informatie beschikbaar voor de conversie.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Kan geen forum-toegangsinformatie verkrijgen.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kan geen categorieën verkrijgen.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kan niet je forumconfiguratie ophalen.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Onmogelijk om “%s” te openen/lezen.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Kan geen groepsauthenticatie-informatie verkijgen.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Onregelmatigheden in de “groups”-tabel gevonden in add_bots() - je moet alle speciale groepen handmatig toevoegen.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kan de bot niet toevoegen aan de “user”-tabel.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kan de bot niet toevoegen aan de “bots”-tabel.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kan de gebruiker niet toevoegen aan de “user_group”-tabel.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Bericht-parser fout',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'avatar_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Het relatieve pad naar het bronforum is niet opgegeven.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'avatar_gallery_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_GROUP'				=> 'Groep “%1$s” kan niet worden gevonden in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'ranks_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'smilies_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'upload_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kan de permissieinstellingen niet bijwerken of toevoegen.',
	'CONV_ERROR_PM_COUNT'				=> 'Kan de PB-teller map niet selecteren.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kan het nieuwe forum niet toevoegen tijdens het vervangen van een oude categorie.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Kan het nieuwe forum niet vervangen met het oude forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kan de gebruikersauthenticatie-informatie niet verkrijgen.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Verkeerde groep “%1$s” opgegeven in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Deze pagina verzameld alle nodigde gegevens die nodig zijn om toegang te hebben tot het bronforum. Voer de database-gegevens in van je vorige forum; de convertor zal niks veranderen in de database die je hieronder opgeeft. Het bronforum zal uitgeschakeld moeten zijn om een zo goed als mogelijke conversie te krijgen.',
	'CONV_SAVED_MESSAGES'				=> 'Opgeslagen berichten',

	'PRE_CONVERT_COMPLETE'			=> 'Alle voorbereidende conversie stappen zijn succesvol voltooid. Je mag nu beginnen met het werkelijke conversieproces. Hou in de gaten dat je waarschijnlijk diverse dingen handmatig moet aanpassen. Na de conversie, zal je vooral de toegewezen permissies moeten controleren, de zoekindex moeten herbouwen aangezien die niet mee wordt geconverteerd en wees er ook zeker van dat de bestanden correct zijn gekopieerd, bijvoorbeeld de avatars en smilies.',
));	
