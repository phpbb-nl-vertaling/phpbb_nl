<?php
/**
*
* acp_styles [English]
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
	'ACP_STYLES_EXPLAIN'	=> 'Here you can manage the available styles on your board. You may alter existing styles, delete, deactivate, reactivate, install new ones. You can also see what a style will look like using the preview function. Also listed is the total user count for each style, note that overriding user styles will not be reflected here.',
	
	'CANNOT_BE_INSTALLED'			=> 'Cannot be installed',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Are you sure you wish to uninstall selected styles?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'You cannot deactivate the default style.',
	'DELETE_FROM_FS'			=> 'Delete from filesystem',
	'DELETE_STYLE_FILES_FAILED'	=> 'Error deleting files for style "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Files for style "%s" have been deleted.',
	'DETAILS'					=> 'Details',

	'INHERITING_FROM'			=> 'Inherits from',
	'INSTALL_STYLE'				=> 'Install style',
	'INSTALL_STYLES'			=> 'Install styles',
	'INSTALL_STYLES_EXPLAIN'	=> 'Here you can install new styles.<br />If you cannot find a specific style in list below, check to make sure style is already installed. If it is not installed, check if it was uploaded correctly.',
	'INVALID_STYLE_ID'			=> 'Invalid style ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'No styles match your query.',
	'NO_UNINSTALLED_STYLE'		=> 'No uninstalled styles detected.',

	'PURGED_CACHE'				=> 'Cache was purged.',
	
	'REQUIRES_STYLE'			=> 'This style requires the style "%s" to be installed.',

	'STYLE_ACTIVATE'			=> 'Activate',
	'STYLE_ACTIVE'				=> 'Active',
	'STYLE_DEACTIVATE'			=> 'Deactivate',
	'STYLE_DEACTIVATED'			=> 'Style deactivated successfully',
	'STYLE_DEFAULT'				=> 'Make default style',
	'STYLE_DEFAULT_CHANGE'		=> 'Change default style',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'You must activate style before making it default style.',
	'STYLE_DELETED'				=> 'Style "%s" deleted successfully.',
	'STYLE_DETAILS_UPDATED'		=> 'Style edited successfully.',
	'STYLE_ERR_ARCHIVE'			=> 'Please select an archive method.',
	'STYLE_ERR_COPY_LONG'		=> 'The copyright can be no longer than 60 characters.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Invalid parent style.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'You must select at least one style element.',
	'STYLE_ERR_NAME_CHARS'		=> 'The style name can only contain alphanumeric characters, -, +, _ and space.',
	'STYLE_ERR_NAME_EXIST'		=> 'A style with that name already exists.',
	'STYLE_ERR_NAME_LONG'		=> 'The style name can be no longer than 30 characters.',
	'STYLE_ERR_NOT_STYLE'		=> 'The imported or uploaded file did not contain a valid style archive.',
	'STYLE_ERR_STYLE_NAME'		=> 'You must supply a name for this style.',
	'STYLE_EXPORT'				=> 'Export style',
	'STYLE_EXPORT_EXPLAIN'		=> 'Here you can export a style in the form of an archive. A style does not need to contain all elements but it must contain at least one. For example if you have created a new theme for a commonly used template you could simply export the theme and omit the template. You may select whether to download the file directly or to place it in your store folder for download later or via FTP.',
	'STYLE_EXPORTED'			=> 'Style exported successfully and stored in %s.',
	'STYLE_INSTALLED'			=> 'Style "%s" has been installed.',
	'STYLE_INSTALLED_EDIT_DETAILS'	=> '<a href="%s">Click here</a> to edit style details or to change default style.',
	'STYLE_INSTALLED_RETURN_STYLES'	=> '<a href="%s">Click here</a> to return to installed styles list.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED'	=> '<a href="%s">Click here</a> to install more styles.',
	'STYLE_NAME'				=> 'Style name',
	'STYLE_NOT_INSTALLED'		=> 'Style "%s" was not installed.',
	'STYLE_PATH'				=> 'Style path:',
	'STYLE_PARENT'				=> 'Parent style:',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Theme',
	'STYLE_UNINSTALL'			=> 'Uninstall',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style "%s" cannot be uninstalled because it has one or more child styles.',
	'STYLE_UNINSTALLED'			=> 'Style "%s" uninstalled successfully.',
	'STYLE_USED_BY'				=> 'Used by (including robots)',

	'TEMPLATE_ADDED'			=> 'Template set added.',
	'TEMPLATE_CACHE'			=> 'Template cache',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'By default phpBB caches the compiled version of its templates. This decreases the load on the server each time a page is viewed and thus may reduce the page generation time. Here you can view the cache status of each file and delete individual files or the entire cache.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Template cache cleared successfully.',
	'TEMPLATE_CACHE_EMPTY'		=> 'There are no cached templates.',
	'TEMPLATE_DELETED_FS'		=> 'Template set removed from database but files remain on the filesystem.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Template details successfully updated.',
	'TEMPLATE_EDITOR'			=> 'Raw HTML template editor',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Template editor height',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Please select an archive method.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'The cache directory used to store cached versions of template files could not be opened.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'The copyright can be no longer than 60 characters.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'The template name can only contain alphanumeric characters, -, +, _ and space.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'The template name can be no longer than 30 characters.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'You must supply a name for this template.',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Here you can export a template set in the form of an archive. This archive will contain all the files necessary to install the templates on another board. You may select whether to download the file directly or to place it in your store folder for download later or via FTP.',
	'TEMPLATE_EXPORTED'			=> 'Templates exported successfully and stored in %s.',
	'TEMPLATE_FILE'				=> 'Template file',
	'TEMPLATE_FILE_UPDATED'		=> 'Template file updated successfully.',
	'TEMPLATE_NAME'				=> 'Template name',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Unable to write to template file %s. Please check the permissions for the directory and the files.',

	'THEME_ADDED'				=> 'Nieuw thema is toegevoegd.',
	'THEME_CLASS_ADDED'			=> 'Custom class added successfully.',
	'THEME_DELETED'				=> 'Theme deleted successfully.',
	'THEME_DELETED_FS'			=> 'Theme removed from database but files remain on the filesystem.',
	'THEME_DETAILS_UPDATED'		=> 'Theme details successfully updated.',
	'THEME_EDITOR'				=> 'Theme editor',
	'THEME_EDITOR_HEIGHT'		=> 'Theme editor height',
	'THEME_ERR_ARCHIVE'			=> 'Please select an archive method.',
	'THEME_ERR_CLASS_CHARS'		=> 'Only alphanumeric characters plus ., :, -, _ and # are valid in class names.',
	'THEME_ERR_COPY_LONG'		=> 'The copyright can be no longer than 60 characters.',
	'THEME_ERR_NAME_CHARS'		=> 'The theme name can only contain alphanumeric characters, -, +, _ and space.',
	'THEME_ERR_NAME_EXIST'		=> 'A theme with that name already exists.',
	'THEME_ERR_NAME_LONG'		=> 'The theme name can be no longer than 30 characters.',
	'THEME_ERR_NOT_THEME'		=> 'The archive you specified does not contain a valid theme.',
	'THEME_ERR_STYLE_NAME'		=> 'You must supply a name for this theme.',
	'THEME_FILE'				=> 'Theme file',
	'THEME_FILE_NOT_WRITABLE'	=> 'Unable to write to theme file %s. Please check the permissions for the directory and the files.',
	'THEME_EXPORT'				=> 'Export Theme',
	'THEME_EXPORT_EXPLAIN'		=> 'Here you can export a theme in the form of an archive. This archive will contain all the data necessary to install the theme on another board. You may select whether to download the file directly or to place it in your store folder for download later or via FTP.',
	'THEME_EXPORTED'			=> 'Theme exported successfully and stored in %s.',
	'THEME_NAME'				=> 'Theme name',
	'THEME_UPDATED'				=> 'Theme updated successfully.',

	'UNDERLINE'				=> 'Underline',
	'UNINSTALL_DEFAULT'		=> 'You cannot uninstall the default style.',
	'UNSET'					=> 'Undefined',

));
