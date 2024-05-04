<?php
include("conexion.php");

    $dni = $_POST["dni"];
    $fnac = $_POST["fnac"];
    $nomyape = $_POST["nomyape"];
    $ciudad = $_POST["ciudad"];
    $domicilio = $_POST["domicilio"];
    $mail = $_POST["mail"];
    $genero = $_POST["genero"];
    $telefono = $_POST["telefono"];

    $sql = "INSERT INTO alumno(dni, fnac, apeynom, ciudad, domicilio, mail, genero, telefono)
            VALUES($dni, '$fnac', '$nomyape', '$ciudad', '$domicilio', '$mail', '$genero', '$telefono')";
    echo "Consulta: ".$sql;
    $res = mysqli_query($con, $sql);
    if ($res == TRUE){
        echo "<br>Registro exitoso!";
    }
    else{
        echo "Ha ocurrido un error.";
    }

?>