<?php

include __DIR__ . '/db.php';

if ($params = resolve('/')) {
    render('site/index', 'site');
}

elseif ($params = resolve('/contatos')) {
    render('site/contatos', 'site');
}

elseif ($params = resolve('/quem_somos')) {
    render('site/quem_somos', 'site');
} 

elseif ($params = resolve('/junte_se_a_nos')) {
    render('site/junte_se_a_nos', 'site');
}

elseif ($params = resolve('/realizar_cadastro')){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_barbearia = $cadastro_barbearia();
        if ($id_barbearia) {
            flash('Cadastro com sucesso', 'success');
            return header('location: /barbearia/barbeiro/inicio/' . $_SESSION['id_barbearia']);
        }
        $id_usario = $cadastro_cliente();
        if ($id_usario) {
            flash('Cadastro com sucesso', 'success');
            return header('location: /barbearia/cliente/inicio/' . $_SESSION['id_usario']);
        }
        flash('Favor verificar os dados preenchidos', 'error');
    }
    render('site/cadastro', 'site2');
}

else {
    echo 'Página não encontrada';
}