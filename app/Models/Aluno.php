<?php

namespace App\Models;
use CodeIgniter\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'cpf', 'telefone'];
    public function getAlunos($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
}


