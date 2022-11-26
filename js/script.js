import DescripcionEquipos from './consultas/DescripcionDeLosEquipos.js';
import EstatusCuentasPorCobrarCredito from './consultas/EstatusCuentasPorCobrarCredito.js';
import ExistenciaGarantia from './consultas/ExistenciaGarantia.js';
import GarantiaPorCliente from './consultas/GarantiaPorClientes.js';
import InformacionTecnicaProducto from './consultas/InformacionTecnicaProducto.js';
import InformeEquiposVendidosPorVendedor from './informes/InformeEquiposVendidosPorVendedor.js';
import InformeFacturasMensuales from './informes/InformeFacturasMensuales.js';
import InformesVentasContado from './informes/InformesVentasContado.js';
import InformeVentasCredito from './informes/InformeVentasCredito.js';
import Cliente from './formularios/Cliente.js';
import Equipo from './formularios/Equipo.js';
import Factura from './formularios/Factura.js';
import Garantia from './formularios/Garantia.js';
import Marca from './formularios/Marca.js';
import Proveedor from './formularios/Proveedor.js';
import Vendedor from './formularios/Vendedor.js';

var formularios=document.querySelectorAll('form');
var descripcionDeLosEquipos=document.getElementById('opc_descripcion_de_los_Equipos');
var EstatusCuentasPC=document.getElementById('opc_estatus_cuentas_por_cobrar_a_credito');
var existenciaDeGarantia=document.getElementById('opc_existencia_de_garantia');
var garantiaPorCliente=document.getElementById('opc_garantia_por_cliente');
var informacionTecnicaDelProducto=document.getElementById('opc_informacion_tecnica_del_producto');
var informeEquiposVendidosPorVendedor=document.getElementById('opc_informe_equipos_vendidos_por_vendedor');
var informeFacturasMensuales=document.getElementById('opc_informe_facturas_mensuales');
var informesVentasAlContado=document.getElementById('opc_informe_ventas_al_contado');
var informeVentasAcredito=document.getElementById('opc_informe_ventas_a_credito');
var clienteOpc=document.getElementById('opc_cliente');
var facturaOpc=document.getElementById('opc_factura');
var marcaOpc=document.getElementById('opc_marca');
var proveedorOpc=document.getElementById('opc_proveedor');
var vendedorOpc=document.getElementById('opc_vendedor');
var garantiaOpc=document.getElementById('opc_garantia');
var equiposOpc=document.getElementById('opc_equipo');

var descripcionObj=new DescripcionEquipos();
var estatusObj=new EstatusCuentasPorCobrarCredito();
var existenciaObj=new ExistenciaGarantia();
var garantiaPCObj=new GarantiaPorCliente();
var informacionObj=new InformacionTecnicaProducto();
var equiposVendidosObj=new InformeEquiposVendidosPorVendedor();
var facturasMensualesObj=new InformeFacturasMensuales();
var ventasContadoObj=new InformesVentasContado();
var ventasCreditoObj=new InformeVentasCredito();
var clienteObj=new Cliente();
var facturaObj=new Factura();
var marcaObj=new Marca();
var proveedorObj=new Proveedor();
var vendedorObj=new Vendedor();
var garantiaObj=new Garantia();
var equipoObj=new Equipo();

function esconderTodosLosFormularios() {
    formularios.forEach(f=>{
        f.style.visibility='hidden';
    });
}
function descripcionDeLosEquiposOnClick() {
    esconderTodosLosFormularios();
    descripcionObj.display();
}
function estatusCuentasPorCobrarCreditoOnClick() {
    esconderTodosLosFormularios();
    estatusObj.display();
}
function existenciaDeGarantiaOnClick() {
    esconderTodosLosFormularios();
    existenciaObj.display()
}
function garantiaPorClienteOnClick() {
    esconderTodosLosFormularios();
    garantiaPCObj.display();
}
function informacionTecnicaDelProductoOnClick() {
    esconderTodosLosFormularios();
    informacionObj.display();
}
function informeEquiposVendidosPorVendedorOnClick() {
    esconderTodosLosFormularios();
    equiposVendidosObj.display();
}
function informeFacturasMensualesOnClick() {
    esconderTodosLosFormularios();
    facturasMensualesObj.display();
}
function informesVentasAlContadoOnClick() {
    esconderTodosLosFormularios();
    ventasContadoObj.display();
}
function informeVentasAcreditoOnClick() {
    esconderTodosLosFormularios();
    ventasCreditoObj.display();
}
function clienteOnClick() {
    esconderTodosLosFormularios();
    clienteObj.display();
}
function facturaOnClick() {
    esconderTodosLosFormularios();
    facturaObj.display();
}
function garantiaOnClick() {
    esconderTodosLosFormularios();
    garantiaObj.display();
}
function venderorOnClick() {
    esconderTodosLosFormularios();
    vendedorObj.display();
}
function marcaOnClick() {
    esconderTodosLosFormularios();
    marcaObj.display();
} 
function equipoOnClick() {
    esconderTodosLosFormularios();
    equipoObj.display();
} 
function proveedorOnClick() {
    esconderTodosLosFormularios();
    proveedorObj.display();
}
function crearEventos() {
    descripcionDeLosEquipos.addEventListener("click",descripcionDeLosEquiposOnClick);
    EstatusCuentasPC.addEventListener("click",estatusCuentasPorCobrarCreditoOnClick);
    existenciaDeGarantia.addEventListener("click",existenciaDeGarantiaOnClick);
    garantiaPorCliente.addEventListener("click",garantiaPorClienteOnClick);
    informacionTecnicaDelProducto.addEventListener("click",informacionTecnicaDelProductoOnClick);
    informeEquiposVendidosPorVendedor.addEventListener("click",informeEquiposVendidosPorVendedorOnClick);
    informeFacturasMensuales.addEventListener("click",informeFacturasMensualesOnClick);
    informesVentasAlContado.addEventListener("click",informesVentasAlContadoOnClick);
    informeVentasAcredito.addEventListener("click",informeVentasAcreditoOnClick);
    clienteOpc.addEventListener("click",clienteOnClick);
    facturaOpc.addEventListener("click",facturaOnClick);
    garantiaOpc.addEventListener("click",garantiaOnClick);
    vendedorOpc.addEventListener("click",venderorOnClick);
    marcaOpc.addEventListener("click",marcaOnClick);
    equiposOpc.addEventListener("click",equipoOnClick);
    proveedorOpc.addEventListener("click",proveedorOnClick);
}

window.onload=crearEventos;