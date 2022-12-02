<!doctype html>
<html>
    <head>
        <title>Tecni-uasd</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header id="encabezado">
            <nav id="barraSuperior">
                <img id="tres_rayas" src="./images/tres_rayas.png">
                <label id="tituloBarraSuperior">Tecni-uasd</label>
            </nav>
        </header>
        <main id="main">
            <aside id="menuOpciones">
                <ul class="opciones_menu" id="opc_menu">
                    <li class="opcion" id="opc_consultas">
                        <img src="./images/triangulo.png">
                        <label>Consultas</label>
                    </li>
                    <ul class="opciones_menu" id="sub_opc_consultas">
                        <li class="opcion" id="opc_descripcion_de_los_Equipos">
                            <label>Descripcion de los equipos</label>
                        </li>
                        <li class="opcion" id="opc_estatus_cuentas_por_cobrar_a_credito">
                            <label>Estatus cuentas por cobrar a credito</label>
                        </li>
                        <li class="opcion" id="opc_existencia_de_garantia">
                            <label>Existencia de garantia</label>
                        </li>
                        <li class="opcion" id="opc_garantia_por_cliente">
                            <label>garantia por clientes</label>
                        </li>
                        <li class="opcion" id="opc_informacion_tecnica_del_producto">
                            <label>Informacion tecnica del producto</label>
                        </li>
                    </ul>
                    <li class="opcion" id="opc_informes">
                        <img src="./images/triangulo.png">
                        <label>Informes</label>
                    </li>
                    <ul class="opciones_menu" id="sub_opc_informes">
                        <li class="opcion" id="opc_informe_equipos_vendidos_por_vendedor">
                            <label>Informe equipos vendidos por vendedor</label>
                        </li>
                        <li class="opcion" id="opc_informe_facturas_mensuales">
                            <label>Informe facturas mensuales</label>
                        </li>
                        <li class="opcion" id="opc_informe_ventas_al_contado">
                            <label>Informes ventas al contado</label>
                        </li>
                        <li class="opcion" id="opc_informe_ventas_a_credito">
                            <label>Informe ventas a credito</label>
                        </li>
                    </ul>
                    <li class="opcion" id="opc_formularios">
                        <img src="./images/triangulo.png">
                        <label>Formularios</label>
                    </li>
                    <ul class="opciones_menu" id="sub_opc_formularios">
                        <li class="opcion" id="opc_cliente">
                            <label>Cliente</label>
                        </li>
                        <li class="opcion" id="opc_factura">
                            <label>Factura</label>
                        </li>
                        <li class="opcion" id="opc_garantia">
                            <label>Garantia</label>
                        </li>
                        <li class="opcion" id="opc_vendedor">
                            <label>Vendedor</label>
                        </li>
                        <li class="opcion" id="opc_marca">
                            <label>Marca</label>
                        </li>
                        <li class="opcion" id="opc_equipo">
                            <label>Equipos</label>
                        </li>
                        <li class="opcion" id="opc_proveedor">
                            <label>Proveedor</label>
                        </li>
                    </ul>
                </ul>
            </aside>
            <section id="seccion_principal">
                <!--Consultas-->
                <!--descripcion equipos-->
                <form name="frm_descripcion_equipos" method="post" action="DescripcionDeLosEquipos.php" class="formulario" id="descripcion_equipos_form">
                    <p id="titulo">Descripcion De Los Equipos</p>
                    <p><input name="nombre" placeholder="Nombre" id="descripcion_equipos_nombre"></p>
                    <p><input name="marca" placeholder="Marca"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--Estatus cuentas por cobrar a credito-->
                <form name="frm_estatus_cuentas_por_cobrar_a_credito" method="post" action="EstatusCuentasPorCobrarACredito.php"class="formulario" id="estatus_cuentas_por_cobrar_credito_form">
                    <p id="titulo">Estatus Cuentas Por Cobrar A Credito</p>
                    <p><input name="cedula" placeholder="Cedula" id="estatus_cuentas_por_cobrar_credito_cedula"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--Existencia de garantia-->
                <form name="frm_existencia_de_garantia" method="post" action="ExistenciaDeGarantia.php" class="formulario" id="existencia_de_garantia_form">
                    <p id="titulo">Existencia De Garantia</p>
                    <p><input name="nombre" placeholder="Nombre" id="existencia_de_garantia_nombre"></p>
                    <p><input name="marca" placeholder="Marca"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--garantia por clientes-->
                <form name="frm_garantia_por_clientes" method="post" action="GarantiaPorCliente.php" class="formulario" id="garantia_por_clientes_form">
                    <p id="titulo">Garantia Por Cliente</p>
                    <p><input name="cedula" placeholder="Cedula" id="garantia_por_clientes_cedula"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--Informacion tecnica del producto-->
                <form name="frm_informacion_tecnica_del_producto" method="post" action="InformacionTecnicaDelProducto.php" class="formulario" id="informacion_tecnica_del_producto_form">
                    <p id="titulo">Informacion Tecnica Del Producto</p>
                    <p><input name="nombre" placeholder="Nombre" id="informacion_tecnica_del_producto_nombre"></p>
                    <p><input name="marca" placeholder="Marca"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>

                <!--Informes-->
                <!--Informe equipos vendidos por vendedor-->
                <form name="frm_informe_equipos_vendidos_por_vendedor" method="post" action="InformeEquiposVendidosPorVendedor.php" class="formulario" id="informe_equipos_vendidos_por_vendedor_form">
                    <p id="titulo">Informe Equipos Vendidos Por Vendedor</p>
                    <p><select name="meses">
                        <option value="">--Meses--</option>
                    </select></p>
                    <p><input name="cedula" placeholder="Cedula" id="informe_equipos_vendidos_por_vendedor_cedula"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--Informe facturas mensuales-->
                <form name="frm_informe_facturas_mensuales" method="post" action="InformesFacturasMensuales.php" class="formulario" id="informe_facturas_mensuales_form">
                    <p id="titulo">Informe Facturas Mensuales</p>
                    <p><select name="meses">
                        <option value="">--Meses--</option>
                    </select></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--Informes ventas al contado-->
                <form name="frm_informes_ventas_al_contado" method="post" action="InformeVentasAlContado.php" class="formulario" id="informes_ventas_al_contado_form">
                    <p id="titulo">Informe Ventas Al Contado</p>  
                    <p><select name="meses">
                        <option value="">--Meses--</option>
                    </select></p>                 
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--Informe ventas a credito-->
                <form name="frm_informe_ventas_a_credito" method="post" action="InformeVentasACredito.php" class="formulario" id="informe_ventas_a_credito_form">
                    <p id="titulo">Informe Ventas A Credito</p> 
                    <p><select name="meses">
                        <option value="">--Meses--</option>
                    </select></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>

                <!--Formularios-->
                <!--cliente-->
                <form name="frm_cliente" method="post" action="Cliente.php" class="formulario" id="cliente_form">
                    <p id="titulo">Cliente</p> 
                    <p><input name="nombre" placeholder="Nombre" id="cliente_nombre"></p>
                    <p><input name="apellido" placeholder="Apellido" id="cliente_apellido"></p>
                    <p><input name="cedula" placeholder="Cedula" id="cliente_cedula"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--factura-->
                <form name="frm_factura" method="post" action="Factura.php" class="formulario" id="factura_form">
                    <p id="titulo">Factura</p> 
                    <p><input name="cedula" placeholder="Cedula Cliente" id="factura_cedula_cliente"></p>
                    <p><input name="vendedor" placeholder="Vendedor"></p>
                    <p><input name="equipo" placeholder="Equipo"></p>
                    <p><input name="monto" placeholder="Monto" id="factura_monto"></p>
                    <p><select name="tipoVenta">
                        <option value="">--Tipo Venta--</option>
                    </select></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--garantia-->
                <form name="frm_garantia" method="post" action="Garantia.php" class="formulario" id="garantia_form">
                    <p id="titulo">Garantia</p> 
                    <p><input name="mes" placeholder="Meses garantia" id="garantia_meses"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>

                <!--vendedor-->
                <form name="frm_vendedor" method="post" action="Vendedor.php" class="formulario" id="vendedor_form">
                    <p id="titulo">Vendedor</p> 
                    <p><input name="nombre" placeholder="Nombre" id="vendedor_nombre"></p>
                    <p><input name="apellido" placeholder="Apellido" id="vendedor_apellido"></p>
                    <p><input name="cedula" placeholder="Cedula" id="vendedor_cedula"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--marca-->
                <form name="frm_marca" method="post" action="Marca.php" class="formulario" id="marca_form">
                    <p id="titulo">Marca</p> 
                    <p><input name="nombre" placeholder="Nombre" id="marca_nombre"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--equipos-->
                <form name="frm_equipo" method="post" action="Equipo.php" class="formulario" id="equipos_form">
                    <p id="titulo">Equipos</p> 
                    <p><input name="nombre" placeholder="Nombre" id="equipos_nombre"></p>
                    <p><input name="precio" placeholder="Precio" id="equipos_precio"></p>
                    <p><input name="proveedor" placeholder="Proveedor"></p>
                    <p><input name="marca" placeholder="Marca"></p>
                    <p><input name="garantia" placeholder="Garantia"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
                <!--proveedor-->
                <form name="frm_proveedor" method="post" action="Proveedor.php" class="formulario" id="proveedor_form">
                    <p id="titulo">Proveedor</p> 
                    <p><input name="nombre" placeholder="Nombre" id="proveedor_nombre"></p>
                    <input type="submit" value="Actualizar" class="actualizar">
                </form>
            </section>
        </main>
    </body>
    <script src="./js/script.js" type="module"></script>
</html>