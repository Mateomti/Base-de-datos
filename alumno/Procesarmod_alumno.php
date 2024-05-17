<?php
include("../conexion.php");
    
    $ida = $_POST["ida"];
    $dni = $_POST["dni"];
    $fnac = $_POST["fnac"];
    $nomyape = $_POST["nomyape"];
    $ciudad = $_POST["ciudad"];
    $domicilio = $_POST["domicilio"];
    $mail = $_POST["mail"];
    $genero = $_POST["genero"];
    $telefono = $_POST["telefono"];

    $sql = "UPDATE alumno SET dni=$dni, fnac='$fnac', apeynom='$nomyape', ciudad='$ciudad', domicilio='$domicilio', mail='$mail',genero='$genero',telefono='$telefono' 
    WHERE id_alumno = $ida";

    $res = mysqli_query($con, $sql);
    if ($res == TRUE){
        echo "<br>Registro exitoso!";
        
    }
    else{
        echo "Ha ocurrido un error.";
    }
    

?>
<p>Desea ver el listado? De click <a href="ListadoAlumno.php">aqui.</a></p>
    <p>Desea volver al registro? De click <a href="reg_alumno.html">aqui.</a></p>