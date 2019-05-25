<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/barbearia/public/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/barbearia/public/fontawesome/css/all.css">
    <link rel="stylesheet" href="/barbearia/public/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/barbearia/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/barbearia/public/css/style_admin_cliente.css">

    <!-- <link href='/barbearia/public/css/fullcalendar.min.css' rel='stylesheet' />
    <link href='/barbearia/public/css/fullcalendar.print.min.css' rel='stylesheet' media='print' /> -->
    <!-- <link href='/barbearia/public/css/personalizado.css' rel='stylesheet' /> -->
    <script src='/barbearia/public/js/jquery.min.js'></script>
    <!-- <script src='/barbearia/public/js/moment.min.js'></script>
    <script src='/barbearia/public/js/fullcalendar.min.js'></script>
    <script src='/barbearia/public/locale/pt-br.js'></script> -->


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
            <a id="btn_toggle_menu" class="pr-3" style="display: none;"><i id="btn_toggle_menu_icon" class="fas fa-bars"></i></a>
            <a class="navbar-brand mr-auto" href="/barbearia/cliente/inicio">
                <img src="/barbearia/public/img/logo_qbarber.png" width="100px" class="d-inline-block align-top" alt="">
            </a>
            <a href="/barbearia/cliente/auth/logout" class="btn btn-warning btn-sm"><i class="fas fa-door-open" style="color: #17212a;"></i></a>
        </nav>  
    </div>
    <div id="main">
        <div class="row">
            <div class="sidebar pt-3">
                <ul>
                    <a href="/barbearia/cliente/inicio/<?php echo $_SESSION['id_barbearia'];?>"><li><i class="fas fa-map-marker-alt"></i></li>Encontrar Barbearia</a>
                    <a href="/barbearia/cliente/meus_agendamentos/<?php echo $_SESSION['id_barbearia'];?>"><li><i class="far fa-calendar-alt"></i></li>Meus Agendamentos</a>
                    <a href="/barbearia/cliente/meus_favoritos/<?php echo $_SESSION['id_barbearia'];?>"><li><i class="far fa-bookmark"></i></li>Meus Favoritos</a>
                    <!-- <a href="/barbearia/cliente/meus_favoritos/<?php echo $_SESSION['id_barbearia'];?>"><li><i class="fab fa-hubspot"></i></li>Como funciona</a> -->
                </ul>
            </div>

            <div id="content" class="p-4 col-10">
                <?php include $content ?>
            </div>
        </div>

    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="/barbearia/public/pnotify/pnotify.custom.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/barbearia/public/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="/barbearia/public/js/templates_cliente.js"></script>
    
    <script>
        <?php flash(); ?>
    </script>

    <script type="text/javascript">
        $('#btn_toggle_menu').on("click", function(){ 
            $('#btn_toggle_menu_icon').toggleClass('fa-times');     
            $('#main').toggleClass('main_left');
            
        });
        </script>    
        <script>

</body>
</html>



