<?php

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
            $_SESSION['id_barbearia'] = $user['id_usuario'];
            return true;
        }
    }

    return false;
};