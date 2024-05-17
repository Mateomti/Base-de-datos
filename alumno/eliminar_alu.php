<?php
include("../conexion.php");

$ida = $_GET["id_a"];

$sql = "DELETE FROM Alumno WHERE id_alumno =".$ida;
$res = mysqli_query($con,$sql);
?>

<p>Desea ver el listado? De click <a href="ListadoAlumno.php">aqui.</a></p>
<p>Desea volver al registro? De click <a href="reg_alumno.html">aqui.</a></p>