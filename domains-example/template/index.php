<?php

// Valid PHP Version?
$minPHPVersion = '8.1';
if (phpversion() < $minPHPVersion)
{
	die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . phpversion());
}
unset($minPHPVersion);

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the line that might need to be changed, depending on your folder structure.
$pathsPath = realpath(FCPATH. '../../demasjid/app/Config/Paths.php');
// $pathsPath = FCPATH . '../app/Config/Paths.php';
// ^^^ Change this if you move your application folder

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory

// Load our paths config file
require $pathsPath;
$paths = new Config\Paths();
$paths->writableDirectory = FCPATH.'writable';

// Location of the framework bootstrap file.
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

// Load environment settings from .env files into $_SERVER and $_ENV
require_once SYSTEMPATH . 'Config/DotEnv.php';
(new CodeIgniter\Config\DotEnv(ROOTPATH))->load();

$newEnv = parse_ini_file(FCPATH.'.env', 1);
config('Database')->{'default'} = array_merge(config('Database')->{'default'}, $newEnv['database']);
foreach($newEnv['app'] as $_key => $val){
    config('App')->{$_key} = $val;
}

// Define ENVIRONMENT
if (! defined('ENVIRONMENT')) {
    define('ENVIRONMENT', env('CI_ENVIRONMENT', 'production'));
}

// Load Config Cache
// $factoriesCache = new \CodeIgniter\Cache\FactoriesCache();
// $factoriesCache->load('config');
// ^^^ Uncomment these lines if you want to use Config Caching.


/*
 * ---------------------------------------------------------------
 * GRAB OUR CODEIGNITER INSTANCE
 * ---------------------------------------------------------------
 *
 * The CodeIgniter class contains the core functionality to make
 * the application run, and does all of the dirty work to get
 * the pieces all working together.
 */
$app = Config\Services::codeigniter();
$app->initialize();
$context = is_cli() ? 'php-cli' : 'web';
$app->setContext($context);

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */

$app->run();

// Save Config Cache
// $factoriesCache->save('config');
// ^^^ Uncomment this line if you want to use Config Caching.

// Exits the application, setting the exit code for CLI-based applications
// that might be watching.
exit(EXIT_SUCCESS);
