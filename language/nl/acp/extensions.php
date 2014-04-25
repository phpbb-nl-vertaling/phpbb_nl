<?php
/**
*
* acp_extensions [Dutch]
*
* @package language
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Extensie',
	'EXTENSIONS'				=> 'Extensies',
	'EXTENSIONS_ADMIN'			=> 'Extensiebeheer',
	'EXTENSIONS_EXPLAIN'		=> 'Het extensiebeheer is een gereedschap in je phpBB-forum die je in staat stelt om alle extensiestatussen en informatie over hen te beheren.',
	'EXTENSION_INVALID_LIST'	=> 'De Ò%sÓ extensie is niet geldig.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'De geselecteerde extensie is niet beschikbaar voor dit forum, controleer of je phpBB en PHP-versies toegestaan zijn (zie de detailspagina).',
	'EXTENSION_DIR_INVALID'		=> 'De geselecteerde extensie heeft een ongeldige mapstructuur en kan niet ingeschakeld worden.',

	'DETAILS'				=> 'Details',

	'EXTENSIONS_DISABLED'	=> 'Uitgeschakelde Extensies',
	'EXTENSIONS_ENABLED'	=> 'Ingeschakelde Extensies',

	'EXTENSION_DELETE_DATA'	=> 'Verwijder data',
	'EXTENSION_DISABLE'		=> 'Uitschakelen',
	'EXTENSION_ENABLE'		=> 'Inschakelen',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Het verwijderen van extensiedata verwijderd alle data en instellingen. De extensiebestanden zullen behouden blijven zodat het weer ingeschakeld kan worden.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Het uitschakelen van een extensie behoud de bestanden, data en instellingen, maar verwijderd iedere functionaliteit toegevoegd door de extensie aan je forum.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Het inschakelen van een extensie staat je toe om deze te gebruiken op je forum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'De extensiedata wordt momenteel verwijderd. Verlaat of ververs deze pagina niet tot dat dit gedaan is.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'De extensie wordt momenteel uitgeschakeld. Verlaat of ververs deze pagina niet tot dat dit gedaan is.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'De extensie wordt momenteel ingeschakeld. Verlaat of ververs deze pagina niet tot dat dit gedaan is.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'De extensiedata is succesvol verwijderd',
	'EXTENSION_DISABLE_SUCCESS'		=> 'De extensie is succesvol uitgeschakeld',
	'EXTENSION_ENABLE_SUCCESS'		=> 'De extensie is succesvol ingeschakeld',

	'EXTENSION_NAME'			=> 'Extensienaam',
	'EXTENSION_ACTIONS'			=> 'Acties',
	'EXTENSION_OPTIONS'			=> 'Opties',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Het updaten van een extensie',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>De extensie uitschakelen</li>
			<li>De extensiebestanden verwijderen van het bestandssysteem</li>
			<li>De nieuwe bestanden uploaden</li>
			<li>De extensie inschakelen</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Het compleet verwijderen van een extensie van je forum',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>De extensie uitschakelen</li>
			<li>De extensiedata verwijderen</li>
			<li>De extensiebestanden verwijderen van het bestandssysteem</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Weet je zeker dat je de data die geassocieerd wordt met  Ò%sÓ wilt verwijderen?<br /><br />Dit zal alle data en instellingen van de extensie verwijderen en kan niet ongedaan gemaakt worden!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Weet je zeker dat je de extensie Ò%sÓ wilt uitschakelen?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Weet je zeker dat je de extensie Ò%sÓ wilt inschakelen?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Terug naar de extensielijst',

	'EXT_DETAILS'			=> 'Extensiedetails',
	'DISPLAY_NAME'			=> 'Weergave naam',
	'CLEAN_NAME'			=> 'Schone naam',
	'TYPE'					=> 'Type',
	'DESCRIPTION'			=> 'Beschrijving',
	'VERSION'				=> 'Versie',
	'HOMEPAGE'				=> 'Homepage',
	'PATH'					=> 'Bestandpad',
	'TIME'					=> 'Uitgavetijd', //misschien datum beter
	'LICENCE'				=> 'Licentie',

	'REQUIREMENTS'			=> 'Benodigdheden',
	'PHPBB_VERSION'			=> 'phpBB-versie',
	'PHP_VERSION'			=> 'PHP-versie',
	'AUTHOR_INFORMATION'	=> 'Auteurinformatie',
	'AUTHOR_NAME'			=> 'Naam',
	'AUTHOR_EMAIL'			=> 'E-mail',
	'AUTHOR_HOMEPAGE'		=> 'Homepage',
	'AUTHOR_ROLE'			=> 'Rol',
));
