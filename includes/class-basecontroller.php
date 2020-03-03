<?php
/**
 *
 * Controller for WordPress cool
 *
 * @author nubeseo
 * @package coolplugin
 * @copyright nubeseo
 */

/**
 * AdminController Class manages the Admin interface
 */
abstract class BaseController {
	/**
	 * Render the build template
	 **/
	public function __construct() {
		$this->render();
	}

	/**
	 * Render the build template
	 **/
	abstract public function render();
}
