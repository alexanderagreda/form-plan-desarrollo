//----------- FUNCTIONS ------------// 


//Event listener
var input = document.getElementById('numero_identificacion');
input.addEventListener('input',function(){
      if (this.value.length > 10) 
         this.value = this.value.slice(0,10); 
});


// Transformar a mayusculas
function may(obj, id){
    obj=obj.toUpperCase();
    //Eliminar espacios en los extremos
    obj=obj.trim();
    document.getElementById(id).value = obj;
}


 //Mostrar formulario
 $("#accept-policy").click( function(){
    if( $(this).is(':checked')){
        $("#intro-content").hide();
        $('#form-data').removeAttr('hidden');
    }else{
        $("#intro-content").show();
        $('#form-data').attr('hidden','');
    } 
});

//Desactivar tecla enter en el formulario
$('.form').keypress(function(e){
        if (e.wich==13){return false;}
    }
);

//Validar numero_identificacion existente en la bd
$('#numero_identificacion').change(function(){
    //Validar el contenido del cuadro de texto
    if(this.value!=''){
        //Metodo POST de AJAX
        $.post('extend/ajax_validacion_ni.php',{
            numeroid: $('#numero_identificacion').val(),
            beforeSend: function(){
                $('#validacion').html('Espere un momento por favor');
            }
        }, function (respuesta){
            $('#validacion').html(respuesta);
        }
        );
    }else{
        $('#validacion').empty();
        
    }    
          
});

//Consultar pais
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
    }              
});

//Consultar departamento
$('#departamento').change(function(){
    //alert('Departamento cambio');
    
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


//document.change





