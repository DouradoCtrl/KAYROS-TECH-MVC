<?php

namespace App\Controllers;
use App\Models\CtoClearModel;
use CodeIgniter\Controller;

class CtoClearController extends Controller {

    public function index()
    {
        $search = $this->request->getGet('search') ?? ''; // Obtém o valor de busca ou define como vazio

        $ctoClearModel = new CtoClearModel();

        if ($search) {
            // Se houver uma busca, filtra os registros por nome do noc, técnico, adicionado, retirado ou motivo
            $incidents = $ctoClearModel->groupStart() // Inicia um grupo de condições
                ->like('pon_slot', $search)
                ->orlike('noc', $search)
                ->orlike('tecnico', $search)
                ->orLike('adicionado', $search)
                ->orLike('retirado', $search)
                ->orLike('motivo', $search)
                ->groupEnd() // Finaliza o grupo de condições
                ->paginate(15);
        } else {
            // Caso contrário, recupera todos os registros
            $incidents = $ctoClearModel->paginate(13);
        }

        $data = [
            'incidents' => $incidents,
            'pager'     => $ctoClearModel->pager,
            'search'    => $search // Adiciona o valor da pesquisa
        ];

        return view('cto_clear/index', $data);
    }

    public function create()
    {
        return view('cto_clear/create');
    }

    public function store()
    {
        $ctoClearModel = new CtoClearModel();

        $ctoClearModel->insert([
            'pon_slot' => $this->request->getPost('pon_slot'),
            'noc' => $this->request->getPost('noc'),
            'tecnico' => $this->request->getPost('tecnico'),
            'adicionado' => $this->request->getPost('adicionado'),
            'retirado' => $this->request->getPost('retirado'),
            'motivo' => $this->request->getPost('motivo'),
            'data' => $this->request->getPost('data'),
            'hora' => $this->request->getPost('hora')
        ]);

        return redirect()->to('/cto_clear');
    }

    public function edit($id)
    {
        $ctoClearModel = new CtoClearModel();
        $data['incident'] = $ctoClearModel->find($id);
        return view('cto_clear/edit', $data);
    }

    public function update($id)
    {
        $ctoClearModel = new CtoClearModel();

        $ctoClearModel->update($id, [
            'pon_slot' => $this->request->getPost('pon_slot'),
            'noc' => $this->request->getPost('noc'),
            'tecnico' => $this->request->getPost('tecnico'),
            'adicionado' => $this->request->getPost('adicionado'),
            'retirado' => $this->request->getPost('retirado'),
            'motivo' => $this->request->getPost('motivo'),
            'data' => $this->request->getPost('data'),
            'hora' => $this->request->getPost('hora')
        ]);

        return redirect()->to('/cto_clear');
    }

    public function delete($id)
    {
        $ctoClearModel = new CtoClearModel();
        $ctoClearModel->delete($id);
        return redirect()->to('/cto_clear');
    }
}
