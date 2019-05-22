<?php

// Listar Barbearias na páginaa inicio

$lista_barbearias = function () use ($conn) {

    $sql = 'SELECT * FROM barbearia';
    $stmt = $conn->prepare($sql);
    //$stmt->bind_param('ss', $grupo, $indicador);
    $stmt->execute();

    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


$unica_barbearia = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT * FROM barbearia WHERE id_barbearia = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_barbearia);
    $stmt->execute();

    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


$servicos_barbearia = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT * FROM servico WHERE id_barbearia = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_barbearia);
    $stmt->execute();

    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


$tipos_servicos = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT DISTINCT tipo FROM servico WHERE id_barbearia = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_barbearia);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
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
