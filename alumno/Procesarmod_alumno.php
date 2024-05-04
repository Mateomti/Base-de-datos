<?php
include("conexion.php");
$apeynom = $_POST["nomyape"];
$dni = $_POST["dni"];
$fnac = $_POST["fnac"];
$ciudad = $_POST["ciudad"];
$id = $_POST["idd"];

$sql = "INSERT alumno SET apeynom = '$apeynom', dni=$dni, fnac='$fnac', ciudad='$ciudad'
        WHERE id_alumno = $id";
$res = mysqli_query($con, $sql);
if ($res==TRUE){
    echo"<Listo";
}

?>