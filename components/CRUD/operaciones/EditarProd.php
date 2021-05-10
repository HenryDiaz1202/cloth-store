<?php

    include ('conexion.php');

    $idProducto = $_POST['idProd'];
    $producto = $_POST['producto'];
    $marca = $_POST['marca'];
    $descripsion = $_POST['descripsion'];
    $precioCompra = $_POST['precioCompra'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];
    $total = $_POST['invertido'];
    $precioVenta = $_POST['precioVenta'];
    $totalN = $_POST['total'];
    $ganancia = $_POST['ganancia'];

   // consultas

$consulta ='UPDATE productos SET producto=:producto,marca=:marca,descripsion=:descripsion,precioCompra=:precioCompra)
WHERE idProducto=:idProducto';

$query ='UPDATE registros SET total=:total,fecha=:fecha,cantidad=:cantidad,operacion=:operacion)
WHERE idProducto=:idProducto';

$consultar = 'UPDATE almacen SET 
cantidadInicial=:cantidadInicial,CantidadActual=:cantidadActual,precioCompra=:precioCompra,Invertido=:invertido,PrecioVenta=:precioVenta,total=:total,ganancia=:ganancia)
WHERE idProducto=:idProducto';

//ejecutando la consulta de productos
$preparar = $db->prepare($consulta);
$parametros=[
    'idProducto' => $idProducto,
    'producto' => $producto,
    'marca' => $marca,
    'descripsion' => $descripsion,
    'precioCompra' => $precioCompra,
];

//ejecutando la consulta de registro
$preparo = $db->prepare($query);
$parameters=[
    'idProducto' => $idProducto,
    'total' => $total,
    'fecha' => $fecha,
    'cantidad' => $cantidad,
    'operacion' => 'editado'
];

$preparacion = $db->prepare($consultar);
$parametro=[
    'idProducto' => $idProducto,
    'cantidadInicial' => $cantidad,
    'cantidadActual' => $cantidad,
    'precioCompra' => $precioCompra,
    'invertido' => $total,
    'precioVenta' => $precioVenta,
    'total' => $totalN,
    'ganancia' => $ganancia
];

    $preparar->execute($parametros);
    $preparo->execute($parameters);
    $preparacion->execute($parametro);

    if($preparar > 0 && $preparo > 0 && $preparacion > 0){
        echo'
            <script type="text/javascript">
                alert("Producto guardado correctamente"); 
                window.location.href="../../Productos.php";
            </script>
        ';
    }
    else{
        echo'
            <script type="text/javascript"> 
                alert("Error al registrar el producto"); 
                window.location.href="../../Productos.php";
            </script>
        ';
    }
?>