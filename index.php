
<!doctype html>
<html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- enlaces a abootstrap con ajax-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="index.css">
     <link rel="icon" type="imagenes/png" href="images/favicon.png">
    <title>Portafolio</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="50">
      <!-- Header -->
      <header>
      <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">  
            <a class="navbar-brand" href="#">

                    <img src="images/logo.jpeg" alt="">
                    <strong class="logo">Ricardo Algarin</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#main">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="proyectos.html" target="blank">Los Proyectos</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#solicitar-presupuesto">Solicitar Presupuesto</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="dondeestamos.html" target="blank" >Donde Estamos</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link text-portaf" href="#" data-target="#modalCompra" data-toggle="modal">Contacto</a>
                                </li>
                               
                </ul>
                </div>  
         </div>
          </nav>
        </header>
<!-- /Header -->
<main id="main">
        <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/bandera.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/roques.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/angel.jpg" alt="Third slide">
                  </div>
                  <div class="overlay">
                      <div class="container">
                       <div class="row align-items-center">
                           <div class="col-md-6 offset-md-6 text-center text-md-justify">
                               <h1> <strong>Portafolio</strong></h1>
                               <h2 id="saludo" class="d-none d-md-block"> Hola! soy Ricardo Algarin Mendoza, Ingeniero en Sistemas, siempre en busca de aprender cada vez mas. <br> Bienvenido a mi Portafolio de proyectos, donde encontrarás mis últimos trabajos.
                               </h2>
                               
                           </div>
                       </div>
                      </div>
                  </div>
                </div>
              </div>
</main>

<!-- Seccion de noticias RSS -->
<section id="RSS" class="pt-2 pb-3">
<article class="project">
            <div class="project-details">
                <h3 class="project-tittle">Noticias del mundo Tecnológico</h3>
                <p class="project-description">En el cuadro a la derecha se encuentran las últimas noticias de la tecnología.
                </p>
            </div>
            <figure class="project-imageConteiner">    
            <script type="text/javascript"> 
// <!-- Configuracion de caracteristicas del RSS
rssfeed_url = new Array(); 
// llamada al archivo XML de la pagina donde proviene el RSS
rssfeed_url[0]="https://www.computerworld.com/index.rss";  
rssfeed_frame_width="300"; 
rssfeed_frame_height="500"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="4"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on";  
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#026fff"; 
rssfeed_title_color="black";
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="black"; 
rssfeed_item_bgcolor="#cfcece;"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="black"; 
rssfeed_item_description_link_color="black"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "7255da682e63332879743e3869d3c481"; 
</script> 
<!-- Llamada al convertidor RSS -->
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script>  
  
            </div>
        </div>
            </figure>
            
        </article>
               

</section>

<section id="projects" >
<div class="container">
 
<div class="row">
    <div class="col text-center text-uppercase">
      <br>
    <a href="proyectos.html" target="_blank"><h2>Portafolio Detallado</h2></a>
   
  </div>
    <br>
</div>
<section id="portafolio" class="portfolio">
    <article class="project">
        <div class="project-details">
            <h3 class="project-tittle">Control de Solicitudes</h3>
            <h6 class="project-course">Avior</h6>
            <p class="project-date"><small><strong>Fecha:</strong> 08/10/2018</small></p>
            <p class="project-url"><small><strong>Puedes verlo en: <a href="https://www.aviorair.com/" target="_blank"> </strong>www.aviorair.com</small></a></p>
            <p class="project-description">Este proyecto se trata de un programa de "ticketing" para optimizar el manejo y control de solicitudes del departamento de informatica de la empresa Avior Airlines.
            </p>
        </div>
       
        <figure class="project-imageConteiner">   
            <img class="project-image" src="images/avior.jpg" alt="proyecto curso avior" width="500">
            </a> 
        </figure>
        
    </article>
    <article class="project">
            <div class="project-details">
                <h3 class="project-tittle">Amazon Viewer</h3>
                <h6 class="project-course">Personal</h6>
                <p class="project-date"><small><strong>Fecha:</strong> 20/03/2019</small></p>
                <p class="project-url"><small><strong>Puedes verlo en: <a href="https://github.com/ricardoalgarin94" target="_blank"></strong>www.github.com</small></a></p>
                <p class="project-description">Este proyecto fue el resultado de el ejercicio final de el curso de Java SE de portaf, el cual se trata de un "Amazon Viewer", un programa que muestra informacion de series, libros, magazines. Contando con disintas opciones a escoger.
                </p>
            </div>
            <figure class="project-imageConteiner">    
                <img class="project-image" src="images/java.png" alt="proyecto curso java" width="500">
            </figure>
        </article>
    <article class="project">
            <div class="project-details">
                <h3 class="project-tittle">Videojuegos Narrativos</h3>
                <h6 class="project-course">MasterD</h6>
                <p class="project-date"><small><strong>Fecha:</strong> 11/04/2019</small></p>
                <p class="project-url"><small><strong>Puedes verlo en: <a href="https://www.masterd.es/" target="_blank"></strong>www.masterd.es</small></a></p>
                <p class="project-description">Se trata de la programación de un videojuego narrativo desarrollado durante un curso impartido en el instituto MasterD, sobre qué es y cómo se hacen los juegos narrativos.
                </p>
            </div>
            <figure class="project-imageConteiner">    
                <img class="project-image" src="images/juego.jpg" alt="proyecto curso react" width="500">
            </figure>
            
        </article>


</section>
</section>

