<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ADMIN SEIMS</title>
  <link rel="shortcut icon" href="../img/logiico.ico" />
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../css/mdb.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body>
 
  
    <div class="container">

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Registro de usuarios
      </button>
      <hr>
      <table id="tabServices" class="table table-services table-bordered table-striped table-hover table-responsive table-sm" width="100%">   
        <thead>
         <tr>
           <th>Id</th>
           <th>Nombre Servicio</th>
           <th>Descripción</th> 
           <th>Acciones</th> 
         </tr> 
        </thead>
        <tbody>
        </tbody>
       </table>    
    <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Registro de usuarios</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="frmUsu">
                      
                      <div class="form-group">
                        <label for="exampleInputUsuario">Usuario</label>
                        <input type="text" class="form-control" id="exampleInputUsuario" name="usu" placeholder="Proporciona el Usuario" required>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="ema" aria-describedby="emailHelp" placeholder="Proporciona el email" required>
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con alguien más.</small>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pas"  placeholder="Proporciona el Password" required>
                      </div>                

                  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <input type="submit"  class="btn btn-primary" value="Guardar">
                    </div>
                    </form>  
                  </div>
                </div>
              </div>
      
        </div>

    
    
     <!--=====================================
  Editar usuario
  ======================================-->
<div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="editarUsuario" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modificar usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmNuevoUsu">
                <div class="form-group">
                  <label for="nuevoInputUsuario">Usuario</label>
                  <input type="text" class="form-control" id="nuevoInputUsuario" name="nuevousu" readonly>
                </div> 
            
                <div class="form-group">
                  <label for="nuevoInputEmail">Correo Electrónico</label>
                  <input type="email" class="form-control" id="nuevoInputEmail" name="nuevoema" aria-describedby="emailHelp" required>
                  <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con alguien más.</small>
                </div>
                               

                <div class="form-group">
                  <label for="nuevoInputPassword">Contraseña</label>
                  <input type="password" class="form-control" id="nuevoInputPassword" name="nuevopas" required>
                </div>                

             
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <input type="submit"  class="btn btn-primary" value="Actualizar">
              </div>
              </form>  
            </div>
          </div>
        </div>
 
   </div>
    
  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/dataTables.bootstrap.min.js"></script>  
  <script src="../js/jquery.dataTables.min.js"></script>
  
  <script src="../js/admin/admin_servicios.js"></script>
</div>
</body>
</html>
