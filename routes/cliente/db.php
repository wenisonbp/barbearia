<?php

// Listar Barbearias na páginaa inicio

$lista_barbearias = function () use ($conn) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $distancia = filter_input(INPUT_POST, 'distancia', FILTER_SANITIZE_STRING);
        $avaliacao = filter_input(INPUT_POST, 'avaliacao', FILTER_SANITIZE_STRING);
        $nome_barbearia = filter_input(INPUT_POST, 'nome_barbearia');

        // var_dump($_POST);
        if (!empty($nome_barbearia)) {
            
            $sql = "SELECT * FROM barbearia WHERE nome_barbearia LIKE '%".$nome_barbearia."%'";
            $stmt = $conn->prepare($sql);
            // $stmt->bind_param('s', $nome_barbearia);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        if (!empty($distancia)) {
            
            $sql = "SELECT * FROM qbarber.barbearia ORDER BY distancia ASC";
            $stmt = $conn->prepare($sql);
            // $stmt->bind_param('s', $nome_barbearia);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        if (!empty($avaliacao)) {
            
            $sql = "SELECT * FROM qbarber.barbearia ORDER BY avaliacao DESC";
            $stmt = $conn->prepare($sql);
            // $stmt->bind_param('s', $nome_barbearia);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

    }

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


$carregar_slides = function ($id_barbearia) use ($conn) {


    
    $sql = 'SELECT * FROM imagem WHERE id_barbearia = ? AND posicao = "slide"';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_barbearia);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};

$logo = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT * FROM imagem WHERE id_barbearia = ? AND posicao = "logo"';
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

$horarios_reservados = function ($data, $id_barbearia) use ($conn) {

    $sql = "SELECT * FROM fila WHERE id_barbearia = ? AND status <> 'Encerrado' AND data = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $id_barbearia, $data);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


$agendar_horario = function ($id_cliente, $id_barbearia, $id_servico, $data) use ($conn) {

    $nome_barbearia = filter_input(INPUT_POST, 'nome_barbearia');
    $horario_inicio = filter_input(INPUT_POST, 'horario_agendado');
    $tempo = filter_input(INPUT_POST, 'tempo');
    $intervalo = date("i", strtotime($tempo));
    $horario_fim = date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($horario_inicio)));

    $sql = "INSERT INTO fila (id_usuario, id_barbearia, id_servico, data, horario_inicio, horario_fim, nome_barbearia, status) VALUES (?, ?, ?, ?, ?, ?, ?, 'Pendente');";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $id_cliente, $id_barbearia, $id_servico, $data, $horario_inicio, $horario_fim, $nome_barbearia);
    return $stmt->execute();  
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

    $sql = 'SELECT nome_barbearia, inicio_funcionamento, fim_funcionamento FROM barbearia WHERE id_barbearia = ?';
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
            // $_SESSION['auth'] = $user['login'];
            // $_SESSION['name'] = $user['nome'];
            $_SESSION['id_cliente'] = $user['id_usuario'];
            return true;
        }
    }

    return false;
};

