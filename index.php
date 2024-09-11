<?php

namespace App;

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Flight;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require 'src/config/db.php';

require 'src/router/index.php';
require 'src/view_router.php';
require_once 'src/helpers/index.php';

Flight::map('error', function (Exception $ex) {
    global $log;
    $log->error($ex->getMessage());
    renderWithLayout('error', ['message' => $ex->getMessage()]);
});

Flight::start();
