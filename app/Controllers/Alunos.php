<?php

namespace App\Controllers;

use App\Models\Aluno as AlunoModels;
use CodeIgniter\Controller;

class Alunos extends BaseController
{
    public function index()
    {
        $model = new AlunoModels();
        $data = ['alunos' => $model->getAlunos()];
        echo view('layout/layout');
        return view('alunos/listar', ['data' => $data]);
    }


    public function create()
    {
        $model = new AlunoModels();
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nome' => 'required|min_length[3]|max_length[120]'
        ])) {
            $model->save([
                'nome' => $this->request->getPost('nome'),
                'email'  => $this->request->getPost('email'),
                'telefone'  => $this->request->getPost('telefone'),
                'cpf' => $this->request->getPost('cpf')
            ]);
        }
        
    return redirect()->to('/');
    }

    public function delete($id = null)
    {   $model = new AlunoModels();
		$data['user'] = $model->where('alunos_id', $id)->delete();
		return redirect()->to( base_url('/') );
    }

    public function edit($id = null)
    {  
        $model = new AlunoModels();
        $data['aluno']= $model->getAlunos($id);
        echo view('layout/layout');
        return view('alunos/editar',['data' => $data]);
    }

}
