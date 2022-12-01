<?php

use core\Application;
use app\Controllers\HomeController;

defined('ENVIRONMENT') or define('ENVIRONMENT', 'development');
defined('PROTOCOL') or define('PROTOCOL', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://');
defined('PATH_TO_HOST') or define('PATH_TO_HOST', PROTOCOL . $_SERVER['HTTP_HOST'] . '/');
defined('BASE_URL') or define('BASE_URL', PATH_TO_HOST . dirname($_SERVER['PHP_SELF']) . '/'); // root path
defined('BASE_URL_ASSETS') or define('BASE_URL_ASSETS', BASE_URL . 'assets/');
defined('USE_DATABASE') or define('USE_DATABASE', false);

if (ENVIRONMENT == 'development') { // dev environment, display all errors
    error_reporting(-1); // E_ALL
    ini_set('display_errors', 1);
} else { // prod environment, hide all errors
    error_reporting(0);
    ini_set('display_errors', 0);
}

// autoloader to use classes using namespace instead of require or include
spl_autoload_register(function ($class) {
    if (file_exists("../$class.php")) {
        require_once "../$class.php";
    }
//    if (file_exists('../app/controllers/' . $class . '.php')) require_once '../app/controllers/' . $class . '.php';
//    else if (file_exists('../app/models/' . $class . '.php')) require_once '../app/models/' . $class . '.php';
//    else if (file_exists('../app/views/' . $class . '.php')) require_once '../app/views/' . $class . '.php';
//    else if (file_exists('../core/' . $class . '.php')) require_once '../core/' . $class . '.php';
});

$config = [
    'credentials' => [ // database credentials
        'hostname' => 'localhost:3306',
        'username' => 'root',
        'password' => '',
        'database' => 'mvc'
    ]
];

$app = new Application();
$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/info', [HomeController::class, 'info']);
$app->router->get('/contact', function () {
    return 'Get contact page';
});
$app->router->post('/contact', function () {
    return 'Handle contact form';
});

$app->run();
