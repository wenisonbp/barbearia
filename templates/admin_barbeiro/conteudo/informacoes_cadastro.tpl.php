<div class="">

    <div class="p-3 mb-3 text-center" style="background-color: #F6F6F6;">
        <h4>Veja abaixo as informações da sua Barbearia <i class="fas fa-address-book"></i></i></h4>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/barbearia/barbeiro/inicio/<?php echo $_SESSION['id_barbearia'];?>/editar_cadastro" class="btn_padrao mr-2 float-right">Editar</a>
        </div>      
    </div>
    <hr>
    <div class="row col-md-12">
        <div class="col-6">
            <label class="font-weight-bold" for="">Nome da Barbearia:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['nome_barbearia'])) {echo $data['informacoes_barbearia'][0]['nome_barbearia'];}?>
            </div>
        </div>
        <div class="col-6">
            <label class="font-weight-bold" for="">E-mail cadastrado:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['email'])) {echo $data['informacoes_barbearia'][0]['email'];}?>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-md-12">
        <label class="font-weight-bold" for="">Sobre:</label>
        <div>
            <?php if(!empty($data['informacoes_barbearia'][0]['sobre'])) {echo $data['informacoes_barbearia'][0]['sobre'];}?>
        </div>
    </div>
    <hr>
    <div class="col-md-12">
        <label class="font-weight-bold" for="">Informações adicionais:</label>
        <div>
            <?php if(!empty($data['informacoes_barbearia'][0]['informacao_adicional'])) {echo $data['informacoes_barbearia'][0]['informacao_adicional'];}else{echo "Não informado";}?>
        </div>
    </div>
    <hr>
    <div class="row col-md-12">
        <div class="col-10 col-md-6 mb-3">
            <label class="font-weight-bold" for="">Endereço:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['logradouro_endereco'])) {echo $data['informacoes_barbearia'][0]['logradouro_endereco'];}?>
            </div>
        </div>
        <div class="col-2 col-md-2 mb-3">
            <label class="font-weight-bold" for="">N°:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['num_endereco'])) {echo $data['informacoes_barbearia'][0]['num_endereco'];}?>
            </div>
        </div>
    </div>

    <div class="row col-md-12">
        <div class="col-4 col-md-4 mb-3">
            <label class="font-weight-bold" for="">CEP:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['cep'])) {echo $data['informacoes_barbearia'][0]['cep'];}else{echo "Não informado";}?>
            </div>
        </div>
        <div class="col-6 col-md-4 mb-3">
            <label class="font-weight-bold" for="">Cidade:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['cidade_endereco'])) {echo $data['informacoes_barbearia'][0]['cidade_endereco'];}else{echo "Não informado";}?>
            </div>
        </div>
        <div class="col-2 col-md-4 mb-3">
            <label class="font-weight-bold" for="">UF:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['estado_endereco'])) {echo $data['informacoes_barbearia'][0]['estado_endereco'];}else{echo "Não informado";}?>
            </div>
        </div>
    </div>

    <div class="row col-md-12">
        <div class="col-4 col-md-4 mb-3">
            <label class="font-weight-bold" for="">Complemento 1:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['complemento1_endereco'])) {echo $data['informacoes_barbearia'][0]['complemento1_endereco'];}else{echo "Não informado";}?>
            </div>
        </div>
        <div class="col-4 col-md-4 mb-3">
            <label class="font-weight-bold" for="">Complemento 2:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['complemento2_endereco'])) {echo $data['informacoes_barbearia'][0]['complemento2_endereco'];}else{echo "Não informado";}?>
            </div>
        </div>
        <div class="col-4 col-md-4 mb-3">
            <label class="font-weight-bold" for="">Complemento 3:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['complemento3_endereco'])) {echo $data['informacoes_barbearia'][0]['complemento3_endereco'];}else{echo "Não informado";}?>
            </div>
        </div>
    </div>
    <hr>

    <div class="row col-md-12">
        <div class="col-6">
            <label class="font-weight-bold" for="">Contato 1:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['contato_1'])) {echo $data['informacoes_barbearia'][0]['contato_1'];}?>
            </div>
        </div>
        <div class="col-6">
            <label class="font-weight-bold" for="">Contato 2:</label>
            <div>
                <?php if(!empty($data['informacoes_barbearia'][0]['contato_2'])) {echo $data['informacoes_barbearia'][0]['contato_2'];}?>
            </div>
        </div>
    </div>
</div>

<!-- <?php var_dump($data['informacoes_barbearia'])?>  -->