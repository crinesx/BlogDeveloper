<?php
  $busca = $_POST['name'];
  if (!isset($busca)){
      echo "Debe especificar un nombre existente a bucar";
      exit;
    }
    $link = mysqli_connect("localhost","root","") or die (mysql_error());
    mysqli_select_db($link,"diabe") or die (mysql_error());
    ?>

<!DOCTYPE html>
<html>
<title>Biografia Medica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
        <img src="img/paciente.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
             <h2>
            <?php
                 $result = mysqli_query($link,"SELECT * FROM persona JOIN paciente JOIN medicamentos JOIN ant_pat JOIN ant_no_pat WHERE Nombre LIKE '%$busca%' ORDER BY Nombre");
                 if ($row = mysqli_fetch_array($result)){
              echo $row["Nombre"];
             }else {
             echo "¡ No se ha encontrado ningún registro !";
             }
              ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-calendar fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Fecha"]; ?></p>
          <p><i class="fa fa-address-card-o fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Edad"]; ?></p>
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Genero"]; ?></p>
          <p><i class="fa fa-map-marker fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Lugar"]; ?></p>
          <p><i class="fa fa-map-marker fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Recidencia"]; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Domicilio"]; ?></p>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Ocupacion"]; ?></p>
          <p><i class="fa fa-bookmark fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Estado"]; ?></p>
          <p><i class="fa fa-book fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Escolaridad"]; ?></p>
          <p><i class="fa fa-shekel fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Religion"]; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Telefono"]; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Email"]; ?></kp>
          <p><i class="fa fa-list-alt fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Padecimiento"]; ?></p>
          <p><i class="fa fa-stethoscope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Exploracion"]; ?></p>
          <p><i class="fa fa-sticky-note fa-fw w3-margin-right w3-large w3-text-teal"></i><?php   echo $row["Notas"]; ?></p>
          <hr>
          <br>
          <br>
        </div>
      </div><br>
    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-medkit fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Medicamentos</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Nombre del Medicamento</b></h5>
          <p><?php   echo $row["Medicamento"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Dosis</b></h5>
          <p><?php   echo $row["Dosis"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Horario</b></h5>
          <p><?php   echo $row["Horario"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Observaciones</b></h5>
          <p><?php   echo $row["Observaciones"]; ?></p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-tint fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Antecedentes Patologicos</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Diabetes</b></h5>
        <p><?php   echo $row["Diabetes"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Cardiopatia</b></h5>
          <p><?php   echo $row["cardiopatia"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Hipotiroidismo</b></h5>
          <p><?php   echo $row["hipotiroidismo"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Dislipidemia</b></h5>
          <p><?php   echo $row["Dislipidemia"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Hepaticas</b></h5>
          <p><?php   echo $row["Hepaticas"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Convulsion</b></h5>
        <p><?php   echo $row["Convulsion"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Cancer</b></h5>
        <p><?php   echo $row["Cancer"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Transfucionales</b></h5>
          <p><?php   echo $row["Transfucionales"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Quirurgicos</b></h5>
          <p><?php   echo $row["Quirurgicos"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Hipertension</b></h5>
          <p><?php   echo $row["Hipertension"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Insuficiencia</b></h5>
        <p><?php   echo $row["Insuficiencia"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Hipertiroidismo</b></h5>
        <p><?php   echo $row["Hipertiroidismo"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Marcapasos</b></h5>
          <p><?php   echo $row["Marcapasos"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Renales</b></h5>
          <p><?php   echo $row["Renales"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Artritis</b></h5>
          <p><?php   echo $row["Artritis"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Dentales</b></h5>
          <p><?php   echo $row["Dentales"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Traumaticos</b></h5>
          <p><?php   echo $row["Traumaticos"]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Alergicos</b></h5>
          <p><?php   echo $row["Alergicos"]; ?></p>
        </div>
      </div>


            <div class="w3-container w3-card w3-white">
              <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-navicon fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Antecedentes No Patologicos</h2>
              <div class="w3-container">
                <h5 class="w3-opacity"><b>titulo</b></h5>
                <p>sql</p>
                <hr>
              </div>
              <div class="w3-container">
                <h5 class="w3-opacity"><b>titulo</b></h5>
                <p>sql</p>
                <hr>
              </div>
              <div class="w3-container">
                <h5 class="w3-opacity"><b>titulo</b></h5>
                <p>sql</p><br>
              </div>
            </div>
    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>DiabeMedica</p>
</footer>

</body>
</html>
