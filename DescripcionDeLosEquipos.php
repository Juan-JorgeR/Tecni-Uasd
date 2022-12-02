<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
    
        $query='call descripcion_de_los_equipos("'.$nombre.'","'.$marca.'")';
        $result = $GLOBALS['mysqli']->query($query); 

        $tabla="<!Doctype html><html><head><link rel=\"stylesheet\" href=\"css/style.css\"></head><table>";

        $tabla.="<th>";
        $tabla.="<tr class=\"nombreCampos\">";
        $tabla.="<td>"."Nombre"."</td>";
        $tabla.="<td>"."Precio"."</td>";
        $tabla.="<td>"."Marca"."</td>";
        $tabla.="<td>"."Proveedor"."</td>";
        $tabla.="<td>"."Garantia"."</td>";
        $tabla.="</tr>";
        $tabla.="</th>";

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
        {
            $tabla.="<tr>";
            $tabla.="<td>".$row['nombre']."</td>";
            $tabla.="<td>".$row['precio']."</td>";
            $tabla.="<td>".$row['marca']."</td>";
            $tabla.="<td>".$row['proveedor']."</td>";
            $tabla.="<td>".$row['garantia']."</td>";
            $tabla.="</tr>";
        }
        $tabla.="</table></htmlS";
        
        echo $tabla;
    }
    consultar();
?>