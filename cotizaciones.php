
    
    <section class="form_usu">
        <section class="cantact_info">
            <section class="info_title">            
            <img class="foto" src="img/logo.png" >          
                <h2>Servicios Electricos<br>Industriales</h2>
                <h2>Macias</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope animated swing infinite"></span>seims.marketing@gmail.com</p>
                <p><span class="fa fa-mobile animated swing infinite"></span> Oficina: 7226472085</p>
            </section>
        </section>

        <form action="enviarmail.php" method="post" class="form_control" id="formCoti">
            <h2>Envia una Cotización</h2>
            <div class="user_info">
                <label for="nombre">Ingresa tu Nombre *</label>
                <input type="text" name="nombre" required>

                <label for="apellido">Ingresa tus Apellidos *</label>
                <input type="text" name="apellido" required>

                <label for="phone">Telefono / Celular</label>
                <input type="text" name="telefono" required>

                <label for="email">Correo electronico *</label>
                <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com" required>

                <label for="mensaje">Mensaje *</label>
                <textarea name="mensaje"></textarea>
                
                <button type="submit" id="btnSend" class="btn-danger">Enviar Mensaje &nbsp; 
                <li  class="fab fa-telegram-plane fa-lg"></li>
                </button>
            </div>
        </form>
    </section>
