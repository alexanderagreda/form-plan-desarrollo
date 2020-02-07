$('#departamento').change(function(){
    //Validar el contenido del cuadro de texto
    if(this.value!=''){
        //Metodo POST de AJAX
        $.post('extend/ajax_municipio.php',{
            departamento: $('#departamento').val(),
            beforeSend: function(){
                $('#res_departamento').html('Espere un momento por favor');
            }
        }, function (respuesta){
            $('#res_departamento').html(respuesta);
        }
        );
    }else{
        $('#res_departamento').empty();
        
    }    
          
});