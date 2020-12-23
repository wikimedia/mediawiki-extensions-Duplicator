<?php

class DuplicatorHooks {
	/**
	 * Build the link to be shown in the toolbox if appropriate
	 * @param Skin $skin
	 * @param array &$sidebar
	 */
	public static function efDuplicatorNavigation( Skin $skin, array &$sidebar ) {
		if ( !$skin->getTitle()->inNamespaces( [ NS_MAIN, NS_TALK ] ) ) {
			return;
		}

		$permissionManager = \MediaWiki\MediaWikiServices::getInstance()->getPermissionManager();
		if ( !$permissionManager->userHasRight( $skin->getUser(), 'duplicate' ) ) {
			return;
		}

		$toolbox = &$sidebar['TOOLBOX'];
		$insert = [
			'duplicator' => [
				'text' => $skin->msg( 'duplicator-toolbox' )->text(),
				'href' => $skin->makeSpecialUrl( 'Duplicator', 'source=' . wfUrlEncode( $skin->thispage ) ),
			]
		];

		if ( isset( $toolbox['permalink'] ) ) {
			$toolbox = wfArrayInsertAfter( $toolbox, $insert, 'permalink' );
		} else {
			$toolbox += $insert;
		}
	}

	/**
	 * Output the toolbox link if available
	 */
	public static function efDuplicatorToolbox( &$monobook ) {
		if ( isset( $monobook->data['nav_urls']['duplicator'] ) ) {
			if ( $monobook->data['nav_urls']['duplicator']['href'] == '' ) {
				?><li id="t-isduplicator"><?php echo $monobook->msg( 'duplicator-toolbox' ); ?></li><?php
			} else {
				?><li id="t-duplicator"><?php
					?><a href="<?php echo htmlspecialchars( $monobook->data['nav_urls']['duplicator']['href'] ) ?>"><?php
						echo $monobook->msg( 'duplicator-toolbox' );
					?></a><?php
				?></li><?php
			}
		}
		return true;
	}
}
