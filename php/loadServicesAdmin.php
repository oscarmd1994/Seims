<?php

require_once ("conexion.php");

$sql = "SELECT * FROM servicios";

$rs=  mysqli_query($con,$sql);

$tabla="";
$i=1;
while($servicio =  mysqli_fetch_array($rs)){
    $acciones="<button idservicio='$servicio[0]' type='button' class='btn btn-warning btn-sm btnEditarUsuario' data-toggle='modal' data-target='#editarUsuario'> <span class=' fas fa-edit '></span></button>";
    $acciones.="<button idusuario='$servicio[0]' type='button' class='btn btn-danger  btn-sm btnEliminarUsuario' > <span class=' fas fa-trash '></span></button>";
    
    $tabla .= "<tr>";
    $tabla .= "<td>$servicio[0]</td>";
    $tabla .= "<td>$servicio[1]</td>";
    $tabla .= "<td>$servicio[2]</td>";
    $tabla .= "<td>$acciones</td>";
    $tabla .= "</tr>"; 
    $i++;
}
$tabla = substr($tabla, 0,  strlen($tabla)-1);
echo $tabla;  

?>
