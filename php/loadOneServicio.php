<?php
header('Content-Type: application/json'); //Defines el archivo para que devuelva una variable tipo jason
require_once('conexion.php'); //conexion a la base de datos 

if(isset($_POST['IdServicio'])){ //si la variable IdServicio esta declarada hara la funcion 
    $id = $_POST['IdServicio']; //Se define la variable traida desde la funcion(modal) como id
    $SQLquery = "select * from servicios where idServicio = ".$id; //Consulta a la BD para un servicio en especifico
    $result = mysqli_query($con, $SQLquery); //Ejecutar la consulta
    $servicio = array();
    $servicio = mysqli_fetch_all($result);//se asigna a la variable servicio el servicio traido de la bd 
    
    echo json_encode($servicio);//se imprime 
}else{
    echo json_encode("No existe la variable IdServicio");
}