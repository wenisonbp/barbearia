<?php

session_start();

require __DIR__ . '/config.php';
//require __DIR__ . '/src/error_handler.php';
require __DIR__ . '/src/resolve-route.php';
require __DIR__ . '/src/render.php';
require __DIR__ . '/src/connection.php';
require __DIR__ . '/src/flash.php';
require __DIR__ . '/src/auth.php';

//Define rota do site
if (resolve('/cliente/?(.*)')) {
    require __DIR__ . '/routes/cliente/routes.php';
}

elseif (resolve('/barbeiro/?(.*)')) {
    require __DIR__ . '/routes/barbeiro/routes.php';
}

elseif (resolve('/(.*)')) {
    require __DIR__ . '/routes/site/routes.php';
}