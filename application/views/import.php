<?php if(($this->session->userdata('nivel')>='1') &&   ($this->session->userdata('nivel')<='3')){?>
<div class="container">
  <h2>entraste</h2>
</div>
<section>

 //abrimos el fromulario y llamamos a la función del controlador
 <form action="<?php echo base_url();?>index.php/welcome/guardar_excel" method="POST" enctype="multipart/form-data">
   <div class="col-md-3">
  <div class="form-group">
    <label>Pagina</label>
       <input type="text" class="form-control" id="pag" name="pag" placeholder="CEO" required>
  </div>
</div>

    <div class="col-md-3">
     <div class="form-group">
         <label>Seleccione un xlxs</label>
         <input type="file" name="file" id="file" accept=".xlsx ,xlx" class="form-control" >
      </div>
     </div>


            <div class="col-md-3" style="top:25px; left: 30px;" >
                <div class="form-group">

                     <button type="submit" id="Ingresar" name="Ingresar" class="btn bg-aqua">Guardar</button>
                     <button name="cancelar" id="cancelar" class="btn bg-red" style="width:80px;">Cancelar</button>
                </div>
            </div>
            </div>

  </form>
</section>

    <?php } else
   redirect('/Welcome/index/', 'refresh');
 ?>
