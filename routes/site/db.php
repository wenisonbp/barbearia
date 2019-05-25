<?php


// Cadastro de barbearia

$cadastro_barbearia = function () use ($conn) {

    $dados_completos = false;
    $email = filter_input(INPUT_POST, 'email');
    $nome_cliente = filter_input(INPUT_POST, 'nome_proprietario');
    $nome_barbearia = filter_input(INPUT_POST, 'nome_barbearia');
    $cnpj = filter_input(INPUT_POST, 'cnpj');
    $senha = filter_input(INPUT_POST, 'senha');
    $contato_1 = filter_input(INPUT_POST, 'contato_1');
    $contato_2 = filter_input(INPUT_POST, 'contato_2');

    if(empty($cnpj) or empty($email) or empty($nome_barbearia) or empty($contato_1) or empty($contato_2) or empty($senha)){
        
        return false;

    }else{
        
        // Cadastrando usuário
        $dados_completos = true;
        $id_usario = md5(date("Y-m-d H:i:s").rand(0, 1000));
        $id_barbearia = md5(date("Y-m-d H:i:s").rand(0, 1000));

        $sql = "INSERT INTO usuario (id_usuario, login, senha, permissao, nome) VALUES (?, ?, ?, 1, ?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $id_usario, $email, $senha, $nome_cliente);
        $stmt->execute();  

        // Cadastrando barbearia 

        $sql = "INSERT INTO barbearia (id_barbearia, id_dono, nome_barbearia, cnpj, email, contato_1, contato_2) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssss', $id_barbearia, $id_usario, $nome_barbearia, $cnpj, $email, $contato_1, $contato_2);
        $stmt->execute(); 
        
        if (!$dados_completos) {
            return false;
        }else{
            $_SESSION['auth'] = $email;
            $_SESSION['name'] = $nome_barbearia;
            $_SESSION['id_barbearia'] = $id_barbearia;
            return true;
        }
    }
};

// Cadastro de clientes

$cadastro_cliente = function () use ($conn) {

    $dados_completos = false;
    $email = filter_input(INPUT_POST, 'email_cliente');
    $nome_cliente = filter_input(INPUT_POST, 'nome_cliente');
    $celular = filter_input(INPUT_POST, 'celular_cliente');
    $senha = filter_input(INPUT_POST, 'senha_cliente');

    if(empty($email) or empty($nome_cliente) or empty($celular) or empty($senha)){
        return false;

    }

    $dados_completos = true;
    $id_usario = md5(date("Y-m-d H:i:s").rand(0, 1000));
    $sql = "INSERT INTO usuario (id_usuario, login, senha, permissao, nome) VALUES (?, ?, ?, 1, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $id_usario, $email, $senha, $nome_cliente);
    $stmt->execute();  

    if (!$dados_completos) {
        return false;
    }else{
        $_SESSION['auth'] = $email;
        $_SESSION['name'] = $nome_cliente;
        $_SESSION['id_usario'] = $id_usario;
        return true;
    }

};


