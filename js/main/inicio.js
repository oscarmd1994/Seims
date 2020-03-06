$(function(){
    //$(".owl-carousel").load("php/loadInicio.php");
    $.ajax({
        url: "php/loadInicio.php",
        type: "POST",
        success: (data) => {
            $(".owl-carousel").html(data);   //se carga el modulo de loadInicio, manda a traer el cuerpo slider con toda lo info del slider
        }
    });




    setTimeout(() => {
        $(".owl-carousel").owlCarousel({
            loop:true, //que se recora solo
            margin:20, //separacion de los otros
            autoplay:true, //se inicia a recorrer solo
            autoplayTimeout:4000, //el tiempo en milisegundo en que se recorre
            mouseDrag:true, //se pueda deslizar con el mouse 
            responsive:{  // Diseño responsivo
                0:{
                    items:2 //se veran 2 servicios creo que tamaño celular
                },
                600:{
                    items:4 // se veran 4 servicios
                },
                1000:{
                    items:4 //lo mismo
                }
            }
        });
    }, 500); //

    
    $("#btnSaberMas").on("click", function(){ //boton que direcciona al modulo de acerca de nosotros dentro del inicio
        $("#link_acercade").click();//se hace click con codigo .-.
    });
    
});