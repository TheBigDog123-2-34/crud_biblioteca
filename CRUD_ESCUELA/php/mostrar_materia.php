<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"; rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container" style="text-align:center">
    <h2>Registros de materia<h2>
 </div>
<?php

include('conexion_mysqli.php');
$query="SELECT*FROM materias";

echo'
<div class="container-md col-sm-6">
<table class="table table-success table-striped" style="font-size:16px; width:1000px">
      <tr>
<td>Nombre</font></td>
<td>horas</font></td>
<td>descripcion</font></td>

</tr>
';

if ($result=$conn->query($query)){
    while($row=$result->fetch_assoc()){

$nombre=$row['nombre_materia'];
$horas=$row['horas_materia'];
$descripcion=$row['descripcion_materia'];



echo '<tr>
<td>'.$nombre.'</td>
<td>'.$horas.'</td>
<td>'.$descripcion.'</td>

</tr>';

    }
    $result->free();
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js&quot; integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>