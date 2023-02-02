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
var consultasOpc=document.getElementById('opc_consultas').getElementsByTagName('img');
var informesOpc=document.getElementById('opc_informes').getElementsByTagName('img');
var formulariosOpc=document.getElementById('opc_formularios').getElementsByTagName('img');

var tres_rayas=document.getElementById('tres_rayas');
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

var menuVisible=false;
var consultasVisible=false;
var informesVisible=false;
var formulariosVisible=false;

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
function desplegarMenu() {
    var menuOpc=document.getElementById("menuOpciones");
    var container=document.querySelector("section.container");
    if(!menuVisible) {
        menuOpc.style="flex: 1 1 25%; visibility: visible;";
        container.style="flex: 1 1 75%;";
        menuVisible=true;
        console.log("Se desplego menu");
    }
    else {
        menuOpc.style="flex: 1 1 0%; visibility:hidden;";
        container.style="flex: 1 1 100%;";
        menuVisible=false;
        console.log("Se contrajo menu");
    }
    

}
function desplegarConsultas() {
    var consultasSubopc=document.getElementById("sub_opc_consultas");
    if(!consultasVisible) {
        consultasSubopc.style="height:auto; visibility: visible;";
        consultasOpc.item(0).style="transform: rotate(90deg);";
        consultasVisible=true;
    }
    else {
        consultasSubopc.style="height: 0; visibility: hidden;";
        consultasOpc.item(0).style="transform: rotate(0deg);";
        consultasVisible=false;
    }
}
function desplegarInformes() {
    var informesSubopc=document.getElementById("sub_opc_informes");
    if(!informesVisible) {
        informesSubopc.style="height:auto; visibility: visible;";
        informesOpc.item(0).style="transform: rotate(90deg);";
        informesVisible=true;
    }
    else {
        informesSubopc.style="height: 0; visibility: hidden;";
        informesOpc.item(0).style="transform: rotate(0deg);";
        informesVisible=false;
    }
}
function desplegarFormularios() {
    var formulariosSubopc=document.getElementById("sub_opc_formularios");
    if(!formulariosVisible) {
        formulariosSubopc.style="height:auto; visibility: visible;";
        formulariosOpc.item(0).style="transform: rotate(90deg);";
        formulariosVisible=true;
    }
    else {
        formulariosSubopc.style="height: 0; visibility: hidden;";
        formulariosOpc.item(0).style="transform: rotate(0deg);";
        formulariosVisible=false;
    }
}
function crearEventos() {
    tres_rayas.addEventListener("click",desplegarMenu);
    consultasOpc.item(0).addEventListener("click",desplegarConsultas);
    informesOpc.item(0).addEventListener("click",desplegarInformes);
    formulariosOpc.item(0).addEventListener("click",desplegarFormularios);
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

function inicializarSelects() {
    var mesesSelect=document.getElementsByName('meses');
    var mesesArray=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    for(var i=0;i<mesesSelect.length;i++) {
        for(var j=0;j<12;j++) {
            var option=document.createElement('option');
            option.setAttribute('value',j+1);
            option.appendChild(document.createTextNode(mesesArray[j]));
            mesesSelect[i].appendChild(option);
        }
    }
    
    var tipoVentaSelect=document.getElementsByName('tipoVenta');
    var tipoVentaArray=['Contado','Credito'];
    for(var i=0;i<tipoVentaSelect.length;i++) {
        for(var j=0;j<2;j++) {
            var option=document.createElement('option');
            option.setAttribute('value',tipoVentaArray[j]);
            option.appendChild(document.createTextNode(tipoVentaArray[j]));
            tipoVentaSelect[i].appendChild(option);
        }
    }
}
window.addEventListener('load',crearEventos,false);
window.addEventListener('load',inicializarSelects,false);