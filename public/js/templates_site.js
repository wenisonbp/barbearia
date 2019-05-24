$(document).ready(function(){
    $("#cpf").mask("000.000.000-00")
    $("#cnpj").mask("00.000.000/0000-00")
    $("#telefone").mask("(00) 0000-0000")
    $("#salario").mask("999.999.990,00", {reverse: true})
    $("#cep").mask("00.000-000")
    $("#dataNascimento").mask("00/00/0000")
    
    $("#rg").mask("999.999.999-W", {
        translation: {
            'W': {
                pattern: /[X0-9]/
            }
        },
        reverse: true
    })
    
    var options = {
        translation: {
            'A': {pattern: /[A-Z]/},
            'a': {pattern: /[a-zA-Z]/},
            'S': {pattern: /[a-zA-Z0-9]/},
            'L': {pattern: /[a-z]/},
        }
    }
    
    $("#placa").mask("AAA-0000", options)
    
    $("#codigo").mask("AA.LLL.0000", options)
    
    $("#celular").mask("(00) 0000-00009")
    
    $("#celular").blur(function(event){
        if ($(this).val().length == 15){
            $("#celular").mask("(00) 00000-0009")
        }else{
            $("#celular").mask("(00) 0000-00009")
        }
    });


    $("#tipo_cadastro").change(function(){
        var tipo_cadastro = $("#tipo_cadastro").val();
        if(tipo_cadastro == 'barbeiro'){
        $(".dados_cadastro").html('<h5 class="card-title">Informe os seus dados abaixo!</h5>' +
                '<div class="form-group">' +
                    '<label for="authLogin">Email da Barbearia</label>' +
                    '<input type="email" class="form-control" name="email" id="authLogin" placeholder="Informe o e-mail da Barbearia">' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="name">Nome da Barbearia</label>' +
                    '<input type="nome" class="form-control" name="nome_barbearia" id="name" placeholder="Informe o nome da Barbearia">' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="name">CNPJ</label>' +
                    '<input type="nome" class="form-control" name="cnpj" id="cnpj" placeholder="Informe o CNPJ da Barbearia">' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="fone">Número de celular</label>' +
                    '<input type="text" name="celular" id="celular" class="form-control" placeholder="Informe o n° do seu celular">' +
                '</div>' +
                // '<div class="form-group">' +
                // '<label for="fone">Início de funcionamento</label>' +
                // '<input type="time" name="inicio_funcionamento" id="ini_funcionamento" class="form-control">' +
                // '</div>' +
                // '<div class="form-group">' +
                // '<label for="fone">Fim do funcionamento</label>' +
                // '<input type="time" name="fim_funcionamento" id="fim_funcionamento" class="form-control">' +
                // '</div>' +
                '<div class="form-group">' +
                '<label for="fone">Senha</label>' +
                '<input type="text" name="celular" id="senha" class="form-control" placeholder="Informe sua senha">' +
                '</div>' +
                '<input type="submit" value="Enviar" class="btn btn-primary btn-sm">');
        }
        if(tipo_cadastro == 'cliente'){
        $(".dados_cadastro").html('<h5 class="card-title">Informe os seus dados abaixo!</h5>' +
                '<div class="form-group">' +
                    '<label for="authLogin">Email</label>' +
                    '<input type="email" class="form-control" name="email" id="authLogin" placeholder="Informe seu e-mail">' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="name">Nome</label>' +
                    '<input type="email" class="form-control" name="nome_cliente" id="name" placeholder="Informe o seu nome">' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="fone">Número de celular</label>' +
                    '<input type="text" name="celular" id="celular" class="form-control" placeholder="Informe o n° do seu celular">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="fone">Senha</label>' +
                '<input type="text" name="celular" id="senha" class="form-control" placeholder="Informe sua senha">' +
                '</div>' +
                '<input type="submit" value="Enviar" class="btn btn-primary btn-sm">');
        }
        if(tipo_cadastro == ''){
        $(".dados_cadastro").html("");
        }
    });

})


