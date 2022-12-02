<?php 
    include_once('./DataBase.php');

    function consultar() {
        $mes=$_POST['meses'];

        $query='call informe_facturas_mensuales("'.$mes.'")';
        $result = $GLOBALS['mysqli']->query($query); 

        $tabla="<!Doctype html><html><head><link rel=\"stylesheet\" href=\"css/style.css\"></head><table>";

        $tabla.="<th>";
        $tabla.="<tr class=\"nombreCampos\">";
        $tabla.="<td>"."id_factura"."</td>";
        $tabla.="<td>"."Fecha"."</td>";
        $tabla.="<td>"."Cliente"."</td>";
        $tabla.="<td>"."Equipo"."</td>";
        $tabla.="<td>"."Precio"."</td>";
        $tabla.="<td>"."Marca"."</td>";
        $tabla.="<td>"."Garantia"."</td>";
        $tabla.="</tr>";
        $tabla.="</th>";

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
        {
            $tabla.="<tr>";
            $tabla.="<td>".$row['id_factura']."</td>";
            $tabla.="<td>".$row['fecha']."</td>";
            $tabla.="<td>".$row['cliente']."</td>";
            $tabla.="<td>".$row['equipo']."</td>";
            $tabla.="<td>".$row['precio']."</td>";
            $tabla.="<td>".$row['marca']."</td>";
            $tabla.="<td>".$row['garantia']."</td>";
            $tabla.="</tr>";
        }
        $tabla.="</table></html>";

        echo $tabla;
    }
    consultar();
?>