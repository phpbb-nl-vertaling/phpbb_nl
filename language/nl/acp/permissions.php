<?php
/**
*
* acp_permissions [Dutch]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Permissies zijn heel gedetailleerd instelbaar en zijn onderverdeeld in vier grootte secties:</p>

		<h2>Globale Permissies</h2>
		<p>Deze permissies worden gebruikt om toegang op een globale niveau te controleren en zijn van toepassing op het gehele forum. Ze zijn verder opgedeeld in Gebruikerspermissies, Groepspermissies, Beheerderspermissies en Globale Moderatorpermissies.</p>

		<h2>Forum Gebaseerde Permissies</h2>
		<p>Deze permissies worden gebruikt om toegang te controleren per forum. Ze zijn verder opgedeeld in Forumpermissies, Forum Moderatorpermissies, Gebruiker Forumpermissies en Groep Forumpermissies.</p>

		<h2>Permissierollen</h2>
		<p>Deze rollen worden gebruikt om verschillende sets van permissies aan te maken van verschillende permissietypes om later toegewezen te kunnen worden op een rol-gebaseerde basis. De standaard rollen omvatten het beheer van het forum klein en groot, waarbinnen ieder van de vier divisies je rollen kan toevoegen/wijzigen/verwijderen naar gelang je eigen keuze.</p>

		<h2>Permissiemaskers</h2>
		<p>Deze maskers worden gebruikt om de effectieve permissies toegewezen aan Gebruikers, Moderators (Lokaal en Globaal), Beheerders of Forums te bekijken.</p>

		<br />

		<p>Voor meer informatie over het opzetten en beheren van permissies op je phpBB3 forum, lees dan <a href="https://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Hoofdstuk 1.5 van onze Snelle Start Gids</a>.</p>
	',

	'ACL_NEVER'				=> 'Nooit',
	'ACL_SET'				=> 'Permissies instellen',
	'ACL_SET_EXPLAIN'		=> 'Permissies zijn gebaseerd op een simpele <samp>JA</samp>/<samp>NEE</samp> systeem. Door een optie in te stellen op <samp>NOOIT</samp> voor een gebruiker of gebruikersgroep, dan zal deze instellen iedere andere waarde die daar aan wordt toegewezen overschreven worden. Als je geen waarde wenst toe te wijzen voor een optie voor deze gebruiker of gebruikersgroep, selecteer dan <samp>NEE</samp>. Als waardes ergens anders worden toegewezen voor deze optie, zullen ze in plaats daarvoor gebruikt worden, anders wordt <samp>NOOIT</samp> verondersteld. Alle objecten gemarkeerd (met het afvinkvakje voor hen) zal de permissieset die je hebt gedefinieerd kopiëren.',
	'ACL_SETTING'			=> 'Instelling',

	'ACL_TYPE_A_'			=> 'Beheerderpermissies',
	'ACL_TYPE_F_'			=> 'Forumpermissies',
	'ACL_TYPE_M_'			=> 'Moderatorpermissies',
	'ACL_TYPE_U_'			=> 'Gebruikerpermissies',

	'ACL_TYPE_GLOBAL_A_'	=> 'Beheerderpermissies',
	'ACL_TYPE_GLOBAL_U_'	=> 'Gebruikerpermissies',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale Moderatorpermissies',
	'ACL_TYPE_LOCAL_M_'		=> 'Forum Moderatorpermissies',
	'ACL_TYPE_LOCAL_F_'		=> 'Forumpermissies',

	'ACL_NO'				=> 'Nee',
	'ACL_VIEW'				=> 'Permissies bekijken',
	'ACL_VIEW_EXPLAIN'		=> 'Hier kan je de effectieve permissies bekijken die de gebruiker/groep heeft. Een rood vierkantje geeft aan dat de gebruiker/groep de permissie niet heeft, een groen vierkantje geeft aan dat de gebruiker/groep de permissie heeft.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Hier kan je beheerderpermissies toewijzen aan gebruikers of groepen. Alle gebruikers met beheerderpermissies kunnen het beheerderspaneel bekijken.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Hier kan je gebruikers en groepen toewijzen als forummoderators. Om gebruikers toegang tot forums toe te wijzen, om globale moderatorpermissies of beheerders te definiëren, gebruik daarvoor de juiste pagina.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Hier kan je wijzigen welke gebruikers en groepen toegang hebben tot welke forums. Om moderators toe te wijzen of beheerders te definiëren, gebruik daarvoor de juiste pagina.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Hier kan je forumpermissies kopiëren van één forum naar één of meerdere andere forums.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Hier kan je globale moderatorpermissies toewijzen aan gebruikers of groepen. Deze moderators zijn net als gewone moderators, behalve dan dat ze toegang hebben tot ieder forum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kan je forumpermissies toewijzen aan groepen.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Hier kan je globale permissies toewijzen aan groepen - gebruikerpermissies, globale moderatorpermissies en beheerderpermissies. Gebruikerpermissies bevatten ook mogelijkheden zoals het gebruik van avatars, het versturen van privéberichten, enzovoort; globale moderatorpermissies zoals het goedkeuren van berichten, beheer van onderwerpen, beheer van verbanningen, enzovoort en als laatste beheerderpermissies zoals het aanpassen van permissies, eigen BBCodes definiëren, beheer van forums, enzovoort. Individuele gebruikerpermissies zouden alleen veranderd moeten worden in uitzonderlijke gevallen, de voorkeursmethode is het plaatsen van gebruikers in groepen en dan het toewijzen van groepspermissies.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Hier kan je de rollen voor beheerderpermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Hier kan je de rollen voor forumpermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Hier kan je de rollen voor moderatorpermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Hier kan je de rollen voor gebruikerpermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kan je forumpermissies toewijzen aan gebruikers.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Here you can assign global permissions to users - user permissions, global moderator permissions and administrator permissions. User permissions include capabilities such as the use of avatars, sending private messages, et cetera; global moderator permissions such as approving posts, manage topics, manage bans, et cetera and lastly administrator permissions such as altering permissions, define custom BBCodes, manage forums, et cetera. To alter these settings for large numbers of users the Group permissions system is the preferred method. User permissions should only be changed in rare occasions, the preferred method is putting users in groups and assigning the group permissions.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Here you can view the effective administrative permissions assigned to the selected users/groups.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Here you can view the global moderative permissions assigned to the selected users/groups.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Here you can view the forum permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Here you can view the forum moderator permissions assigned to the selected users/groups and forums.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Here you can view the effective user permissions assigned to the selected users/groups.',

	'ADD_GROUPS'				=> 'Add groups',
	'ADD_PERMISSIONS'			=> 'Add permissions',
	'ADD_USERS'					=> 'Add users',
	'ADVANCED_PERMISSIONS'		=> 'Advanced Permissions',
	'ALL_GROUPS'				=> 'Select all groups',
	'ALL_NEVER'					=> 'All <samp>NEVER</samp>',
	'ALL_NO'					=> 'All <samp>NO</samp>',
	'ALL_USERS'					=> 'Select all users',
	'ALL_YES'					=> 'All <samp>YES</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Apply all permissions',
	'APPLY_PERMISSIONS'			=> 'Apply permissions',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'The permissions and role defined for this item will only be applied to this item and all checked items.',
	'AUTH_UPDATED'				=> 'Permissions have been updated.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Are you sure you wish to carry out this operation? Please be aware that this will overwrite any existing permissions on the selected targets.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'The source forum you want to copy permissions from.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'The destination forums you want the copied permissions applied to.',
	'COPY_PERMISSIONS_FROM'					=> 'Copy permissions from',
	'COPY_PERMISSIONS_TO'					=> 'Apply permissions to',

	'CREATE_ROLE'				=> 'Create role',
	'CREATE_ROLE_FROM'			=> 'Use settings from…',
	'CUSTOM'					=> 'Custom…',

	'DEFAULT'					=> 'Default',
	'DELETE_ROLE'				=> 'Delete role',
	'DELETE_ROLE_CONFIRM'		=> 'Are you sure you want to remove this role? Items having this role assigned will <strong>not</strong> lose their permission settings.',
	'DISPLAY_ROLE_ITEMS'		=> 'View items using this role',

	'EDIT_PERMISSIONS'			=> 'Edit permissions',
	'EDIT_ROLE'					=> 'Edit role',

	'GROUPS_NOT_ASSIGNED'		=> 'No group assigned to this role',

	'LOOK_UP_GROUP'				=> 'Look up usergroup',
	'LOOK_UP_USER'				=> 'Look up user',

	'MANAGE_GROUPS'		=> 'Manage groups',
	'MANAGE_USERS'		=> 'Manage users',

	'NO_AUTH_SETTING_FOUND'		=> 'Permission settings not defined.',
	'NO_ROLE_ASSIGNED'			=> 'No role assigned…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Setting to this role does not change permissions on the right. If you want to unset/remove all permissions you should use the “All <samp>NO</samp>” link.',
	'NO_ROLE_AVAILABLE'			=> 'No role available',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Please give the role a name.',
	'NO_ROLE_SELECTED'			=> 'Role could not be found.',
	'NO_USER_GROUP_SELECTED'	=> 'You haven’t selected any user or group.',

	'ONLY_FORUM_DEFINED'	=> 'You only defined forums in your selection. Please also select at least one user or one group.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissions and role will also be applied to all checked objects',
	'PLUS_SUBFORUMS'				=> '+Subforums',

	'REMOVE_PERMISSIONS'			=> 'Remove permissions',
	'REMOVE_ROLE'					=> 'Remove role',
	'RESULTING_PERMISSION'			=> 'Resulting permission',
	'ROLE'							=> 'Role',
	'ROLE_ADD_SUCCESS'				=> 'Role successfully added.',
	'ROLE_ASSIGNED_TO'				=> 'Users/Groups assigned to %s',
	'ROLE_DELETED'					=> 'Role successfully removed.',
	'ROLE_DESCRIPTION'				=> 'Role description',

	'ROLE_ADMIN_FORUM'			=> 'Forum Admin',
	'ROLE_ADMIN_FULL'			=> 'Full Admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standard Admin',
	'ROLE_ADMIN_USERGROUP'		=> 'User and Groups Admin',
	'ROLE_FORUM_BOT'			=> 'Bot Access',
	'ROLE_FORUM_FULL'			=> 'Full Access',
	'ROLE_FORUM_LIMITED'		=> 'Limited Access',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Limited Access + Polls',
	'ROLE_FORUM_NOACCESS'		=> 'No Access',
	'ROLE_FORUM_ONQUEUE'		=> 'On Moderation Queue',
	'ROLE_FORUM_POLLS'			=> 'Standard Access + Polls',
	'ROLE_FORUM_READONLY'		=> 'Read Only Access',
	'ROLE_FORUM_STANDARD'		=> 'Standard Access',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Newly Registered User Access',
	'ROLE_MOD_FULL'				=> 'Full Moderator',
	'ROLE_MOD_QUEUE'			=> 'Queue Moderator',
	'ROLE_MOD_SIMPLE'			=> 'Simple Moderator',
	'ROLE_MOD_STANDARD'			=> 'Standard Moderator',
	'ROLE_USER_FULL'			=> 'All Features',
	'ROLE_USER_LIMITED'			=> 'Limited Features',
	'ROLE_USER_NOAVATAR'		=> 'No Avatar',
	'ROLE_USER_NOPM'			=> 'No Private Messages',
	'ROLE_USER_STANDARD'		=> 'Standard Features',
	'ROLE_USER_NEW_MEMBER'		=> 'Newly Registered User Features',


	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Can access the forum management and forum permission settings.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Has access to all administrative functions of this board.<br />Not recommended.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Has access to most administrative features but is not allowed to use server or system related tools.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Can manage groups and users: Able to change permissions, settings, manage bans, and manage ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'This role is recommended for bots and search spiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Can use all forum features, including posting of announcements and stickies. Can also ignore the flood limit.<br />Not recommended for normal users.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Can use some forum features, but cannot attach files or use post icons.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'As per Limited Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Can neither see nor access the forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Can use most forum features including attachments, but posts and topics need to be approved by a moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Like Standard Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Can read the forum, but cannot create new topics or reply to posts.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Can use most forum features including attachments and deleting own topics, but cannot lock own topics, and cannot create polls.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Can use all moderating features, including banning.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Can use the Moderation Queue to validate and edit posts, but nothing else.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Can only use basic topic actions. Cannot send warnings or use moderation queue.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Can use most moderating tools, but cannot ban users or change the post author.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Can use all available forum features for users, including changing the user name or ignoring the flood limit.<br />Not recommended.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Can access some of the user features. Attachments, emails, or instant messages are not allowed.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Has a limited feature set and is not allowed to use the Avatar feature.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Has a limited feature set, and is not allowed to use Private Messages.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Can access most but not all user features. Cannot change user name or ignore the flood limit, for instance.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'You are able to enter a short explanation of what the role is doing or for what it is meant for. The text you enter here will be displayed within the permissions screens too.',
	'ROLE_DESCRIPTION_LONG'			=> 'The role description is too long, please limit it to 4000 characters.',
	'ROLE_DETAILS'					=> 'Role details',
	'ROLE_EDIT_SUCCESS'				=> 'Role successfully edited.',
	'ROLE_NAME'						=> 'Role name',
	'ROLE_NAME_ALREADY_EXIST'		=> 'A role named <strong>%s</strong> already exist for the specified permission type.',
	'ROLE_NOT_ASSIGNED'				=> 'Role has not been assigned yet.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'The selected forum(s) do not exist.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'The selected group(s) do not exist.',
	'SELECTED_USER_NOT_EXIST'		=> 'The selected user(s) do not exist.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'The forum you select here will include all subforums into the selection.',
	'SELECT_ROLE'					=> 'Select role…',
	'SELECT_TYPE'					=> 'Select type',
	'SET_PERMISSIONS'				=> 'Set permissions',
	'SET_ROLE_PERMISSIONS'			=> 'Set role permissions',
	'SET_USERS_PERMISSIONS'			=> 'Set user permissions',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Set user forum permissions',

	'TRACE_DEFAULT'					=> 'By default every permission is <samp>NO</samp> (unset). So the permission can be overwritten by other settings.',
	'TRACE_FOR'						=> 'Trace for',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'This group’s permission is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'This group’s permission is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'This group’s permission is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NO'				=> 'The permission is <samp>NO</samp> for this group so the old total value is kept.',
	'TRACE_GROUP_NO_LOCAL'			=> 'The permission is <samp>NO</samp> for this group within this forum so the old total value is kept.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'This group’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'This group’s permission is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'This group’s permission is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_PERMISSION'				=> 'Trace permission - %s',
	'TRACE_RESULT'					=> 'Trace result',
	'TRACE_SETTING'					=> 'Trace setting',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'The forum independent user permission evaluates to <samp>YES</samp> but the total permission is already set to <samp>YES</samp>, so the total result is kept. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'The forum independent user permission evaluates to <samp>YES</samp> which overwrites the current local result <samp>NEVER</samp>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'The forum independent user permission evaluates to <samp>NEVER</samp> which doesn’t influence the local permission. %sTrace global permission%s',

	'TRACE_USER_FOUNDER'					=> 'The user is a founder, therefore admin permissions are always set to <samp>YES</samp>.',
	'TRACE_USER_KEPT'						=> 'The user’s permission is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_KEPT_LOCAL'					=> 'The user’s permission for this forum is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'The user’s permission is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'The user’s permission for this forum is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'The user’s permission is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'The user’s permission is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'The user’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'The user’s permission is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'The user’s permission is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_WHO'								=> 'Who',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'No users are assigned to this role',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'is a member of the following pre-defined groups',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'is a member of the following user defined groups',

	'VIEW_ASSIGNED_ITEMS'	=> 'View assigned items',
	'VIEW_LOCAL_PERMS'		=> 'Local permissions',
	'VIEW_GLOBAL_PERMS'		=> 'Global permissions',
	'VIEW_PERMISSIONS'		=> 'View permissions',

	'WRONG_PERMISSION_TYPE'				=> 'Wrong permission type selected.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'The permission settings are in a wrong format, phpBB is not able to process them correctly.',
));
