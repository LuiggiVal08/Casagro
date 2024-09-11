<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->schema()->create('reports', function ($table) {
    $table->increments('id');
    $table->unsignedInteger('user_id');
    $table->date('date');
    $table->time('hour');
    $table->enum('type', ['salida', 'entrada']);
    $table->text('note')->nullable();
    $table->timestamps();
});
