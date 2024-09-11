<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class User extends Model
{
    protected $table = 'users';
    public $incrementing = false; // Utilizar UUID en lugar de auto-incremento
    protected $keyType = 'string';
    protected $fillable = ['id', 'name', 'lastname', 'dni', 'password', 'rol_id'];

    // Crear un UUID al crear el modelo
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = Uuid::uuid4()->toString();
            }
        });
    }
}
