<?php 
    include_once('./DataBase.php');
   
    function consultar() {

        $query='call estatus_cuentas_por_cobrar_a_credito()';
        $result = $GLOBALS['mysqli']->query($query); 

        $tabla="<table>";

        $tabla.="<th>";
        $tabla.="<tr>";
        $tabla.="<td>"."Monto"."</td>";
        $tabla.="<td>"."Fecha"."</td>";
        $tabla.="<td>"."Vendedor"."</td>";
        $tabla.="<td>"."Equipo"."</td>";
        $tabla.="</tr>";
        $tabla.="</th>";

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
        {
            $tabla.="<tr>";
            $tabla.="<td>".$row['monto']."</td>";
            $tabla.="<td>".$row['fecha']."</td>";
            $tabla.="<td>".$row['vendedor']."</td>";
            $tabla.="<td>".$row['equipo']."</td>";
            $tabla.="</tr>";
        }
        $tabla.="</table>";

        echo $tabla;
    }
    consultar();
?>