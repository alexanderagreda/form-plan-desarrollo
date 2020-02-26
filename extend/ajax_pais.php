<?php
    include '../conexion/conexion.php';
    $codigo_pais = htmlentities($_POST['cod_pais']);
    //echo $codigo_pais;
    if($codigo_pais==65){
?>

<label for="departamento">Departamento</label>
<select class="form-control" id="departamento" required autocomplete="off">
    <option selected disabled hidden>Elija el departamento</option>
    <?php $sel_departamento = $con->prepare("SELECT * FROM departamento ORDER BY nombre "); 
    $sel_departamento->execute();
    $res_departamento=$sel_departamento->get_result();
    while ($f_departamento = $res_departamento->fetch_assoc()){
    ?>
    <option value="<?php echo $f_departamento['id']?>"><?php echo $f_departamento['nombre'] ?></option>
    <?php }
        $sel_departamento->close();
    ?>
</select>

<?php 
    }else{
        ?>
        <h3>Necesidades y Alternativas de Solución</h3>
        <label for="ejes">Selecciona el eje sobre el cual vas a aportar</label>
        <select class="form-control" id="ejes" required autocomplete="off">
            <option selected disabled hidden>Elija un opción</option>
            <?php $sel_eje = $con->prepare("SELECT * FROM eje ORDER BY nombre "); 
            $sel_eje->execute();
            $res_eje=$sel_eje->get_result();
            while ($f_eje = $res_eje->fetch_assoc()){
            ?>
            <option value="<?php echo $f_eje['id']?>"><?php echo $f_eje['nombre'] ?></option>            
        <?php }
        $sel_eje->close();
        ?>
</select>
    <?php     
    }
?>