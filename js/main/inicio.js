$(function(){
    //$(".owl-carousel").load("php/loadInicio.php");
    $.ajax({
        url: "php/loadInicio.php",
        type: "POST",
        success: (data) => {
            
            $(".owl-carousel").html(data);
            
        }

    });
    setTimeout(() => {
        $(".owl-carousel").owlCarousel({
            loop:true,
            margin:20,
            autoplay:true,
            autoplayTimeout:4000,
            mouseDrag:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
    }, 500);

    $(".card").on("click", function(){
        $("#bodymenu").load("Servicios.php");
    });
    $("#btn-saber-mas").on("click", function(){
        $("#bodymenu").load("Acercade.php");
    });
    
});