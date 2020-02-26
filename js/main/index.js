$(function () {
    $("#bodymenu").load("Inicio.php");
    // Funciones para mostrar el menu
    //Evento click para mostrar servicios(direcionamiento a modulos dentro de la barra menu)
    $("#link_servicios").on("click", function(){
        $("#bodymenu").load("Servicios.php");
    });
    $("#link_inicio").on("click", function(){
        $("#bodymenu").load("Inicio.php");
    });

    ///////// fin funciones menu


    

   
  });