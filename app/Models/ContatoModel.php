<?php

namespace App\Models;

use CodeIgniter\Model;

class ContatoModel extends Model
{
    protected $table      = 'contatos'; // nome da tabela no banco
    protected $primaryKey = 'id';

    protected $allowedFields = ['nome', 'email', 'telefone', 'mensagem'];
    protected $useTimestamps = false; // usamos nosso próprio campo criado_em
}
