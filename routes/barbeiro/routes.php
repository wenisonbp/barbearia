<?php

auth_protection();

include __DIR__ . '/db.php';

if ($params = resolve('/barbeiro/inicio.*')) {
    render('admin_barbeiro/conteudo/inicio', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/solicitacao.*')) {
    render('admin_barbeiro/conteudo/solicitacao', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/meus_agendamentos.*')) {
    render('admin_barbeiro/conteudo/meus_agendamentos', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/andamento_pedido.*')) {
    render('admin_barbeiro/conteudo/andamento_pedido', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/meus_favoritos.*')) {
    render('admin_barbeiro/conteudo/meus_favoritos', 'admin_barbeiro/index');
}

elseif (resolve('/barbeiro/auth/login')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($login()) {
            flash('Autenticado com sucesso', 'success');
            return header('location: /barbearia/barbeiro/inicio');
        }
        flash('Dados inválidos', 'error');
    }
    render('admin_barbeiro/conteudo/login', 'site');
} 

elseif (resolve('/cliente/auth/logout')) {
    logout();
}

else {
    echo 'Página não encontrada';
}