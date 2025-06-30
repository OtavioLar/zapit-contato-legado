<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // página inicial padrão

// Rotas do formulário de contato
$routes->get('contato', 'Contato::index');          // mostra o formulário
$routes->post('contato/enviar', 'Contato::enviar'); // processa o envio do formulário
