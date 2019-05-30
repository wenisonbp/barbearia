<?php


$informacoes_barbearia = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT * FROM barbearia WHERE id_dono = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_barbearia);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};



$acompanhar_agendamentos = function ($id_barbearia) use ($conn) {

    $status = 'Pendente';
    $sql = 'SELECT * FROM fila WHERE id_barbearia = ? AND status = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $id_barbearia, $status);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


$historico_agendamentos = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT * FROM fila WHERE id_barbearia = ?';
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

$meus_servicos = function ($id_barbearia) use ($conn) {

    $sql = 'SELECT * FROM servico WHERE id_barbearia = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $id_barbearia);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


$carregar_slides = function ($id_barbearia) use ($conn) {

    $posiscao = 'slide';
    $sql = 'SELECT * FROM imagem WHERE id_barbearia = ? AND posicao = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $id_barbearia, $posicao);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_all(MYSQLI_ASSOC);
};


$cadastrar_servico = function ($id_barbearia) use ($conn) {

    $id_servico = md5(date("Y-m-d H:i:s").rand(0, 1000));
    $tipo = filter_input(INPUT_POST, 'tipo');
    $email = filter_input(INPUT_POST, 'servico');
    $tempo = filter_input(INPUT_POST, 'tempo');
    $preco = filter_input(INPUT_POST, 'preco');

    $sql = "INSERT INTO servico (id_servico, id_barbearia, tipo, servico, tempo, preco) VALUES (?, ?, ?, ?, ?, ?);";  
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssss', $id_servico, $id_barbearia, $tipo, $email, $tempo, $preco);
    flash('Registro criado com sucesso!', 'success');
    return $stmt->execute();
};


$editar_cadastro = function ($id_barbearia) use ($conn) {

    $nome_barbearia = filter_input(INPUT_POST, 'nome_barbearia');
    $email = filter_input(INPUT_POST, 'email');
    $sobre = filter_input(INPUT_POST, 'sobre');
    $informacao_adicional = filter_input(INPUT_POST, 'informacao_adicional');
    $logradouro_endereco = filter_input(INPUT_POST, 'logradouro_endereco');
    $num_endereco = filter_input(INPUT_POST, 'num_endereco');
    $cep = filter_input(INPUT_POST, 'cep');
    $cidade_endereco = filter_input(INPUT_POST, 'cidade_endereco');
    $estado_endereco = filter_input(INPUT_POST, 'estado_endereco');
    $complemento1_endereco = filter_input(INPUT_POST, 'complemento1_endereco');
    $complemento2_endereco = filter_input(INPUT_POST, 'complemento2_endereco');
    $complemento3_endereco = filter_input(INPUT_POST, 'complemento3_endereco');
    $celular_1 = filter_input(INPUT_POST, 'celular_1');
    $celular_2 = filter_input(INPUT_POST, 'celular_2');

    $sql = 'UPDATE barbearia SET nome_barbearia = ?, email = ?, sobre = ?, informacao_adicional = ?, logradouro_endereco = ?, num_endereco = ?, cep = ?, cidade_endereco = ?, estado_endereco = ?, complemento1_endereco = ?, complemento2_endereco = ?, complemento3_endereco = ?, contato_1 = ?, contato_2 = ? WHERE id_dono = ?';    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssssssssss', $nome_barbearia, $email, $sobre, $informacao_adicional, $logradouro_endereco, $num_endereco, $cep, $cidade_endereco, $estado_endereco, $complemento1_endereco, $complemento2_endereco, $complemento3_endereco, $celular_1, $celular_2, $id_barbearia);
    flash('Registro atualizado com sucesso!', 'success');
    return $stmt->execute();
};



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
            $_SESSION['id_barbearia'] = $user['id_usuario'];
            return true;
        }
    }

    return false;
};