<div class="pt-4 pl-1 pr-1">
    <div class="p-3 text-center" style="background-color: #F6F6F6;">
        <h4>Faça a busca da Barbearia... <i class="fas fa-map-marker-alt"></i></h4>
    </div>
    <hr>
    <form class="p-3">
        <div class="form-row justify-content-center">
            <div class="input-group col-10 col-md-10 my-1">
                <div class="input-group-prepend" for="busca">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Entre o melhor lugar...." aria-label="busca" id="busca" aria-describedby="basic-addon1">
            </div>
            <div class="col-auto my-1">
                <!-- Button janela Modal -->
                <button type="button" class="btn btn-primary ion-search" style="background-color: #2c3e50;border: none;" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-filter"></i></button>                
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-hover text-body">
        <thead>
            <tr>
                <th scope="col">Barbearia</th>
                <th scope="col">Distância</th>
                <th scope="col">Avaliação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['lista_barbearias'] as $lista_barbearias) : ?>
              <tr onclick="location.href = '/barbearia/cliente/solicitacao/<?php echo $_SESSION['id_cliente'];?>/<?php echo $lista_barbearias['id_barbearia']; ?>'" style="cursor: pointer;">
                  <td><?php echo $lista_barbearias['nome_barbearia']; ?></td>
                  <td>
                      <?php echo 'teste' ?></a>
                  </td>
                  <td>
                      <?php echo 'teste'; ?></a>
                  </td>
              </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>

</div>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl pt-5" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Filtre sua busca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pl-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Menor Distância</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Melhor Avaliação</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Menor Média de Preço</label>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-primary" style="background-color: #2c3e50;border: none;">Filtrar</button>
            </div>
            </div>
        </div>
    </div>

