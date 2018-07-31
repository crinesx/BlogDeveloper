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
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/stacktable.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/style.css" rel="stylesheet" />
  	<link href="css/stacktable.css" rel="stylesheet">
  </head>
<body>
  <div class="container">
  		<div class="row">
  			<div class="col-xs-12">
          <table id="tablainfo" class="table-hover" border="1">
            <tr>

                <th>Nombre</th>
                <th>Fecha de nacimiento</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Lugar de nacimiento</th>
                <th>Lugar de recidencia</th>
                <th>Domicilio</th>
                <th>Ocupacion</th>
                <th>Estado civil</th>
                <th>Escolaridad</th>
                <th>Religion</th>
                <th>Telefono</th>
                <th>E-mail</th>
                <th>Familiar</th>
                <th>Padecimiento</th>
                <th>Exploracion</th>
                <th>Notas</th>
           </tr>
           <?php
           $result = mysqli_query($link,"SELECT * FROM persona JOIN paciente WHERE Nombre LIKE '%$busca%' ORDER BY Nombre");
           if ($row = mysqli_fetch_array($result)){
                       echo "<tr>"
                      // ."<td>".$row["idPersona"]."</td>"
                       ."<td>".$row["Nombre"]."</td>"
                       ."<td>".$row["Fecha"]."</td>"
                       ."<td>".$row["Edad"]."</td>"
                       ."<td>".$row["Genero"]."</td>"
                       ."<td>".$row["Lugar"]."</td>"
                       ."<td>".$row["Recidencia"]."</td>"
                       ."<td>".$row["Domicilio"]."</td>"
                       ."<td>".$row["Ocupacion"]."</td>"
                       ."<td>".$row["Estado"]."</td>"
                       ."<td>".$row["Escolaridad"]."</td>"
                       ."<td>".$row["Religion"]."</td>"
                       ."<td>".$row["Telefono"]."</td>"
                       ."<td>".$row["Email"]."</td>"
                       ."<td>".$row["Familiar"]."</td>"
                       ."<td>".$row["Padecimiento"]."</td>"
                       ."<td>".$row["Exploracion"]."</td>"
                       ."<td>".$row["Notas"]."</td>"
                       ."</tr>";

           } else {
           echo "¡ No se ha encontrado ningún registro !";
           }
           ?>

           <form class="form" method="post" action="buscador.php"> <!-- cambiar linea por consulta-->
           <p><textarea name="notas" rows="10" cols="25"> <?php    echo "$row[Notas]"; ?></textarea></p>
            <button type="submit" id="login-button">Guardar nota</button>
          </form>

            <script>$('#tablainfo').stacktable();</script>
          </table>
          </div>
          <?php
            $newn = $_POST['notas'];
            if (!isset($newn)){
                echo "Debe especificar un nombre existente a bucar";
                exit;
              }
              $link = mysqli_connect("localhost","root","") or die (mysql_error());
              mysqli_select_db($link,"diabe") or die (mysql_error());

              mysqli_query($link,"UPDATE `paciente` SET `Notas` = 'irresponsabilidad dormir mas seguido' WHERE `paciente`.`idPaciente` = 1 AND `paciente`.`Persona_idPersona` = 1");
              ?>


</body>
</html>
