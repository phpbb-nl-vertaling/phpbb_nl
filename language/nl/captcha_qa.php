<?php
/**
*
* captcha_qa [Dutch]
*
* @package language
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'V&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Deze vraag is bedoeld om geautomatiseerde toegang van spambots tegen te gaan.',
	'CONFIRM_QUESTION_WRONG'	=> 'Je hebt een verkeerd antwoord op de vraag gegeven.',

	'QUESTION_ANSWERS'			=> 'Antwoorden',
	'ANSWERS_EXPLAIN'			=> 'Vul hier de antwoorden op de vraag in, één per regel.',
	'CONFIRM_QUESTION'			=> 'Vraag',

	'ANSWER'					=> 'Antwoord',
	'EDIT_QUESTION'				=> 'Vraag wijzigen',
	'QUESTIONS'					=> 'Vragen',
	'QUESTIONS_EXPLAIN'			=> 'Bij elk verstuurd formulier waar je de V&amp;A plug-in hebt ingeschakeld worden één van de volgende vragen gesteld aan de gebruikers die je hier hebt opgegeven. Je moet minimaal één vraag in de standaardtaal van het forum opgeven om deze plug-in te gebruiken. De vragen moeten simpel zijn voor je doelpubliek, maar buiten de mogelijkheden vallen van dat een bot deze kan opzoeken via Google™. Vergeet ook niet regelmatig de vragen aan te passen. Schakel de strikte controle in, indien je vraag afhankelijk is van zowel hoofdletters als kleine, interpunctie of spaties.',
	'QUESTION_DELETED'			=> 'Vraag verwijderd',
	'QUESTION_LANG'				=> 'Taal',
	'QUESTION_LANG_EXPLAIN'		=> 'Het taalpakket waar in deze vraag en de antwoorden geschreven zijn.',
	'QUESTION_STRICT'			=> 'Strikte controle',
	'QUESTION_STRICT_EXPLAIN'	=> 'Schakel in om hoofdletter gebruik, leestekens en spaties te controleren.',

	'QUESTION_TEXT'				=> 'Vraag',
	'QUESTION_TEXT_EXPLAIN'		=> 'De vraag die gesteld wordt aan de gebruiker.',

	'QA_ERROR_MSG'				=> 'Vul alle velden in en voer tenminste één antwoord in.',
	'QA_LAST_QUESTION'			=> 'Je kan niet alle vragen verwijderen terwijl de plugin actief is.',

));