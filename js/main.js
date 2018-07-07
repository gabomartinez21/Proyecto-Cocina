(function(){
     'use strict';
     
     document.addEventListener('DOMContentLoaded',function(){
          
            if(document.getElementById('calcular')){
              // variables para resumen
              //Cursos
               var curso1 = document.getElementById('curso_01');
               var curso2 = document.getElementById('curso_02');
               var curso3 = document.getElementById('curso_03');
               var curso4 = document.getElementById('curso_04');
               var curso5 = document.getElementById('curso_05');
               var curso6 = document.getElementById('curso_06');
               var curso7 = document.getElementById('curso_07');

               //Planes
               var planOro = document.getElementById('planOro');
               var planPlata = document.getElementById('planPlata');
               var planBronce = document.getElementById('planBronce');

               var cursos = document.getElementById('seleccionar').getElementsByTagName('input');
               // console.log(cursos[1].parentNode.childNodes[5].textContent);
               var planes = document.getElementById('seleccionarPlan').getElementsByTagName('input');

               planes[0].addEventListener('click',checkealo);
               planes[1].addEventListener('click',checkealo);
               planes[2].addEventListener('click',checkealo);

               function checkealo(){
                  var deschekear=0;
                  if(this.checked==false){
                    deschekear++;
                  }
                for(var i=0; i< planes.length; i++){
                  planes[i].checked = false;
                }
                if(deschekear<1){
                  this.checked=true;
                }else{
                  this.checked=false;
                }
                
                console.log(this.checked);
                if(this.checked){
                  for(var i=0; i < cursos.length; i++){
                    cursos[i].checked = false;
                    cursos[i].disabled=true;
                  }
                }else{
                  console.log(this.checked);
                  this.checked=false;
                  for(var i=0; i < cursos.length; i++){
                    cursos[i].disabled = false;
                  }
                }
               }

                var seleccion = document.getElementById('resumen');
                var suma = document.getElementById('sumaTotal');
                var calcular = document.getElementById('calcular') ;
                var lista = document.createElement('UL');
                    calcular.addEventListener('click',calcularCursos);

                    function calcularCursos(event){
                      event.preventDefault();
                      $(lista).slideUp(50);
                      $(suma).slideUp(50);
                      while(lista.firstChild){
                        lista.removeChild(lista.firstChild);
                      }
                      var sumaTotal=0;
                      var cocina=0,
                      panaderia=0,
                      cocteleria=0,
                      barismo=0,
                      arte=0,
                      reposteria=0,
                      servicio=0,
                      oro=0,
                      plata=0,
                      bronce=0;
                      
                      var cursosElegidos=[cocina,panaderia,cocteleria,barismo,arte,reposteria,servicio];
                      var nombreCurso = ['Cocina','Panaderia','Cocteleria','Barismo','Arte en la Cocina','Reposteria','Servicio de Comedor']
                      
                      var planesElegidos=[oro,plata,bronce];
                      var nombrePlanes = ['Plan Oro',' Plan Plata','Plan Bronce']
                      
                      //Creando elementos
                      
                    
                    
                    var titulos = document.getElementById('seleccionar').getElementsByTagName('label');
                    
                    if((planes[0].checked) || (planes[1].checked) || (planes[2].checked)){
                      
                          if(planes[0].checked){
                            var cursoSeleccionado = document.createElement('LI');
                            var texto=document.createTextNode(nombrePlanes[0]);
                            cursoSeleccionado.appendChild(texto);
                            lista.appendChild(cursoSeleccionado);
                            planesElegidos[i]++;
                          }else if(planes[1].checked){
                            var cursoSeleccionado = document.createElement('LI');
                            var texto=document.createTextNode(nombrePlanes[1]);
                            cursoSeleccionado.appendChild(texto);
                            lista.appendChild(cursoSeleccionado);
                            planesElegidos[i]++;
                          }else if(planes[2].checked){
                            var cursoSeleccionado = document.createElement('LI');
                            var texto=document.createTextNode(nombrePlanes[2]);
                            cursoSeleccionado.appendChild(texto);
                            lista.appendChild(cursoSeleccionado);
                            planesElegidos[i]++;
                          }
                      
                    }else{
                      for (var i = 0; i < cursos.length; i++) {
                        if(cursos[i].checked){
                          var cursoSeleccionado = document.createElement('LI');
                          var texto=document.createTextNode(nombreCurso[i]);
                          cursoSeleccionado.appendChild(texto);
                          lista.appendChild(cursoSeleccionado);
                          cursosElegidos[i]++;
                        }
                     }
                    }
                    
                    

                    //Actulizando los cursos
                    cocina=cursosElegidos[0];
                    panaderia=cursosElegidos[1];
                    cocteleria=cursosElegidos[2];
                    barismo=cursosElegidos[3];
                    arte=cursosElegidos[4];
                    reposteria=cursosElegidos[5];
                    servicio=cursosElegidos[6];
                    oro=planesElegidos[0];
                    plata=planesElegidos[1];
                    bronce=planesElegidos[2];

                    //Colocando los cursos seleccionados
                    lista.setAttribute('class', "aparicion");
                    seleccion.appendChild(lista);
                    $(lista).slideDown(500);
                    $(seleccion).slideDown(200);

                    //Realizando la suma final
                    if(planes[0].checked){
                      sumaTotal = 40*12;
                    }else if(planes[1].checked){
                      sumaTotal = 45*7;
                    }else if(planes[2].checked){
                      sumaTotal = 4*55;
                    }else{
                      sumaTotal= cocina*125 + panaderia*120 + cocteleria*70 + barismo*75 +arte*60 + reposteria*60 + servicio *35;
                    }
                    suma.innerHTML= "$ "+sumaTotal.toFixed(2);
                    $(suma).slideDown();
                  }
            }           

          //Height de cajas
          if(document.getElementById('planes')){
              var altura = $('div#planes').height();
              console.log(altura)

              $('div#registro').css({'height':altura+"px!important"});
              $('div#categorias-cursos').css({'height':altura+"px!important"});

              $('div#registro').css({'min-height':altura+"px"});
              $('div#categorias-cursos').css({'min-height':altura+"px"});
          }



          //Verificar email

          if(document.getElementById('email')){
              //Validar campos
              var nombre= document.getElementById('nombre');
              var ususario = document.getElementById('usuario');
              var email = document.getElementById('email');
              var error1 = document.getElementById('error1');
              var error2 = document.getElementById('error2');
              var error3 = document.getElementById('error3');
              var error = document.getElementById('error');
              var nombre = document.getElementById('nombre');
              var usuario = document.getElementById('usuario');
              var password = document.getElementById('password');
              var email = document.getElementById('email');

              //document.getElementById('nombre').focus();

              var btnRegistro = document.getElementById('botonRegistro')

              btnRegistro.disabled=true;

              nombre.addEventListener('blur', validarCampos);
              usuario.addEventListener('blur', validarCampos);
              email.addEventListener('blur', validarEmail);
              password.addEventListener('blur', validarClave);
              $(btnRegistro).onmouseover(validarBoton);

              function validarCampos(){
                if(this.value == ''){
                  error.style.display = "block";
                  error.style.color = "red";
                  error1.innerHTML = "Este campo no puede estar vacio.";
                  this.style.border = "1px solid red";
                }else{
                  error.style.display='none';
                  this.style.border='none';
                }
              }

              function validarEmail(){
                if(this.value.indexOf("@")>-1){
                  error.style.display='none';
                  this.style.border='none';
                }else{
                  error.style.display = "block";
                  error.style.color = "red";
                  error2.innerHTML = "No es un correo valido.";
                  this.style.border = "1px solid red";
                }
              }
              function validarClave(){
                if (this.value.length >= 16 || this.value.length < 4) {
                  error.style.display = "block";
                  error.style.color = "red";
                  error3.innerHTML = "La clave debe ser mayor a 4 caracteres y menor a 16.";
                  this.style.border = "1px solid red"
                }else{
                  error.style.display='none';
                  this.style.border='none';
                }
              }
              function validarBoton(){
                if(!(password.value.length >= 16 || password.value.length < 4) && (email.value.indexOf("@")>-1) && !(nombre.value == '') && !(usuario.value == '') ){
                  btnRegistro.disabled=false;
                }else{
                  btnRegistro.disabled=true;
                }
              }
          }

     });
})();

