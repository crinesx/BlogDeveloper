<body>
<?php if(($this->session->userdata('usr')>=TRUE)){?>
<div class="container-fluid pt-5">
    <div class="row">
      <!-- pagina -->
        <div class="col-md-3">
          <div class="card accordion">
            <!--<img class="card-img-top" src="#" alt="Card image cap">-->
            <div class="card-header">
              <h2>
                 <?php   foreach ($pacientes->result() as $fila){
                echo "$fila->Nombre";
                }?>
              </h2>
            </div>
            <div class="card-body grad">
               <div class="container">
                 <h3><i class="fa fa-star fa-fw"></i><?php    echo "Diagnostico: $fila->Diagnostico";?></h3>
                 <p><i class="fa fa-calendar fa-fw"></i><?php    echo "Fecha de nacimiento: $fila->Fecha";?></p>
                 <p><i class="fa fa-address-card-o fa-fw"></i><?php    echo "Edad: $fila->Edad"; ?></p>
                 <p><i class="fa fa-user fa-fw"></i><?php    echo "Genero: $fila->Genero"; ?></p>
                 <p><i class="fa fa-map-marker fa-fw"></i><?php    echo "Lugar de nacimiento: $fila->Lugar"; ?></p>
                 <p><i class="fa fa-map-marker fa-fw"></i><?php    echo "Lugar de Recidencia: $fila->Recidencia"; ?></p>
                 <p><i class="fa fa-home fa-fw"></i><?php    echo "Domicilio: $fila->Domicilio"; ?></p>
                 <p><i class="fa fa-briefcase fa-fw"></i><?php    echo "Ocupacion: $fila->Ocupacion"; ?></p>
                 <p><i class="fa fa-bookmark fa-fw"></i><?php    echo "Estado Civil: $fila->Estado"; ?></p>
                 <p><i class="fa fa-book fa-fw"></i><?php    echo "Escolaridad: $fila->Escolaridad"; ?></p>
                 <p><i class="fa fa-shekel fa-fw"></i><?php    echo "Religion: $fila->Religion"; ?></p>
                 <p><i class="fa fa-phone fa-fw"></i><?php    echo "Telefono: $fila->Telefono"; ?></p>
                 <p><i class="fa fa-envelope fa-fw"></i><?php    echo "E-mail: $fila->Email"; ?></kp>
                 <p><i class="fa fa-list-alt fa-fw"></i><?php    echo "Padecimiento: $fila->Padecimiento"; ?></p>
                 <p><i class="fa fa-stethoscope fa-fw"></i><?php    echo "Exploracion: $fila->Exploracion"; ?></p>
                 <form class="form" method="post" action="<?php echo base_url();?>index.php/welcome/setnotas/<?=$fila->idPersona?>"> <!-- cambiar linea por consulta-->
             		 <p><i class="fa fa-sticky-note fa-fw"></i><textarea name="notas" rows="10" cols="25"> <?php    echo "$fila->Notas"; ?></textarea></p>
             			<button type="submit" id="login-button">Guardar nota</button>
             		 </form>
                </div>
             </div>
          </div>
        </div>

        <div class="col-md-3">
          <div id="accordionExample"><!-- inicio contenedor-->
            <div class="card accordion1">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <div class="card-header" id="headingOne">
                    <h2 class="titlecard"><i class="fa fa-medkit fa-fw"></i>Medicamentos</h2>
                </div>
              </a>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body grad">
                  <div class="table-responsive">
                    <table class="table table-striped table-blue">
                        <thead>
                            <tr>
                              <th scope="col">Nombre del Medicamento</th>
                              <th scope="col">Dosis</th>
                              <th scope="col">Horario</th>
                              <th scope="col">Observaciones</th>
                            </tr>
                          </thead>
                            <?php   foreach ($medicament->result() as $fila2){?>
                          <tbody>
                            <tr>
                              <th scope="row"><?php echo "$fila2->Medicamento";?></th>
                              <td><?php echo "$fila2->Dosis"; ?></td>
                              <td><?php echo "$fila2->Horario";?></td>
                              <td><?php echo "$fila2->Observaciones"; ?></td>
                            </tr>
                          </tbody>
                             <?php  }?>
                          </table>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>

        <div class="col-md-3">
          <div id="accordionExample1"><!-- inicio contenedor-->
          <div class="card accordion1">
            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
            <div class="card-header" id="headingTwo">
              <h2 class="titlecard"><i class="fa fa-tint fa-fw"></i>Antecedentes Patologicos</h2>
            </div>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample1">
            <div class="card-body grad">
              <div class="table-responsive">
                <table class="table table-striped table-blue">
                    <thead>
                        <tr>
                          <th scope="col">Diabetes</th>
                          <th scope="col">Cardiopatia</th>
                          <th scope="col">Hipotiroidismo</th>
                          <th scope="col">Dislipidemia</th>
                          <th scope="col">Hepaticas</th>
                          <th scope="col">Convulsion</th>
                          <th scope="col">Cancer</th>
                          <th scope="col">Transfucionales</th>
                          <th scope="col">Quirurgicos</th>
                          <th scope="col">Hipertension</th>
                          <th scope="col">Insuficiencia</th>
                          <th scope="col">Hipertiroidismo</th>
                          <th scope="col">Marcapasos</th>
                          <th scope="col">Renales</th>
                          <th scope="col">Artritis</th>
                          <th scope="col">Dentales</th>
                          <th scope="col">Traumaticos</th>
                          <th scope="col">Alergicos</th>
                        </tr>
                      </thead>
                        <?php   foreach ($antecedentes->result() as $fila3){?>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo "$fila3->Diabetes";?></th>
                          <td><?php echo "$fila3->cardiopatia"; ?></td>
                          <td><?php echo "$fila3->hipotiroidismo";?></td>
                          <td><?php echo "$fila3->Dislipidemia"; ?></td>
                          <td><?php echo "$fila3->Hepaticas";?></td>
                          <td><?php echo "$fila3->Convulsion"; ?></td>
                          <td><?php echo "$fila3->Cancer";?></td>
                          <td><?php echo "$fila3->Transfucionales"; ?></td>
                          <td><?php echo "$fila3->Quirurgicos";?></td>
                          <td><?php echo "$fila3->Hipertension"; ?></td>
                          <td><?php echo "$fila3->Insuficiencia";?></td>
                          <td><?php echo "$fila3->Hipertiroidismo"; ?></td>
                          <td><?php echo "$fila3->Marcapasos";?></td>
                          <td><?php echo "$fila3->Renales"; ?></td>
                          <td><?php echo "$fila3->Artritis";?></td>
                          <td><?php echo "$fila3->Dentales"; ?></td>
                          <td><?php echo "$fila3->Traumaticos";?></td>
                          <td><?php echo "$fila3->Alergicos"; ?></td>
                        </tr>
                      </tbody>
                         <?php  }?>
                      </table>
                </div>
           </div><!--fin de card-body-->
         </div>
        </div><!--fin de card-->
        </div><!--fin de contenedor-->
        </div>


        <div class="col-md-3">
            <div id="accordionExample2"><!-- inicio contenedor-->
          <div class="card accordion1">
            <a class="card-link" data-toggle="collapse" href="#collapseThree">
            <div class="card-header" id="headingThree">
              <h2 class="titlecard"><i class="fa fa-navicon fa-fw"></i>Antecedentes No Patologicos</h2>
            </div>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample2">
            <div class="card-body grad">
              <div class="container">
                <h5><b>Peso</b></h5>
                <p> <?php echo "$fila->Peso";?><p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Obesidad</b></h5>
                <p> <?php echo "$fila->Obesidad"?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Dieta</b></h5>
                <p> <?php echo "$fila->Dieta"; ?></p>
              </div>
              <div class="container">
                <h5><b>Ejercicio</b></h5>
                <p> <?php echo "$fila->Ejercicio"; ?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Fumar</b></h5>
                <p> <?php echo "$fila->Fumar"; ?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Bebida</b></h5>
                <p> <?php echo "$fila->Bebida";?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Control</b></h5>
                <p> <?php echo "$fila->Control";?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Drogas</b></h5>
                <p> <?php echo "$fila->Drogas";?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Humo</b></h5>
                <p> <?php echo "$fila->Humo"; ?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Viaje</b></h5>
                <p> <?php echo "$fila->Viaje"; ?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Trabajos</b></h5>
                <p> <?php echo "$fila->Trabajos";?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Casa</b></h5>
                <p> <?php echo "$fila->Casa"; ?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Sangre</b></h5>
                <p><?php   echo "$fila->Sangre"; ?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Mascotas</b></h5>
                <p> <?php echo "$fila->Mascotas";?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Seguro</b></h5>
                <p> <?php echo "$fila->Seguro";?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Vacunacion</b></h5>
                <p> <?php echo "$fila->Vacunacion"; ?></p>
                <hr>
              </div>
              <div class="container">
                <h5><b>Desparacitacion</b></h5>
                <p> <?php echo "$fila->Desparacitacion"; ?></p>
                <hr>
              </div>
            </div><!-- inicio card-body-->
          </div>
          </div><!-- inicio card-->
        </div><!-- inicio contenedor-->
        </div>

<!-- Prueba poner analisis-->
<div class="col-md-3">
  <div id="accordionExample"><!-- inicio contenedor-->
    <div class="card accordion1">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        <div class="card-header" id="headingOne">
            <h2 class="titlecard"><i class="fa fa-medkit fa-fw"></i>Subir analisis clinicos</h2>
        </div>
      </a>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body grad">
                           <p>holita</p>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <!-- Prueba poner subir analisis-->
                        <div class="col-md-3">
                          <div id="accordionExample"><!-- inicio contenedor-->
                            <div class="card accordion1">
                              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <div class="card-header" id="headingOne">
                                    <h2 class="titlecard"><i class="fa fa-medkit fa-fw"></i>analisis clinicos</h2>
                                </div>
                              </a>
                              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body grad">
                                                   <p>holita</p>
                                                          </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>


      </div>
</div>



</body>
<?php } else
redirect('/Welcome/index/', 'refresh');
?>
