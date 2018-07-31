<body>
<?php if(($this->session->userdata('usr')>=TRUE)){?>
  <div class="container pt-5">
    <div >
      <center>
        <h1>Registro</h1>
      </center>
    </div>
  </div>
  <div class="container ">
    <div class="container">
        <form class="" action="index.html" method="post">


      <div class="accordion" id="accordionExample"><!-- inicio contenedor-->
              <div class="card accordion1"><!-- inicio card-->
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0 titlecard">Datos personales</h5>
                </div>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body grad"><!-- contenido de la pestaña-->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" id="Nombrecompleto"  placeholder="Nombre">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha"  placeholder="Fecha">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Edad</label>
                            <input type="number" class="form-control" id="Edad"  placeholder="Edad">
                    </div>
                    <div class="form-group">
                           <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Masculino</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Femenino</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Otros</label>
                          </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">L. Nacimiento</label>
                            <input type="text" class="form-control" id="Nacimiento"  placeholder="Puebla">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">L. Recidencia</label>
                            <input type="text" class="form-control" id="Recidencia"  placeholder="Puebla">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Domicilio</label>
                            <input type="text" class="form-control" id="Domicilio"  placeholder="calle ...">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Ocupacion</label>
                            <input type="text" class="form-control" id="Ocupacion"  placeholder="Trabajador">
                    </div>
                    <div class="form-group">
                           <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadio4" name="customRadio1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Casado(a)</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadio5" name="customRadio1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Soltero(a)</label>
                          </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Escolaridad</label>
                            <input type="text" class="form-control" id="Escolaridad"  placeholder="Universidad">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Religion</label>
                            <input type="text" class="form-control" id="Religion"  placeholder="Catolico">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="text" class="form-control" id="Telefono"  placeholder="222-222-2222">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Correo electronico</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="correo@mail.com">
                            <small id="emailHelp" class="form-text text-muted">nota</small>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Padecimiento</label>
                            <input type="text" class="form-control" id="Padecimiento" placeholder="Padecimiento">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Exploracion</label>
                            <input type="text" class="form-control" id="Exploracion"  placeholder="">
                    </div>
                    <div class="form-group">
                            <label for="Notas">Notas</label>
                            <textarea class="form-control" id="Notas" rows="4"></textarea>
                    </div>
                </div><!--fin de contenido de la pestaña-->
              </div><!--fin contenedor 2-->
            </div><!-- fin card-->

              <div class="card accordion1"><!-- inicio card-->
                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                 <div class="card-header" id="headingTwo">
                         <h5 class="mb-0 titlecard">Medicamentos</h5>
                 </div>
                  </a>
                 <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                   <div class="card-body grad"><!-- contenido de la pestaña-->
                       <div class="container pt-2">

                       </div>
                     </div><!--fin de contenido de la pestaña-->
                 </div>
               </div><!-- fin card-->


               <div class="card accordion1"><!-- inicio card-->
                 <a class="card-link" data-toggle="collapse" href="#collapseThree">
                  <div class="card-header" id="headingThree">
                          <h5 class="mb-0 titlecard">Antecedentes Patologicos</h5>
                  </div>
                   </a>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body grad"><!-- contenido de la pestaña-->
                        <div class="container pt-2">

                        </div>
                      </div><!--fin de contenido de la pestaña-->
                  </div>
                </div><!-- fin card-->


                <div class="card accordion1 "><!-- inicio card-->
                  <a class="card-link" data-toggle="collapse" href="#collapseFour">
                   <div class="card-header" id="headingFour">
                           <h5 class="mb-0 titlecard">Antecedentes no Patologicos</h5>
                   </div>
                    </a>
                   <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                     <div class="card-body grad"><!-- contenido de la pestaña-->
                         <div class="container pt-2">
                           
                         </div>
                       </div><!--fin de contenido de la pestaña-->
                   </div>
                 </div><!-- fin card-->


        </div><!-- fin contenedor-->


  <button type="submit" class="btn btn-primary">Enviar registro</button>
</form>
  </div>
</div>


 <?php }?>
</body>
