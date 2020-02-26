<?php
session_start();
require_once('conexion.php');
$SQLquery = "select * from servicios";
$result = mysqli_query($con, $SQLquery);
$cards = "";
$servicios = array();
  
while ($servicios = mysqli_fetch_assoc($result)) {
    
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
$cards .=                "<p class='card-text'>".$servicios["Descripcion"]."</p>";
$cards .=            "</div>";
$cards .=        "</div>";
$cards .=    "</div>";

}
echo $cards;