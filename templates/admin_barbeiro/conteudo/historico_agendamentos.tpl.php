<div class="p-3 text-center" style="background-color: #F6F6F6;">
    <h4>Veja abaixo o histórico de seus agendamentos <i class="far fa-calendar-alt"></i></h4>
</div>


<div class="table-responsive mt-3">
    <table class="table table-hover text-center">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Cliente</th>
        <th scope="col">Início</th>
        <th scope="col">Fim</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    <?php $i = 1; 
            if(count($data['historico_agendamentos']) < 1){
                echo '<div class="text-center mb-2 text-danger">Nenhum agendamento encontrado!</div>';
            } else{           
            
            foreach ($data['historico_agendamentos'] as $agendamentos) : ?>
              <tr>
                  <td><?php echo $i . '°'; ?></td>
                  <td>
                      <?php echo $agendamentos['nome_cliente'] ?></a> <i class="fas fa-map-marked-alt"></i>
                  </td>
                  <td>
                      <?php echo $agendamentos['data'] . ' - ' . $agendamentos['horario_inicio']; ?></a>
                  </td>
                  <td>
                      <?php echo $agendamentos['data'] . ' - ' . $agendamentos['horario_fim']; ?></a>
                  </td>
                <td>
                    <?php echo $agendamentos['data'] . ' - ' . $agendamentos['status']; ?></a>
                </td>
            </tr>
            <?php $i++; endforeach;} ?>
    </tbody>
    </table>
</div>