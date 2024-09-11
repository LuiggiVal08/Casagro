<?php
// Define las rutas para la aplicación web
Flight::route('/', function () {
    renderWithLayout('index', ['title' => 'Inicio']);
});

Flight::route('/login/', function () {
    if (isset($_SESSION['user'])) {
        Flight::redirect('/casagro_new');
    }
    renderWithLayout('login', ['title' => 'Ingresar']);
});


Flight::route('/help', function () {
    renderWithLayout('help');
});

Flight::route('/about', function () {
    renderWithLayout('about');
});

// 404 Not Found
Flight::route('*', function () {
    renderWithLayout('404');
});
