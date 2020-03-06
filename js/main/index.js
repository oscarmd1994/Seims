$(function () {

    $("#bodymenu").load("Inicio.php");//el inicio.php se carga dentro del cuerpo de la page master po default sin una funcion que necesite un click 
    // Funciones para mostrar el menu
    //Evento click para mostrar servicios(direcionamiento a modulos dentro de la barra menu)
    $("#link_servicios").on("click", function(){
        $("#bodymenu").load("Servicios.php");
    });
    $("#link_inicio").on("click", function(){
        $("#bodymenu").load("Inicio.php");
    });
    $("#link_acercade").on("click", function(){
        $("#bodymenu").load("Acercade.php");
    });


    $("#link_cotizaciones").on("click", function(){
        $("#bodymenu").load("cotizaciones.php");
    });


    ///////// fin funciones menu


    

   
  });