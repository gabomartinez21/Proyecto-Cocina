<?php include_once('includes/templates/header.php') ?>


		<?php
			try{
				require_once('includes/funciones/bd_conexion.php');
				$sql = "SELECT * FROM `chefs` ";
				$sql.="ORDER BY `id_chef`";
				$resultado = $conn->query($sql);
			}catch(Exception $e){
				$error = $e->getMessage();
			}

		?>

<div class="contenido">
	
	<?php while($estructuras = $resultado->fetch_all(MYSQLI_ASSOC)){ ?>
		<!-- <pre>
			<?php //var_dump($estructuras); ?>
		</pre> -->
		
		<?php foreach($estructuras as $estructura): ?>
			<div class="cont_chef clearfix">
				<img src="img/chefs/mini/<?php echo $estructura['url_imagen']; ?>" alt="">
				<p class="nom_chef"><?php echo utf8_encode($estructura['nombre_chef']) . " ". utf8_encode($estructura['apellido_chef']);?></p>
				<p><i>"Accusamus, unde officiis quod. Sed sequi repellat et non esse, a quo, eius, expedita atque repellendus, incidunt. Aliquam amet ex maiores et."</i></p>	
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sit consequuntur ipsa fugiat, itaque odit veniam asperiores accusamus debitis distinctio hic sed placeat exercitationem illum necessitatibus eos nostrum amet accusantium!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sit consequuntur ipsa fugiat, itaque odit veniam asperiores accusamus debitis distinctio hic sed placeat exercitationem illum necessitatibus eos nostrum amet accusantium!</p>

			</div>


		<?php endforeach ?>

<?php } ?>
</div>











<?php include_once('includes/templates/footer.php') ?>