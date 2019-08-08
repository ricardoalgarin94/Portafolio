$(function (){
    $('[data-toggle="tooltip"]').tooltip();
    $('#galeria a').lightBox();
    opt = new Option(modelo,modelo);
    pruebas.favorito.options[pruebas.favorito.options.length] = opt;
});

    //$suppress_localhost = ($ wampConf['urlAddLocalhost'] == 'off' ? true: false);


function eliminar(modelo)
{
for (i=0;i<pruebas.favorito.options.length;i++){
if (pruebas.favorito.options[i].text == modelo) {
pruebas.favorito.options[i] = null;
}
}
}


function calcularPresupuesto(){
    var checks = $('.presupuesto checkbox:checked');
    var tipoPagina = Number($('#pagina').val());
    var plazos = $('#plazos').val();
    if(!$.isNaN(plazos)){
        alert("Plazos deben ser numeros");
    } else {
        var exit = 0;
        var porcentaje = 100;
        plazos = Number(plazos);
        if(plazos > 4){
            porcentaje = 20;
        } else if(plazos <= 4 && plazos > 0){
            porcentaje = 5 * plazos;
        }
        exit = tipoPagina * porcentaje / 100;
        $.each(checks, function(index, check){
            exit += 400;
        });
        $('#final').val(exit);
    }
    
}