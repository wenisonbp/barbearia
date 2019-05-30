<div class="p-2 text-center">
    <div class="row p-3" style="background-color: #F6F6F6;">
        <div class="col">
            <img class="logo_barbearia" src="<?php echo $data_5['logo'][0]['caminho']; ?>" alt="">

            <h1><?php echo $data['dados_barbearia'][0]['nome_barbearia']; ?></h1>
        </div>
    </div>
</div>
<hr>
<div class="row h-auto">


    <div class="col-md-6">
        <div id="carouselExampleInterval" class="p-2 carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner">
            <?php $i = 0; foreach ($data_4['carregar_slides'] as $carregar_slides) : 
            if($i < 1){ ?>
                <div class="carousel-item active" data-interval="1000">
                    <img src="<?php echo $carregar_slides['caminho']; ?>" style="height: -webkit-fill-available;" class="d-block w-100 justify-content-center" alt="...">
                </div>
            <?php }else{ ?>
                <div class="carousel-item" data-interval="1000">
                    <img src="<?php echo $carregar_slides['caminho']; ?>" style="height: -webkit-fill-available;" class="d-block w-100 justify-content-center" alt="...">
                </div>
            <?php }; $i++; endforeach; ?>
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

    <div class="col-md-6" style="text-align: center">
        <?php 
            $dados = $data['dados_barbearia'][0]['id_barbearia'];
            if($dados == "asd1asd3154"){
                echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.293236304745!2d-38.498410684946975!3d-3.74617244431284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74885e829f3d5%3A0x9b86080e0bb45a33!2sAv.+Senador+Virg%C3%ADlio+T%C3%A1vora+-+Dion%C3%ADsio+Torres%2C+Fortaleza+-+CE!5e0!3m2!1sen!2sbr!4v1559252837471!5m2!1sen!2sbr" 
                    width="70%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>';
            }else if($dados == "asd1asd3155"){
                echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.291906960323!2d-38.492965!3d-3.7396300000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7488662029957%3A0x8ac58c30adce018!2sRua+Professor+Dias+da+Rocha%2C+Fortaleza+-+CE!5e0!3m2!1sen!2sbr!4v1559254344905!5m2!1sen!2sbr" 
                    width="70%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>';
            }else if($dados == "asd1asd3156"){
                echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3136605719674!2d-38.4937184849469!3d-3.741680644288649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7489afd92fc33%3A0xd132e6739efbaf7f!2sR.+Monsenhor+Cat%C3%A3o+-+Aldeota%2C+Fortaleza+-+CE!5e0!3m2!1sen!2sbr!4v1559253003125!5m2!1sen!2sbr" 
                    width="70%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>';
            }else if($dados == "asd1asd3157"){
                echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3525814392333!2d-38.501141884946954!3d-3.733106044242522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74863b6aed93b%3A0x50bd7cbc9358b310!2sAv.+Dom+Lu%C3%ADs%2C+300+-+Aldeota%2C+Fortaleza+-+CE%2C+60160-230!5e0!3m2!1sen!2sbr!4v1559254275875!5m2!1sen!2sbr" 
                    width="70%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>';
            }else if($dados == "asd1asd3158"){
                echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.291824463438!2d-38.49724138494696!3d-3.74648274431453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7489a7ba0134b%3A0x4f9983b64f9321da!2sRua+Professor+Dias+da+Rocha%2C+2023+-+Dion%C3%ADsio+Torres%2C+Fortaleza+-+CE%2C+60170-311!5e0!3m2!1sen!2sbr!4v1559254197892!5m2!1sen!2sbr" 
                    width="70%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>';
            }
        ?>
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

// var_dump($data_5['logo']);

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