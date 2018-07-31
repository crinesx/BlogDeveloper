<body>
<?php if(($this->session->userdata('usr')>=TRUE)){?>
<div class="container pt-5">



  <form method="POST" action="<?php echo base_url();?>index.php/welcome/buscador">
      <label for="pacientes">Selecciona un paciente:</label>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroupFileAddon01">Paciente:</span>
         <select class="custom-select" id="pacientes" name="pacientes">
           <option value="">seleccione...</option>
         <?php foreach($pacientes->result() as $fila) { ?>
          <option value="<?=$fila->Persona_idPersona?>"><?=$fila ->Nombre?></option><?php } ?>
         </select>
         <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" value="Buscar" name="buscar">Buscar</button>
          </div>
           </div>
         </form>

</div>



    <?php } else
   redirect('/Welcome/index/', 'refresh');
 ?>
</body>
