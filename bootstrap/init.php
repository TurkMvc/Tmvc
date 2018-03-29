<?php
/**
 * Start session if not already started
 */
if(!isset($_SESSION)) session_start();

//load environment variable
require_once __DIR__ . '/../app/config/_env.php';

//instantiate database class
new \App\Classes\Database();

//set custom error handler
set_error_handler([new \App\Classes\ErrorHandler(), 'handleErrors']);

require_once __DIR__ . '/../app/Routes/routes.php';

new \App\RouteDispatcher($router);