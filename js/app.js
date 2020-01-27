$(function() {
    $("#accept-policy").click( function(){
        if( $(this).is(':checked')){
            $("#intro-content").hide();
            $('#form-data').removeAttr('hidden');
        }else{
            $("#intro-content").show();
            $('#form-data').attr('hidden','');
        } 
    });
});