$(function(){

  //Menu movil

  $('.menu-movil').on('click',function() {
       $('.menu-principal').slideToggle();
  });

  //validar color de checks

  var check = $('.fa-check-circle');
  var negado = $('.fa-times-circle');
  

  //Menu secundario
  $('div.ocultar').hide();
  $('.programas a:first').addClass('activo');
  var cajon = $('.programas a:first').attr('href');
  $(cajon).show();

  $('.programas a').on('click',function(){
    $('.programas a').removeClass('activo');
    $('.info').hide();
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1500);
    return false;
  })


  //Mostrando las recetas de la categoria seleccionada
  $('ul.ocultar').hide();
  $('div.selec_cat ul li > ul').hide();

  $('div.selec_cat ul li a.menu_cat').on('click',function(){
    $('div.selec_cat ul li a.menu_cat').removeClass('seleccionado');
    $('div.selec_cat ul li > ul').hide();
    $(this).addClass('seleccionado');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);
    return false;
  })

  //Mostrando las recetas

  $('div.receta').hide();

  $('div.selec_cat ul li ul li a').on('click',function(){
    $('div.selec_cat ul li ul li a').removeClass('seleccionado');
    $('div.recetas div.receta').hide();
    $(this).addClass('seleccionado');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);
    return false;

  })


 
  if(document.getElementsByClassName('panel')){
     //Panel estatico con la pagina

    var pantalla = $(window).height();
    var panelAltura= $('.panel').innerHeight();
    // console.log(pantalla);
    // console.log(panelAltura);
    var anchura = $(window).width();
    console.log(anchura);
    
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        // console.log(scroll);
        var tama=pantalla*0.7;
        if(scroll > (tama)){
          $('.panel').addClass('fixed');
          $('body').css({'margin-top':(tama-panelAltura)+"px"});
        }else{
          $('.panel').removeClass('fixed');
          $('body').css({'margin-top':"0px"})
        }
      })
      var panelMovil = $('#panel_movil').height();
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        // console.log(scroll);
        var tama=pantalla*0.7;
        if(scroll > (pantalla)){
          $('#panel_movil').addClass('fixed');
          $('body').css({'margin-top':panelMovil+"px"});
        }else{
          $('#panel_novil').removeClass('fixed');
          $('body').css({'margin-top':"0px"})
        }
      })

      $('div#panel_movil').on('click',function(){
        $('aside.panel').css({'width':"30%",'margin-top':panelMovil*2+"px"});
        $('aside.panel ul li').css({'text-align':'center','margin-left':"-15px"});
        $('aside.panel').slideToggle(1000);
      })
    
  }
});
