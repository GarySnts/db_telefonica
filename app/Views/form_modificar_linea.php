<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar linea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark text-info">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/fs2024/db_telefonica/public/">Raiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/fs2024/db_telefonica/public/ver_clientes">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/fs2024/db_telefonica/public/ver_planes">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/fs2024/db_telefonica/public/ver_lineas">Lineas Telefonicas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        <form action="<?=base_url('modificar_linea')?>" method="post">
            <h1>Modificar linea</h1><br>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">numero de telefono</label>
                <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" value="<?=$datos['no_telefono'];?>"
                    placeholder="Ingrese numero telefonico" readonly>
            </div>
            <div class="mb-3">
                <label for="txtFechPago" class="form-label">Fecha de pago</label>
                <input type="text" id="txtFechPago" name="txtFechPago" class="form-control" placeholder="Ingrese fecha de pago" value="<?=$datos['fecha_pago'];?>">
            </div>
            <div class="mb-3">
                <label for="txtAtraso" class="form-label">Meses de atraso</label>
                <input type="text" id="txtAtraso" name="txtAtraso" class="form-control" placeholder="Ingrese el valor de meses atrasados" value="<?=$datos['meses_atraso'];?>">
            </div>
            <div class="mb-3">
                <label for="txtPlan" class="form-label">Plan id</label>
                <input type="text" id="txtPlan" name="txtPlan" class="form-control" placeholder="Ingresar id de plan" value="<?=$datos['plan_id'];?>">
            </div>
            <div class="mb-3">
                <label for="txtCliente" class="form-label">cliente id</label>
                <input type="text" id="txtCliente" name="txtCliente" class="form-control" placeholder="INgresar id de cliente" value="<?=$datos['cliente_id'];?>">
            </div><br>
            <div class="mb-8">
                <input type="submit" value="Guardar Cambios" id="btnGuardar" name="btnGuardar" class="btn btn-success form-control">
            </div>
        </form>


    </div>
</body>

</html>