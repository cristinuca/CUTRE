<?php

include("conect.php");


if(isset($_POST["enviar"])) {
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];  
$insertar="INSERT INTO tabla2(nombre, apellido, direccion, email, comentario) VALUES(
    '$nombre',
    '$apellido',
    '$direccion',
    '$email',
    '$comentario')";
$query=mysqli_query($con,$insertar);
header("location: finish.html");

}
