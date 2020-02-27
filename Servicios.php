<?php
session_start();
require_once('php/conexion.php');
$SQLquery = "select * from servicios";
$result = mysqli_query($con, $SQLquery);
$cards = "";
$servicios = array();
?>
  <div class='h1 col-md-12 text-center'>
    Servicios que ofrecemos <i class="fas fa-hand-holding align-text-top"></i>
  </div>
  <div class='dropdown-divider mb-5'></div>
  <div class='row d-flex justify-content-around col-md-12'>
<?php
while ($servicios = mysqli_fetch_assoc($result)) {
    ?>
        
        <div class="card col-md-3 m-1 ">
            <div class="view overlay pt-2">
              <img class="card-img-top" src="<?="img/".$servicios["Url"]?>"
                alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title"><?=$servicios['Nombre']?></h4>
              <p class="card-text"><?=$servicios['Descripcion']?></p>
              <a href="#" class="btn btn-unique">Realizar cotización</a>
            </div>
        </div>
        
    <?php
}


?>
</div>
<!--
  Modal para mostrar los servicios
-->
<div class="modal fade" id="modalMuestraServicio " data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-labels" id="staticBackdropLabel">Busca el empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="search-box col-md-12">
                        <label for="inputSearchEmpleados" class="font-labels">Escribe el nombre del empleado que buscas</label>
                        <input type="text" name="inputSearchEmpleados" id="inputSearchEmpleados" placeholder="Escriba el nombre del empleado" class=" form-control" autocomplete="off" />
                        <div id="resultSearchEmpleados" name="resultSearchEmpleados" class="list-group"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-3 pb-3">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>