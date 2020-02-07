<?php include 'extend/header.php'; ?>

  <div class="col-sm-8 offset-sm-2">
    <div class="card shadow-sm p-3 bg-white rounded bg-light" id="card-container">
      <div class="card-body">
      <div id="intro-content">
                    <br /><h4>Caucanos y Caucanas:</h4>
                    <br /><p class="lead">Hemos iniciado el proceso de construcción del Plan de Desarrollo del Cauca 2020 – 2023. Para este propósito, estamos llevando a cabo encuentros, talleres, diálogos y actividades en todas las subregiones del Cauca garantizando la participación de la ciudadanía y sectores que promueven el desarrollo de nuestra región.</p><p class="lead">Conscientes de la importancia del uso de las tecnologías para mejorar la comunicación del gobierno y los ciudadanos, hemos diseñado este formulario con el que puedes participar desde cualquier lugar presentando necesidades y alternativas de solución.</p>
                  </div>
                  <hr class="my-4">
                  <p class="font-italic">Política de tratamiento de datos</p>
                  <p class="font-italic">La Gobernación del Cauca, cumpliendo con lo reglamentado en la Ley 1581 de 2012, Decreto 1377 de 2013 y demás reglamentarios, es responsable del tratamiento de sus datos personales. En consecuencia, se informa al ciudadano que la información solicitada tiene como fin registrar las necesidades y alternativas de solución para la formulación del Plan de Desarrollo 2020-2023. La información obtenida será tratada por la Oficina Asesora de Planeación. Se garantizará los derechos de los titulares de los datos.</p>
                  <div class="form-check mb-5">
                    <input class="form-check-input" type="checkbox" value="" id="accept-policy" autocomplete="off">
                    <label class="form-check-label" for="accept-policy">Acepto</label>
                  </div>

                  <hr class="my-4">

                  <!-- start form-->
                  <div id="form-data" hidden>
                    <form method="post" action="ins_response.php" class="form">
                      <div class="form-group">
                        <h3>Datos de identificación</h3>
                      </div>
                      
                      <div class="form-group">
                        <label for="email">Dirección de correo electrónico</label>
                        <input type="email" placeholder="Escriba su direccion de correo electrónico" class="form-control" id="email" required autocomplete="off">                       
                      </div>

                      <div class="form-group">
                        <label for="tipo-identificacion">Tipo de identificación</label>
                        <select class="form-control" id="tipo_identificacion" required title="Elija el tipo de documento de identidad" autocomplete="off">
                          <option selected disabled hidden>Elija una opción</option> 
                          <option>Cédula de ciudadanía</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="numero-identificacion">Número de identificación</label>
                        <input type="number" placeholder="Escriba su número de identificación" class="form-control" id="numero_identificacion" required autocomplete="off">                        
                        <div id="validacion"></div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" placeholder="Escriba su nombre" class="form-control" id="nombre" required autocomplete="off" onblur="may(this.value, this.id)">                       
                      </div>

                      <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" placeholder="Escriba su apellido" class="form-control" id="apellido" required autocomplete="off" onblur="may(this.value, this.id)">                        
                      </div>
                      
                      <div class="form-group">
                        <h3>Datos Sociodemográficos</h3>
                      </div>
                      
                      <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" id="sexo" required autocomplete="off">
                          <option selected disabled hidden>Elija una opción</option> 
                          <option>Hombre</option>
                          <option>Mujer</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="etnia">Etnia</label>
                        <select class="form-control" id="etnia" required autocomplete="off">
                          <option selected disabled hidden>Elija una opción</option>
                          <option>Afrocolombiano</option>
                          <option>Indígena</option>
                          <option>Minorías</option>
                          <option>Negro</option>
                          <option>Ninguna</option>
                          <option>Palenquero</option>
                          <option>Raizal</option>
                          <option>ROM</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="edad">Edad</label>
                        <select class="form-control" id="edad" required autocomplete="off">
                          <option selected disabled hidden>Elija una opción</option>
                          <option>18 a 28 años</option>
                          <option>29 a 60 años</option>
                          <option>Más de 60 años</option>                          
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="grupo_poblacional">Grupo poblacional</label>
                        <select class="form-control" id="grupo_poblacional" required autocomplete="off">
                          <option selected disabled hidden>Elija una opción</option>
                          <option>Población adulto mayor</option>
                          <option>Población desmovilizada</option>
                          <option>Población en condicion de discapacidad</option>
                          <option>Población en situación de pobreza extrema</option>
                          <option>Población con orientación sexual e identidad de género diverso - OSIGD</option>
                          <option>Personas incluidas en el programa de protección a testigos</option>
                          <option>Población rural migratoria</option>
                          <option>Población víctima del conflicto armado</option>
                          <option>Niguna de las anteriores</option>
                        </select>
                      </div>



                      <div class="form-group">
                        <label for="pais">País de residencia</label>
                        <select class="form-control" id="pais" required autocomplete="off">
                          <option selected disabled hidden>Elija el país</option>
                          <?php $sel_pais = $con->prepare("SELECT * FROM pais ORDER BY nombre "); 
                            $sel_pais->execute();
                            $res_pais=$sel_pais->get_result();
                            while ($f_pais = $res_pais->fetch_assoc()){
                          ?>
                          <option value="<?php echo $f_pais['id']?>"><?php echo $f_pais['nombre'] ?></option>
                            <?php }
                                $sel_pais->close();
                            ?>
                        </select>
                      </div>
                      
                      <div class="form-group">
 	                      <div id="res_pais"></div>
                      </div>
                     
                      <div class="form-group">
                        <div id="res_departamento"></div>
                      </div>

                      <div class="form-group">
                        <div id="res_necesidades_alternativas"></div>
                      </div>

                      <div class="form-group">
                        <button type="button" class="btn btn-success btn-lg" id="enviar">Enviar</button>
                      </div>
                                            
                    </form>
                  </div>
                  <!-- end form -->
      </div><!--end cardbody main-->
    </div><!--end card main-->
  </div><!--end col-->
  
<?php include 'extend/scripts.php'; ?>



