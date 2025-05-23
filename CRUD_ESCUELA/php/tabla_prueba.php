<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css&quot; rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container" style="text-align:center">
    <h2>Registros de docentes<h2>
 </div>
<?php
include('conexion_mysqli.php');
$query = "SELECT * FROM alumnos";

echo '
<div class="container-md col-sm-6">
<table class="table table-success table-striped"  style="font-size:16px; width:1000px">
      <tr>
          <td>Nombre</td>
          <td>Matricula</td>
          <td>Fech_nacimiento</td>
          <td>Curp</td>
          <td>Telefono</td>
          <td>Corrreo</td>
          <td>Bachillerato</td>
      </tr>
';
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $nombre = $row["nombre_alumno"];
        $matricula = $row["matricula_alumno"];
        $fech_nac = $row["fech_nac_alumno"];
        $curp = $row["curp_alumno"];
        $tel = $row["tel_alumno"];
        $correo = $row["correo_alumno"];
        $bachillerato = $row["t_bachi_alumno"];  
        echo '<tr>
                  <td>'.$nombre.'</td>
                  <td>'.$matricula.'</td>
                  <td>'.$fech_nac.'</td>
                  <td>'.$curp.'</td>  
                  <td>'.$tel.'</td>
                  <td>'.$correo.'</td>
                  <td>'.$bachillerato.'</td>
              </tr>
             
              </div>';
    }
    $result->free();
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js&quot; integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>