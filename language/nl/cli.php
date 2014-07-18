<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
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
	'CLI_DESCRIPTION_CRON_LIST'				=> 'Weergeeft een lijst van cronjobs die klaar en niet klaar zijn.', 
	'CLI_DESCRIPTION_CRON_RUN'				=> 'Draait al cronjob-taken die klaar zijn.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> 'Naam van de taak die moet worden uitgevoerd',

	'CLI_DESCRIPTION_OPTION_SHELL'			=> 'Shell-toegang openen.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'		=> 'In Safe Mode draaien (zonder extensies).',

));
