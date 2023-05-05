<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarea parte 2</title>

  <!-- Agrega los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">

  <!-- Agrega tus propios estilos -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Contenedor principal -->
  <div class="container-fluid">
<br>
<br>
<center><h1>Biblioteca Virtual</h1></center>
<br>
    <div class="row row-cols-1 row-cols-md-3 g-2">

<div class="col">
    <div class="card">
    <center><img src="{{asset('img/brand/libro.png') }}" class="card-img-top" alt="..." style="width:127px;height:120px;"></center>
      <div class="card-body">
        <center><a href="{{ route('libro.index') }}" class="btn btn-lg btn-info">Libros</a></center>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
    <center><img src="{{asset('img/brand/usuarios.png') }}" class="card-img-top" alt="..." style="width:127px;height:120px;"></center>
      <div class="card-body">
        <center><a href="{{ route('usuario.index') }}" class="btn btn-lg btn-info">Usuarios</a></center>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card">
    <center><img src="{{asset('img/brand/prestamo.png') }}" class="card-img-top" alt="..." style="width:127px;height:120px;"></center>
      <div class="card-body">
        <center><a href="{{ route('prestamo.index') }}" class="btn btn-lg btn-info">Prestamos</a></center>
      </div>
    </div>
  </div>


 
  

  </div>

  <!-- Agrega los scripts de Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>

</body>
</html>