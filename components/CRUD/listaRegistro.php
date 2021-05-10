<?php
include 'CRUD/operaciones/conexion.php';
$filas = $db->query(
    'SELECT R.idProducto,R.total,R.fecha,R.cantidad,R.operacion,P.producto,P.precioCompra FROM productos P,registros R WHERE R.idProducto = P.idProducto'
);
?>
<main>
     <div class="contenedor-main">
        <div class="txt-cont">
             <label class="label-headers" for=""> <img src="../resources/reg.png" width="45px"> Listado de registros y modificaciones</label>
             <select class="inpt select" name="idProd" value="" >
                <option selected disabled class="unable">Selecciona Una Opción de filtrado de datos</option>
                <option value="">Filtrar por fecha</option>
                <option value="">Filtrar por operación</option>
            </select>
        </div>
            <div class="cont-sec">
                <table class="tablas">
                    <thead>
                        <tr class="divider">
                            <th class="tablas-header blfh">IdProducto</th>
                            <th class="tablas-header">Producto</th>
                            <th class="tablas-header">Precio</th>
                            <th class="tablas-header">Cantidad</th>
                            <th class="tablas-header">Total</th>
                            <th class="tablas-header">Fecha</th>
                            <th class="tablas-header brgh">Operación</th>
                            <!-- <th class="tablas-header brgh">Operaciones</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($filas as $fila) { ?>
                        <tr id="row">
                            <td class="tablas-body"> <?php echo $fila[
                                'idProducto'
                            ]; ?> </td>
                            <td class="tablas-body alig-lef"> <?php echo $fila[
                                'producto'
                            ]; ?> </td>
                            <td class="tablas-body alig-lef alig-right dark-green"> <?php echo $fila[
                                'precioCompra'
                            ]; ?> </td>
                            <td class="tablas-body "> <?php echo $fila[
                                'cantidad'
                            ]; ?> </td>
                            <td class="tablas-body alig-right dark-green"><?php echo $fila[
                                'total'
                            ]; ?></td>
                            <td class="tablas-body dark-yellow"><?php echo $fila[
                                'fecha'
                            ]; ?></td>
                            <td class="tablas-body dark-blue"> <?php echo $fila[
                                'operacion'
                            ]; ?></td>
                            <!-- <td class="tablas-body">
                                <a href="">Editar</a>
                                <a href="">Eliminar</a>
                            </td> -->
                        </tr>
                    </tbody>
                    <?php } ?>
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