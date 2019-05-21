<?php

function get_user() {

    return $_SESSION['auth'] ?? null;
}

function auth_protection() {
    $user = get_user();

    if (!$user and !resolve('/admin/auth.*')) {
        header('location: /eficiencia_operacional/portal_eficiencia/index.php/admin/auth/login');
        die();
    }
}


function logout() {
    unset($_SESSION['auth']);
    unset($_SESSION['name']);
    flash('Você se desconectou', 'success');
    header('location: /eficiencia_operacional/portal_eficiencia/index.php/admin/auth/login');
    die();
}
