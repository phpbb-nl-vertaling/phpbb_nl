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

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'		=> 'Signature preview',
	'AT_LEAST_ONE_FOUNDER'	=> 'You are not able to change this founder to a normal user. There needs to be at least one founder enabled for this board. If you want to change this users founder status, promote another user to be a founder first.',

	'BAN_ALREADY_ENTERED'	=> 'The ban had been previously entered successfully. The ban list has not been updated.',
	'BAN_SUCCESSFUL'		=> 'Ban entered successfully.',

	'CANNOT_BAN_ANONYMOUS'			=> 'You are not allowed to ban the anonymous account. Permissions for anonymous users can be set under the Permissions tab.',
	'CANNOT_BAN_FOUNDER'			=> 'You are not allowed to ban founder accounts.',
	'CANNOT_BAN_YOURSELF'			=> 'You are not allowed to ban yourself.',
	'CANNOT_DEACTIVATE_BOT'			=> 'You are not allowed to deactivate bot accounts. Please deactivate the bot within the bots page instead.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'You are not allowed to deactivate founder accounts.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'You are not allowed to deactivate your own account.',
	'CANNOT_FORCE_REACT_BOT'		=> 'You are not allowed to force reactivation on bot accounts. Please reactivate the bot within the bots page instead.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'You are not allowed to force reactivation on founder accounts.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'You are not allowed to force reactivation of your own account.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'You are not able to remove the guest user account.',
	'CANNOT_REMOVE_YOURSELF'		=> 'You are not allowed to remove your own user account.',
	'CANNOT_REMOVE_FOUNDER'			=> 'You are not allowed to remove founder accounts.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'You are not able to promote ignored users to be founders.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'You need to activate users before you promote them to founders, only activated users are able to be promoted.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'You only need to specify this if you are changing the users email address.',

	'DELETE_POSTS'			=> 'Verwijder berichten',
	'DELETE_USER'			=> 'Verwijder gebruiker',
	'DELETE_USER_EXPLAIN'	=> 'Let op dat het verwijderen van een gebruiker definitief is, dit kan niet meer ongedaan gemaakt worden. Ongelezen privéberichten verstuurd door deze gebruiker zullen worden verwijderd en zal niet beschikbaar zijn voor hun ontvangers.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Heractivatie succesvol geforceerd.',
	'FOUNDER'						=> 'Oprichter',
	'FOUNDER_EXPLAIN'				=> 'Oprichters hebben alle administratieve permissies en kunnen nooit verbannen, verwijderd of gewijzigd worden door niet-oprichter leden.',

	'GROUP_APPROVE'					=> 'Lid goedkeuren',
	'GROUP_DEFAULT'					=> 'Maak groep standaard voor lid',
	'GROUP_DELETE'					=> 'Verwijder lid van groep',
	'GROUP_DEMOTE'					=> 'Degradeer groepsleider',
	'GROUP_PROMOTE'					=> 'Promoveer naar groepsleider',

	'IP_WHOIS_FOR'			=> 'IP whois voor %s',

	'LAST_ACTIVE'			=> 'Laatst actief',

	'MOVE_POSTS_EXPLAIN'	=> 'Selecteer het forum waarnaar je alle berichten die deze gebruiker heeft gemaakt naar toe wilt verplaatsen.',

	'NO_SPECIAL_RANK'		=> 'Geen speciale rang toegewezen',
	'NO_WARNINGS'			=> 'Geen waarschuwingen.',
	'NOT_MANAGE_FOUNDER'	=> 'Je hebt geprobeerd om een gebruiker met oprichterstatus te beheren. Alleen oprichters zijn toegestaan om andere oprichters te beheren.',

	'QUICK_TOOLS'			=> 'Snelle hulpmiddelen',

	'REGISTERED'			=> 'Geregistreerd',
	'REGISTERED_IP'			=> 'Geregistreerd van IP',
	'RETAIN_POSTS'			=> 'Behoud berichten',

	'SELECT_FORM'			=> 'Selecteer formulier',
	'SELECT_USER'			=> 'Selecteer gebruiker',

	'USER_ADMIN'					=> 'Gebruikersbeheer',
	'USER_ADMIN_ACTIVATE'			=> 'Activeer account',
	'USER_ADMIN_ACTIVATED'			=> 'Gebruiker succesvol geactiveerd.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar succesvol verwijderd van gebruikersaccount.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Verban op e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mailadres verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_IP'				=> 'Verban op IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Gebruikersnaam verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_USER'			=> 'Verban op gebruikersnaam',
	'USER_ADMIN_DEACTIVATE'			=> 'Deactiveer account',
	'USER_ADMIN_DEACTIVED'			=> 'Gebruiker succesvol gedeactiveerd.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Verwijder alle bijlagen',
	'USER_ADMIN_DEL_AVATAR'			=> 'Verwijder avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Leeg PM uitbox',
	'USER_ADMIN_DEL_POSTS'			=> 'Verwijder alle berichten',
	'USER_ADMIN_DEL_SIG'			=> 'Verwijder onderschrift',
	'USER_ADMIN_EXPLAIN'			=> 'Hier kan je je gebruikersinformatie en bepaalde opties veranderen.',
	'USER_ADMIN_FORCE'				=> 'Forceer heractivatie',
	'USER_ADMIN_LEAVE_NR'			=> 'Verwijder van nieuw geregistreerd',
	'USER_ADMIN_MOVE_POSTS'			=> 'Verplaats alle berichten',
	'USER_ADMIN_SIG_REMOVED'		=> 'Onderschrift van gebruikersaccount succesvol verwijderd.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Alle bijlagen gemaakt door deze gebruiker succesvol verwijderd.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'De avatar kan niet weergegeven worden omdat avatars niet toegestaan zijn.',
	'USER_AVATAR_UPDATED'			=> 'Gebruikersavatar details succesvol bijgewerkt.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'De bestaande avatar kan niet weergegeven worden omdat dit type niet is toegestaan.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Eigen profielvelden',
	'USER_DELETED'					=> 'Gebruiker succesvol verwijderd.',
	'USER_GROUP_ADD'				=> 'Gebruiker toevoegen aan groep',
	'USER_GROUP_NORMAL'				=> 'Gebruikers-gedefinieerde groepen waar de gebruiker lid van is',
	'USER_GROUP_PENDING'			=> 'Groepen waar de gebruiker in afwachting van is',
	'USER_GROUP_SPECIAL'			=> 'Voor-gedefinieerde groepen waar de gebruiker lid van is',
	'USER_LIFTED_NR'				=> 'De gebruikers nieuw geregistreerde status succesvol verwijderd.',
	'USER_NO_ATTACHMENTS'			=> 'Er zijn geen bijgevoegde bestanden om weer te geven.',
	'USER_NO_POSTS_TO_DELETE'			=> 'De gebruiker heeft geen berichten om te behouden of om te verwijderen.',
	'USER_OUTBOX_EMPTIED'			=> 'Privéberichten uitbox van de gebruiker succesvol geleegd.',
	'USER_OUTBOX_EMPTY'				=> 'De privéberichten uitbox van de gebruiker was al leeg.',
	'USER_OVERVIEW_UPDATED'			=> 'Gebruikersdetails bijgewerkt.',
	'USER_POSTS_DELETED'			=> 'Alle berichten van deze gebruiker zijn succesvol verwijderd.',
	'USER_POSTS_MOVED'				=> 'Gebruikersberichten succesvol verplaatst naar doelforum.',
	'USER_PREFS_UPDATED'			=> 'Gebruikersvoorkeuren bijgewerkt.',
	'USER_PROFILE'					=> 'Gebruikersprofiel',
	'USER_PROFILE_UPDATED'			=> 'Gebruikersprofiel bijgewerkt.',
	'USER_RANK'						=> 'Gebruikersrang',
	'USER_RANK_UPDATED'				=> 'Gebruikersrang bijgewerkt.',
	'USER_SIG_UPDATED'				=> 'Gebruikersonderschrift bijgewerkt.',
	'USER_WARNING_LOG_DELETED'		=> 'Geen informatie beschikbaar. Waarschijnlijk is het logitem verwijderd.',
	'USER_TOOLS'					=> 'Basis hulpmiddelen',
));
