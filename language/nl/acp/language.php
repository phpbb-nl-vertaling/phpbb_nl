<?php
/**
*
* acp_language [Dutch]
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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Beheerders taalbestanden',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Hier kan je taalpakketten installeren/verwijderen. Het standaard taalpakket is gemarkeerd met een ster (*).',

	'EMAIL_FILES'			=> 'E-mailtemplates',

	'FILE_CONTENTS'				=> 'Bestandinhoud',
	'FILE_FROM_STORAGE'			=> 'Bestand uit opslagmap',

	'HELP_FILES'				=> 'Hulpbestanden',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Geïnstalleerde taalpakketten',
	'INVALID_LANGUAGE_PACK'		=> 'De geselecteerde taalpakket lijkt niet geldig te zijn. Controleer het taalpakket en upload het opnieuw mocht dat nodig zijn.',
	'INVALID_UPLOAD_METHOD'		=> 'De geselecteerde uploadmethode is niet geldig, kies een andere methode.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Taaldetails succesvol geüpdate.',
	'LANGUAGE_ENTRIES'					=> 'Taalverwijzingen',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Hier kan je bestaande taalpakket verwijzingen veranderen of nog niet vertaalde verwijzingen vertalen.<br /><strong>Notitie:</strong> Wanneer je een taalbestand hebt gewijzigd, dan zullen de veranderingen opgeslagen worden in een aparte map zodat je ze kan downloaden. De veranderingen zullen niet gezien worden door je gebruikers totdat je de originele taalbestanden verwisselt met je eigen taalbestanden op je server (door ze te uploaden).',
	'LANGUAGE_FILES'					=> 'Taalbestanden',
	'LANGUAGE_KEY'						=> 'Taalsleutel',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Dit taalpakket is al geïnstalleerd.',
	'LANGUAGE_PACK_DELETED'				=> 'Het taalpakket <strong>%s</strong> is succesvol verwijderd. Alle gebruikers die deze taal gebruikte zijn opnieuw ingesteld op de forum standaardtaal.',
	'LANGUAGE_PACK_DETAILS'				=> 'Taalpakket-details',
	'LANGUAGE_PACK_INSTALLED'			=> 'Het taalpakket <strong>%s</strong> is succesvol geïnstalleerd.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'De eigen profielvelden taalregels zijn gekopieerd van de standaardtaal. Verander ze indien nodig.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokale naam',
	'LANGUAGE_PACK_NAME'				=> 'Naam',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Het geselecteerde taalpakket bestaat niet.',
	'LANGUAGE_PACK_USED_BY'				=> 'Gebruikt door (inclusief robots)',
	'LANGUAGE_VARIABLE'					=> 'Taalvariabele',
	'LANG_AUTHOR'						=> 'Taalpakket-auteur',
	'LANG_ENGLISH_NAME'					=> 'Engelse naam',
	'LANG_ISO_CODE'						=> 'ISO-code',
	'LANG_LOCAL_NAME'					=> 'Lokale naam',

	'MISSING_LANGUAGE_FILE'		=> 'Taalbestand missend: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Taalvariabele missend',
	'MODS_FILES'				=> 'MODs taalbestanden',

	'NO_FILE_SELECTED'				=> 'Je hebt geen taalbestand gespecificeerd.',
	'NO_LANG_ID'					=> 'Je hebt geen taalpakket gespecificeerd.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Je kan het standaard taalpakket niet verwijderen.<br />Als je dit taalpakket wilt verwijderen, verander dan eerst de standaardtaal van je forum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Er zijn geen nog niet geïnstalleerde taalpakketten',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Verwijder uit opslagmap',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecteer downloadformaat',
	'SUBMIT_AND_DOWNLOAD'		=> 'Verstuur en download bestand',
	'SUBMIT_AND_UPLOAD'			=> 'Verstuur en upload bestand',

	'THOSE_MISSING_LANG_FILES'			=> 'De volgende taalbestanden missen in de %s taalmap',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'De volgende taalvariabelen missen in het <strong>%s</strong> taalpakket',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Niet geïnstalleerde taalpakketten',

	'UNABLE_TO_WRITE_FILE'		=> 'Het bestand kon niet beschreven worden %s.',
	'UPLOAD_COMPLETED'			=> 'De upload is succesvol afgerond.',
	'UPLOAD_FAILED'				=> 'De upload is mislukt door onbekende redenen. Je moet waarschijnlijk het relevante bestand handmatig vervangen.',
	'UPLOAD_METHOD'				=> 'Uploadmethode',
	'UPLOAD_SETTINGS'			=> 'Uploadinstellingen',

	'WRONG_LANGUAGE_FILE'		=> 'Het geselecteerde taalbestand is ongeldig.',
));
