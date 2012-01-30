<?php
/**
 * li3_server: Booting Lithium with the HTTP server in 5.4.
 *
 * @copyright     Copyright 2012, Michael Nitschinger (michael@nitschinger.at)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\action\Dispatcher;
use lithium\action\Request;

/**
 * This filter fakes the `Request` object to the correct base so that everything
 * works as expected without .htaccess rewrite rules.
 */
Dispatcher::applyFilter('run', function($self, $params, $chain) {
	$params['request'] = new Request(array('base' => ''));
	return $chain->next($self, $params, $chain);
});

?>