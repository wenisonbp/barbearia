<?php

function get_user() {

    return $_SESSION['auth'] ?? null;
}

function auth_protection() {
    $user = get_user();

    if (!$user and !resolve('/cliente/auth.*') and !resolve('/barbeiro/auth.*')) {
        header('location: /barbearia/cliente/auth/login');
        die();
    }

}


function logout() {
    unset($_SESSION['auth']);
    unset($_SESSION['name']);
    unset($_SESSION['id_cliente']);
    unset($_SESSION['id_barbearia']);
    flash('Você se desconectou', 'success');
    header('location: /barbearia/cliente/auth/login');
    die();
}
