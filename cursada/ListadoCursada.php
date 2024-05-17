<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../style.css">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-secondary">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Ejercicio 1</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Listado
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../alumno/ListadoAlumno.php">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/ListadoMateria.php">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="ListadoCursada.php">Cursada</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Registrar
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../alumno/reg_alumno.html">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/reg_materia.html">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="reg_cursada.html">Cursada</a></li>
              </ul>
            </li>
            
        </div>
      </div>
    </nav>
    <h1 class="titulo"><center>Listado Cursada</center></h1>
    <?php
    include("../conexion.php");
    $sql = "SELECT C.id_alumno,C.id_materia, C.nota1,C.nota2,C.asistencia FROM cursada C";
    $res = mysqli_query($con,$sql);
    if ($res == FALSE){
        echo"No hay alumnos registrados.";
    }
    else{ ?>
        <table align="center" class="table table-bordered w-50" >
        <tr bgcolor="white">
            <th> <center>Alumno</center> </th>
            <th> <center>Materia</center> </th>
            <th><center>Nota 1</center> </th>
            <th> <center>Nota 2</center> </th>
            <th> <center>Asistencia</center> </th>
            <th> <center>Estado</center> </th>
            <th> <center>Modificar</center> </th>
            <th> <center>Eliminar</center> </th>
        </tr>
        <?php
        while ($vec = mysqli_fetch_array($res)){
            echo"<tr bgcolor='white'>";
                echo"<td><center>$vec[0]</center></td>";
                echo"<td><center>$vec[1]</center></td>";
                echo"<td><center>$vec[2]</center></td>";
                echo"<td><center>$vec[3]</center></td>";
                echo"<td><center>$vec[4]</center></td>";
                echo"<td><center>-</center></td>";
                echo"<td><center>Modificar</center></td>";
                echo"<td><center>Eliminar</center></td>";
            echo"</tr>";
        }echo"</table>";}
        ?>
  </body>
</html>
