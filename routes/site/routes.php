<?php

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

elseif ($params = resolve('/login')){
    render('site/login', 'site');
}

else {
    echo 'Página não encontrada';
}