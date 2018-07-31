
<body>
<?php if(($this->session->userdata('nivel')>='1') &&   ($this->session->userdata('nivel')<='3')){?>
<div class="container">
  <h2>entraste</h2>
</div>
<section>

</section>

    <?php } else
   redirect('/Welcome/index/', 'refresh');
 ?>
</body>
