<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller {
    public function index() {
        return view('login'); // Crie a view 'login.php'
    }

    public function loginMasterPage() {
        return view('login_master'); // Crie a view 'login_master.php'
    }

    public function login() {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->getUser($username, $password);

        if ($user) {
            // Armazenar informações do usuário na sessão
            session()->set('loggedUser', $user['id']);
            return redirect()->to('/incidents'); // Redireciona para /incidents
        } else {
            return redirect()->back()->with('error', 'Usuário ou senha inválidos');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login'); // Redireciona para a página de login
    }

    /* public function loginMaster()
    {
        
        // Captura os dados do formulário
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $session = session();
        $model = new UserModel();

        // Busca o usuário no banco de dados
        $user = $model->where('username', $username)->first();

        // Verifica se o usuário existe e a senha está correta
        if ($user && $user['password']) {
            // Verifica se o usuário tem permissão master
            if ($user['is_master']) {
                // Redireciona para a página do gerenciador de tarefas
                return redirect()->to('/users');
            } else {
                // Caso o usuário não seja master, exibe uma mensagem de erro
                $session->setFlashdata('error', 'Acesso negado. Você não tem permissão para acessar.');
                return redirect()->back();
            }
        } else {
            // Usuário ou senha inválidos
            $session->setFlashdata('error', 'Usuário ou senha incorretos.');
            return redirect()->back();
        }
    } */

    public function loginMaster()
    {
        // Captura os dados do formulário
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $session = session();
        $model = new UserModel();

        // Busca o usuário no banco de dados
        $user = $model->where('username', $username)->first();

        // Verifica se o usuário existe e a senha está correta
        if ($user && $user['password'] === $password) { // Comparação direta da senha
            // Armazena os dados do usuário na sessão
            $session->set('loggedUser', $user['username']);
            $session->set('is_master', $user['is_master']);

            // Verifica se o usuário tem permissão master
            if ($user['is_master']) {
                // Redireciona para a página do gerenciador de tarefas
                return redirect()->to('/users');
            } else {
                // Caso o usuário não seja master, exibe uma mensagem de erro
                $session->setFlashdata('error', 'Acesso negado. Você não tem permissão para acessar.');
                return redirect()->back();
            }
        } else {
            // Usuário ou senha inválidos
            $session->setFlashdata('error', 'Usuário ou senha incorretos.');
            return redirect()->back();
        }
    }
}

