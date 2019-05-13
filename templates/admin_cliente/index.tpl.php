<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/barbearia/public/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/barbearia/public/fontawesome/css/all.css">
    <link rel="stylesheet" href="/barbearia/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/barbearia/public/css/style_admin_cliente.css">

    <link href='/barbearia/public/css/fullcalendar.min.css' rel='stylesheet' />
    <link href='/barbearia/public/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link href='/barbearia/public/css/personalizado.css' rel='stylesheet' />
    <script src='/barbearia/public/js/jquery.min.js'></script>
    <script src='/barbearia/public/js/moment.min.js'></script>
    <script src='/barbearia/public/js/fullcalendar.min.js'></script>
    <script src='/barbearia/public/locale/pt-br.js'></script>


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
                <img src="/barbearia/public/icon/android-icon-192x192.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Barbearia Black Hair
            </a>
            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-door-open" style="color: #17212a;"></i></a>
        </nav>  
    </div>
    <div id="main">
        <div class="row">
            <div class="sidebar pt-3">
                <ul>
                    <a href="/barbearia/cliente/inicio"><li><i class="fas fa-map-marker-alt"></i></li>Encontrar Barbearia</a>
                    <a href="/barbearia/cliente/meus_agendamentos"><li><i class="far fa-calendar-alt"></i></li>Meus Agendamentos</a>
                    <a href="/barbearia/cliente/meus_favoritos"><li><i class="far fa-bookmark"></i></li>Meus Favoritos</a>
                    <a href=""><li><i class="fab fa-hubspot"></i></li>Como funciona</a>
                </ul>
            </div>

            <div id="content" class="p-4 col-10">
                <?php include $content ?>
            </div>
        </div>

    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/barbearia/public/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="/barbearia/public/js/templates.js"></script>
    <script type="text/javascript">
        $('#btn_toggle_menu').on("click", function(){ 
            $('#btn_toggle_menu_icon').toggleClass('fa-times');     
            $('#main').toggleClass('main_left');
            
        });
        </script>    
        <script>
        $(document).ready(function() {
        $('#calendar').fullCalendar({
            defaultView: 'agendaWeek',
            contentHeight: 600,
            height: 600,
            // aspectRatio: 5,
            // updateSize: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'agendaWeek,agendaDay' //Inserir "month" caso queira mostrar o mês
            },
            defaultDate: Date(),
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            eventClick: function(event) {
                
                $('#visualizar #id').text(event.id);
                $('#visualizar #id').val(event.id);
                $('#visualizar #title').text(event.title);
                $('#visualizar #title').val(event.title);
                $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
                $('#visualizar #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
                $('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
                $('#visualizar #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
                $('#visualizar #color').val(event.color);
                // $('#visualizar').modal('show');
                return false;

            },
            
            selectable: true,
            selectHelper: true,
            //Determina a menor hora exibida
            minTime: '08:00:00',
            //Determina a maior hora exibida
            maxTime: '18:30:00',
            //Oculta finais de semana
            //weekends: false,
            //Oculta um determinado dia - No exemplo abaixo está ocutando o domingo
            hiddenDays: [0, 0],
            //Exibe somente os próximos 30 dias
            eventDurationEditable : false,
            eventStartEditable : false,
            slotDuration: '00:10:00',
            slotLabelInterval:'00:30:00',
            // scrollToTime :'02:00:00',
            // scrollTime: '02:00:00',
            snapDuration:'00:40:00',
            selectOverlap: false,
            validRange: {
                start: '<?php echo date("Y-m-d")?>',
                end: '<?php echo date('Y-m-d',strtotime("+30 day"))?>'
            },
            select: function(start, end){
                $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
                $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
                $('#cadastrar').modal('show');						
            }
        });
    });
    </script>


</body>
</html>