
<div class="p-3">
<div class="p-3 text-center" style="background-color: #F6F6F6;">
    <h4>Realize o seu agendamento <i class="far fa-calendar-alt"></i></i></h4>
</div>
<div class="row mt-3">
    <div class="col-12">
        <a href="/barbearia/cliente/solicitacao/<?php echo $_SESSION['id_cliente'];?>/<?php echo $data_2['informacoes_servicos'][0]['id_barbearia'] ?>" class="btn_padrao mr-2 float-right">Voltar</a>
    </div>      
</div>

<hr>

<div class="row">
    <div class="col">
        <label class="font-weight-bold" for="">Barbearia:</label>
        <div> <?php echo $data_3['funcionamento_barbearia'][0]['nome_barbearia']; ?> </div>
    </div>
    <div class="col">
        <label class="font-weight-bold" for="">Tipo escolhido:</label>
        <div> <?php echo $data_2['informacoes_servicos'][0]['tipo'] ?> </div>
    </div>
    <div class="col">
        <label class="font-weight-bold" for="">Serviço escolhido:</label>
        <div> <?php echo $data_2['informacoes_servicos'][0]['servico'] ?> </div>
    </div>
    <div class="col">
        <label class="font-weight-bold" for="">Preço:</label>
        <div> <?php echo 'R$ ' . $data_2['informacoes_servicos'][0]['preco'] ?> </div>
    </div>
    <div class="col">
        <label class="font-weight-bold" for="">Tempo:</label>
        <div> <?php echo $data_2['informacoes_servicos'][0]['tempo'] .' m' ?> </div>
    </div>
</div>


<hr>

<div class="p-2 text-center">
    <h4>Escolha um das datas abaixo</h4>
</div>

<div class="row justify-content-center p-1">
    <?php 
    $hoje = date('Ymd');
    for ($i=0; $i < 7; $i++) { 
        if($i < 1){        
    ?>
        <div class="mr-2 mb-2">
            <a onclick="mostrar_data('<?php echo date('d/m/Y');?>')" href="/barbearia/cliente/agendar_pedido/<?php echo $_SESSION['id_cliente'];?>/<?php echo $data_2['informacoes_servicos'][0]['id_barbearia'];?>/<?php echo $data_2['informacoes_servicos'][0]['id_servico'] ;?>/<?php echo date('Ymd');?>" class="btn btn-warning" ><?php echo date('d.m'); ?></a>
        </div>
    <?php }else{?>
        <div class="mr-2 mb-2">
            <a onclick="mostrar_data('<?php echo  date('d/m/Y', strtotime('+'.$i.' days', strtotime($hoje)));?>')" href="/barbearia/cliente/agendar_pedido/<?php echo $_SESSION['id_cliente'];?>/<?php echo $data_2['informacoes_servicos'][0]['id_barbearia'];?>/<?php echo $data_2['informacoes_servicos'][0]['id_servico'] ;?>/<?php echo  date('Ymd', strtotime('+'.$i.' days', strtotime($hoje)));?>" class="btn btn-warning"><?php echo date('d.m', strtotime('+'.$i.' days', strtotime($hoje))); ?></a>
        </div>
    <?php }};?>
</div>

<div class="horarios_disponiveis">
    <div class="p-2 text-center">
        <h4>Escolhar o horário disponível</h4>
    </div>

    <div class="row justify-content-center p-1">
        
        <?php $tempo = $data_2['informacoes_servicos'][0]['tempo']; // TEMPO DO SERVIÇO
        $inicio = $data_3['funcionamento_barbearia'][0]['inicio_funcionamento']; // INICIO DE FUNCIONAMENTO
        $fim = $data_3['funcionamento_barbearia'][0]['fim_funcionamento']; // FIM DE FUNCIONAMENTO
        $array_horarios = array();
        $minutos = strtotime($tempo);
        $intervalo = date("i", $minutos);

        //Carrega os horários de escolha
        for ($i=0; $i < 50; $i++) { 

            if($i < 1){
                $array_horarios[$i] = date('H:i:s', strtotime($inicio));
            }elseif(date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio))) < date('H:i:s', strtotime($fim))){
                $array_horarios[$i] = date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio)));
                $inicio = date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio)));
            }
        }

        $intervalo = date("i", strtotime($tempo));
        $params = resolve('/cliente/agendar_pedido/([a-z0-9]{1,100})/([a-z0-9]{1,100})/([a-z0-9]{1,100})/([0-9]{1,10})');
        $data_selecionada = $params[4];
        $r = true;

        foreach($array_horarios as $inicio){

            $fim = date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio)));
            $j = true;
            foreach ($data['horarios_reservados'] as $reservado) { 
                if($reservado['horario_inicio'] >= $inicio && $reservado['horario_inicio'] < $fim || $reservado['horario_fim'] > $inicio && $reservado['horario_fim'] <= $fim){
                    $j = false;
                    break;
                }elseif($reservado['horario_inicio'] == $inicio && $reservado['horario_fim'] == $fim){
                    $j = false;
                    break;
                }
                elseif($reservado['horario_inicio'] < $inicio && $reservado['horario_fim'] > $fim){
                    $j = false;
                    break;
                }
            }
            if($j){ 
                if($data_selecionada == date('Ymd') && $inicio < date('H:i:s')){ 
                    if($r) {?>
                    <div class="mr-2 mb-2">
                        Nenhum horário disponível, escolha outra data!
                     </div>
                <?php $r = false;}} else{ ?>
                <div class="mr-2 mb-2">
                    <button onclick="mostrar_horario('<?php echo date('H:i:s', strtotime($inicio)); ?>', '<?php echo date('d/m/Y', strtotime($data_selecionada)); ?>')" value="<?php echo $inicio; ?>" class="btn btn-success"><?php echo date("H:i", strtotime($inicio)); ?></button>
                </div>
        <?php }}} ?>
    </div>
</div>

<div class="confirmacao_agendamento" style="display:none;">

    <form action="" method="post" name="teste">
        <div class="p-2 text-center font-weight-bold"> 
            Horário escolhido
        </div>
        <div class="font-weight-light text-center"> 
            Dia <span id="data_agendada_text"></span> as <span id="horario_agendado_text">15:00</span>hs
        </div>

        <input id="nome_barbearia" name="nome_barbearia" type="hidden" value="<?php echo $data_3['funcionamento_barbearia'][0]['nome_barbearia']; ?>">
        <input id="horario_agendado" name="horario_agendado" type="hidden">
        <input id="tempo" name="tempo" type="hidden" value="<?php echo $data_2['informacoes_servicos'][0]['tempo'] ?>">
     

        <div class="p-2 text-center">
            <label class="font-weight-bold text-center mr-2" for="">Deseja confirmar o horário escolhido?</label>
            <button type="submit" class="btn_padrao mr-2">Sim</button>
            <button type="button"  onclick="ocultar_confirmacao()" class="btn_padrao_remover text-right">Não</button>
        </div>
    </form>


</div>
</div>











