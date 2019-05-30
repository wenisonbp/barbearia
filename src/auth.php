<?php

function get_user_cliente() {
    //return $_SESSION['id_cliente'] ?? null;
    return !empty($_SESSION['id_cliente']) ? $_SESSION['id_cliente'] : null;
}


function get_user_barbeiro() {
    //return $_SESSION['id_barbearia'] ?? null;
    return !empty($_SESSION['id_barbearia']) ? $_SESSION['id_barbearia'] : null;
}



function auth_protection_login() {

    $id_cliente = get_user_cliente();
    $id_barbearia = get_user_barbeiro();

    if (!$id_cliente and !resolve('/cliente/auth.*') and resolve('/cliente/.*')) {
        header('location: /barbearia/cliente/auth/login');
        die();
    }

    if (!$id_barbearia and !resolve('/barbeiro/auth.*') and resolve('/barbeiro/.*')) {
        header('location: /barbearia/barbeiro/auth/login');
        die();
    }

}



function logout_cliente() {
    unset($_SESSION['id_cliente']);
    flash('Você se desconectou', 'success');
    header('location: /barbearia/cliente/auth/login');
    die();
}

function logout_barbearia() {
    unset($_SESSION['id_barbearia']);
    flash('Você se desconectou', 'success');
    header('location: /barbearia/barbeiro/auth/login');
    die();
}