<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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
    <form action="agregar_cliente" method="post">
        <h1>Clientes nuevos</h1><br>
        <div class="mb-8">
            <label for="txtId" class="form-label">Id</label>
            <input type="text" id="txtId" name="txtId" class="form-control" placeholder="Ingrese iD">
        </div>
        <div class="mb-8">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingesar nombre">
        </div>
        <div class="mb-8">
            <label for="txtApellido" class="form-label">Apellido</label>
            <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingresar apellidos">
        </div>
        <div class="mb-8">
            <label for="txtCorreo" class="form-label">Correo electronico</label>
            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingresar correo">
        </div>
        <div class="mb-8">
            <label for="txtCalleAvenida" class="form-label">Calle o avenida</label>
            <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control" placeholder="ingresar Calle o avenida">
        </div>
        <div class="mb-8">
            <label for="txtNoCasa" class="form-label">NO. casa</label>
            <input type="text" id="txtNoCasa" name="txtNoCasa" class="form-control" placeholder="ingresar el numero de casa">
        </div>
        <div class="mb-8">
            <label for="txtZona" class="form-label">Zona</label>
            <input type="text" id="txtZona" name="txtZona" class="form-control" placeholder="Ingrear zona residencial">
        </div>
        <div class="mb-8">
            <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
        </div>
    </form>
        
        
    </div>
</body>
</html>