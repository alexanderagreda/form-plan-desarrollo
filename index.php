<?php include 'extend/header.php'; ?>

  <div class="col-sm-8 offset-sm-2">
    <div class="card shadow-sm p-3 bg-white rounded bg-light">
      <div class="card-body">
      <div id="intro-content">
                    <br /><h4 class="font-weight-bold">Caucanos y Caucanas:</h4>
                    <br /><p class="lead">Hemos iniciado el proceso de construcción del Plan de Desarrollo del Cauca 2020 – 2023. Para este propósito, estamos llevando a cabo encuentros, talleres, diálogos y actividades en todas las subregiones del Cauca garantizando la participación de la ciudadanía y sectores que promueven el desarrollo de nuestra región.</p><p class="lead">Conscientes de la importancia del uso de las tecnologías para mejorar la comunicación del gobierno y los ciudadanos, hemos diseñado este formulario con el que puedes participar desde cualquier lugar presentando necesidades y alternativas de solución.</p>
                  </div>
                    
                  <p class="font-weight-bold">Política de tratamiento de datos</p>
                  <p>La Gobernación del Cauca, cumpliendo con lo reglamentado en la Ley 1581 de 2012, Decreto 1377 de 2013 y demás reglamentarios, es responsable del tratamiento de sus datos personales. En consecuencia, se informa al ciudadano que la información solicitada tiene como fin registrar las necesidades y alternativas de solución para la formulación del Plan de Desarrollo 2020-2023. La información obtenida será tratada por la Oficina Asesora de Planeación. Se garantizará los derechos de los titulares de los datos.</p>
                  <div class="form-check mb-5">
                    <input class="form-check-input" type="checkbox" value="" id="accept-policy" autocomplete="off">
                    <label class="form-check-label" for="accept-policy">Acepto</label>
                  </div>

                  <!-- start form-->
                  <div id="form-data" hidden>
                    <form method="post" action="ins_response.php">
                      <div class="form-group">
                        <h3>Datos de identificación</h3>
                      </div>
                      
                      <div class="form-group">
                        <label for="tipo-identificacion">Tipo de identificación</label>
                        <select class="form-control" id="tipo-identificacion" required title="Elija el tipo de documento de identidad" autocomplete="off">
                          <option value="none" selected disabled hidden>Elija una opción</option> 
                          <option>Cédula de ciudadanía</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="numero-identificacion">Número de identificación</label>
                        <input type="number" class="form-control" id="numero-identificacion" required autocomplete="off">                        
                      </div>
                      
                      <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" id="sexo" required autocomplete="off">
                          <option value="none" selected disabled hidden>Elija una opción</option> 
                          <option>Hombre</option>
                          <option>Mujer</option>
                        </select>
                      </div>
                                            
                      <div class="form-group" hidden>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>                      
                    </form>
                  </div>
                  <!-- end form -->
      </div><!--end cardbody main-->
    </div><!--end card main-->
  </div><!--end col-->

<?php include 'extend/scripts.php'; ?>


