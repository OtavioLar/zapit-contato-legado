<?php

namespace App\Models;

use CodeIgniter\Model;

class ContatoModel extends Model
{
    public function salvarContato($dados)
    {
        $url = 'http://localhost:3000/contato';

        $payload = json_encode($dados);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpCode === 201;
    }
}
