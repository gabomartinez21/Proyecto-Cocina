<?php 
	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
	}
	if(isset($_POST['usuario'])){
		$usuario = $_POST['usuario'];
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	if(isset($_POST['contraseña'])){
		$clave = $_POST['contraseña']; 
	}
	
	try {
		require_once('includes/funciones/bd_conexion.php');
		if ($nombre != '' && $usuario != '' && $email != '' && $clave != '') {
			$sql = "INSERT INTO `registro` (`id_usuario`, `nombre`, `usuario`, `email`, `clave`)";
			$sql .= "VALUES (NULL, '$nombre', '$usuario','$email', '$clave'); ";
		}else{
			$sql = "NULL";
		}
		

		$resultado = $conn ->query($sql);
	} catch (Exception $e) {
		$error = $e->getMessage();
	}
?>


<?php include_once('includes/templates/header.php') ?>


    <div class="contenido">
      <div class="respuesta-registro">
		<?php 
			if ($resultado && ($nombre != '' && $usuario != '' && $email != '' && $clave != '')) {?>
				<h4><i class="fas fa-check-circle"></i></h4>
				<a href="index.php" class="boton">Finalizar</a>
				<p>¡Se registró con exito!</p>
		<?php }else{?>
			<h4><i class="fas fa-times-circle"></i></h4>
			<a href="registrar.php" class="boton">Volver</a>
			<p>¡No se registro con exito!</p>
		<?php	
		} ?>

		
      </div>
    </div>











<?php include_once('includes/templates/footer.php') ?>
