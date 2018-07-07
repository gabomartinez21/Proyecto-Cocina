<?php include_once('includes/templates/header.php') ?>

  <section class="contenido seccion-registro">
    <div class="registrar">
      <form class="login clearfix" action="usuario.php" method="post">
        <label for="nombre">Nombre
        <input type="text" placeholder="Nombre" name="nombre" id="nombre"></label>

        <label for="usuario">Usuario
        <input type="text" name="usuario" placeholder="Usuario" id="usuario"></label>

        <label for="email">Email
        <input type="email" name="email" placeholder="email@login.com" id="email"></label>
        <div class="error"></div>

        <label for="contraseña">Contraseña
        <input type="password" name="contraseña" placeholder="Contraseña" id="password"></label>
        <div class="error"></div>

        <input type="submit" value="Registrar" id="botonRegistro" onclick="this.disabled=true; this.value='Enviando...'; this.form.submit();">
        <div id="error">
          <p id="error1"></p>
          <p id="error2"></p>
          <p id="error3"></p>
        </div>
      </form>

    </div>
  </section>




<?php include_once('includes/templates/footer.php') ?>
