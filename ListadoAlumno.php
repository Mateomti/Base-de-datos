<!DOCTYPE html>
<html lang="es">
<head>
    <title>Listado Alumnos</title>
</head>
<body>
    <?php
    include("conexion.php");
    $sql = "SELECT A.apeynom, A.dni, A.fnac, A.ciudad FROM alumno A";
    $res = mysqli_query($con,$sql);
    if ($res == FALSE){
        echo"No hay alumnos registrados.";
    }
    else{ ?>
        <table border="1"  align="center">
        <tr bgcolor="white">
            <th> Nombre y Apellido </th>
            <th> DNI </th>
            <th> Fecha de Nacimiento </th>
            <th> Ciudad </th>
            <th> Modificar </th>
            <th> Eliminar </th>
        </tr>
        <?php
        while ($vec = mysqli_fetch_array($res)){
            echo"<tr>";
                echo"<td>$vec[0]</td>";
                echo"<td>$vec[1]</td>";
                echo"<td>$vec[2]</td>";
                echo"<td>$vec[3]</td>";
                echo"<td>Modificar</td>";
                echo"<td>Eliminar</td>";
            echo"</tr>";
        }echo"</table>";}
        ?>
    
</body>
</html>