<?php

include('conexion_mysqli.php');

$nombre=$_POST['nombre_docente'];
$curp=$_POST['curp'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$perfil=$_POST['perfil'];
$comentarios=$_POST['comentarios'];
$sexo=$_POST['sexo'];
$sql="INSERT INTO docentes values('0','$nombre','$curp','$telefono','$correo','$perfil','$comentarios','$sexo')";

if(mysqli_query($conn,$sql)){
   
    echo'<script type="text/javascript">
    alert("Docente guardado");
    window.location.href="../formulario_docente.html";
    </script>';


}else{
    echo"Error: ".$sql."<br>".mysqli_error($conn);

}
mysqli_close($conn);
?>