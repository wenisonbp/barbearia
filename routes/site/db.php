<?php

// Cadastro de barbearia

$cadastro_barbearia = function () use ($conn) {
    $email = filter_input(INPUT_POST, 'email');
    $nome_barbearia = filter_input(INPUT_POST, 'nome_barbearia');
    $cnpj = filter_input(INPUT_POST, 'cnpj');
    $celular = filter_input(INPUT_POST, 'celular');
    $senha = filter_input(INPUT_POST, 'senha');

    if(!isset($cnpj) or empty($usuario) or empty($nome_barbearia) or empty($celular) or empty($senha)){
        return false;
    }else{
        $sql = "INSERT INTO usuario (id_usuario, login, senha, permissao, nome) VALUES (DEFAULT, ?, ?, ?, ?, ?, 'Sim', ?, ?, 1);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $email, $nome_barbearia, $cnpj, $celular, $senha);
        $stmt->execute();  
    }

};

// Cadastro de clientes

$cadastro_cliente = function () use ($conn) {
    $usuario = filter_input(INPUT_POST, 'email');
    $nome_cliente = filter_input(INPUT_POST, 'nome_cliente');
    $celular = filter_input(INPUT_POST, 'celular');
    $senha = filter_input(INPUT_POST, 'senha');

};






// Realizar autenticação do cliente

$login = function () use ($conn) {
    $usuario = filter_input(INPUT_POST, 'usuario');
    $senha = filter_input(INPUT_POST, 'senha');

    if (is_null($usuario) or is_null($senha)) {
        return false;
    }

    $sql = 'SELECT * FROM usuario WHERE login = ? AND senha = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $usuario, $senha);

    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        return false;
    }else{

        $senha = $user['senha'];

        if (!empty($senha)) {
            $_SESSION['auth'] = $user['login'];
            $_SESSION['name'] = $user['nome'];
            return true;
        }
    }

    return false;
};
