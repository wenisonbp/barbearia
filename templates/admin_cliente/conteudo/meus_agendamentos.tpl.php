    <div class="p-3 text-center" style="background-color: #F6F6F6;">
        <h4>Veja abaixo o histórico de seus agendamentos <i class="far fa-calendar-alt"></i></h4>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-hover text-body">
        <thead>
            <tr>
                <th scope="col">Barbearia</th>
                <th scope="col">Início</th>
                <th scope="col">Fim</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['meus_agendamentos'] as $meus_agendamentos) : ?>
            <tr>
                <td>
                    <?php echo $meus_agendamentos['nome_barbearia']; ?>
                </td>
                <td>
                    <?php echo $meus_agendamentos['data'] . ' - ' . $meus_agendamentos['horario_inicio']; ?></a>
                </td>
                <td>
                    <?php echo $meus_agendamentos['data'] . ' - ' . $meus_agendamentos['horario_fim']; ?></a>
                </td>
                <td>
                    <?php echo $meus_agendamentos['status']; ?></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>


