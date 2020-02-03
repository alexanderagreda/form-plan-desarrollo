<?php
    include '../conexion/conexion.php';
    
    $numero_identificacion = $con->real_escape_string($_POST['numeroid']);
    $sel = $con->query("SELECT numero_identificacion FROM respuesta WHERE numero_identificacion = $numero_identificacion ");
    $row = mysqli_num_rows($sel);
    //liberar resultados
    mysqli_free_result($sel);
    if($row!=0){
        echo "<label style='color: red;'>Gracias, usted ya participo en esta encuesta</label>";
        
    }else{
        echo "<label style='color: green;'>Usted puede diligenciar esta encuesta</label>";
    }
    //cerrar conexion
    mysqli_close($con);
?>