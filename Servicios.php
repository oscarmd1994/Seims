<?php
require_once('php/conexion.php'); //mandas a llamar la BD
$SQLquery = "select * from servicios"; //Consulta total de la tabla de servicios de la BD
$result = mysqli_query($con, $SQLquery); //Ejecutar la consulta
$servicios = array(); //declaramos una variable de tipo array, guarda la info de la BD 
$descripcion = ""; //se declara una variable tipo string(cadena de caracteres de todo)
?>

  <div class='h1 col-md-12 text-center'> <!--h1 es para tamaño de letra-->
    Servicios que ofrecemos <i class="fas fa-hand-holding align-text-top"></i>
  </div>

  <div class='dropdown-divider mb-5'></div> <!--linea que esta abajo del titulo--> 
  <div class='row d-flex justify-content-around col-md-12'> <!--estilo de las cards-->

<?php
while ($servicios = mysqli_fetch_assoc($result)) { //Se utiliza un ciclo while y la variable servicios guarda la info que viene de la BD por filas
      //mientras servicios jale una fila seguira el ciclo, cuando esto ya no suceda se cierra el ciclo
    $descripcion = $servicios['Descripcion'].""; //La descripcion es igual a toda la descripcion del servicio
    $descripcion =  substr($descripcion,0,100); //se corta la descripciona a 100 letras contando espacios
    ?>
        <div class="card col-md-3 m-1 "> <!--estilos de la card -->
            <div class="view overlay pt-2"> <!--estilos de la card -->

              <img class="card-img-top" src="<?="img/".$servicios['Url']?>" alt="Card image cap"> <!-- jalamos los datos de la BD -->

            </div>
            <div class="card-body"> <!-- es el cuerpo de la card  -->
                <h4 class="card-title text-justify"><?=$servicios['Nombre'] ?></h4> <!--Aqui son los titulos de los nombres de los servicios y su tamaño de letra -->
                <p class="card-text text-justify"><?=$descripcion?>...</p> <!-- mandas a imprimir a pantalla -->
                
                <div class="btn oval form-control btn-danger btn-sm btnCotizar" >Cotizar<i class="fas fas fa-dollar-sign pl-1"></i></div> <!-- boton para direccionamiento a cotizar -->

              <div class="btn oval form-control btn-unique btn-sm btnMasInfo" onclick="mostrarModal( <?=$servicios['idServicio']?> );">Mas Informacion</div> <!--boton para mostrar mas info se define la forma y el color del boton, se manda a imprimir lo que trae la variable servicios en la modal y se basa  -->

            </div>
        </div>
    <?php
}
?>
  </div>
<!--
  Modal para mostrar los servicios
-->
<!-- Modal todo este codigo es la plantilla modal  -->   
<div class="modal fade" id="ExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">

    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title text-justify" id="ModalTitle"></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="modal-body">
              <p class="text-justify" id="ModalDescription"></p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
    </div>
</div>
<!--
  TERMINA MODAL 
-->


<script type="text/javascript" src="js/main/servicios.js"></script> <!--Carga la libreria js-->

<script>
  function mostrarModal (IdServicio) {  //Defines el nombre del modal y la variable que va a recibir 
  
        var datos = { "IdServicio" : IdServicio }; //Se define en una estructura tipo json primero el nombre de la variable y despues su valor
        console.log(datos); //impresion en consola
        $.ajax({ //llama el archivo de abajo 
            url:"php/loadOneServicio.php",
            type:"post", //se define el tipo de envio, el encriptamiento tipo post
            dataType: "json", //nos dice que el archivo que mandamos a traer es tipo json
            data: datos, //metes los datos que envias al archivo
            success: function (res) { //la accion que quiero que haga despues de que se complete la peticion y el loadOneServicio

              console.log(res);//impresion a consola
              document.getElementById("ModalTitle").innerHTML = res[0][1]; //manda a traer el titulo del servicio
              document.getElementById("ModalDescription").innerHTML = res[0][2]; //manda a imprimir la descripcion y se coloca en la modal
              $("#ExampleModal").modal("show"); //Hago que se muestre el modal 
            },
            error: function(ex){  //te manda una funcion que imprime si existe un error y lo manda a console
              console.log(ex);
            }
            
        });
        
      }
</script>