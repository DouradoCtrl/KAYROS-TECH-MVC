<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'is_master'];

    public function getAllUsers() {
        return $this->findAll(); // Retorna todos os usuários
    }

    public function getUserById($id) {
        return $this->find($id); // Retorna o usuário pelo ID
    }

    public function isMaster($id) {
        $user = $this->find($id);
        return $user && $user['is_master'] === true;
    }

    public function getUser($username, $password) {
        return $this->where(['username' => $username, 'password' => $password])->first(); // Busca usuário com username e password
    }
}
