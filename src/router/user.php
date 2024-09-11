<?php

require 'src/controllers/User.php';

use App\Controllers\UserController;

Flight::group('/users', function () {
    Flight::route('GET /', function () {
        $controller = new UserController();
        $data  = $controller->getAll();
        Flight::json(['response' => $data]);
    });

    Flight::route('GET /@id', function ($id) {
        $controller = new UserController();
        $data = $controller->getById($id);
        Flight::json(['response' => $data]);
    });
});
