<?php
include("../conexion.php");

$nombre = $_POST["nombre"]; 
$chs = $_POST["hs"];
$corre = $_POST["corre"];
$curso = $_POST["curso"];

$sql = "INSERT INTO materia(nombre, cantidad_hs, correlativas, curso)
        VALUES ('$nombre',$chs, '$corre',$curso)";
$res = mysqli_query($con,$sql);
if ($res == TRUE){
  echo"<br>Se ha registrado correctamente!";
}
else{
  echo"<br>Ha ocurrido un error inesperado!";
}

?>
<p>Desea ver el listado? De click <a href="ListadoMateria.php">aqui.</a></p>
    <p>Desea volver al registro? De click <a href="reg_alumno.html">aqui.</a></p>