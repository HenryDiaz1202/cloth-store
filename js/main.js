var cantidad = document.getElementById("cantidad");
var precioC = document.getElementById("precioCompra");
var precioV = document.getElementById("precioVenta");

var invertido = document.getElementById("invertido");
var total = document.getElementById("total");
var ganancia = document.getElementById("ganancia");

var Fecha = document.getElementById("fecha");
var Fha = document.getElementById("cha");

function OPERACIONES() {
  invertido.value = cantidad.value * precioC.value;
  total.value = cantidad.value * precioV.value;
  ganancia.value = total.value - invertido.value;
}

function FECHA() {
  var hoy = new Date();
  var fecha =
    hoy.getFullYear() + "-" + (hoy.getMonth() + 1) + "-" + hoy.getDate();
  // var tiempo = hoy.getHours()+':'+hoy.getMinutes();
  // Fecha.innerHTML= fecha;
  Fha.value = fecha;
}

function listar() {
  window.location.href = "CRUD/listaProductos.php";
}
function listar1() {
  window.location.href = "listaProductos.php";
}
function register() {
  window.location.href = "../Productos.php";
}

var productValues;
var cod, pro, mar, des, ccn, prc, prv, ivnt, totl, gnnc;
var id, prod, marca, descript, buyPrice, quanty, invers, sellPrice, toral, win;

function agregar(
  id,
  prod,
  marca,
  descript,
  buyPrice,
  quanty,
  invers,
  sellPrice,
  toral,
  win
) {
  var codigo = id;
  var producto = prod;
  var marca1 = marca;
  var desck1 = descript;
  var prCom1 = buyPrice;
  var cantt1 = quanty;
  var inv1 = invers;
  var preV1 = sellPrice;
  var tot1 = toral;
  var gan1 = win;

  productValues = [
    codigo,
    producto,
    marca1,
    desck1,
    prCom1,
    cantt1,
    inv1,
    preV1,
    tot1,
    gan1
  ];

  for (let i = 0; i <= productValues.length - 1; i++) {
    //AGREGAMOS AL LOCAL_STORAGE
    localStorage.setItem(i, productValues[i]);
  }
  
}

var idp = document.getElementById("idp");
var nm = document.getElementById("nombre");
var mk = document.getElementById("marca");
var dc = document.getElementById("desc");
var cn = document.getElementById("cantidad");
var pc = document.getElementById("precioCompra");
var pv = document.getElementById("precioVenta");
var iv = document.getElementById("invertido");
var tt = document.getElementById("total");
var gn = document.getElementById("ganancia");

function obtener() {
  cod = localStorage.getItem(0, productValues);
  pro = localStorage.getItem(1, productValues);
  mar = localStorage.getItem(2, productValues);
  des = localStorage.getItem(3, productValues);
  prc = localStorage.getItem(4, productValues);
  ccn = localStorage.getItem(5, productValues);
  ivnt = localStorage.getItem(6, productValues);
  prv = localStorage.getItem(7, productValues);
  totl = localStorage.getItem(8, productValues);
  gnnc = localStorage.getItem(9, productValues);

  idp.value = cod;
  nm.value = pro;
  mk.value = mar;
  dc.value = des;
  cn.value = ccn;
  pc.value = prc;
  pv.value = prv;
  iv.value = ivnt;
  tt.value = totl;
  gn.value = gnnc;
}

function compras(){
  window.location.href = "components/compras/mainCompra.php";
}