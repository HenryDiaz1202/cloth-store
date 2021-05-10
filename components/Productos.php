<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body onLoad="FECHA()">
    <header>
    <label class="label-header" for="">Tienda de ropa</label>
    <div class="nav">
        <a class="linkers" href="../index.php"><img src="../resources/inicio.png" width="35px"> Inicio</a>
        <a class="linkers sep" href="compras/mainCompra.php"><img src="../resources/add.png" width="35px"> Ventas</a>
        <a class="linkers sep active-prod" href=""><img src="../resources/caja.png" width="35px">Productos</a>
        <a class="linkers sep" href="almacen.php"><img src="../resources/inventario.png" width="35px">Registros</a>
    </div>
    </header>

    <?php
        include 'CRUD/AddProds.php'
    ?>

    <?php
        include 'footer.php';
    ?>
    <script src="../js/main.js"></script>
</body>
</html>