<?php

auth_protection();

include __DIR__ . '/db.php';

if ($params = resolve('/cliente/inicio.*')) {
    $lista_barbearias = $lista_barbearias();
    render('admin_cliente/conteudo/inicio', 'admin_cliente/index', ['lista_barbearias' => $lista_barbearias]);
}

elseif ($params = resolve('/cliente/solicitacao/([a-z0-9]{1,100})')) {
    $dados_barbearia = $unica_barbearia($params[1]);
    $servicos_barbearia = $servicos_barbearia($params[1]);
    $tipos_servicos = $tipos_servicos($params[1]);
    render('admin_cliente/conteudo/solicitacao', 'admin_cliente/index', ['dados_barbearia' => $dados_barbearia], ['servicos_barbearia' => $servicos_barbearia], ['tipos_servicos' => $tipos_servicos]);
}

elseif ($params = resolve('/cliente/meus_agendamentos.*')) {
    render('admin_cliente/conteudo/meus_agendamentos', 'admin_cliente/index');
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
            return header('location: /barbearia/cliente/inicio');
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