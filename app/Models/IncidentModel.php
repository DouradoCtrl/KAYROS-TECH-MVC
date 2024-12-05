<?php

namespace App\Models;
use CodeIgniter\Model;

class IncidentModel extends Model
{
    protected $table = 'incidente';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nome', 
        'nome_switch', 
        'descricao', 
        'status', 
        'data_incidente', 
        'hora_incidente', 
        'data_incidente_fim', 
        'hora_incidente_fim'
    ];
    
}
