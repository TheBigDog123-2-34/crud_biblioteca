<?php

include('conexion_mysqli.php');

$nombre=$_POST['nombre'];
$horas=$_POST['horas'];
$descripcion=$_POST['descripcion'];

$sql="INSERT INTO materias values('0','$nombre','$horas','$descripcion')";

if(mysqli_query($conn,$sql)){
   
    echo'<script type="text/javascript">
    alert(" guardado");
    window.location.href="../formulario_materia.html";
    </script>';


}else{
    echo"Error: ".$sql."<br>".mysqli_error($conn);

}
mysqli_close($conn);
?>