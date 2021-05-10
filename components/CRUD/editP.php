<div class="contenedor-main"> 
    <div class="second-cont">
    <form class="form"  method="POST" action="operaciones/EditarProd.php">
        <label class="label-headers1 label-over" for="" id="register" onClick="register()"><img src="../../resources/add.png" width="45px">  Registrar producto</label>
        <label class="label-headers1 label-over" for="" id="listar" onClick="listar1()"> <img src="../../resources/listado.png" width="45px"> Listar productos</label>
        <!-- <label class="label-fecha" for="" name="fecha" id="fecha"></label> -->
        <div class="grid">
            <!-- perteneciente a productos -->
             <input class="inpt fecha" type="text" name="fecha" id="cha" readonly=true >
             <label class="label" for="">Código de producto</label>
             <input placeholder="Código de producto" class="inpt readonly" type="text" name="idProd" value="" id="idp" required readonly=true>
             <label class="label" for="">Nombre de producto</label>
             <input placeholder="Nombre de producto" class="inpt" type="text" name="producto" id="nombre" required>
             <label class="label" for="">Marca</label>
             <input placeholder="Marca" class="inpt" type="text" name="marca" id="marca">
             <label class="label" for="">Descripsión</label>
             <input placeholder="Descripsión" class="inpt" type="text" name="descripsion" id="desc">
             <label class="label" for="">Cantidad a registrar</label>
             <input placeholder="Cantidad a registrar" class="inpt-number" type="number" name="cantidad" id="cantidad" required>
            <!-- perteneciente al registro -->
            <!-- la fecha la mostraré en un label y así la obtendré, usando JS -->
            <!-- <input placeholder="" class="inpt-fecha" type="date" name="fecha" id=""> -->
            <label class="label" for="">Precio compra</label>
            <input placeholder="C$" class="inpt-number" type="number" name="precioCompra" id="precioCompra" required onchange="OPERACIONES()">

             <!-- Usando la de invertido que se encuentra abajo -->
             <!-- <input placeholder="Total" class="inpt-number" type="number" name="total" id=""> -->

             <!-- perteneciente al Almacen -->
             <label class="label" for="">Precio venta</label>
             <input placeholder="C$" class="inpt-number" type="number" name="precioVenta" id="precioVenta" required onchange="OPERACIONES()">

             <div class="final">
                 <div class="div">
                    <label class="lbl" for="">Invertido</label><br>
                    <input placeholder="C$" class="inpt-numbert mr" type="number" name="invertido" id="invertido" readonly=true >
                 </div>
                 <div class="div">
                 <label class="lbl1" for="">Total neto</label><br>
                 <input placeholder="C$" class="inpt-numbert ml" type="number" name="total" id="total" readonly=true >
                 </div>
                 <div class="div">
                 <label class="lbl2" for="">Ganancia</label><br>
                 <input placeholder="C$" class="inpt-numbert" type="number" name="ganancia" id="ganancia" readonly=true>
                 </div>
             </div>
            </div>
             <input class="Cancelar" type="button" value="Cancelar">
             <input class="Guardar" type="submit" value="Guardar">
    </form>
    </div>
</div>