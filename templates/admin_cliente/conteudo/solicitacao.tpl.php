<div class="p-2 text-center">
    <h1><?php echo $data['dados_barbearia'][0]['nome_barbearia']; ?></h1>
</div>

<div class="row h-auto">

    <div class="col-md-6">
        <div id="carouselExampleInterval" class="p-2 carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="1000">
                <img src="/barbearia/public/img/imagem_01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="1000">
                <img src="/barbearia/public/img/imagem_02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="1000">
                <img src="/barbearia/public/img/imagem_03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>

    <div class="col-md-6">
        <!-- <!DOCTYPE html>
            <html>
            <head>
                <title>Simple Map</title>
                <meta name="viewport" content="initial-scale=1.0">
                <meta charset="utf-8">
                <style>
                /* Always set the map height explicitly to define the size of the div
                * element that contains the map. */
                #map {
                    height: 80%;
                }
                /* Optional: Makes the sample page fill the window. */

                </style>
            </head>
            <body>
                <div id="map"></div>
                <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 8
                    });
                }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
                async defer></script>
            </body>
        </html> -->
    </div>

</div>

<div class="pt-3 pl-3">
    <h4>Fazer uma reserva</h4>
    <label class="font-weight-bold" for="">Sobre:</label>
    <div><?php echo $data['dados_barbearia'][0]['sobre']; ?></div>
    <hr>
</div>

<!-- COMBOS DISPONÍVEIS -->

<?php 

foreach ($data_3['tipos_servicos'] as $tipos_servicos) : ?>
<div class="categoria_serviços">
    <h5 class="pl-5"><?php echo $tipos_servicos['tipo']; ?></h5>

    <?php foreach ($data_2['servicos_barbearia'] as $servicos_barbearia) : 
    
    if ($servicos_barbearia['tipo'] == $tipos_servicos['tipo']) { ?>

    <div class="servico_prestado">
        <div class="row">
            <div class="col-3">
               <?php echo $servicos_barbearia['servico'];?>
            </div>
            <div class="servico_prestado_detalhe col-sm-8 col-6 text-right">
                <span class="inf_servico_prestado"><?php echo date('i', strtotime($servicos_barbearia['tempo'])) . 'm';?></span>
                <span class="inf_servico_prestado"><?php echo 'R$ ' . $servicos_barbearia['preco'];?></span>
                <a href="/barbearia/cliente/agendar_pedido/<?php echo $_SESSION['id_cliente'];?>/<?php echo $servicos_barbearia['id_barbearia'];?>/<?php echo $servicos_barbearia['id_servico'];?>/<?php echo date("Ymd");?>" class="btn_padrao">Reservar</a>
            </div>
        </div>
    </div>

    <?php }; endforeach; ?>

</div>
<?php endforeach; ?>


<div class="pt-3 pl-3">
    <hr>
    <label class="font-weight-bold" for="">Informações adicionais:</label>
    <div><?php echo $data['dados_barbearia'][0]['informacao_adicional']; ?></div>
    <hr>
    <label class="font-weight-bold" for="">Onde fica:</label>
    <div>
        <?php echo $data['dados_barbearia'][0]['logradouro_endereco']; ?> - 
        <?php echo $data['dados_barbearia'][0]['num_endereco']; ?> -
        <?php  if(!empty($data['dados_barbearia'][0]['complemento1_endereco'])) {echo $data['dados_barbearia'][0]['complemento1_endereco'] . '-';} ?>
        <?php  if(!empty($data['dados_barbearia'][0]['complemento2_endereco'])) {echo $data['dados_barbearia'][0]['complemento2_endereco'] . '-';} ?>
        <?php  if(!empty($data['dados_barbearia'][0]['complemento3_endereco'])) {echo $data['dados_barbearia'][0]['complemento3_endereco'] . '-';} ?>
        <?php echo $data['dados_barbearia'][0]['cidade_endereco']; ?> -
        <?php echo $data['dados_barbearia'][0]['estado_endereco']; ?>
    </div>
    <hr>
    <!-- <label class="font-weight-bold" for="">Formas de pagamento:</label>
    <div>Métodos de pagamentos da Barbearia...</div>
    <hr> -->
</div>