<?php

if ($params = resolve('/cliente/inicio.*')) {
    render('admin_cliente/conteudo/index', 'admin_cliente/index');
}

elseif ($params = resolve('/cliente/solicitacao.*')) {
    render('admin_cliente/conteudo/solicitacao', 'admin_cliente/index');
}

elseif ($params = resolve('/cliente/agendamento.*')) {
    render('admin_cliente/conteudo/agendamento', 'admin_cliente/index');
}

elseif ($params = resolve('/cliente/andamento_pedido.*')) {
    render('admin_cliente/conteudo/andamento_pedido', 'admin_cliente/index');
}

else {
    echo 'Página não encontrada';
}