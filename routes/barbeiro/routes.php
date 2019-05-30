<?php

// auth_protection();
auth_protection_login();

include __DIR__ . '/db.php';

if ($params = resolve('/barbeiro/inicio/([a-z0-9]{1,100})')) {
    $informacoes_barbearia = $informacoes_barbearia($params[1]);
    render('admin_barbeiro/conteudo/informacoes_cadastro', 'admin_barbeiro/index', ['informacoes_barbearia' => $informacoes_barbearia]);
}

elseif ($params = resolve('/barbeiro/inicio/([a-z0-9]{1,100})/editar_cadastro')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $editar_cadastro($params[1]);
        return header('location: /barbearia/barbeiro/inicio/' . $params[1]);
    }
    $informacoes_barbearia = $informacoes_barbearia($params[1]);
    render('admin_barbeiro/conteudo/editar_cadastro', 'admin_barbeiro/index', ['informacoes_barbearia' => $informacoes_barbearia]);
}

elseif ($params = resolve('/barbeiro/meus_servicos/([a-z0-9]{1,100})')) {
    $meus_servicos = $meus_servicos($params[1]);
    $tipos_servicos = $tipos_servicos($params[1]);
    render('admin_barbeiro/conteudo/meus_servicos', 'admin_barbeiro/index', ['tipos_servicos' => $tipos_servicos], ['meus_servicos' => $meus_servicos]);
}

elseif ($params = resolve('/barbeiro/editar_servico/([a-z0-9]{1,100})/([0-9]+)')) {
    render('admin_barbeiro/conteudo/editar_servico', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/cadastrar_servico/([a-z0-9]{1,100})')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cadastrar_servico($params[1]);
        flash('Registro criado com sucesso!', 'success');
        return header('location: /barbearia/barbeiro/meus_servicos/' . $params[1]);
    }
    render('admin_barbeiro/conteudo/cadastrar_servicos', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/acompanhar_agendamento/([a-z0-9]{1,100})')) {
    $acompanhar_agendamentos = $acompanhar_agendamentos($params[1]);
    render('admin_barbeiro/conteudo/acompanhar_agendamento', 'admin_barbeiro/index', ['acompanhar_agendamentos' => $acompanhar_agendamentos]);
}

elseif ($params = resolve('/barbeiro/historico_agendamentos/([a-z0-9]{1,100})')) {
    $historico_agendamentos = $historico_agendamentos($params[1]);
    render('admin_barbeiro/conteudo/historico_agendamentos', 'admin_barbeiro/index', ['historico_agendamentos' => $historico_agendamentos]);
}

elseif (resolve('/barbeiro/auth/login')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($login()) {
            flash('Autenticado com sucesso', 'success');
            return header('location: /barbearia/barbeiro/inicio/' . $_SESSION['id_barbearia']);
        }
        flash('Dados inválidos', 'error');
    }
    render('admin_barbeiro/conteudo/login', 'site2');
} 

elseif (resolve('/barbeiro/auth/logout')) {
    logout_barbearia();
}

else {
    echo 'Página não encontrada';
}