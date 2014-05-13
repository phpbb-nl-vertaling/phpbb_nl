<?php
/**
*
* acp_attachments [Dutch]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Hier kan je de hoofdinstellingen voor bijlagen en bijbehorende speciale categorieën instellen.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Hier kan je je extensiegroepen toevoegen, verwijderen, wijzigen of uitschakelen. Andere opties zijn onder andere het toewijzen van een speciale categorie voor ze, het veranderen van de download mechanisme en het definiëren van een upload icoon welke zal worden weergegeven voor de bijlage afhankelijk van de groep waartoe de bijlage behoort.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Hier kan je je toegestane extensies beheren. Om je extensies te activeren ga dan naar de extensiegroep managementpaneel. We bevelen sterk aan de volgende script extensies (zoals <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, etc…) niet toe te staan.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Hier kan je de berichtloze bestanden bekijken. Dit gebeurt meestal wanneer gebruikers bestanden bijvoegen maar het bericht niet versturen. Je kan de bestanden verwijderen of ze bijvoegen aan bestaande berichten. Bijvoegen aan een bericht vereist een geldig berichten-ID, je moet dit ID zelf bepalen. Dit zal de al geüploade bijlagen toewijzen aan het bericht dat je hebt ingevuld.',
	'ADD_EXTENSION'						=> 'Toevoegen extensie',
	'ADD_EXTENSION_GROUP'				=> 'Toevoegen extensiegroep',
	'ADMIN_UPLOAD_ERROR'				=> 'Fouten tijdens bijvoegen bestand: “%s”.',
	'ALLOWED_FORUMS'					=> 'Toegestane forums',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Kan de toegewezen extensie plaatsen in de geselecteerde (of alle indien geselecteerd) forums.',
	'ALLOWED_IN_PM_POST'				=> 'Toegestaan',
	'ALLOW_ATTACHMENTS'					=> 'Toestaan bijlagen',
	'ALLOW_ALL_FORUMS'					=> 'Toestaan alle forums',
	'ALLOW_IN_PM'						=> 'Toegestaan in privé berichten',
	'ALLOW_PM_ATTACHMENTS'				=> 'Toestaan bijlagen in privé berichten',
	'ALLOW_SELECTED_FORUMS'				=> 'Alleen forums hieronder geselecteerd',
	'ASSIGNED_EXTENSIONS'				=> 'Toegewezen extensies',
	'ASSIGNED_GROUP'					=> 'Toegewezen extensiegroep',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensies',
	'ATTACH_EXT_GROUPS_URL'				=> 'Extensiegroepen',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximum bestandsgrootte',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximum grootte van elk bestand. Als de waarde 0 is, dan wordt de geüploade bestandsgrootte alleen gelimiteerd door je PHP instellingen.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximum bestandsgrootte privé bericht',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximum grootte van elk bestand, met 0 als ongelimiteerd, bijgevoegd aan een privé bericht.',
	'ATTACH_ORPHAN_URL'					=> 'Berichtloze bijlagen',
	'ATTACH_POST_ID'					=> 'Bericht-ID',
	'ATTACH_POST_TYPE'					=> 'Berichttype',
	'ATTACH_QUOTA'						=> 'Totaal bijlage quota',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximum schijfruimte beschikbaar voor bijlagen van het hele forum, met 0 als ongelimiteerd.',
	'ATTACH_TO_POST'					=> 'Bestand bijvoegen aan bericht',

	'CAT_FLASH_FILES'			=> 'Flash-bestanden',
	'CAT_IMAGES'				=> 'Afbeeldingen',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media bestanden',
	'CAT_RM_FILES'				=> 'RealMedia media bestanden',
	'CAT_WM_FILES'				=> 'Windows Media media bestanden',
	'CHECK_CONTENT'				=> 'Controleer bijlage bestanden',
	'CHECK_CONTENT_EXPLAIN'		=> 'Sommige browsers kunnen een incorrecte mimetype voor geüploade bestanden aan te nemen. Deze optie verzekerd je er van dat zulke bestanden die dit veroorzaken worden afgewezen.',
	'CREATE_GROUP'				=> 'Aanmaken nieuwe groep',
	'CREATE_THUMBNAIL'			=> 'Aanmaken miniatuur',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Maakt een miniatuur aan in alle mogelijke situaties.',

	'DEFINE_ALLOWED_IPS'			=> 'Definieer toegestane IPs/hostnamen',
	'DEFINE_DISALLOWED_IPS'			=> 'Definieer verboden IPs/hostnamen',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Om meerdere IPs of hostnamen op te geven, voer dan ieder op een nieuwe regel in. Om een bereik van IP-adressen op te geven, scheid de start en einde met een streepje (-), om een joker op te geven gebruik dan “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Je kan meerdere IP-adressen verwijderen (of weer insluiten) in één keer door gebruik te maken van de juiste combinatie van muis en toetsenbord voor je computer en browser. Uitgesloten IPs hebben een blauwe achtergrond.',
	'DISPLAY_INLINED'				=> 'Afbeeldingen inline weergeven',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Indien ingesteld op “Geen afbeelding” dan zal de bijlage weergegeven worden als een koppeling.',
	'DISPLAY_ORDER'					=> 'Bijlage weergave volgorde',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Bijlagen weergeven gesorteerd op tijd.',

	'EDIT_EXTENSION_GROUP'			=> 'Wijzig extensiegroep',
	'EXCLUDE_ENTERED_IP'			=> 'Schakel dit in om de ingevoerde IP/hostnaam uit te sluiten.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Sluit IP uit van toegestane IPs/hostnamen',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Sluit IP uit van verboden IPs/hostnamen',
	'EXTENSIONS_UPDATED'			=> 'Extensies succesvol bijgewerkt.',
	'EXTENSION_EXIST'				=> 'De extensie %s bestaat al.',
	'EXTENSION_GROUP'				=> 'Extensiegroep',
	'EXTENSION_GROUPS'				=> 'Extensiegroepen',
	'EXTENSION_GROUP_DELETED'		=> 'Extensiegroep succesvol verwijderd.',
	'EXTENSION_GROUP_EXIST'			=> 'De extensiegroep %s bestaat al.',

	'EXT_GROUP_ARCHIVES'			=> 'Archieven',
	'EXT_GROUP_DOCUMENTS'			=> 'Documenten',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadbare Bestanden',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash-bestanden',
	'EXT_GROUP_IMAGES'				=> 'Afbeeldingen',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Platte Tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'GO_TO_EXTENSIONS'		=> 'Ga naar extensie management scherm',
	'GROUP_NAME'			=> 'Groepnaam',

	'IMAGE_LINK_SIZE'			=> 'Afbeelding koppeling dimensie',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Geef afbeeldingsbijlage weer als een inline tekst koppeling als de afbeelding groter is dan dit. Om dit gedrag uit te schakelen, stel dan de waarde in op 0px bij 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick pad',
	'IMAGICK_PATH_EXPLAIN'		=> 'Volledig pad naar de imagemagick convertor applicatie, bijv. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum aantal bijlagen per bericht',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum aantal bijlagen per privébericht',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum bestandsgrootte',
	'MAX_IMAGE_SIZE'				=> 'Maximum afbeelding dimensies',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximum grootte van afbeelding bijlagen. Stel beide waardes in op 0px bij 0px om dimensie controle uit te schakelen.',
	'MAX_THUMB_WIDTH'				=> 'Maximum miniatuur breedte in pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Een aangemaakte miniatuur zal de hier ingestelde breedte niet overschrijden.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum miniatuur bestandsgrootte',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Maakt geen miniatuur aan voor afbeeldingen kleiner dan dit.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Fysiek',

	'NOT_ALLOWED_IN_PM'			=> 'Alleen toegestaan in berichten',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Niet toegestaan',
	'NOT_ASSIGNED'				=> 'Niet toegewezen',
	'NO_EXT_GROUP'				=> 'Geen',
	'NO_EXT_GROUP_NAME'			=> 'Geen groepsnaam ingevoerd',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Geen extensiegroep opgegeven.',
	'NO_FILE_CAT'				=> 'Geen',
	'NO_IMAGE'					=> 'Geen afbeelding',
	'NO_THUMBNAIL_SUPPORT'		=> 'Miniatuur ondersteuning is uitgeschakeld. Voor juiste functionaliteit moet of de GD-extensie beschikbaar zijn of imagemagick moet geïnstalleerd zijn. Beide zijn niet gevonden.',
	'NO_UPLOAD_DIR'				=> 'De uploadmap die je hebt opgegeven bestaat niet.',
	'NO_WRITE_UPLOAD'			=> 'De uploadmap die je hebt opgegeven kan niet beschreven worden. Wijzig de permissies om de webserver toe te staan om er naar te schrijven.',

	'ONLY_ALLOWED_IN_PM'	=> 'Alleen toegestaan in privéberichten',
	'ORDER_ALLOW_DENY'		=> 'Toestaan',
	'ORDER_DENY_ALLOW'		=> 'Afwijzen',

	'REMOVE_ALLOWED_IPS'		=> 'Verwijder of insluiten <em>toegestane</em> IPs/hostnamen',
	'REMOVE_DISALLOWED_IPS'		=> 'Verwijder of insluiten <em>verboden</em> IPs/hostnamen',

	'SEARCH_IMAGICK'				=> 'Zoek naar Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Toegestaan/Verboden lijst',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Verander het standaard gedrag wanneer beveiligde downloads zijn ingeschakeld de Toestaan/verboden lijst naar die van een <strong>witte lijst</strong> (Toegestaan) of een <strong>zwarte lijst</strong> (Verboden).',
	'SECURE_DOWNLOADS'				=> 'Beveiligde downloads inschakelen',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Met deze optie ingeschakeld, zijn downloads gelimiteerd naar de IP’s/hostnamen die je definieert.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Beveiligde Downloads zijn niet ingeschakeld. De instellingen hieronder zullen toegepast worden na het inschakelen van beveiligde downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'De IP-lijst is succesvol bijgewerkt.',
	'SECURE_EMPTY_REFERRER'			=> 'Lege verwijzer toestaan',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Beveiligde downloads zijn gebaseerd op verwijzers. Wil je downloads toestaan voor diegene die de verwijzing weglaten?',
	'SETTINGS_CAT_IMAGES'			=> 'Afbeeldingscategorie instellingen',
	'SPECIAL_CATEGORY'				=> 'Speciale categorie',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Speciale categorieën verschillen in de manier waarop het gepresenteerd wordt in berichten.',
	'SUCCESSFULLY_UPLOADED'			=> 'Succesvol geüpload.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extensiegroep succesvol toegevoegd.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extensiegroep succesvol bijgewerkt.',

	'UPLOADING_FILES'				=> 'Uploaden bestanden',
	'UPLOADING_FILE_TO'				=> 'Uploaden bestand “%1$s” naar berichtnummer %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Je hebt niet de permissies om bestanden te uploaden naar forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload map',
	'UPLOAD_DIR_EXPLAIN'			=> 'Opslagpad voor bijlagen. Let op dat wanneer je deze map veranderd terwijl je al bestanden hebt geüpload, dat je dan handmatig de bestanden naar hun nieuwe locatie moet kopiëren.',
	'UPLOAD_ICON'					=> 'Uploadicoon',
	'UPLOAD_NOT_DIR'				=> 'De upload locatie die je hebt opgegeven lijkt geen map te zijn.',
));
