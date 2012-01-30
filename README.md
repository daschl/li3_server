li3_server: Booting Lithium from the CLI
========================================
This plugin utilizes the new HTTP server integrated in PHP 5.4 and allows you to start your app from the command line, without the need for a server like Apache or Nginx.

_Note that this is highly experimental and while it works, a lot of tests in `/test` seem to fail._

Requirements
------------
- PHP 5.4 as it introduces the new built-in HTTP server.
- Lithium, of course.

Installation
------------
The easiest way to install `li3_server` is through [Composer](http://packagist.org/about-composer). 

	I'll add a composer.json file as soon as the plugin works quite well! Pull it from GitHub in the meantime...

Alternatively, you can install it directly from GitHub:

	$ cd libraries
	$ git clone git://github.com/daschl/li3_server.git

Now you need to add it to your Lithium bootstrap file (`config/bootstrap/libraries.php`):

	Libraries::add('li3_server');

Usage
-----
Head to the command line and run it through `li3 server`.

	$ li3 server
	--------------------------------------------------------------------------------
	Lithium Development Server
	--------------------------------------------------------------------------------
	Booting: php -S localhost:8000 -t /path/to/webroot
	Starting on localhost:8000...

You can also override the following settings:

- --php: The path to your PHP binary. Defaults to `php`.
- --host: The hostname to which the server will listen. Defaults to `localhost`.
- --port: The port on which the server will listen. Defaults to `8000`.
- --webroot: A custom webroot. Defaults to `LITHIUM_APP_PATH/webroot`.

If you are still running mainly PHP 5.3 and want to experiment with the server, you can do it like this:

	$ li3 server --php=/home/michael/Downloads/php-5.4.0RC6/sapi/cli/php
	--------------------------------------------------------------------------------
	Lithium Development Server
	--------------------------------------------------------------------------------
	Booting: /home/michael/Downloads/php-5.4.0RC6/sapi/cli/php -S localhost:8000 -t /home/michael/web/framework/app/webroot
	Starting on localhost:8000...