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

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'De configinstelling “%s” bestaat onverwachts niet.',

	'GROUP_NOT_EXIST'					=> 'De groep “%s” bestaat onverwachts niet.',

	'MIGRATION_APPLY_DEPENDENCIES'      => 'Pas afhankelijkheden toe van %s.',
	'MIGRATION_DATA_DONE'				=> 'Geïnstalleerde data: %1$s; Tijd: %2$.2f seconden',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installeer data: %1$s; Tijd: %2$.2f seconden',
  	'MIGRATION_DATA_RUNNING'         	=> 'Installeren van data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migratie al effectief geïnstalleerd (overgeslagen): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Iets ging verkeerd tijdens de aanvraag en er is een fout opgetreden. De veranderingen voordat de fout voorkwam zijn teruggedraaid naar ons beste kunnen, maar je moet het forum controleren op fouten.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'De migratie “%1$s” is niet uitvoerbaar, mist migratie “%2$s”.',
  	'MIGRATION_NOT_INSTALLED'			=> 'De migratie "%s" is niet geïnstalleerd.',
  	'MIGRATION_NOT_VALID'				=> '%s is niet een geldige migratie.',
	'MIGRATION_SCHEMA_DONE'				=> 'Geïnstalleerde schema: %1$s; Tijd: %2$.2f secondes',
	'MIGRATION_SCHEMA_RUNNING'         	=> 'Installeren van schema: %s.',
	
	'MIGRATION_REVERT_DATA_DONE'		=> 'Reverted Data: %1$s; Tijd: %2$.2f seconden',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Reverting Data: %1$s; Tijd: %2$.2f seconden',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Reverting Data: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Reverted Schema: %1$s; Tijd: %2$.2f seconden',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Reverting Schema: %s.',	
	
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Een migratie is ongeldig. Een if statement helper mist een conditie.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Een migratie is ongeldig. Een if statement helper mist een geldige aanroep naar een migratie stap.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Een migratie is ongeldig. Een aangepaste functie kon niet worden uitgevoerd.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Een migratie is ongeldig. Onbekend type van migratie tool.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Een migratie is ongeldig. Onbekende migratie tool.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Een migratie is ongeldig. Onbekende functie van migratie tool.',	

	'MODULE_ERROR'						=> 'Een fout is opgetreden tijdens het aanmaken van een module: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Een benodigde module info bestand mist: %2$s',
	'MODULE_NOT_EXIST'					=> 'Een benodigde module bestaat niet: %s',

	'PERMISSION_NOT_EXIST'				=> 'De permissieinstelling “%s” bestaat onverwachts niet.',

	'ROLE_NOT_EXIST'					=> 'De permissierol “%s” bestaat onverwachts niet.',
));
