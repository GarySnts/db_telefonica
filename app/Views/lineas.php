<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lineas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-success">
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
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
    <br>
    <a href="nueva_linea" class="btn btn-primary">Nueva linea</a>
    <br><br>
    <h1>Lineas telefonicas</h1>
    <br>
    <table class="table table-border table-striped">
      <thead>
        <rt>
          <th>Numero de Teléfono</th>
          <th>Fecha de pago</th>
          <th>Meses de atraso</th>
          <th>Id de plan</th>
          <th>Id de cliente</th>
          <th>Acciones</th>
        </rt>
      </thead>
      <tbody>
      <tbody>
        <?php
        foreach($datos as $lineas):
        ?>
          <tr>
            <td><?php echo $lineas['no_telefono']; ?> </td>
            <td><?php echo $lineas['fecha_pago']; ?></td>
            <td><?php echo $lineas['meses_atraso']; ?> </td>
            <td><?php echo $lineas['plan_id']; ?></td>
            <td><?php echo $lineas['cliente_id']; ?></td>
            <td>
              <a href="<?=base_url('buscar_linea/').$lineas['no_telefono']?>" class="btn btn-warning">Modificar</a>
              <a href="<?=base_url('eliminar_linea/').$lineas['no_telefono']?>" class="btn btn-danger">Eliminar</a>
            </td>

          </tr>
          <?php
        endforeach;
        ?>
      </tbody>
      </tbody>
    </table>
  </div>
</body>

</html>