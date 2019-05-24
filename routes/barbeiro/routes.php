<?php

auth_protection();

include __DIR__ . '/db.php';

if ($params = resolve('/barbeiro/inicio.*')) {
    render('admin_barbeiro/conteudo/informacoes_cadastro', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/meus_servicos.*')) {
    render('admin_barbeiro/conteudo/meus_servicos', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/editar_servico.*')) {
    render('admin_barbeiro/conteudo/editar_servico', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/cadastrar_servico.*')) {
    render('admin_barbeiro/conteudo/cadastrar_servico', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/acompanhar_agendamento.*')) {
    render('admin_barbeiro/conteudo/acompanhar_agendamento', 'admin_barbeiro/index');
}

elseif ($params = resolve('/barbeiro/historico_agendamentos.*')) {
    render('admin_barbeiro/conteudo/historico_agendamentos', 'admin_barbeiro/index');
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