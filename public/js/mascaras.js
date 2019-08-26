// Mask Bootstrap https://bootstrapstudio.io/tutorials/input-masks
$(document).ready(function(){

    $('.ip').mask('000.000.000.000');
    $('.hora').mask('00:00');
    $('.dia').mask('000');
    $('.mask_data').mask('00/00/0000');
    $('.mask_numero').mask('0000');
    $('.moeda').mask("#.##0,00", {reverse: true});
    $('.moeda_ponto').mask("#.##0,00", {reverse: true});
    $('.cnpj').mask('000.000.000/0000-00');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cep').mask('00000-000');
    $('.ip_address').mask('099.099.099.099');
    $('.telefone_ddd').mask('(00) 0000-0000');
    $('.celular_ddd').mask('(00) 00000-0000');
    $('.estado_uf').mask('AA', {'translation': {
        A: {pattern: /[A-Za-z]/}   
        
    }});
    $('.money').mask('#0,00', {reverse: true});

    $('.estado_uf'  ).on( "keyup", function() {

       this.value = this.value.toUpperCase();

    });
    $('.onlyNumbers').mask("#");

    
});
