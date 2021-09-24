<?php

namespace App\Models;
use CodeIgniter\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'id_alunos';
    protected $allowedFields = ['nome', 'email', 'cpf', 'telefone'];
    protected $useTimestamps = false;
    protected $DBGroup              = 'default';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    
    public function getAlunos($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['alunos_id' => $id])->first();
    }
}


