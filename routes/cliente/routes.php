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

else {
    echo 'Página não encontrada';
}