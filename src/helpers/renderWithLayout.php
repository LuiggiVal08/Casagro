<?php

Flight::set('flight.views.path', './src/views');

function renderWithLayout($view, $data = [])
{
    ob_start();
    Flight::render('pages/' . $view, $data);
    $content = ob_get_clean();

    // Renderiza el layout
    Flight::render('layout/header', ['hola' => 'hola'], 'header');
    Flight::render('layout/footer', ['hola' => 'hola'], 'footer');
    Flight::render('layout/layout', ['content' => $content]);
}
