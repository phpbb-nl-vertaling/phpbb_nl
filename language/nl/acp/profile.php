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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Eigen profielveld succesvol toegevoegd.',
	'ALPHA_ONLY'			=> 'Alleen alfanumeriek',
	'ALPHA_SPACERS'			=> 'Alfanumeriek en spaties',
	'ALPHA_UNDERSCORE'		=> 'Alfanumeriek en underscores',
	'ALWAYS_TODAY'			=> 'Altijd de datum van vandaag',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Vul nu je opties in',
	'BOOL_TYPE_EXPLAIN'		=> 'Definieer het type, ofwel een checkbox of radioknoppen. Een checkbox zal alleen weergegeven worden als het afgevinkt is voor een bepaalde gebruiker. In dat geval zal de <strong>tweede</strong> taaloptie gebruikt worden. Radioknoppen zullen weergegeven worden ongeacht hun waarde.',

	'CHANGED_PROFILE_FIELD'		=> 'Profielveld succesvol gewijzigd.',
	'CHARS_ANY'					=> 'Elk karakter',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Kolommen',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standaard waarde',
	'CP_LANG_EXPLAIN'			=> 'Veldbeschrijving',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'De uitleg van dit veld gepresenteerd aan de gebruiker.',
	'CP_LANG_NAME'				=> 'Veldnaam/titel gepresenteerd aan de gebruiker',
	'CP_LANG_OPTIONS'			=> 'Opties',
	'CREATE_NEW_FIELD'			=> 'Nieuw veld aanmaken',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Tenminste één eigen profielveld is nog niet vertaald. Vul de benodigde informatie in door te klikken op de “Vertaal” link.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standaard taal [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'De taalitems voor de standaard taal zijn niet ingevuld voor dit profielveld.',
	'DEFAULT_VALUE'					=> 'Standaard waarde',
	'DELETE_PROFILE_FIELD'			=> 'Profielveld verwijderen',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Weet je zeker dat je dit profielveld wilt verwijderen?',
	'DISPLAY_AT_PROFILE'			=> 'Weergeven in gebruikerspaneel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'De gebruiker kan dit profielveld veranderen in het gebruikerspaneel.',
	'DISPLAY_AT_REGISTER'			=> 'Weergeven op registratiepagina',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Als deze optie is ingeschakeld, dan zal het veld weergegeven worden bij de registratie.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Weergeven op ledenlijst',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Als deze optie is ingechakeld, dan zal het veld weergegeven worden in de gebruikersrij op de ledenlijst.',
	'DISPLAY_ON_PM'					=> 'Weergeven op privébericht-pagina',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Als deze optie is ingeschakeld, dan zal het veld weergegeven worden in het mini-profiel op de pb-pagina.',
	'DISPLAY_ON_VT'					=> 'Weergeven op onderwerpenpagina',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Als deze optie is ingeschakeld, dan zal het veld weergegeven worden in het mini-profiel op de onderwerpenpagina.',
	'DISPLAY_PROFILE_FIELD'			=> 'Publiekelijk weergeven profielveld',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Het profielveld zal weergegeven worden op alle locaties, die toegestaan zijn in de laadinstellingen. Het instellen van dit op “nee” zal het veld verbergen van onderwerppagina\'s, profielen en de ledenlijst.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Voer je opties hier in, elke optie op een aparte regel.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Please note that you are able to change your options text and also able to add new options to the end. It is not advised to add new options between existing options - this could result in wrong options assigned to your users. This can also happen if you remove options in-between. Removing options from the end result in users having assigned this item now reverting back to the default one.',
	'EMPTY_FIELD_IDENT'				=> 'Empty field identification',
	'EMPTY_USER_FIELD_NAME'			=> 'Please enter a field name/title',
	'ENTRIES'						=> 'Entries',
	'EVERYTHING_OK'					=> 'Everything OK',

	'FIELD_BOOL'				=> 'Boolean (Yes/No)',
	'FIELD_CONTACT_DESC'		=> 'Contact description',
	'FIELD_CONTACT_URL'			=> 'Contact link',
	'FIELD_DATE'				=> 'Date',
	'FIELD_DESCRIPTION'			=> 'Field description',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'The explanation for this field presented to the user.',
	'FIELD_DROPDOWN'			=> 'Dropdown box',
	'FIELD_IDENT'				=> 'Field identification',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'The chosen field identification already exist. Please choose another name.',
	'FIELD_IDENT_EXPLAIN'		=> 'The field identification is a name to identify the profile field within the database and the templates.',
	'FIELD_INT'					=> 'Numbers',
	'FIELD_IS_CONTACT'			=> 'Display field as a contact field',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Contact fields are displayed with in the contact section of the user profile and are displayed differently in the mini profile next to posts and private messages.',
	'FIELD_LENGTH'				=> 'Length of input box',
	'FIELD_NOT_FOUND'			=> 'Profile field not found.',
	'FIELD_STRING'				=> 'Single text field',
	'FIELD_TEXT'				=> 'Tekstveld',
	'FIELD_TYPE'				=> 'Veld type',
	'FIELD_TYPE_EXPLAIN'		=> 'Je kan het veldtype later niet veranderen.',
	'FIELD_URL'					=> 'URL (Link)',
	'FIELD_VALIDATION'			=> 'Veld validatie',
	'FIRST_OPTION'				=> 'Eerste optie',

	'HIDE_PROFILE_FIELD'			=> 'Verberg profielveld',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Hide the profile field from all other users except the user, administrators and moderators who are still able to see this field. If the Display in user control panel option is disabled, the user will not be able to see or change this field and the field can only be changed by administrators.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Field identification can only contain lowercase a-z and _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Field identification can only be 17 characters long',
	'ISO_LANGUAGE'				=> 'Language [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Language specific options [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maximum number of characters',
	'MAX_FIELD_NUMBER'		=> 'Highest allowed number',
	'MIN_FIELD_CHARS'		=> 'Minimum number of characters',
	'MIN_FIELD_NUMBER'		=> 'Lowest allowed number',

	'NO_FIELD_ENTRIES'			=> 'No entries defined',
	'NO_FIELD_ID'				=> 'No field id specified.',
	'NO_FIELD_TYPE'				=> 'No Field type specified.',
	'NO_VALUE_OPTION'			=> 'Option equal to non entered value',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Value for a non-entry. If the field is required, the user gets an error if he choose the option selected here.',
	'NUMBERS_ONLY'				=> 'Only numbers (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Basis opties',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profile field successfully activated.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profile field successfully deactivated.',
	'PROFILE_LANG_OPTIONS'		=> 'Language specific options',
	'PROFILE_TYPE_OPTIONS'		=> 'Profile type specific options',

	'RADIO_BUTTONS'				=> 'Radio buttons',
	'REMOVED_PROFILE_FIELD'		=> 'Successfully removed profile field.',
	'REQUIRED_FIELD'			=> 'Required field',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Force profile field to be filled out or specified by user or administrator. If display at registration screen option is disabled, the field will only be required when the user edits their profile.',
	'ROWS'						=> 'Rows',

	'SAVE'							=> 'Opslaan',
	'SECOND_OPTION'					=> 'Tweede optie',
	'SHOW_NOVALUE_FIELD'			=> 'Show field if no value was selected',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Determines if the profile field should be displayed if no value was selected for optional fields or if no value has been selected yet for required fields.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Here you can enter the first basic parameters of your new profile field. This information is needed for the second step where you’ll be able to set remaining options and tweak your profile field further.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Here you can change the basic parameters of your profile field. The relevant options are re-calculated within the second step.',
	'STEP_1_TITLE_CREATE'			=> 'Add profile field',
	'STEP_1_TITLE_EDIT'				=> 'Edit profile field',
	'STEP_2_EXPLAIN_CREATE'			=> 'Here you are able to define some common options you may want to adjust.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Here you are able to change some common options.<br /><strong>Please note that changes to profile fields will not affect existing profile fields entered by your users.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Profile type specific options',
	'STEP_2_TITLE_EDIT'				=> 'Profile type specific options',
	'STEP_3_EXPLAIN_CREATE'			=> 'Since you have more than one board language installed, you have to fill out the remaining language items too. The profile field will work with the default language enabled, you are able to fill out the remaining language items later too.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Since you have more than one board language installed, you now can change or add the remaining language items too. The profile field will work with the default language enabled.',
	'STEP_3_TITLE_CREATE'			=> 'Remaining language definitions',
	'STEP_3_TITLE_EDIT'				=> 'Language definitions',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default phrase to be displayed, a default value. Leave empty if you want to show it empty at the first place.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default text to be displayed, a default value. Leave empty if you want to show it empty at the first place.',
	'TRANSLATE'						=> 'Translate',

	'USER_FIELD_NAME'	=> 'Field name/title presented to the user',

	'VISIBILITY_OPTION'				=> 'Visibility options',
));
