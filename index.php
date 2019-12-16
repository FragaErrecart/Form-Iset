<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ISET 2020</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info static-top">
    <div class="container">
      <a class="navbar-brand" >Inscripción ISET 2020</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php// echo $result; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/nicolaspj/formularioinscripcioniset2020/blob/master/formulario-de-inscripcion.jpeg">Descarga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://es-la.facebook.com/isetmdq/">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <style>
    h1, h2{
      text-align: center;
    }
    label{
      font-weight: bold;
    }
  </style>

<div class="container">
  <div class="card">
    <div class="card-header">
      <h1>INSTITUTO SUPERIOR DE ESTUDIOS TECNICOS</h1>
      
    </div>
    <div class="card-body">
    <form action="results.php" method="post">
      <h5 class="card-title text-center">FICHA DE INSCRIPCION CARRERAS CICLO LECTIVO 2020</h5>

      <div class="row justify-content-center">

        <div class="col-md-12">
            <label for="carrera">Seleccionar carrera: </label>
            <select class="form-control" name="carrera">
              <option>Tecnicatura en Analisis en calidad alimentos</option>
              <option>Instrumentacion quirurgica</option>
              <option>Tecnico en programación</option>
              <option>Tecnico en Analisis de sistemas</option>
              <option>Enfermeria</option>
              <option>Laboratorio y Analisis clinico</option>
            </select>
        </div>
       </div>


      <div class="row mt-2">
          <div class="col-md-6">
              <div class="form-group">
                <label for="nombre">Nombre/s:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej: Juan Carlos" required>
              </div>
          </div>

         <div class="col-md-6">
            <div class="form-group">
              <label for="apellido">Apellido/s:</label>
              <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ej: Perez García" required>
            </div>
           </div>
      </div>

        <div class="row mt-2">
          <div class="col-md-6">
              <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="number" class="form-control" name="dni" id="dni" placeholder="Ej: 39338382" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="edad">Edad: </label>
                <input type="number" class="form-control" name="edad" id="edad" placeholder="Ej: 23" required>
               </div>
            </div>
        </div>

      <div class="row mt-2">
          <div class="col-md-6">
              <div class="form-group">
                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Ej: Argentino" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="tituloSecundario">Titulo secundario:</label>
                <input type="text" class="form-control" name="tituloSecundario" id="tituloSecundario" placeholder="Ej: Bachiller en Economía" required>
               </div>
            </div>
      </div>

      <div class="row mt-2">
          <div class="col-md-6">
              <div class="form-group">
                <label for="nroDeRegistro">Nro. de registro: </label>
                <input type="number" class="form-control" name="nroDeRegistro" id="nroDeRegistro" placeholder="Ej: 1845" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="tituloSecundario">Expedido por:</label>
                <input type="text" class="form-control" name="expedidoPor" id="expedidoPor" placeholder="Ej: Escuela Tecnica n°5" required>
               </div>
            </div>
      </div>

      <div class="row mt-2">
          <div class="col-md-6">
              <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ej: Av. Juan B. Justo 4287" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="telefonoFijo">Telefono fijo:</label>
                <input type="number" class="form-control" name="telefonoFijo" id="telefonoFijo" placeholder="Ej: 4567890" required>
               </div>
            </div>
      </div>

      <div class="row mt-2">
          <div class="col-md-6">
              <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="number" class="form-control" name="celular" id="celular" placeholder="Sin el 0 y sin el 15, Ej: 2235678965" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="correoElectronico">Correo electronico:</label>
                <input type="email" class="form-control" name="correoElectronico" id="correoElectronico" placeholder="Ej: Juan@hotmail.com" required>
               </div>
            </div>
      </div>

    
      <div class="row mt-2">
          <div class="col-md-6">
              <div class="form-group">
                <label for="firma">Firma:</label>

              </div>
            </div>
      </div>

      <input type="submit" class="btn btn-primary mt-5 mb-5" name="Enviar">
      
    </div>
  </div>
</div>

</form>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>
