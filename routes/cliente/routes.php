<?php

if ($params = resolve('/cliente/inicio.*')) {
    render('admin_cliente/conteudo/inicio', 'admin_cliente/index');
}

elseif ($params = resolve('/cliente/solicitacao.*')) {
    render('admin_cliente/conteudo/solicitacao', 'admin_cliente/index');
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

elseif (resolve('/admin/auth/login')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($login()) {
            flash('Autenticado com sucesso', 'success');
            return header('location: /eficiencia_operacional/portal_eficiencia/index.php/admin');
        }
        flash('Dados inválidos', 'error');
    }
    render('admin/auth/login', '/admin/login');
} 

elseif (resolve('/admin/auth/logout')) {
    logout();
}

else {
    echo 'Página não encontrada';
}