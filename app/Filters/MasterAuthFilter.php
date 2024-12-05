<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class MasterAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verifica se o usuário está logado
        if (!session()->get('loggedUser')) {
            // Se não estiver logado, redireciona para a página de login
            return redirect()->to('/master/login');
        }

        // Verifica se o usuário tem permissão master
        if (!session()->get('is_master')) {
            // Se não tiver permissão, redireciona ou exibe uma mensagem de erro
            return redirect()->to('/master/login')->with('error', 'Acesso negado. Você não tem permissão para acessar esta página.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Aqui você pode adicionar código que deve ser executado após a execução do controlador
    }
}

?>