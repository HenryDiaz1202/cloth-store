<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
    <label class="label-header" for="">Tienda de ropa</label>
    <div class="nav">
        <a class="linkers active-index" href="index.php"><img src="resources/inicio.png" width="35px"></img> Inicio</a>
        <a class="linkers sep" href="components/compras/mainCompra.php"><img src="resources/add.png" width="35px"> Ventas</a>
        <a class="linkers sep" href="components/CRUD/listaProductos.php"><img src="resources/caja.png" width="35px"></img> Productos</a>
        <a class="linkers sep" href="components/almacen.php"><img src="resources/inventario.png" width="35px"> Registros</a>
    </div>
    </header>

    <?php include 'components/main.php'; ?>

    <?php include 'components/footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>