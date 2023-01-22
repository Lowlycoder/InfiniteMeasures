<?php

declare(strict_types=1); // set strict types for current file

use app\controllers\AuthController;
use app\Controllers\HomeController;
use core\Application;
use core\DotEnv;

// autoloader to use classes using namespace instead of require or include
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    if (file_exists("../$class.php")) {
        require_once "../$class.php";
    }
});

(new DotEnv(__DIR__.'/../.env'))->load(); // load environment variables from .env file in project root directory
define('ENVIRONMENT', getenv('ENVIRONMENT') ?: 'production');
$isSecure = (!empty($_SERVER['HTTPS']) && 'off' !== $_SERVER['HTTPS']) || 443 == $_SERVER['SERVER_PORT'];
define('PROTOCOL', getenv('HTTPS') || $isSecure ? 'https://' : 'http://');
define('HOST_PATH', PROTOCOL.$_SERVER['HTTP_HOST'].'/');
define('BASE_URL', HOST_PATH.dirname($_SERVER['PHP_SELF']).'/'); // root path
const BASE_URL_ASSETS = BASE_URL.'assets/';

error_reporting(-1); // E_ALL
ini_set('error_log', dirname(__FILE__).'/../errors.log');

if (ENVIRONMENT == 'development') { // dev environment, display all errors
    ini_set('display_errors', '1');
} else { // prod environment, hide all errors
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    ini_set('expose_php', '0');
}

$dbConfig = [
    'hostname' => getenv('DB_HOSTNAME') ?: 'localhost:3306',
    'username' => getenv('DB_USERNAME') ?: 'root',
    'password' => getenv('DB_PASSWORD') ?: '',
    'database' => getenv('DB_DATABASE') ?: 'colibrit',
];

$app = new Application($dbConfig);

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/faq', [HomeController::class, 'faq']);
$app->router->get('/cgu', [HomeController::class, 'cgu']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/reset', [AuthController::class, 'reset']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/empreinte-carbone', [HomeController::class, 'empreinteCarbone']);
$app->router->get('/qcm', [HomeController::class, 'qcm']);
$app->router->get('/contact', [HomeController::class, 'contact']);
$app->router->post('/contact', [HomeController::class, 'contact']);
$app->router->get('/fun-facts', [HomeController::class, 'funFacts']);

$app->router->get('/admin/login', [AuthController::class, 'adminLogin']);
$app->router->get('/admin', [AdminController::class, 'admin']);
$app->router->get('/admin/sensors', [AdminController::class, 'sensors']);
$app->router->get('/admin/users', [AdminController::class, 'tableUser']);
$app->router->get('/admin/edit', [AdminController::class, 'editUser']);
$app->router->get('/admin/statistics', [AdminController::class, 'statistics']);
$app->router->get('/admin/search', [AdminController::class, 'search']);

$app->run();
