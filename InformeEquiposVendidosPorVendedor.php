<?php 
    include_once('./DataBase.php');

    function consultar() {
        $mes=$_POST['meses'];
        $cedula=$_POST['cedula'];
        
        $query='call informe_equipos_vendidos_por_vendedor('.$mes.',"'.$cedula.'")';
        $result = $GLOBALS['mysqli']->query($query); 

        $tabla="<table>";

        $tabla.="<th>";
        $tabla.="<tr>";
        $tabla.="<td>"."Vendedor"."</td>";
        $tabla.="<td>"."Fecha"."</td>";
        $tabla.="<td>"."Equipo"."</td>";
        $tabla.="<td>"."Precio"."</td>";
        $tabla.="</tr>";
        $tabla.="</th>";

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
        {
            $tabla.="<tr>";
            $tabla.="<td>".$row['vendedor']."</td>";
            $tabla.="<td>".$row['fecha']."</td>";
            $tabla.="<td>".$row['equipo']."</td>";
            $tabla.="<td>".$row['precio']."</td>";
            $tabla.="</tr>";
        }
        $tabla.="</table>";

        echo $tabla;
    }
    consultar();
?>