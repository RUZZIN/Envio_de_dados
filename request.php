<?php
    $host = 'Localhost';
    $usuario = 'root';
    $senha  = '';
    $banco_de_dados = 'formulario-login';

    $conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

?>
