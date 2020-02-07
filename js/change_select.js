$('#pais').change(function(){
    //Validar el contenido del cuadro de texto
    if(this.value!=''){
        //Metodo POST de AJAX
        $.post('extend/ajax_pais.php',{
            cod_pais: $('#pais').val(),
            beforeSend: function(){
                $('#res_pais').html('Espere un momento por favor');
            }
        }, function (respuesta){
            $('#res_pais').html(respuesta);
        }
        );
    }else{
        $('#res_pais').empty();
        $('#res_departamento').empty();
    }              
});



