<?php

    include ('conexion.php');

    $idProducto = $_POST['idProd'];
    $producto = $_POST['producto'];
    $marca = $_POST['marca'];
    $descripsion = $_POST['descripsion'];
    $precioCompra = $_POST['precioCompra'];

    // $fecha =  new DateTime('NOW');
    // $local[] = (string)$fecha->format('c');
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];
    $total = $_POST['invertido'];

    $precioVenta = $_POST['precioVenta'];
    $totalN = $_POST['total'];
    $ganancia = $_POST['ganancia'];

// consultas

    $consulta = <<<SQL
        INSERT INTO productos(idProducto,producto,marca,descripsion,precioCompra)
        VALUES (:idProducto,:producto,:marca,:descripsion,:precioCompra)
    SQL;

    $query = <<<SQL
    INSERT INTO registros(idProducto,total,fecha,cantidad,operacion)
    VALUES (:idProducto,:total,:fecha,:cantidad,:operacion)
    SQL;

    $consultar = <<<SQL
        INSERT INTO almacen(idProducto,cantidadInicial,CantidadActual,precioCompra,Invertido,PrecioVenta,total,Ganancia)
        VALUES (:idProducto,:cantidadInicial,:cantidadActual,:precioCompra,:invertido,:precioVenta,:total,:ganancia)
    SQL;

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
        'operacion' => 'agregado'
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