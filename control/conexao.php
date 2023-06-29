<?php
// Definição das constantes para a conexão com o banco de dados
define('HOST', 'localhost'); // Endereço do servidor de banco de dados
define('USER', 'root'); // Nome de usuário do banco de dados
define('PASS', ''); // Senha do banco de dados
define('BASE', 'clinica'); // Nome do banco de dados

// Criação de uma nova conexão utilizando a classe mysqli
$conexao = new mysqli(HOST, USER, PASS, BASE);
?>
