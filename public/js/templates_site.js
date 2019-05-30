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
    
    $(".celular").mask("(00) 0000-00009")
    
    $(".celular").blur(function(event){
        if ($(this).val().length == 15){
            $(".celular").mask("(00) 00000-0009")
        }else{
            $(".celular").mask("(00) 0000-00009")
        }
    });


    $("#tipo_cadastro").change(function(){
        var tipo_cadastro = $("#tipo_cadastro").val();
        if(tipo_cadastro == 'barbeiro'){
            $(".cadastro_cliente").hide();
            $(".cadastro_empresa").show();
            $("#content").css('height', 'auto');
        }
        if(tipo_cadastro == 'cliente'){
            $(".cadastro_empresa").hide();
            $(".cadastro_cliente").show();
            $("#content").css('height', '100%');
        }
        if(tipo_cadastro == ''){
            $(".cadastro_empresa").hide();
            $(".cadastro_cliente").hide();
            $("#content").css('height', '100%');
        }
    });

})



// '<div class="form-group">' +
// '<label for="fone">Início de funcionamento</label>' +
// '<input type="time" name="inicio_funcionamento" id="ini_funcionamento" class="form-control">' +
// '</div>' +
// '<div class="form-group">' +
// '<label for="fone">Fim do funcionamento</label>' +
// '<input type="time" name="fim_funcionamento" id="fim_funcionamento" class="form-control">' +
// '</div>' +

