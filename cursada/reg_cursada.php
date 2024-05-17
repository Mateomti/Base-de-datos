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
                <li><a class="dropdown-item" href="reg_cursada.php">Cursada</a></li>
              </ul>
            </li>
            
        </div>
      </div>
    </nav>
    <?php
    include("../conexion.php");

    $sql1 = "SELECT * FROM alumno";
    $res1 = mysqli_query($con, $sql1);
    $matriz1 = [];
    if ($res1) {
        while ($row = mysqli_fetch_array($res1, MYSQLI_ASSOC)) {
            $matriz1[] = $row['apeynom'];
        }
    }
    $sql2 = "SELECT * FROM materia";
    $res2 = mysqli_query($con, $sql2);
    $matriz2 = [];
    if ($res2) {
        while ($row = mysqli_fetch_array($res2, MYSQLI_ASSOC)) {
            $matriz2[] = $row['nombre'];
        }
    }

    ?>


    <form  method="post" action="Procesarreg_cursada.php">
    <h1 class="titulo"><center>Registrar Cursada</center></h1>
      <table
      align="center"
      class="table table-bordered w-50">
    
    <tr>
        <td  height="40px">
            <label for="ida">Alumno</label>
        </td>
        <td  height="40px">
              <select name="nombre" id="nombre">
                <?php
                foreach ($matriz1 as $nombre) {
                    echo "<option value=\"$nombre\">$nombre</option>";
                }
                ?>
              </select>
        </td>
    </tr>
    <tr>
      <td  height="40px">
          <label for="idm">Materia</label>
      </td>
      <td  height="40px">
              <select name="materia" id="materia">
                <?php
                foreach ($matriz2 as $materia) {
                    echo "<option value=\"$materia\">$materia</option>";
                }
                ?>
              </select>
        </td>
  </tr>
  <tr>
    <td  height="40px">
        <label for="n1">Primer Nota</label>
    </td>
    <td  height="40px">
        <input  type="number" name="n1" id="n1"  placeholder="Ingrese la primer nota" >
    </td>
  </tr>
  <tr>
    <td  height="40px">
      <label for="n2">Segunda Nota</label>
  </td>
  <td  height="40px">
      <input  type="number" name="n2" id="n2"  placeholder="Ingrese la segunda nota" >
  </td>
  </tr>
  <tr>
    <td  height="40px">
        <label for="asis"> % de Asistencia</label>
    </td>
    <td  height="40px">
        <input  type="number" name="asis" id="asis" placeholder="Ingrese el porcentaje de asistencia" >
    </td>
  </tr>
  <tr>
    <td  height="40px">
        <label for="estado">Estado</label>
    </td>
    <td  height="40px">
        <input  type="number" name="estado" id="estado"  placeholder="Estado del alumno" readonly >
    </td>
  </tr>
    <tr>
        <td colspan="2" 
        
        align="center">
            <input  type="submit" value="Enviar">
            <input  type="reset" value="Borrar">
        </td>
    </tr>
    </table>
    </form>
</body>


</html>

<!--  ESTE ES EL CODIGO DE LA CURSADA CON EL SELECT
  <tr>
  <td  height="40px">
      <label for="ida">Alumno</label>
  </td>
  <td  height="40px">
      <select name="ida" id="ida">
        <option value="Mateo">Mateo</option>
        <option value="Renata">Renata</option>
        <option value="Flor">Flor</option>
        <option value="Santiago">Santiago</option>
      </select>
  </td>
</tr>
<tr>
<td  height="40px">
    <label for="idm">Materia</label>
</td>
<td  height="40px">
  <select name="idm" id="idm">
    <option value="mat">Matematica</option>
    <option value="lengua">Lengua</option>
    <option value="psic">Psicologia</option>
    <option value="edf">Educacion Fisica</option>
  </select>
</td>
</tr> -->
