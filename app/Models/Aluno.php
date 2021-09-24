<?php

namespace App\Models;
use CodeIgniter\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'cpf', 'telefone'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getAlunos($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['alunos_id' => $id])->first();
    }
}


