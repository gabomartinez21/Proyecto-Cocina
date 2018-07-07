<?php include_once('includes/templates/header.php'); ?>

        <div class="contenido">
             <div class="seccion-cursos clearfix">
                  <div class="sec-curso">
                       <div class="descripcion-curso" id="seleccion">
                              <h3>Cocina</h3>
                              <img src="img/mini-curso/blog.jpg" alt="">

                              <div class="detalles">
                                   <p>Precio: 125$</p>
                                   <p>Duración: 3 semanas</p>
                              </div>
                       </div>

                  </div>
                  <div class="sec-curso">
                         <div class="descripcion-curso" id="seleccion">
                              <h3>Panaderia</h3>
                              <img src="img/mini-curso/recetario2.jpg" alt="">
                              <div class="detalles">
                                   <p>Precio: 120$</p>
                                   <p>Duración: 4 semanas</p>
                              </div>
                         </div>

               </div>
               <div class="sec-curso">
                    <div class="descripcion-curso" id="seleccion">
                         <h3>Cocteleria</h3>
                         <img src="img/mini-curso/blog.jpg" alt="">
                         <div class="detalles">
                              <p>Precio: 70$</p>
                              <p>Duración: 4 semanas</p>
                         </div>

                    </div>

               </div>
               <div class="sec-curso">
                     <div class="descripcion-curso" id="seleccion">
                         <h3>Barismo</h3>
                         <img src="img/mini-curso/cafe.jpg" alt="">

                         <div class="detalles">
                              <p>Precio: 75$</p>
                              <p>Duración: 1 semana</p>
                         </div>

                    </div>

               </div>
               <div class="sec-curso">
                    <div class="descripcion-curso" id="seleccion">
                         <h3>Arte en la cocina</h3>
                         <img src="img/mini-curso/dinner3.jpg" alt="">

                         <div class="detalles">
                              <p>Precio: 60$</p>
                              <p>Duración: 2 semanas</p>
                         </div>

                    </div>

               </div>
               <div class="sec-curso">
                    <div class="descripcion-curso" id="seleccion">
                         <h3>Reposteria</h3>
                         <img src="img/mini-curso/postre2.jpg" alt="">

                         <div class="detalles">
                              <p>Precio: 60$</p>
                              <p>Duración: 3 semanas</p>
                         </div>

                     </div>

               </div>
               <div class="sec-curso">
                    <div class="descripcion-curso">
                         <h3>Servicio de Comedor</h3>
                         <img src="img/mini-curso/blog3.jpg" alt="">

                         <div class="detalles">
                              <p>Precio: 35$</p>
                              <p>Duración: 2 semanas</p>
                         </div>

                     </div>

               </div>
             </div>
        </div>

        <div class="seleccion-cursos">
             <div class="contenido clearfix">
                  <h2>Carrito</h2>
                  <div class="calculo">
                    <div class="seleccion clearfix">
                         <div id="seleccionar" class="clearfix">
                         <p>Seleccione un curso:</p>
                         
                         <input type="checkbox" value="curso1" name="compra[]" id="curso_01">
                         <label for="curso_01">Cocina</label>
                         <input type="checkbox" value="curso2" name="compra[]" id="curso_02">
                         <label for="curso_02">Panaderia</label>
                         <input type="checkbox" value="curso3" name="compra[]" id="curso_03">
                         <label for="curso_03">Cocteleria</label>
                         <input type="checkbox" value="curso4" name="compra[]" id="curso_04">
                         <label for="curso_04">Barismo</label>
                         <input type="checkbox" value="curso5" name="compra[]" id="curso_05">
                         <label for="curso_05">Arte en la Cocina</label>
                         <input type="checkbox" value="curso6" name="compra[]" id="curso_06">
                         <label for="curso_06">Reposteria</label>
                         <input type="checkbox" value="curso7" name="compra[]" id="curso_07">
                         <label for="curso_07">Servicio de Comedor</label>
                       </div>
                       <div id="seleccionarPlan" class="clearfix">
                            <p>Seleccione un plan:</p>
                            <input type="checkbox" name="plan[]" value="planOro" id="planOro" class="plan">
                            <label for="planOro">Plan Oro</label>
                            <input type="checkbox" name="plan[]" value="planPlata" id="planPlata" class="plan">
                            <label for="planPlata">Plan Plata</label>
                            <input type="checkbox" name="plan[]" value="planBronce" id="planBronce" class="plan">
                            <label for="planBronce">Plan Bronce</label>
                       </div>

                       <img src="img/mini-curso/dinner2.jpg" alt="">
                    </div>
                      
                       <div class="muestraResultado clearfix">
                           <div id="resumen">
                           
                           </div>
                           <div class="finalCursos">
                            <h3>TOTAL</h3>
                           <div id="sumaTotal">
                           </div>
                           <input type="button" class="boton" name="submit" id="calcular" value="Calcular">
                          </div>
                       </div>
                       
                      <input type="submit" id="btnCompra" name="submit" value="Pagar" class="boton">  
                  </div>

             </div>
        </div>

<?php include_once('includes/templates/footer.php'); ?>
