<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
    
        $query='call existencia_de_garantia("'.$nombre.'","'.$marca.'")';
        $result = $GLOBALS['mysqli']->query($query); 

        $tabla="<table>";

        $tabla.="<th>";
        $tabla.="<tr>";
        $tabla.="<td>"."Equipo"."</td>";
        $tabla.="<td>"."Marca"."</td>";
        $tabla.="<td>"."Garantia"."</td>";
        $tabla.="</tr>";
        $tabla.="</th>";

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
        {
            $tabla.="<tr>";
            $tabla.="<td>".$row['equipo']."</td>";
            $tabla.="<td>".$row['marca']."</td>";
            $tabla.="<td>".$row['garantia']."</td>";
            $tabla.="</tr>";
        }
        $tabla.="</table>";

        echo $tabla;
    }
    consultar();
?>