<?php

namespace App\Controllers;

// require_once 'src/models/User.php';

use App\Model\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController
{
    // Obtener todos los usuarios
    public function getAll()
    {
        $users = User::all();
        return $users;
    }

    // Obtener un usuario por ID
    public function getById($id)
    {
        try {
            $user = User::findOrFail($id);
            return $user;
        } catch (ModelNotFoundException $e) {
            return ['error' => 'User not found'];
        }
    }

    // Crear un nuevo usuario
    public function create($data)
    {
        $user = User::create($data);
        return $user;
    }

    // Actualizar un usuario existente
    public function update($id, $data)
    {
        try {
            $user = User::findOrFail($id);
            $user->update($data);
            return $user;
        } catch (ModelNotFoundException $e) {
            return ['error' => 'User not found'];
        }
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return ['message' => 'User deleted successfully'];
        } catch (ModelNotFoundException $e) {
            return ['error' => 'User not found'];
        }
    }
}
