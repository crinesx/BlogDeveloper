<?php if($this->session->userdata('user')=='admin')  {?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo base_url();?>index.php/Welcome/bienvenida ">administrador</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li><a class="nav-link" href="#">perfil</a></li>
    <li><a class="nav-link" href="#" >especialidad 1</a></li>
    <li ><a class="nav-link" href="#">especialidad 2</a></li>
    <li><a class="nav-link" href="#">especialidad 3</a></li>
    <li><a class="nav-link" href="#">especialidad 4</a></li>
    <a class="navbar-brand" href="<?php echo base_url();?>index.php/welcome/cerrarSesion">Cerrar Sesión</a>
  </ul>
</nav>
<?php }?>
