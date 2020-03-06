<?php


//modulo del slider 


require_once('conexion.php'); //conexion a la BD
$SQLquery = "select * from servicios"; //consulta general 

$result = mysqli_query($con, $SQLquery);//aqui se ejecuta la consulta, la variable con lleva la conexion, sqlquery lleva la consulta
$cards = "";
$servicios = array(); 
  
while ($servicios = mysqli_fetch_assoc($result)) { //lo que trae la variable result del query que se ejecuta 
    
    $cards .=    "<div class='item '>";
    $cards .=        "<div class='card'>";
    $cards .=            "<div class='view overlay text-center'>";
    $cards .=                "<img class='card-img-top' src='img/".$servicios["Url"]."'alt='Card image cap'>";
    $cards .=                "<a href='#!'>";
    $cards .=                    "<div class='mask rgba-purple-slight'></div>";
    $cards .=                "</a>";
    $cards .=            "</div>";
    $cards .=            "<div class='card-body'>";
    $cards .=                "<h4 class='card-title'>".$servicios["Nombre"]."</h4>";
    $cards .=            "</div>";
    $cards .=        "</div>";
    $cards .=    "</div>";

}
echo $cards; //Manda a imprimir todas las cards