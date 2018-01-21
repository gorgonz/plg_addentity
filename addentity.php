<?php
/** 
 * plugin addentity
 * @version 3.0.0
 * @package addentity
 * @copyright Copyright (C) 2016 Peter Möller
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

/**
 * Information
 * ===========
 *
 * Usage in Content:
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
	* Scan for module string 'addentity' and call replace method
	*/
	public function onContentPrepare($context, &$article, &$params, $page) {
		$regex = '/{addentity\s*(.*?)\s*}/i';
		$article->text = preg_replace_callback($regex,array($this,"getcontent"), $article->text);
		return true;
	}

    /**
    * Method to replace the matching strings
    */
	public function getcontent($matches) {
		
        $output = $matches[1];
		return utf8_encode($output);
	}
}

?>
