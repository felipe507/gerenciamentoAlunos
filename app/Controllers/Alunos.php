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

    public function showme($page = "home")
    {
     if (!is_file(APPPATH. '/Views/pages' . $page . '.php')) {
         throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
     } 

     $data['title'] = ucfirst($page);
    
     echo view('layout/layout', $data);
     echo view('page/' . $page, $data);
     echo view('layout/layout');
     echo view('layout/home');

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
    }

    public function delete()
    {
        return view('layout/layout');
    }

    public function editar()
    {
        return view('layout/layout');
    }


}
