<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css">
    <link rel="stylesheet" href="/barbearia/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/barbearia/public/css/style_admin_cliente.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/barbearia/public/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/barbearia/public/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/barbearia/public/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/barbearia/public/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/barbearia/public/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/barbearia/public/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/barbearia/public/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/barbearia/public/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/barbearia/public/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/barbearia/public/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/barbearia/public/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/barbearia/public/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/barbearia/public/icon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/barbearia/public/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <title>Painel Administrativo</title>
  </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav id="nav_primary" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mr-auto" href="/barbearia">
                <img src="/barbearia/public/icon/android-icon-192x192.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Barbearia Black Hair
            </a>
            <a href="#" class="btn btn-success btn-sm">Entrar</a>
        </nav>  
    </div>
    <div id="main">
        <div class="row">
            <div id="menu_lateral" class="col" style="padding: 0px;">
                <ul id="main-menu" class="nav flex-column nav-pills text-white" style="background-color: #45525f;">
                    <li class="nav-item grupos">
                    <!--Para inserir transparência no texto, usar text-white-50-->
                        <a href="#" class="pl-4 nav-link active shadow"><i class="fas fa-list-alt"></i> Início</a>
                    </li>
                    <li class="nav-item grupos">
                        <a href="#" class="pl-4 nav-link"><i class="fas fa-file-alt"></i> Conteúdo</a>
                    </li>
                    <li class="nav-item grupos">
                        <a href="#" class="pl-4 nav-link"><i class="fas fa-user"></i> Usuários</a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content ?>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/barbearia/public/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="/barbearia/public/js/templates.js"></script>

</body>
</html>