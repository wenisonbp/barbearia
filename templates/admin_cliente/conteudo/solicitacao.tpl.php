<div class="p-2 pt-3 text-center">
    <h4><?php echo $data['dados_barbearia'][0]['nome']; ?></h4>
</div>

<div class="row h-auto">

<div class="col-6">
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


</div>

<div class="pt-3 pl-3">
    <h4>Fazer uma reserva</h4>
    <label class="font-weight-bold" for="">Sobre:</label>
    <div><?php echo $data['dados_barbearia'][0]['informacao']; ?></div>
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
                <button type="button" class="btn_padrao">Reservar</button>
            </div>
        </div>
    </div>

    <?php }; endforeach; ?>

</div>
<?php endforeach; ?>


<div class="pt-3 pl-3">
    <hr>
    <label class="font-weight-bold" for="">Informações adicionais:</label>
    <div>Mais informações sobre a Barbearia...</div>
    <hr>
    <label class="font-weight-bold" for="">Onde fica:</label>
    <div>Informar endereço da Barbearia...</div>
    <hr>
    <label class="font-weight-bold" for="">Formas de pagamento:</label>
    <div>Métodos de pagamentos da Barbearia...</div>
    <hr>
</div>

<div id='calendar'></div>