<!-- Presupuesto informacion personal-->
 
<section id="solicitar-presupuesto" class="pt-2 pb-3">
    <div class="container">
        <div class="row">
            <div class="col text-center">
              <h2> Solicitar</h2>
              <h2 class="text-uppercase">presupuesto</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
              <h4>Solicita un <abbr data-toggle="tooltip" title="Euros o Dólares">presupuesto</abbr> para el proyecto que desees.  
              Cuéntame qué tienes en mente!</h4>
            </div>
        </div>
        <div class="col text-center">
              <h3>Datos Personales</h3>
            </div>
        <div class="row">
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
              <!-- Llamada a la funcion validar los campos -->
                    <form name="myForm" action="" onsubmit="return validar()" method="post">
                            <div class="form-row" >
                              
                              <div class="form-group col-12 col-md-6">
                                 
                                <input type="text" name="fname" class="form-control campos" placeholder="Nombre "   >
                                
                              </div>
                              <div class="form-group col-12 col-md-6">
                                <input type="text" name="fname1" class="form-control campos" placeholder="Apellido"  >
                              </div>
                              <div class="form-group col-12 col-md-6">
                                <input type="text" name="fname2" class="form-control campos" placeholder="Dirección de Email"  >
                              </div>
                              <div class="form-group col-12 col-md-6">
                                <input type="text" name="fname3" class="form-control campos" placeholder="Teléfono Móvil"  >
                              </div>
                              
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <textarea name="fname4"   class="form-control form-control-lg campos" placeholder="Información a solicitar"></textarea>
                                    
                                </div>
                            </div>
                            <div class="form-row">
                              
              <h3 style="
    padding-top: 25px">La Web</h3>
                </div>
                <form> 
                    <!-- Calculo del presupuesto com la llamada a la funcion de javascript -->
  <div class="form-row">
  
    <div class="form-group col-md-4">
      <label for="pagina">Tipo de Pagina Web</label>
      <select id="pagina" class="form-control" onchange="calcularPresupuesto()">
        <option selected>Escoge una opcion...</option>
        <option value="800">Pagina de coches</option>
        <option value="500">Pagina de botes</option>
        <option value="300">Pagina de aviones</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Plazo en meses:</label>
      <input type="text" class="form-control" id="plazos" value="0" onchange="calcularPresupuesto()">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Seleccione una opción:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input  class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios1" value="0"  onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios1">
            Quienes somos
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios2" value="0"  onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios2">
            Donde estamos
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios2" value="0"  onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios2">
            Galeria de fotos
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios2" value="0"  onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios2">
            eCommerce
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios2" value="0"  onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios2">
           Gestion interna
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios2" value="0"  onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios2">
           Noticias
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios2" value="option2"  onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios2">
            Facebook
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input presupuesto" type="checkbox" name="gridRadios" id="gridRadios2" value="option2" onchange="calcularPresupuesto()">
          <label class="form-check-label" for="gridRadios2">
            Twitter
          </label>
        </div>
        <div class="form-group col-md-10">
      <label for="inputZip"><h3>Presupuesto estimado:<br><h6>(recuerdeque este presupuesto dependiendo de la web, aumentará o disminuirá)</h6></h3></label>
      <input type="text" class="form-control" id="final" value="0" readonly>
    </div>
      </div>
    </div>
  </fieldset>

  <div class="col-12">
     <input type="submit" class="btn btn-portaf btn-block" data-toggle="tooltip" data-placement="right" title="Enviar formulario" onsubmit="validar()">
    </div>
                          
                          
</form>
                        
                              
                                
                          </form>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
   <footer id="footer" class="pb-4 pt-4">
       <div class="container">
           <div class="row text-center">
            <div class="col-12 col-lg">
                <a href="https://twitter.com/ricardoalgarin2" target="_blank" class="social-link twitter"></a>
            </div>
            <div class="col-12 col-lg">
                <a href="https://facebook.com/ricardoalgarin" target="_blank" class="social-link facebook"></a>
            </div>
            <div class="col-12 col-lg">
                <a href="https://github.com/ricardoalgarin94" target="_blank" class="social-link github"></a>
            </div>
            <div class="col-12 col-lg">
                <a href="https://instagram.com/ricardoalgarin" target="_blank" class="social-link instagram"></a>
            </div>
           </div>
       </div>
   </footer>
<!-- /Footer -->


      <!-- Modal -->
      <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Contáctame</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nombre y Apellido</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Antonio Perez" value="" required>
      <div class="valid-tooltip">
        Excelente!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Teléfono</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="+34..." value="" required>
      <div class="valid-tooltip">
      Excelente!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Correo</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Por favor usar email válido.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Motivo</label>
      <textarea   class="form-control form-control-lg " id="validationTooltip03" placeholder="Motivo del contacto..." required></textarea>
      <div class="invalid-tooltip">
       Rellenar el campo.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip04">Fecha</label>
      
  <input type="date" class="form-control" id="validationTooltip04" required>
     <div class="invalid-tooltip">
        Por favor introdcir fecha.
      </div>
    </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
  <button class="btn btn-portaf" type="submit" >Contactar</button>
  </div>
</form>
                           

          </div>
        </div>
      </div>
<!-- /Modal -->

    <!-- Enlaces a JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="js/index.js"></script>
     <!-- Enlace a los JQuery -->
    <script  src="js/jquery.js"></script>
    <script  src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css" 
    media="screen" />
  </body>
</html>