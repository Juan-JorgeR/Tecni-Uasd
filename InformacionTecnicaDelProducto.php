<?php 
    include_once('./DataBase.php');
    
    function consultar() {
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
    
        $query='call informacion_tecnica_del_producto("'.$nombre.'","'.$marca.'")';
        $result = $GLOBALS['mysqli']->query($query);
        
        $tabla="<!Doctype html><html><head><link rel=\"stylesheet\" href=\"css/style.css\"></head><table>";

        $tabla.="<th>";
        $tabla.="<tr class=\"nombreCampos\">";
        $tabla.="<td>"."Marca"."</td>";
        $tabla.="<td>"."Equipo"."</td>";
        $tabla.="<td>"."Informacion Tecnica"."</td>";
        $tabla.="</tr>";
        $tabla.="</th>";

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
        {
            $tabla.="<tr>";
            $tabla.="<td>".$row['marca']."</td>";
            $tabla.="<td>".$row['equipo']."</td>";
            $tabla.="<td>".$row['informacion_tecnica']."</td>";
            $tabla.="</tr>";
        }
        $tabla.="</table></html>";

        echo $tabla;
    }
    consultar();
?>