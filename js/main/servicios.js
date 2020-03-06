$(function(){
    /*$(".btnMasInfo").on("click", function(){
          alert("hola crayola");
          var id = document.getElementById("btnMasInfo").value;
          console.log(id);
          $("#ExampleModal").modal("show");
      });*/
      $(".btnCotizar").on("click", function(){//esto es el direccionamiento en el modulo de serviios el boton de cotizar para direccionar al modulo de cotizaciones
          console.log("click a cotizar");   //Manda mensaje a consola cuando entra a la función
            $("#bodymenu").load("cotizaciones.php");
      });
       
  });

    


