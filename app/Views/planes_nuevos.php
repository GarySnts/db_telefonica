<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-warning">
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-warning" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/fs2024/db_telefonica/public/">Raiz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/fs2024/db_telefonica/public/ver_clientes">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/fs2024/db_telefonica/public/ver_planes">Planes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/fs2024/db_telefonica/public/ver_lineas">Lineas Telefonicas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>
    <form action="agregar_plan" method="post">
        <h1>Planes nuevos</h1><br>
        <div class="mb-3">
            <label for="txtId" class="form-label">Codigo</label>
            <input type="text" id="txtId" name="txtId" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtPago" class="form-label">Pago mensual</label>
            <input type="text" id="txtPago" name="txtPago" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtminutos" class="form-label">Cantidad de minutos</label>
            <input type="text" id="txtminutos" name="txtminutos" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtMensajes" class="form-label">Cantidad de mensajes</label>
            <input type="text" id="txtMensajes" name="txtMensajes" class="form-control">
        </div>
        <div class="mb-8">
            <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
        </div>
    </form>
        
        
    </div>
</body>
</html>