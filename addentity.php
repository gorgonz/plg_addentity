<?php
/**
 * plugin addentity
 * @version 3.0.1
 * @package addentity
 * @copyright Copyright (C) 2016 Peter Möller
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

/**
 * Information
 * ===========
 *
 * Anwendung im Content:
 *   {addentity character}
 *
 */
 

defined('_JEXEC') or die;

//jimport('joomla.plugin.plugin');


class plgContentAddentity extends JPlugin {

	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	 function plgContentAddentity( &$subject, $config = array() ) {
        parent::__construct( $subject, $config );
	}


	/**
	* Contentstring Definition
	* String erkennen und mit neuem Inhalt füllen
	*/
	public function onContentPrepare($context, &$article, &$params, $page) {
		$regex = '/{addentity\s*(.*?)\s*}/i';
		$article->text = preg_replace_callback($regex,array($this,"getcontent"), $article->text);
		return true;
	}

    /**
    * IFrame mit Parametern generieren
    */
	public function getcontent($matches) {
		
        $output = $matches[1];
		return utf8_encode($output);
	}
}

?>
