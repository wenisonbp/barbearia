<div class="p-3 text-center" style="background-color: #F6F6F6;">
    <h4>Veja abaixo os agendamentos em andamento <i class="fas fa-chalkboard-teacher"></i></h4>
</div>

<div class="table-responsive-sm mt-3">
    <table class="table table-hover text-center">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Cliente</th>
        <th scope="col">Início</th>
        <th scope="col">Fim</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <?php $i = 1; 
            if(count($data['acompanhar_agendamentos']) < 1){
                echo '<div class="text-center mb-2 text-danger">Nenhum agendamento pendente!</div>';
            } else{           
            
            foreach ($data['acompanhar_agendamentos'] as $agendamentos) : ?>
              <tr>
                  <td><?php echo $i . '°'; ?></td>
                  <td>
                      <?php echo $agendamentos['nome_cliente']; ?></a> <i class="fas fa-map-marked-alt"></i>
                  </td>
                  <td>
                      <?php echo $agendamentos['data'] . ' - ' . $agendamentos['horario_inicio']; ?></a>
                  </td>
                  <td>
                      <?php echo $agendamentos['data'] . ' - ' . $agendamentos['horario_fim']; ?></a>
                  </td>
                <td>
                    <a href="#" class="btn_padrao mr-2">Encerrar</a>
                    <a href="#" class="btn_padrao_remover">Cancelar</a>
                </td>
            </tr>
            <?php $i++; endforeach;} ?>
    </tbody>
    </table>
</div>