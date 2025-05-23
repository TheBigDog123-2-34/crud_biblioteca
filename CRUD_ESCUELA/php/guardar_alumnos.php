<?php

include('conexion_mysqli.php');

$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$fechaNac=$_POST['fechaNac'];
$curp=$_POST['curp'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$bachillerato=$_POST['bachillerato'];

$sql="INSERT INTO alumno values('0','$nombre','$matricula','$fechaNac','$curp','$telefono','$correo','$bachillerato')";

if(mysqli_query($conn,$sql)){
   
    echo'<script type="text/javascript">
    alert("Alumno guardado");
    window.location.href="../formulario_alumnos.html";
    </script>';


}else{
    echo"Error: ".$sql."<br>".mysqli_error($conn);

}
mysqli_close($conn);
?>