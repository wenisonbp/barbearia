
<div id="contato_usuario" class="row justify-content-center pt-5">
    <div class="p-2 pt-5 col-sm-9 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Escolha o tipo de cadastro:</label>
                    <select id="tipo_cadastro" class="custom-select">
                        <option value="" selected>Selecione uma opção</option>
                        <option value="barbeiro">Desejo ser um Barbeiro parceiro</option>
                        <option value="cliente">Desejo ser um Cliente</option>
                    </select>
                </div>
                
                <form class="dados_cadastro" method="post">

                    <div class="cadastro_cliente" style="display: none">
                        <div class="form-group">
                            <label for="authLogin">Email</label>
                            <input type="email" class="form-control" name="email_cliente" id="authLogin" placeholder="Informe seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="email" class="form-control" name="nome_cliente" id="name" placeholder="Informe o seu nome">
                        </div>
                        <div class="form-group">
                            <label for="fone">Número de celular</label>
                            <input type="text" name="celular_cliente" id="celular" class="celular form-control" placeholder="Informe o n° do seu celular">
                        </div>
                        <div class="form-group">
                        <label for="fone">Senha</label>
                        <input type="text" name="senha_cliente" id="senha_cliente" class="form-control" placeholder="Informe sua senha">
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-primary btn-sm">
                    </div>


                    <div class="cadastro_empresa" style="display: none">
                        <h5 class="card-title">Informe os seus dados abaixo!</h5>
                        <div class="form-group">
                            <label for="authLogin">Email da Barbearia</label>
                            <input type="email" class="form-control" name="email" id="authLogin" placeholder="Informe o e-mail da Barbearia">
                        </div>
                        <div class="form-group">
                            <label for="name">Nome da Barbearia</label>
                            <input type="text" class="form-control" name="nome_barbearia" id="name" placeholder="Informe o nome da Barbearia">
                        </div>
                        <div class="form-group">
                            <label for="name">Seu nome</label>
                            <input type="text" class="form-control" name="nome_proprietario" id="name" placeholder="Informe o seu nome">
                        </div>
                        <div class="form-group">
                            <label for="name">CNPJ</label>
                            <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="Informe o CNPJ da Barbearia">
                        </div>
                        <div class="form-group">
                            <label for="fone">Contato 1</label>
                            <input type="text" name="contato_1" id="contato_1" class="celular form-control" placeholder="Informe o contato 1">
                        </div>
                        <div class="form-group">
                        <label for="fone">Contato 2</label>
                        <input type="text" name="contato_2" id="contato_2" class="celular form-control" placeholder="Informe o contato 2">
                        </div>
                        <div class="form-group">
                        <label for="fone">Senha</label>
                        <input type="text" name="senha" id="senha" class="form-control" placeholder="Informe sua senha">
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-primary btn-sm">
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>





