<?php

/**
 * Special page class for the Duplicator extension
 *
 * @file
 * @ingroup Extensions
 * @author Rob Church <robchur@gmail.com>
 */

class SpecialDuplicator extends SpecialPage {

	/**
	 * Title of the page we are duplicating
	 */
	protected $source = '';
	protected $sourceTitle = null;

	/**
	 * Title of the page we are saving to
	 */
	protected $dest = '';
	protected $destTitle = null;

	/**
	 * Whether or not we're duplicating the talk page and the history
	 */
	protected $talk = true;
	protected $history = true;

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct( 'Duplicator' );
	}

	/**
	 * Main execution function
	 *
	 * @param $title Title passed to the page
	 */
	public function execute( $title ) {
		global $wgUser, $wgOut, $wgRequest, $wgLang, $wgDuplicatorRevisionLimit;
		
		$this->setHeaders();

		# Check permissions
		if( !$wgUser->isAllowed( 'duplicate' ) ) {
			$wgOut->permissionRequired( 'duplicate' );
			return;
		}

		# Check for database lock
		if( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}

		$this->setOptions( $wgRequest, $title );
		$wgOut->addWikiMsg( 'duplicator-header' );
		$wgOut->addHTML( $this->buildForm() );

		# If the token doesn't match or the form wasn't POSTed, stop
		if( !$wgRequest->wasPosted() || !$wgUser->matchEditToken( $wgRequest->getVal( 'token' ), 'duplicator' ) )
			return;

		# Check we've got a valid source title
		if( !is_object( $this->sourceTitle ) ) {
			# Invalid source title
			$wgOut->addWikiMsg( 'duplicator-source-invalid' );
			return;
		}

		# Check the source exists
		if( !$this->sourceTitle->exists() ) {
			# Source doesn't exist
			$wgOut->addWikiMsg( 'duplicator-source-notexist', $this->source );
			return;
		}

		# Check we've got a valid destination title
		if( !is_object( $this->destTitle ) ) {
			# Invalid destination title
			$wgOut->addWikiMsg( 'duplicator-dest-invalid' );
			return;
		}

		# Check the destination *does not* exist
		if( $this->destTitle->exists() ) {
			# Destination exists
			$wgOut->addWikiMsg( 'duplicator-dest-exists', $this->destTitle->getPrefixedText() );
			return;
		}

		# Check there aren't a hideous number of revisions
		$dbr = wfGetDB( DB_SLAVE );
		$num = $dbr->selectField( 'revision', 'COUNT(*)',array( 'rev_page' => $this->sourceTitle->getArticleID() ), __METHOD__ );
		if( $num <= $wgDuplicatorRevisionLimit ) {
			# Attempt to perform the main duplicate op. first
			if( $this->duplicate( $this->sourceTitle, $this->destTitle, $this->history ) ) {
				$success  = wfMsgNoTrans( 'duplicator-success', $this->sourceTitle->getPrefixedText(), $this->destTitle->getPrefixedText() ) . "\n\n";
				$success .= '* ' . wfMsgNoTrans( 'duplicator-success-revisions', $wgLang->formatNum( $num ) ) . "\n";
				# If there is a talk page and we've been asked to duplicate it, do so
				if( $this->dealWithTalk() && $this->talk ) {
					if( $this->duplicate( $this->sourceTitle->getTalkPage(), $this->destTitle->getTalkPage(), $this->history ) ) {
						$success .= '* ' . wfMsgNoTrans( 'duplicator-success-talkcopied' ) . "\n";
					} else {
						$success .= '* ' . wfMsgNoTrans( 'duplicator-success-talknotcopied' ) . "\n";
					}
				}
				# Report success to the user
				$parsed = $wgOut->parse( $success, /*linestart*/true, /*uilang*/true );
				$wgOut->addHTML( $parsed );
			} else {
				# Something went wrong, abort the entire operation
				$wgOut->addWikiMsg( 'duplicator-failed' );
			}
		} else {
			# Revision count exceeds limit
			$limit = $wgLang->formatNum( $wgDuplicatorRevisionLimit );
			$actual = $wgLang->formatNum( $num );
			$stitle = $this->sourceTitle->getPrefixedText();
			$wgOut->addWikiMsg( 'duplicator-toomanyrevisions', $stitle, $actual, $limit );
		}

	}

	/**
	 * Determine various options and attempt initialisation of objects
	 *
	 * @param $request WebRequest we're running off
	 * @param $title Title passed to the page
	 */
	protected function setOptions( &$request, $title ) {
		$source = $request->getText( 'source' );
		$this->source = $source ? $source : ( $title ? $title : '' );
		$this->sourceTitle = Title::newFromText( $this->source );
		$this->dest = $request->getText( 'dest', '' );
		$this->destTitle = Title::newFromText( $this->dest );
		$this->talk = $request->getCheck( 'talk' );
		$this->history = $request->getCheck( 'history' );
	}

	/**
	 * Should we allow the user to see the talk page option?
	 * Don't bother if there is no talk page, or we're duplicating one
	 *
	 * @return bool
	 */
	protected function dealWithTalk() {
		if( is_object( $this->sourceTitle ) ) {
			if( $this->sourceTitle->isTalkPage() )
				return false;
			$talk = $this->sourceTitle->getTalkPage();
			return $talk->exists();
		} else {
			# We can't determine, but it doesn't matter; either the user
			# hasn't hit the submit button, or we'll be throwing up a bad title error
			return true;
		}
	}

	/**
	 * Build a form for entering the source and destination titles
	 *
	 * @return string
	 */
	protected function buildForm() {
		global $wgUser;
		$self = SpecialPage::getTitleFor( 'Duplicator' );
		$source = is_object( $this->sourceTitle ) ? $this->sourceTitle->getPrefixedText() : $this->source;
		$dest = is_object( $this->destTitle ) ? $this->destTitle->getPrefixedText() : $this->dest;
		$form  = '<form method="post" action="' . $self->getLocalUrl() . '">';
		$form .= '<fieldset><legend>' . wfMsgHtml( 'duplicator-options' ) . '</legend>';
		$form .= '<table>';
		$form .= '<tr>';
		$form .= '<td><label for="source">' . wfMsgHtml( 'duplicator-source' ) . '</label></td>';
		$form .= '<td>' . Xml::input( 'source', 40, $source, array( 'id' => 'source' ) ) . '</td>';
		$form .= '</tr><tr>';
		$form .= '<td><label for="dest">' . wfMsgHtml( 'duplicator-dest' ) . '</label></td>';
		$form .= '<td>' . Xml::input( 'dest', 40, $dest, array( 'id' => 'dest' ) ) . '</td>';
		$form .= '</tr><tr>';
		$form .= '<td>&#160;</td>';
		$form .= '<td>' . Xml::checkLabel( wfMsg( 'duplicator-dotalk' ), 'talk', 'talk', $this->talk ) . '</td>';
		$form .= '</tr><tr>';
		$form .= '<td>&#160;</td>';
		$form .= '<td>' . Xml::checkLabel( wfMsg( 'duplicator-dohistory' ), 'history', 'history', $this->history ) . '</td>';
		$form .= '</tr><tr>';
		$form .= '<td>&#160;</td>';
		$form .= '<td>' . Xml::submitButton( wfMsg( 'duplicator-submit' ) ) . '</td>';
		$form .= '</tr>';
		$form .= '</table>';
		$form .= Html::Hidden( 'token', $wgUser->editToken( 'duplicator' ) );
		$form .= '</fieldset></form>';
		return $form;
	}

	/**
	 * Duplicate one page to another, including full histories
	 * Does some basic error-catching, but not as much as the code above [should]
	 *
	 * @param $source Title to duplicate
	 * @param $dest Title to save to
	 * @param $includeHistory Whether to copy full article history
	 * @return bool
	 */
	protected function duplicate( &$source, &$dest, $includeHistory = false ) {
		global $wgUser, $wgBot;
		if( !$source->exists() || $dest->exists() ) {
			return false; # Source doesn't exist, or destination does
		}
		$dbw = wfGetDB( DB_MASTER );
		$dbw->begin();
		$sid = $source->getArticleID();
		$comment = wfMsgForContent( 'duplicator-summary', $source->getPrefixedText() );
		# Create an article representing the destination page and save it
		$destArticle = new Article( $dest );
		$aid = $destArticle->insertOn( $dbw );
		# Perform the revision duplication
		# An INSERT...SELECT here seems to fuck things up
		$res = $dbw->select( 'revision', '*', array( 'rev_page' => $sid ), __METHOD__,
			$includeHistory ? NULL : array( 'ORDER BY' => 'rev_timestamp DESC', 'LIMIT' => 1 ) );
		if( $res && $dbw->numRows( $res ) > 0 ) {
			while( $row = $dbw->fetchObject( $res ) ) {
				$values['rev_page'] = $aid;
				$values['rev_text_id'] = $row->rev_text_id;
				$values['rev_comment'] = $includeHistory ? $row->rev_comment : $comment;
				$values['rev_user'] = $row->rev_user;
				$values['rev_user_text'] = $row->rev_user_text;
				$values['rev_timestamp'] = $row->rev_timestamp;
				$values['rev_minor_edit'] = $row->rev_minor_edit;
				$values['rev_deleted'] = $row->rev_deleted;
				$dbw->insert( 'revision', $values, __METHOD__ );
			}
			$dbw->freeResult( $res );
		}
		# Update page record
		$latest = $dbw->selectField( 'revision', 'MAX(rev_id)', array( 'rev_page' => $aid ), __METHOD__ );
		$nr = Revision::newFromId( $latest );
		if ( $includeHistory ) {
			# Create a null revision with an explanation; do cache clearances, etc.
			$destArticle->updateRevisionOn( $dbw, $nr );
			$nr = Revision::newNullRevision( $dbw, $aid, $comment, true );
			$nid = $nr->insertOn( $dbw );
		}
		$destArticle->updateRevisionOn( $dbw, $nr );
		$destArticle->doEditUpdates( $nr, $wgUser, array( 'created' => true ) );
		Article::onArticleCreate( $dest );
		$bot = $wgUser->isAllowed( 'bot' );
		RecentChange::notifyNew( $nr->getTimestamp(), $dest, true, $wgUser, $comment, $bot );
		$dest->invalidateCache();
		$dbw->commit();
		return true;
	}
}
