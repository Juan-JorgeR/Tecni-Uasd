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
function inicializarSelects() {
    var context=new FormData();
    context.append('context','initSelects');

    var marcas = new XMLHttpRequest();
    var proveedores = new XMLHttpRequest();
    var vendedores = new XMLHttpRequest();
    var garantias = new XMLHttpRequest();
    var equipos = new XMLHttpRequest();

    marcas.open("POST", "./mvc/views/MarcaView.php", true);
    marcas.addEventListener('load', () => {
        
        var marcasSelect=document.getElementsByName('marca');

        var result=JSON.parse(marcas.responseText);
        for(var i=0;i<marcasSelect.length;i++) {
            for(var j=0;j<result.length;j++) {
                var option=document.createElement('option');
                option.setAttribute('value',result[j]);
                option.appendChild(document.createTextNode(result[j]));
                marcasSelect[i].appendChild(option);
            }
        }
        console.log(result);
        
    },false);
    marcas.send(context);

    proveedores.open("POST", "./mvc/views/ProveedorView.php", true);
    proveedores.addEventListener('load', () => {

        var proveedoresSelect=document.getElementsByName('proveedor');

        var result=JSON.parse(proveedores.responseText);
        for(var i=0;i<proveedoresSelect.length;i++) {
            for(var j=0;j<result.length;j++) {
                var option=document.createElement('option');
                option.setAttribute('value',result[j]);
                option.appendChild(document.createTextNode(result[j]));
                proveedoresSelect[i].appendChild(option);
            }
        }
        console.log(result);
        
    },false);
    proveedores.send(context);

    vendedores.open("POST", "./mvc/views/VendedorView.php", true);
    vendedores.addEventListener('load', () => {
        
        var vendedoresSelect=document.getElementsByName('vendedor');

        var result=JSON.parse(vendedores.responseText);
        for(var i=0;i<vendedoresSelect.length;i++) {
            for(var j=0;j<result.length;j++) {
                var option=document.createElement('option');
                option.setAttribute('value',result[j]);
                option.appendChild(document.createTextNode(result[j]));
                vendedoresSelect[i].appendChild(option);
            }
        }
        console.log(result);
        
    },false);
    vendedores.send(context);

    garantias.open("POST", "./mvc/views/GarantiaView.php", true);
    garantias.addEventListener('load', () => {
        
        var garantiasSelect=document.getElementsByName('garantia');

        var result=JSON.parse( garantias.responseText);
        for(var i=0;i<garantiasSelect.length;i++) {
            for(var j=0;j<result.length;j++) {
                var option=document.createElement('option');
                option.setAttribute('value',result[j]);
                option.appendChild(document.createTextNode(result[j]));
                garantiasSelect[i].appendChild(option);
            }
        }
        console.log(result);
        
    },false);
    garantias.send(context);

    equipos.open("POST", "./mvc/views/EquipoView.php", true);
    equipos.addEventListener('load', () => {
        
        var equiposSelect=document.getElementsByName('equipo');

        var result=JSON.parse( equipos.responseText);
        for(var i=0;i<equiposSelect.length;i++) {
            for(var j=0;j<result.length;j++) {
                var option=document.createElement('option');
                option.setAttribute('value',result[j]);
                option.appendChild(document.createTextNode(result[j]));
                equiposSelect[i].appendChild(option);
            }
        }
        console.log(result);
        
    },false);
    equipos.send(context);

    var mesesSelect=document.getElementsByName('meses');
    var mesesArray=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    for(var i=0;i<mesesSelect.length;i++) {
        for(var j=0;j<12;j++) {
            var option=document.createElement('option');
            option.setAttribute('value',mesesArray[j]);
            option.appendChild(document.createTextNode(mesesArray[j]));
            mesesSelect[i].appendChild(option);
        }
    }
    
    var tipoVentaSelect=document.getElementsByName('tipoVenta');
    var tipoVentaArray=['Contado','Crédito'];
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