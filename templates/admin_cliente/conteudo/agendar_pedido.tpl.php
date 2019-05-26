<div class="p-2 text-center">
    <h2>Realize o seu agendamento</h2>
</div>

<div class="col">
    <label class="font-weight-bold" for="">Tipo escolhido:</label>
    <div> <?php echo $data_2['informacoes_servicos'][0]['tipo'] ?> </div>
</div>
<hr>
<div class="col">
    <label class="font-weight-bold" for="">Serviço escolhido:</label>
    <div> <?php echo $data_2['informacoes_servicos'][0]['servico'] ?> </div>
</div>
<hr>

<div class="p-2 text-center">
    <h4>Escolha um das datas abaixo</h4>
</div>

<div class="row justify-content-center p-1">
    <?php 
    $hoje = date('Ymd');
    for ($i=0; $i < 15; $i++) { 
        if($i < 1){        
    ?>
        <div class="mr-2 mb-2">
            <a href="" class="btn btn-warning"><?php echo date('d.m'); ?></a>
        </div>
    <?php }else{?>
        <div class="mr-2 mb-2">
            <a href="" class="btn btn-warning"><?php echo date('d.m', strtotime('+'.$i.' days', strtotime($hoje))); ?></a>
        </div>
    <?php }};?>
</div>


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
        if($j){ ?>
            <div class="mr-2 mb-2">
                <a href="" value="<?php echo $inicio; ?>" class="btn btn-success"><?php echo date("H:i", strtotime($inicio)); ?></a>
            </div>
    <?php }} ?>
</div>







