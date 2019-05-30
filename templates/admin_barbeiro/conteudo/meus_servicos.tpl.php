<div class="p-3 text-center" style="background-color: #F6F6F6;">
    <h4>Veja abaixo a lista dos seus serviços <i class="fas fa-server"></i></h4>
</div>

<div class="row mt-3 mb-3">
    <div class="col-12">
        <a href="/barbearia/barbeiro/cadastrar_servico/<?php echo $_SESSION['id_barbearia'];?>" class="btn_salvar mr-2 float-right">Novo Serviço</a>
    </div>      
</div>


<?php 

if(count($data['tipos_servicos']) < 1){
    echo '<div class="text-center mb-2 text-danger">Nenhum serviço encontrado!</div>';
} else{   

foreach ($data['tipos_servicos'] as $tipos_servicos) : ?>
<div class="categoria_serviços">
    <h5 class="pl-5"><?php echo $tipos_servicos['tipo']; ?></h5>

    <?php foreach ($data_2['meus_servicos'] as $servicos_barbearia) : 
    
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
<?php endforeach;} ?>

<!-- Lista de serviços -->


<!-- Combo
Cabelo
Barba
Unhas
Sobrancelhas e Cílios
Estética
Massagem
Maquiagem
Spa
Personal -->