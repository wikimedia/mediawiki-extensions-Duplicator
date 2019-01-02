<?php
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

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Duplicator' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Duplicator'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['DuplicatorAlias'] = __DIR__ . '/Duplicator.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for the Duplicator extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Duplicator extension requires MediaWiki 1.31+' );
}
