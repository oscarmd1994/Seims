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