<?php
 include('CRUD/operaciones/conexion.php');
 $filas = $db->query('SELECT P.idProducto, P.producto,P.marca,P.descripsion,P.precioCompra, A.cantidadInicial,A.cantidadActual, A.precioVenta 
 FROM productos P,almacen A 
 WHERE A.idProducto = P.idProducto');
?>
<main>
    <div class="contenedor-main">
        
        <div class="txt-cont">
             <label class="label-headers" for=""> <img src="resources/lista.png" width="45px"> Lista de artículos en almacén</label>
             <input type="button" class="regis" value="Registrar venta" onclick="compras()"></button>
             <input placeholder="Buscar producto por Código o por nombre" class="inpt look" type="text" name="idProd" value="" id="pr" >
        </div>
            <div class="cont-sec">
                <table class="tablas">
                    <thead>
                        <tr class="divider">
                            <th class="tablas-header blfh">IdProducto</th>
                            <th class="tablas-header">Producto</th>
                            <th class="tablas-header">Marca</th>
                            <th class="tablas-header">Descripción</th>
                            <th class="tablas-header">C Inicial</th>
                            <th class="tablas-header">Disponible</th>
                            <th class="tablas-header brgh">Precio V C$</th>
                            <!-- <th class="tablas-header brgh">Operaciones</th> -->
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
                            <td class="tablas-body"><?php echo $fila['cantidadInicial'];?></td>
                            <td class="tablas-body"><?php echo $fila['cantidadActual'];?></td>
                            <td class="tablas-body alig-right dark-green"> C$ <?php echo $fila['precioVenta'];?></td>
                            <!-- <td class="tablas-body">
                                <a href="">Editar</a>
                                <a href="">Eliminar</a>
                            </td> -->
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
                            <th class="tablas-header brgb"></th>
                            <!-- <th class="tablas-header brgb"></th> -->
                    </tr>
                </table>
            </div>
    </div>
</main>