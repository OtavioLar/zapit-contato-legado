ZapIT Contato (Sistema Legado)

Este é o sistema legado desenvolvido para um desafio de desenvolvimento da ZapIT. Trata-se de uma página de contato responsiva com armazenamento de dados via API, usando tecnologias tradicionais.

Tecnologias Utilizadas

HTML5, CSS3, Bootstrap 3

jQuery

PHP com CodeIgniter 4

Integração com API moderna (NestJS)

Funcionalidades

Formulário de contato com campos: nome, e-mail e mensagem

Validação frontend com jQuery

Envio dos dados para uma API moderna (NestJS)

Mensagem de sucesso ou erro após o envio

Estrutura do Projeto

app/
  Controllers/
    Contato.php
  Models/
    ContatoModel.php
  Views/
    formulario.php
public/
  assets/ (JS, CSS, Bootstrap)

Como rodar localmente

Clonar o repositório

Rodar com XAMPP apontando para public/

Verifique se a API NestJS está rodando em http://localhost:3000

Acesse: http://localhost/zapit-contato-legado/public/contato

Observações

O sistema NÃO salva mais diretamente no MySQL. Os dados vão via HTTP para a API.

Requer PHP 8.1+ com extensão intl habilitada.
