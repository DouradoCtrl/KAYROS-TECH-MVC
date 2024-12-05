<?php

namespace App\Controllers;
use App\Models\IncidentModel;
use CodeIgniter\Controller;

class IncidentController extends Controller {

    public function index()
    {
        $search = $this->request->getGet('search') ?? ''; // Obtém o valor de busca ou define como vazio

        $incidentModel = new IncidentModel();

        if ($search) {
            // Se houver uma busca, filtra os incidentes por nome do incidente, nome do switch, descrição ou status
            $incidents = $incidentModel->groupStart() // Inicia um grupo de condições
                ->like('nome', $search)
                ->orLike('nome_switch', $search)
                ->orLike('descricao', $search)
                ->orLike('status', $search)
                ->groupEnd() // Finaliza o grupo de condições
                ->paginate(15);
        } else {
            // Caso contrário, recupera todos os incidentes
            $incidents = $incidentModel->paginate(13);
        }

        $data = [
            'incidents' => $incidents,
            'pager'     => $incidentModel->pager,
            'search'    => $search // Adiciona o valor da pesquisa
        ];

        return view('incidents/index', $data);
    }


    public function create()
    {
        return view('incidents/create');
    }

    public function store()
    {
        $incidentModel = new IncidentModel();

        $incidentModel->insert([
            'nome' => $this->request->getPost('nome'),
            'nome_switch' => $this->request->getPost('nome_switch'),
            'descricao' => $this->request->getPost('descricao'),
            'status' => $this->request->getPost('status'),
            'data_incidente' => $this->request->getPost('data_incidente'),
            'hora_incidente' => $this->request->getPost('hora_incidente'),
            'data_incidente_fim' => $this->request->getPost('data_incidente_fim'),
            'hora_incidente_fim' => $this->request->getPost('hora_incidente_fim')
        ]);

        return redirect()->to('/incidents');
    }

    public function edit($id)
    {
        $incidentModel = new IncidentModel();
        $data['incident'] = $incidentModel->find($id);
        return view('incidents/edit', $data);
    }

    public function update($id)
    {
        $incidentModel = new IncidentModel();

        $incidentModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'nome_switch' => $this->request->getPost('nome_switch'),
            'descricao' => $this->request->getPost('descricao'),
            'status' => $this->request->getPost('status'),
            'data_incidente' => $this->request->getPost('data_incidente'),
            'hora_incidente' => $this->request->getPost('hora_incidente'),
            'data_incidente_fim' => $this->request->getPost('data_incidente_fim'),
            'hora_incidente_fim' => $this->request->getPost('hora_incidente_fim')
        ]);

        return redirect()->to('/incidents');
    }

    public function delete($id)
    {
        $incidentModel = new IncidentModel();
        $incidentModel->delete($id);
        return redirect()->to('/incidents');
    }
}