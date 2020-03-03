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
 * Import base controller class
 */
require 'class-basecontroller.php';

/**
 * AdminController Class manages the Admin interface
 */
class AdminController extends BaseController {
	/**
	 * Render the build template
	 **/
	public function render() {
		require COOL_PLUGIN_PATH . 'views/view-admin.php';
	}
}
