<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
    include("conexion.php");
    $sql = "SELECT A.apeynom, A.dni, A.fnac, A.ciudad, A.id_alumno FROM alumno A";
    $res = mysqli_query($con, $sql);
    if ($res == TRUE){
      $vec = mysqli_fetch_array($res);
      
      echo'
      <form method="post" action="Procesarmod_alumno.php">
      <table
      align="center"
      border="2"
      bgcolor="black">
    <tr bgcolor="#8279F7">
        <th colspan="2"><center>Modificar Alumno</center></th>
    </tr>
    <tr>
    <input  type="text" id="idd" name="idd" readonly value="'.$vec[4].'">
    </tr>
    <tr>
        <td  bgcolor="#D7D2F7" height="40px">
            <label for="nomyape" ">Nombre y Apellido </label>
        </td>
        <td bgcolor="#D7D2F7" height="40px">
            <input  type="text" id="nomyape" name="nomyape" placeholder="Ingrese nombre y apellido." value="'.$vec[0].'"  >

        </td>
    </tr>
    <tr>
        <td   bgcolor="#D7D2F7" height="40px">
            <label for="dni">D.N.I.</label>
        </td>
        <td   bgcolor="#D7D2F7" height="40px">
            <input  type="number" name="dni" id="dni" min="5000000" max="1000000000" placeholder="Ingrese el DNI" value="'.$vec[1].'">
        </td>
    </tr>
    <tr>
        <td bgcolor="#D7D2F7" height="40px">
            <label for="fnac">Fecha de nacimiento</label>
        </td>
        <td bgcolor="#D7D2F7" height="40px">
            <input type="date" name="fnac" id="fnac" value="'.$vec[2].'">
        </td>
    </tr>
    <tr>
        <td bgcolor="#D7D2F7" height="40px"
            <label for="ciudad">Ciudad</label>
        </td>
        <td  bgcolor="#D7D2F7" height="40px">
            <input  type="text" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad" value="'.$vec[3].'">

        </td>
    </tr>
    <tr>
        <td colspan="2" 
        bgcolor="#D7D2F7" 
        height="40px"
        align="center">
            <input  type="submit" value="Enviar">
            <input  type="reset" value="Borrar">
        </td>
    </tr>
    </table>
    </form>
    <p>Para volver al Registro da click <a href="reg_alumnno.html">aqui</a></p>
    <p>Para volver al Listado da click <a href="ListadoAlumno.php">aqui</a></p>
    ';}
    ?>
    
  </body>
</html>
