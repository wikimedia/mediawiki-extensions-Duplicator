<?php
if (!defined('MEDIAWIKI')) die();
/**
 * Special page which creates independent copies of articles, retaining
 * separate histories
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @file
 * @ingroup Extensions
 * @author Rob Church <robchur@gmail.com>
 * @author Vitaliy Filippov <vitalif@mail.ru>
 */

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Duplicator',
	'version' => '1.4.0',
	'author' => array('Rob Church', 'Vitaliy Filippov'),
	'url' => 'https://www.mediawiki.org/wiki/Extension:Duplicator',
	'descriptionmsg' => 'duplicator-desc',
	'license-name' => 'GPL-2.0-or-later',
);

$dir = dirname(__FILE__) . '/';
$wgMessagesDirs['Duplicator'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['DuplicatorAlias'] = $dir . 'Duplicator.alias.php';
$wgAutoloadClasses['SpecialDuplicator'] = $dir . 'Duplicator.page.php';
$wgSpecialPages['Duplicator'] = 'SpecialDuplicator';

$wgHooks['BaseTemplateToolbox'][] = 'onBaseTemplateToolbox';

$wgDuplicatorToolboxLinkNamespaces = [NS_MAIN, NS_TALK];

/**
 * User permissions
 */
$wgGroupPermissions['user']['duplicate'] = true;
$wgAvailableRights[] = 'duplicate';

/**
 * At most this number of recent revisions will be duplicated
 */
$wgDuplicatorRevisionLimit = 250;

/**
 * Build the link to be shown in the toolbox if appropriate
 * @param $skin Skin
 */
function efMakeDuplicateCurrentPageLink( $skin ) {
	global $wgUser, $wgDuplicatorToolboxLinkNamespaces;

	$ns = $skin->getTitle()->getNamespace();
	if( in_array( $ns, $wgDuplicatorToolboxLinkNamespaces ) && $wgUser->isAllowed( 'duplicate' ) ) {
		return [
			'text' => $skin->msg( 'duplicator-toolbox' ),
			'href' => $skin->makeSpecialUrl( 'Duplicator', "source=" . wfUrlEncode( "{$skin->thispage}", "subpages=1" ) ),
		];
	}
	return null;
}

/**
 * BaseTemplateToolbox hook handler.
 *
 * Simply append the dupe-page link at tht end.
 * is to toolbox menu.
 *
 * @param BaseTemplate $baseTemplate
 * @param array &$toolbox
 * @return bool Always true
 */
function onBaseTemplateToolbox( BaseTemplate $baseTemplate, array &$toolbox ) {
	global $wgDuplicatorSkipToolboxLink;
	if ( !$wgDuplicatorSkipToolboxLink ) {
        $skin = $baseTemplate->getSkin();
        $link = efMakeDuplicateCurrentPageLink( $skin );
        if ( $link ) {
            $toolbox['uploads'] = $link;
        }
	}

    return true;
}

