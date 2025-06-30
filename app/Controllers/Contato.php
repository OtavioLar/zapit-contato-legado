<?php

namespace App\Controllers;

use App\Models\ContatoModel;
use CodeIgniter\Controller;

class Contato extends Controller
{
    public function index()
    {
        return view('contato_view');
    }

    public function enviar()
    {
        $model = new ContatoModel();

        $data = [
            'nome'     => $this->request->getPost('nome'),
            'email'    => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'mensagem' => $this->request->getPost('mensagem'),
        ];

        $model->insert($data);

        return redirect()->to('/contato')->with('msg', 'Contato enviado com sucesso!');
    }
}
