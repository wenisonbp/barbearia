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


$meus_agendamentos = function ($id_cliente) use ($conn) {

    $sql = 'SELECT * FROM fila WHERE id_usuario = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_cliente);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


// Captura os horários agendados da Barbearia escolhida

$horarios_reservados = function ($id_barbearia) use ($conn) {

    $sql = "SELECT * FROM fila WHERE id_barbearia = ? AND status <> 'Encerrado' AND data = '2019-02-15'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_barbearia);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};

// captura as informações do serviço escolhido

$informacoes_servicos = function ($id_servico) use ($conn) {

    $sql = 'SELECT * FROM servico WHERE id_servico = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_servico);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};

$funcionamento_barbearia = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT inicio_funcionamento, fim_funcionamento FROM barbearia WHERE id_barbearia = ?';
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
            $_SESSION['id_cliente'] = $user['id_usuario'];
            return true;
        }
    }

    return false;
};
