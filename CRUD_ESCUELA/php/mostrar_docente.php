<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"; rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro docentes</title>
</head>
<body>

<div class="container" style="text-align:center">
    <h2>Registros de docentes<h2>
 </div>
 

<?php

include('conexion_mysqli.php');
$query="SELECT*FROM docentes";
echo'

<div class="container-md col-sm-6">
<table class="table table-success table-striped" style="font-size:16px; width:1000px">
<tr>
<td><font face ="Arial">Nombre</font></td>
<td><font face ="Arial">CURP</font></td>
<td><font face ="Arial">TELEFONO</font></td>
<td><font face ="Arial">CORREO</font></td>
<td><font face ="Arial">PERFIL</font></td>
<td><font face ="Arial">COMENTARIOS</font></td>
<td><font face ="Arial">SEXO</font></td>
</tr>';

if ($result=$conn->query($query)){
    while($row=$result->fetch_assoc()){

$nombre=$row['nombre_docente'];
$curp=$row['curp_docente'];
$telefono=$row['telefono_docente'];
$correo=$row['correo_docente'];
$perfil=$row['perfil_docente'];
$comentarios=$row['comentarios'];
$sexo=$row['sexo_docente'];

echo '<tr>
<td>'.$nombre.'</td>
<td>'.$curp.'</td>
<td>'.$telefono.'</td>
<td>'.$correo.'</td>
<td>'.$perfil.'</td>
<td>'.$comentarios.'</td>
<td>'.$sexo.'</td>
</tr>';

    }
    $result->free();
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"; integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>