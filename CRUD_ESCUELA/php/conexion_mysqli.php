<?php

$servername="localhost";
$database="db_escuela";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
die("conection failed:".mysqli_error());

}

?>