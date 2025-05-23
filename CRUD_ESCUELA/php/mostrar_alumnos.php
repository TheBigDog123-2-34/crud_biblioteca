<?php

include('conexion_mysqli.php');
$query="SELECT*FROM alumno";
echo'<table border ="1" cellspacing="2" cellpadding="2">
<tr>
<td><font face ="Arial">Nombre</font></td>
<td><font face ="Arial">matricula</font></td>
<td><font face ="Arial">fecha de nacimiento</font></td>
<td><font face ="Arial">CURP</font></td>
<td><font face ="Arial">TELEFONO</font></td>
<td><font face ="Arial">CORREO</font></td>
<td><font face ="Arial">bachiller</font></td>

</tr>';

if ($result=$conn->query($query)){
    while($row=$result->fetch_assoc()){

$nombre=$row['nombre_alumno'];
$matricula=$row['matricula_alumno'];
$fechaNac=$row['fechaNac_alumno'];
$curp=$row['curp_alumno'];
$telefono=$row['telefono_alumno'];
$correo=$row['correo_alumno'];
$bachillerato=$row['bachillerato'];


echo '<tr>
<td>'.$nombre.'</td>
<td>'.$matricula.'</td>
<td>'.$fechaNac.'</td>
<td>'.$curp.'</td>
<td>'.$telefono.'</td>
<td>'.$correo.'</td>
<td>'.$bachillerato.'</td>
</tr>';

    }
    $result->free();
}
?>