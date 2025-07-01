<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContatoModel;

class Contato extends Controller
{
    public function index()
    {
        // Foormulário e mensagens
        $mensagem = session()->getFlashdata('msg');
        return view('formulario', ['mensagem' => $mensagem]);
    }

    public function enviar()
    {
        $model = new ContatoModel();

        $data = [
            'nome'     => $this->request->getPost('nome'),
            'email'    => $this->request->getPost('email'),
            'mensagem' => $this->request->getPost('mensagem'),
        ];

        $salvo = $model->salvarContato($data);

        if ($salvo) {
            return redirect()->to('/contato')->with('msg', 'Contato enviado com sucesso!');
        } else {
            return redirect()->to('/contato')->with('msg', 'Erro ao enviar o contato.');
        }
    }
}
