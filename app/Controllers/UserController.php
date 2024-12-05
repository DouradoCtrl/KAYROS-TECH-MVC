<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller {
    public function index()
    {
        $model = new UserModel(); // Cria uma instância do UserModel

        // Recupera todos os usuários com paginação
        $data['users'] = $model->paginate(15); // Ajuste o número de registros por página conforme necessário
        $data['pager'] = $model->pager; // Adiciona o pager para a view

        return view('users/index', $data); // Retorna a view com os dados
    }

    public function create() {
        return view('users/create');
    }

    public function store() {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];
        $model->save($data);
        return redirect()->to('/users');
    }

    public function edit($id) {
        $model = new UserModel();
        $data['user'] = $model->getUserById($id);
        return view('users/edit', $data);
    }

    public function update($id) {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];
        $model->update($id, $data);
        return redirect()->to('/users');
    }

    public function delete($id) {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/users');
    }
}
