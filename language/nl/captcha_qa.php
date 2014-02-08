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
	'EDIT_QUESTION'				=> 'Wijzig vraag',
	'QUESTIONS'					=> 'Vragen',
	'QUESTIONS_EXPLAIN'			=> 'Voor elke verzendformulier waar je de V&amp;A plugin voor hebt ingeschakeld, zullen de gebruikers één van de vragen gevraagd worden die hier zijn gespecificeerd. Om deze plugin te kunnen gebruiken, moet tenminste één vraag ingesteld zijn in de standaard taal. Deze vragen moeten makkelijk zijn voor je publiek om te beantwoorden, maar voorbij de mogelijkheid zijn voor een bot om een Google™ zoekopdracht te doen. Een grote en regelmatig wisselende set van vragen zal de beste resultaten voortbrengen. Schakel de strikte instelling in als je vraag vertrouwt op hoofdletter gebruik, leestekens of spaties.',
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