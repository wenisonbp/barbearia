
    <div class="p-3 mb-3 text-center" style="background-color: #F6F6F6;">
        <h4>Edite as informações desejadas <i class="fas fa-address-book"></i></i></h4>
    </div>

    <form action="" method="post">
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn_salvar mr-2 float-right">Salvar</button>
            </div>      
        </div>
        <hr>
        <div class="row col-md-12">
            <div class="col-6">
                <label class="font-weight-bold" for="">Nome da Barbearia:</label>
                <div>
                    <input type="text" class="form-control" name="nome_barbearia" value="<?php if(!empty($data['informacoes_barbearia'][0]['nome_barbearia'])) {echo $data['informacoes_barbearia'][0]['nome_barbearia'];}?>">
                </div>
            </div>
            <div class="col-6">
                <label class="font-weight-bold" for="">E-mail cadastrado:</label>
                <div>
                    <input type="email" class="form-control" name="email" value="<?php if(!empty($data['informacoes_barbearia'][0]['email'])) {echo $data['informacoes_barbearia'][0]['email'];}?>">
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <label class="font-weight-bold" for="">Sobre:</label>
            <div>
                <textarea name="sobre" class="form-control" id="" rows="3"><?php if(!empty($data['informacoes_barbearia'][0]['sobre'])) {echo $data['informacoes_barbearia'][0]['sobre'];}?></textarea>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <label class="font-weight-bold" for="">Informações adicionais:</label>
            <div>
                <textarea name="informacao_adicional" class="form-control" id="" rows="3"><?php if(!empty($data['informacoes_barbearia'][0]['informacao_adicional'])) {echo $data['informacoes_barbearia'][0]['informacao_adicional'];}?></textarea>
            </div>
        </div>
        <hr>
        <div class="row col-md-12">
            <div class="col-10 col-md-6 mb-3">
                <label class="font-weight-bold" for="">Endereço:</label>
                <div>
                    <input type="text" class="form-control" name="logradouro_endereco" value="<?php if(!empty($data['informacoes_barbearia'][0]['logradouro_endereco'])) {echo $data['informacoes_barbearia'][0]['logradouro_endereco'];}?>">
                </div>
            </div>
            <div class="col-2 col-md-2 mb-3">
                <label class="font-weight-bold" for="">N°:</label>
                <div>
                    <input type="text" class="form-control" name="num_endereco" value="<?php if(!empty($data['informacoes_barbearia'][0]['num_endereco'])) {echo $data['informacoes_barbearia'][0]['num_endereco'];}?>">
                </div>
            </div>
        </div>

        <div class="row col-md-12">
            <div class="col-4 col-md-4 mb-3">
                <label class="font-weight-bold" for="">CEP:</label>
                <div>
                    <input type="text" class="form-control" name="cep" value="<?php if(!empty($data['informacoes_barbearia'][0]['cep'])) {echo $data['informacoes_barbearia'][0]['cep'];}?>">
                </div>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <label class="font-weight-bold" for="">Cidade:</label>
                <div>
                    <input type="text" class="form-control" name="cidade_endereco" value="<?php if(!empty($data['informacoes_barbearia'][0]['cidade_endereco'])) {echo $data['informacoes_barbearia'][0]['cidade_endereco'];}?>">
                </div>
            </div>
            <div class="col-2 col-md-4 mb-3">
                <label class="font-weight-bold" for="">UF:</label>
                <div>
                    <input type="text" class="form-control" name="estado_endereco" value="<?php if(!empty($data['informacoes_barbearia'][0]['estado_endereco'])) {echo $data['informacoes_barbearia'][0]['estado_endereco'];}?>">
                </div>
            </div>
        </div>

        <div class="row col-md-12">
            <div class="col-4 col-md-4 mb-3">
                <label class="font-weight-bold" for="">Complemento 1:</label>
                <div>
                    <input type="text" class="form-control" name="complemento1_endereco" value="<?php if(!empty($data['informacoes_barbearia'][0]['complemento1_endereco'])) {echo $data['informacoes_barbearia'][0]['complemento1_endereco'];}?>">
                </div>
            </div>
            <div class="col-4 col-md-4 mb-3">
                <label class="font-weight-bold" for="">Complemento 2:</label>
                <div>
                    <input type="text" class="form-control" name="complemento2_endereco" value="<?php if(!empty($data['informacoes_barbearia'][0]['complemento2_endereco'])) {echo $data['informacoes_barbearia'][0]['complemento2_endereco'];}?>">
                </div>
            </div>
            <div class="col-4 col-md-4 mb-3">
                <label class="font-weight-bold" for="">Complemento 3:</label>
                <div>
                    <input type="text" class="form-control" name="complemento3_endereco" value="<?php if(!empty($data['informacoes_barbearia'][0]['complemento3_endereco'])) {echo $data['informacoes_barbearia'][0]['complemento3_endereco'];}?>">
                </div>
            </div>
        </div>
        <hr>

        <div class="row col-md-12">
            <div class="col-6">
                <label class="font-weight-bold" for="">Contato 1:</label>
                <div>
                    <input type="text" class="celular form-control" name="celular_1" value="<?php if(!empty($data['informacoes_barbearia'][0]['contato_1'])) {echo $data['informacoes_barbearia'][0]['contato_1'];}?>">
                </div>
            </div>
            <div class="col-6">
                <label class="font-weight-bold" for="">Contato 2:</label>
                <div>
                    <input type="text" class="celular form-control" name="celular_2" value="<?php if(!empty($data['informacoes_barbearia'][0]['contato_2'])) {echo $data['informacoes_barbearia'][0]['contato_2'];}?>">
                </div>
            </div>
        </div>
    </form>
    
