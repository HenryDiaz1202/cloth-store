<?php
include('operaciones/conexion.php');
$filas = $db->query('SELECT P.idProducto, P.producto,P.marca,P.descripsion,P.precioCompra, A.cantidadInicial,A.cantidadActual, A.invertido, A.precioVenta, A.total, A.ganancia FROM productos P,almacen A WHERE A.idProducto = P.idProducto');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <header>
    <label class="label-header" for="">Tienda de ropa</label>
    <div class="nav">
        <a class="linkers" href="../../index.php"><img src="../../resources/inicio.png" width="35px"> Inicio</a>
        <a class="linkers sep" href="../compras/mainCompra.php"><img src="../../resources/add.png" width="35px"> Ventas</a>
        <a class="linkers sep active-prod" href=""><img src="../../resources/caja.png" width="35px">Productos</a>
        <a class="linkers sep" href="../almacen.php"><img src="../../resources/inventario.png" width="35px">Registros</a>
    </div>
    </header>
<div class="contenedor-main"> 
    <div class="second-cont">
    <form class="form"  method="POST" action="CRUD/operaciones/GuardarProd.php">
    <label class="label-headers1" for="" id="listar"> <img src="../../resources/listado.png" width="45px"><spam class="span">↓</spam> Mostrando productos</label>    
    <label class="label-headers1 label-over" for="" id="register" onClick="register()"><img src="../../resources/add.png" width="45px">  Registrar producto</label>
        <!-- <label class="label-fecha" for="" name="fecha" id="fecha"></label> -->
        <div class="cont-sec">
                <table class="tablas">
                    <thead>
                        <tr class="divider">
                            <th class="tablas-header blfh">IdProducto</th>
                            <th class="tablas-header">Producto</th>
                            <th class="tablas-header">Marca</th>
                            <th class="tablas-header">Descripción</th>
                            <th class="tablas-header">Precio C C$</th>
                            <th class="tablas-header">C Inicial</th>
                            <th class="tablas-header">C Actual</th>
                            <th class="tablas-header">Invertido</th>
                            <th class="tablas-header">Precio V C$</th>
                            <th class="tablas-header">Total</th>
                            <th class="tablas-header">Ganancia C$</th>
                            <th class="tablas-header brgh">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         foreach($filas as $fila)
                         { ?>
                        <tr id="row">
                            <td class="tablas-body"> <?php echo $fila['idProducto']; ?> </td>
                            <td class="tablas-body alig-lef"> <?php echo $fila['producto']; ?> </td>
                            <td class="tablas-body alig-lef"> <?php echo $fila['marca']; ?> </td>
                            <td class="tablas-body alig-lef"> <?php echo $fila['descripsion']; ?> </td>
                            <td class="tablas-body alig-right dark-green"> C$ <?php echo $fila['precioCompra'];?></td>
                            <td class="tablas-body"> <?php echo $fila['cantidadInicial']; ?> </td>
                            <td class="tablas-body"> <?php echo $fila['cantidadActual']; ?> </td>
                            <td class="tablas-body alig-right dark-green"> C$ <?php echo $fila['invertido'];?></td>
                            <td class="tablas-body alig-right dark-green"> C$ <?php echo $fila['precioVenta'];?></td>
                            <td class="tablas-body alig-right dark-green"> C$ <?php echo $fila['total'];?></td>
                            <td class="tablas-body alig-right dark-green"> C$ <?php echo $fila['ganancia'];?></td>
                            <td class="tablas-body">
                                <a href="editProd.php" class="edit-bt" onClick="agregar( '<?php echo $fila['idProducto']; ?>','<?php echo $fila['producto']; ?>','<?php echo $fila['marca']; ?>','<?php echo $fila['descripsion']; ?>','<?php echo $fila['precioCompra']; ?>','<?php echo $fila['cantidadInicial']; ?>','<?php echo $fila['invertido']; ?>','<?php echo $fila['precioVenta']; ?>','<?php echo $fila['total']; ?>','<?php echo $fila['ganancia']; ?>'   )">Editar</a>
                                <a href="" class="delete-bt">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                         }
                    ?>
                    <tr>
                            <th class="tablas-header blfb"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header"></th>
                            <th class="tablas-header brgb"></th>
                    </tr>
                </table>
            </div>
           
    </form>
    </div>
</div>

<?php
        include '../footer.php';
    ?>
    <script src="../../js/main.js"></script>
</body>
</html>