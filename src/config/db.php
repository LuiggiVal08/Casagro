<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

// Configura la conexión según el entorno
if ($_ENV['APP_ENV'] === 'development') {
    $capsule->addConnection([
        'driver'   => 'sqlite',
        'database' => __DIR__ . '/database.sqlite',
        'prefix'   => '',
    ]);
} else if ($_ENV['APP_ENV'] === 'production') {
    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => $_ENV['DB_HOST'],
        'database'  => $_ENV['DB_DATABASE'],
        'username'  => $_ENV['DB_USERNAME'],
        'password'  => $_ENV['DB_PASSWORD'],
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);
}

// Inicializar Eloquent
$capsule->setAsGlobal();
$capsule->bootEloquent();


// Función para validar la conexión
// function validateDatabaseConnection()
// {
//     global $capsule;
//     try {
//         // Ejecutar una consulta simple
//         $capsule->connection()->getPdo();
//         echo "Conexión a la base de datos establecida exitosamente.";
//     } catch (QueryException $e) {
//         echo "Error al conectar a la base de datos: " . $e->getMessage();
//     } catch (\PDOException $e) {
//         echo "Error de PDO: " . $e->getMessage();
//     }
// }

// Llamar a la función para validar la conexión
// validateDatabaseConnection();
