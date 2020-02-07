<?php 
    include '../conexion/conexion.php';
    $departamento = htmlentities($_POST['departamento']);
?>


<label for="municipio">Municipio de residencia</label>  
<select class="form-control" id="municipio" required autocomplete="off">
    <option selected disabled hidden>Elija un municipio</option>
    <?php 
        //preparar query
        $sel_municipio = $con->prepare("SELECT * FROM municipio WHERE id_departamento = ? ORDER BY nombre");
        $sel_municipio -> bind_param('i',$departamento);
        //ejecutar consulta
        $sel_municipio->execute();

        $res_municipio=$sel_municipio->get_result();
        while($f_municipio = $res_municipio->fetch_assoc()){
        ?>
        <option value="<?php echo $f_municipio['id'] ?>"><?php echo $f_municipio['nombre'] ?></option>
        <?php 
        }
        $sel_municipio->close();
        ?>                                        
</select>                                               

<script>
    $('select').material_select();
</script>