<?php include_once('includes/templates/header.php') ?>



<div class="contenedor">
	
	<div class="recetario clearfix">
			<aside id="cat_recetas">

				<div class="selec_cat">
					<h3>Categorias</h3>
					<?php
						try{
							require_once('includes/funciones/bd_conexion.php');
							$sql = "SELECT * FROM `recetas` ";
							$sql.= "INNER JOIN `cat_receta` ";
							$sql.= "ON recetas.id_categoria=cat_receta.id_categoria ";
							// $sql="SELECT `id_receta`, `nombre_receta`";
							// $sql.="FROM `recetas` ";
							// $sql.="INNER JOIN `cat_receta` ";
							// $sql.="ON recetas.id_categoria=cat_receta.id_categoria";
							 $sql.="ORDER BY `id_receta`";
							$resultado = $conn->query($sql);
						}catch(Exception $e){
							$error = $e->getMessage();
						}

					?>
					
					<?php while($estructuras = $resultado->fetch_all(MYSQLI_ASSOC)/*fetch_assoc()*/){ ?>
					

						 <!-- <pre>
							<?php //var_dump($estructuras); ?>
						 </pre>  -->

						 <?php
						 	$recetas=array();
						 	$categorias=array();
						 	foreach ($estructuras as $estructura) {
						 		$recetas[]= $estructura['nombre_receta'];
						 		$categorias[] = $estructura['nombre_categoria'];
						 	}
						 ?>

						 <?php $categorias = array_values(array_unique($categorias));?>

						<!--  <pre>
						 	<?php //var_dump($recetas);
						 	//var_dump($categorias); ?>
						 </pre> -->

					<?php $contador=0; ?>
						<ul>
						<?php for($i=0 ; $i < count($categorias); $i++): ?>
							<li>
								<a href="#<?php echo $categorias[$i]; ?>" class="menu_cat"><?php echo utf8_encode($categorias[$i]); ?> </a>
								<ul id="<?php echo $categorias[$i]; ?>">
									<?php foreach ($estructuras as $estructura): ?>
										<?php if($estructura['nombre_categoria']==$categorias[$i]){ ?>
											<li><a href="#<?php echo $estructura['nombre_categoria'] . $estructura['id_receta']; ?>"><?php echo utf8_encode($estructura['nombre_receta']); ?></a></li>
										<?php } ?>
									<?php endforeach ?>
								</ul>
							</li>

						<?php endfor; ?>
						</ul>
					</div>
					
						<!-- <?php// foreach($estructuras as $estructura): ?>
							<?php// $categoria = $estructura['nombre_categoria'];?>
							<?php //if (($categoria == $categorias[$contador]) && ($contador < 9)): ?>
								<li><a href="#<?php// echo $categorias[$contador]; ?>"><?php// echo $estructura['nombre_categoria']; ?></a>
									<?php //$contador++; ?>
							<?php //endif; ?>
								<ul class="<?php //echo $categorias[$contador]; ?>">
									<li><a href="#<?php //echo $estructura['nombre_receta'] . $estructura['id_receta']; ?>"><?php //echo $estructura['nombre_receta']; ?></a></li>
								</ul>
								</li>
						<?php //endforeach; ?> -->
					
				
			</aside>
			<div class="recetas">
				<?php foreach($estructuras as $estructura): ?>
					<div class="receta" id="<?php echo $estructura['nombre_categoria'] . $estructura['id_receta']; ?>">
						<h2><?php echo utf8_encode($estructura['nombre_receta']); ?></h2>
						<img src="img/recetas/<?php echo $estructura['url_receta']?>" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus autem enim quisquam odio, deleniti, animi blanditiis, aspernatur ipsa assumenda ratione vel. Quod aliquid suscipit recusandae alias praesentium, quas, inventore vel.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus autem enim quisquam odio, deleniti, animi blanditiis, aspernatur ipsa assumenda ratione vel. Quod aliquid suscipit recusandae alias praesentium, quas, inventore vel.</p>
						<ul>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Aspernatur ipsa assumen</li>
							<li>Amet</li>
							<li>Aspernatur ipsa assumenda rati</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Dolor sit amet</li>
							<li>Aspernatur ipsa assumenda rat</li>
							<li>Lorem ipsum dolor sit amet</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus autem enim quisquam odio, deleniti, animi blanditiis, aspernatur ipsa assumenda ratione vel. Quod aliquid suscipit recusandae alias praesentium, quas, inventore vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque at saepe iure provident tempore repellendus minima ipsa. Perferendis, saepe, at. Voluptatem, ipsam, quis. Repellat ut harum neque eveniet, veniam totam!</p>
					</div>
				<?php endforeach; ?>
			</div>
			<?php } ?>

			<?php $conn->close(); ?>
		</div>	
</div>













<?php include_once('includes/templates/footer.php') ?>