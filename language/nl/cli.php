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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Stel deze optie in als de configuratie opties te vaak veranderen om efficiënt te worden gecached.',
	'CLI_CONFIG_CURRENT'				=> 'Bestaande configuratiewaarde, gebruik 0 en 1 om booleanwaardes te specificeren.',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Config %s succesvol verwijderd.',
	'CLI_CONFIG_NEW'					=> 'Nieuwe configuratiewaarde, gebruik 0 en 1 om booleanwaardes te specificeren.',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Config %s bestaat niet',
	'CLI_CONFIG_OPTION_NAME'			=> 'De configuratie-optienaam',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Stel deze optie in als de waarde geprint dient te worden zonder een nieuwe regel op het einde.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Aantal om bij verhoging toe te voegen',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Config %s succesvol verhoogd',
	'CLI_CONFIG_SET_FAILURE'		 	=> 'Kan config %s niet instellen',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Config %s succesvol ingesteld',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Weergeeft een lijst van cronjobs die klaar en niet klaar zijn.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Draait al cronjobs die klaar zijn.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Naam van de taak die moet worden uitgevoerd',
	'CLI_DESCRIPTION_DB_LIST'					=> 'List all installed and available migrations.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualiseert de database door het toepassen van migraties.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Revert a migration.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Verwijdert een configuratie-optie',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Schakelt de gespecificeerde extensie uit.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Schakelt de gespecificeerde extensie in.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Vind migraties waar niet op wordt gesteund.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Verkrijgt een configuratie-optie waarde',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Verhoogd een configuratie-optie waarde',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lijst met alle extensies in de database en bestandssysteem.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'The Environment name.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'In Safe Mode draaien (zonder extensies)..',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Shell-toegang openen…',
	
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Leegt de gespecificeerde extensie.',
	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Lists the types of text that can be reparsed.',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Reparses stored text with the current text_formatter services.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Type of text to reparse. Leave blank to reparse everything.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Do not save any changes; just print what would happen',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Lowest record ID to process',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Highest record ID to process',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Approximate number of records to process at a time',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Start reparsing where the last execution stopped',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Herberekend de “user_email_hash”-kolom van de “users”-tabel.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Stelt een configuratie-optie waarde alleen in, als de oude waarde overeenkomt met de nieuwe waarde.',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Stelt een configuratie-optie waarde in',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Delete all existing thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Generate all missing thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Recreate all thumbnails.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Kan de extensie %s niet uitschakelen',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Extensie %s succesvol uitgeschakeld',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Kan de extensie %s niet inschakelen',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensie %s succesvol ingeschakeld',
	'CLI_EXTENSION_NAME'				=> 'Naam van de extensie',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Kan extensie %s niet legen',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Extensie %s succesvol geleegd',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Geen extensies gevonden.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Beschikbaar',
	'CLI_EXTENSIONS_DISABLED'			=> 'Uitgeschakeld',
	'CLI_EXTENSIONS_ENABLED'			=> 'Ingeschakeld',
	
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Alle “email-hashes” succesvol herberekend.',

	'CLI_MIGRATION_NAME'					=> 'Migration name, including the namespace (use forward slashes instead of backslashes to avoid problems).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Available migrations',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Installed migrations',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Show only available migrations',
	'CLI_MIGRATIONS_EMPTY'                  => 'No migrations.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparsing %1$s (range %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparsing %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reparsing ended with success',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) deleted.',
	'CLI_THUMBNAIL_DELETING'	=> 'Deleting thumbnails',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) skipped.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) generated.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Generating thumbnails',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'All thumbnails have been regenerated.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'All thumbnails have been deleted.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'No thumbnails to generate.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'No thumbnails to delete.',	
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Hier kun je eventueel een cronjobnaam opgeven, zodat de speciefieke cronjob gedraait kan worden.',
));
