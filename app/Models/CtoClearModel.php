<?php
    namespace App\Models;
    use CodeIgniter\Model;
    
    class CtoClearModel extends Model
    {
        protected $table = 'cto_clear';
        protected $primaryKey = 'id';
        protected $allowedFields = [
            'pon_slot',
            'noc', 
            'tecnico', 
            'adicionado', 
            'retirado', 
            'motivo', 
            'hora', 
            'data',
        ];
        
    }
?>


