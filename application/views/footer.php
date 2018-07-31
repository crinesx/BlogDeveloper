<footer class="sticky-bottom pb-3 pl-5 pl-5 text-light bg-dark">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:Diabemedica
  </div>
  <!-- Copyright -->

</footer>

</html>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.js"></script>
-->
<script>window.jQuery || document.write('<script src="<?php echo base_url();?>static/bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="<?php echo base_url();?>static\bootstrap\assets\js\vendor\popper.min.js"></script>
<script src="<?php echo base_url();?>static\bootstrap\js\bootstrap.min.js"></script>
<script src="<?php echo base_url();?>static/chosen/chosen.jquery.js"></script>
   <script>
     $(document).ready(function(){
       $(pacientes).chosen({inherit_select_classes:true,
                disable_search_threshold: 0,
                 no_results_text:"paciente no encontrado",
                 width:"30%"});
     });
   </script>
