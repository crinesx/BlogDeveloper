  <?php if(($this->session->userdata('usr')>=TRUE)){?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url();?>index.php/welcome/bienvenida"><?php echo $this->session->userdata('user') ?></a>
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/registro">registro</a></li> 
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/welcome/cerrarSesion">
            <i class="fas fa-sign-out-alt fa-1x"></i>
            <!-- Cerrar Sesión -->
          </a></li>

        </ul>
      </div>
    </nav>
<?php }?>
