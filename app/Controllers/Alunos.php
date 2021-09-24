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
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nome' => 'required|min_length[4]|max_length[40]',
            'email' => 'required',
            'cpf' => 'required|min_length[8]',
            'telefone' => 'required' 
        ])) {
            $nome = $this->request->getPost('nome');
            $email = $this->request->getPost('email');
            $telefone = $this->tirarCaracteresEspeciais($this->request->getPost('telefone'));
            $cpf = $this->tirarCaracteresEspeciais( $this->request->getPost('cpf'));
            return $this->salvar($nome, $email, $telefone, $cpf);
        }
    
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

    public function update()
    {   
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nome' => 'required|min_length[4]|max_length[40]',
            'email' => 'required',
            'cpf' => 'required|min_length[8]',
            'telefone' => 'required' 
        ])) {
            $nome = $this->request->getPost('nome');
            $email = $this->request->getPost('email');
            $telefone = $this->tirarCaracteresEspeciais($this->request->getPost('telefone'));
            $cpf = $this->tirarCaracteresEspeciais( $this->request->getPost('cpf'));
            $id =  $this->request->getPost('id');
            return $this->salvar($nome, $email, $telefone, $cpf,  $id);
        }

    }

    function tirarCaracteresEspeciais($string) {
        $string = utf8_encode($string);
        $string = trim($string);
        $string = str_replace(' ', '', $string);
        $string = str_replace('_', '', $string);
        $string = str_replace('/', '', $string);
        $string = str_replace('-', '', $string);
        $string = str_replace('(', '', $string);
        $string = str_replace(')', '', $string);
        $string = str_replace('.', '', $string);
        return $string;
    }


    public function salvar($nome, $email, $telefone, $cpf, $id = null)
    {   
        $model = new AlunoModels();
        $data = [
            'nome' => $nome,
            'email'  => $email,
            'telefone'  => $telefone,
            'cpf' =>  $cpf
        ];
        if($id != null) {
            $model->update($id,$data);
            return redirect()->to( base_url('/aluno/editar/' . $id) );
        } else{
            $model->save($data);
            return redirect()->to('/');
        }
       
    }



}
