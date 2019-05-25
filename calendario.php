<?php

$array_horarios = array();
$inicio = '10:00:00';
$fim = '18:00:00';
$tempo = '00:30:00';
$minutos = strtotime($tempo);
$intervalo = date("i", $minutos);

//Carrega os horários de escolha
for ($i=0; $i < 17; $i++) { 
    //echo '<button>' . date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio))) . '</button>';
    if($i < 1){
        $array_horarios[$i] = date('H:i:s', strtotime($inicio));
    }elseif(date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio))) < date('H:i:s', strtotime($fim))){
        $array_horarios[$i] = date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio)));
        $inicio = date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio)));
    }
}

var_dump($array_horarios);

$array_reservado_inicio[0] = date('H:i:s', strtotime('10:00:00'));
$array_reservado_inicio[1] = date('H:i:s', strtotime('11:20:00'));
$array_reservado_inicio[2] = date('H:i:s', strtotime('15:00:00'));

$array_reservado_fim[0] = date('H:i:s', strtotime('10:20:00'));
$array_reservado_fim[1] = date('H:i:s', strtotime('13:00:00'));
$array_reservado_fim[2] = date('H:i:s', strtotime('15:30:00'));

var_dump($array_reservado_inicio);
var_dump($array_reservado_fim);

$tempo = '00:30:00';
$minutos = strtotime($tempo);
$intervalo = date("i", $minutos);

foreach($array_horarios as $inicio){

    $fim = date('H:i:s', strtotime('+'.$intervalo.' minutes', strtotime($inicio)));
    $j = true;
    count($array_reservado_inicio);
    for ($i=0;$i < count($array_reservado_inicio); $i++) { 
        if($array_reservado_inicio[$i] >= $inicio && $array_reservado_inicio[$i] <= $fim || $array_reservado_fim[$i] >= $inicio && $array_reservado_fim[$i] <= $fim){
            $j = false;
            break;
        }elseif($array_reservado_inicio[$i] == $inicio && $array_reservado_fim[$i] == $fim){
            $j = false;
            break;
        }
        elseif($array_reservado_inicio[$i] < $inicio && $array_reservado_fim[$i] > $fim){
            $j = false;
            break;
        }
    }
    if($j){
        echo $inicio .' - '. $fim . '<p>';
    }
}

