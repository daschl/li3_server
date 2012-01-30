<?php
/**
 * li3_server: Booting Lithium with the HTTP server in 5.4.
 *
 * @copyright     Copyright 2012, Michael Nitschinger (michael@nitschinger.at)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace li3_server\extensions\command;

class Server extends \lithium\console\Command {

	public $php = 'php';
	
	public $host = 'localhost';
	
	public $port = '8000';
	
	public $webroot = null;
	
	protected function _init() {
		parent::_init();
		$this->webroot = $this->webroot ?: LITHIUM_APP_PATH . '/webroot';
	}
	
	public function run() {
		$this->header("Lithium Development Server");
		
		$cmd = "{$this->php} -S {$this->host}:{$this->port} -t {$this->webroot}";
		
		$this->out("Booting: $cmd"); 
		$this->out("Starting on {$this->host}:{$this->port}...");
		system($cmd);
	}

}

?>