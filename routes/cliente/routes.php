<?php

auth_protection();

include __DIR__ . '/db.php';

if ($params = resolve('/cliente/inicio/([a-z0-9]{1,100})')) {
    $lista_barbearias = $lista_barbearias();
    render('admin_cliente/conteudo/inicio', 'admin_cliente/index', ['lista_barbearias' => $lista_barbearias]);
}

elseif ($params = resolve('/cliente/solicitacao/([a-z0-9]{1,100})/([a-z0-9]{1,100})')) {
    $dados_barbearia = $unica_barbearia($params[2]);
    $servicos_barbearia = $servicos_barbearia($params[2]);
    $tipos_servicos = $tipos_servicos($params[2]);
    render('admin_cliente/conteudo/solicitacao', 'admin_cliente/index', ['dados_barbearia' => $dados_barbearia], ['servicos_barbearia' => $servicos_barbearia], ['tipos_servicos' => $tipos_servicos]);
}

elseif ($params = resolve('/cliente/meus_agendamentos/([a-z0-9]{1,100})')) {
    $meus_agendamentos = $meus_agendamentos($params[1]);
    render('admin_cliente/conteudo/meus_agendamentos', 'admin_cliente/index', ['meus_agendamentos' => $meus_agendamentos]);
}

elseif ($params = resolve('/cliente/agendar_pedido/([a-z0-9]{1,100})/([a-z0-9]{1,100})/([a-z0-9]{1,100})')) {
    $horarios_reservados = $horarios_reservados($params[2]);
    $informacoes_servicos = $informacoes_servicos($params[3]);
    render('admin_cliente/conteudo/agendar_pedido', 'admin_cliente/index', ['horarios_reservados' => $horarios_reservados], ['informacoes_servicos' => $informacoes_servicos]);
}

elseif ($params = resolve('/cliente/andamento_pedido.*')) {
    render('admin_cliente/conteudo/andamento_pedido', 'admin_cliente/index');
}

elseif ($params = resolve('/cliente/meus_favoritos.*')) {
    render('admin_cliente/conteudo/meus_favoritos', 'admin_cliente/index');
}

elseif (resolve('/cliente/auth/login')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($login()) {
            flash('Autenticado com sucesso', 'success');
            return header('location: /barbearia/cliente/inicio/' . $_SESSION['id_cliente']);
        }
        flash('Dados inválidos', 'error');
    }
    render('admin_cliente/conteudo/login', 'site');
} 

elseif (resolve('/cliente/auth/logout')) {
    logout();
}

else {
    echo 'Página não encontrada';
}