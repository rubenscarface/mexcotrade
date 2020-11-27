
<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  <link rel="shortcut icon"  type="image/x-icon" href="image/ico.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet"> <!--tipografia-->
     <title>MexcoTrade.com</title>
    </head>
<body>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="103194594794893"
  theme_color="#000000">
      </div>
      <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000000",
      "text": "#fff"
    },
    "button": {
      "background": "transparent",
      "text": "#fff",
      "border": "#fff"
    }
  },
  "content": {
    
    "message": "Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web. Si continúa utilizando este sitio asumiremos que está de acuerdo. Al registrarse usted esta aceptando nuestras políticas de privacidad. ",
    "dismiss": "Aceptar",
    "link": "Leer más ",
    "href": "https://mexcotrade.com/AvisoDePrivacidad.pdf"
  }
});
</script>
    <section class="header">
        <div class="container">
            <!--navcon boostrap-->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href=""><img src="image/logo.svg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto text-right">
                    <li class="nav-item active">
                      <a class="nav-link active-home" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="registro/index.php">INICIAR SESIÓN</a>
                    </li>
                       <li class="nav-item">
                      <a class="nav-link" href="registro/registration.php">REGÍSTRATE</a>
    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section1">CONTÁCTANOS</a>
                      </li>
                  </ul>
                </div>
              </nav>


              <div class="row banner">
                  <div class="col-md-6">
                      <h3>SOBRE NOSOTROS</h3>

                      <p>Empresa 100% Mexicana con calidad en sus servicios que la hacen una entidad digital competitiva a nivel global. Su curso en el estudio de la bolsa y mercados financieros ofrece la oportunidad para la negociación internacional diversificada y así obtener una inversión más profesional y certera.</p>
                      
                      <a href="curso.php">NUESTRO CURSO</a>
                  </div>
                  <div class="col-md-6 text-center">
                      <img src="image/twiter.png" class="img-fluid">
                  </div>
              </div>
        </div>
    </section>


    <section class="service">
        <div class="container">
            <h2 class="title"> Garantizado <br> para aprender</h2>
            <p class="subtitle">Enorgullécete de tu patria y únete a MexcoTrade. </p>
            <div class="row">
              <div class="col-md-4">
                <div class="service-box">
                  <img src="image/icon1.png">
                  <h6> 1. Adquiere nuestro curso</h6>
                  <p>Nuestro servicio te brinda la mejor herramienta para obtener el éxito dentro de los mercados financieros, el cual ésta implementado bajo un estricto y profesional sistema educativo, satisfaciendo así las necesidades de nuestros miembros.</p>
                  <br>
<br>
<br>
<br>
       
                </div>
              </div>
              <div class="col-md-4">
                <div class="service-box1">
                  <img src="image/icon2.png">
                  <h6> 2. Metodo de Compra</h6>
                  <p>Con un solo pago podrás adquirir nuestra membrecía para gozar de nuestro servicio educacional, con el fin de aprovechar las grandes oportunidades económicas que se presentan en los mercados financieros. 
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service-box2">
                  <img src="image/icon3.png">
                  <h6> 3. Competitivos a nivel global</h6>
                  <p>Estamos orgullosos de ser una entidad totalmente Mexicana, pionera nacionalmente en brindar su eficiente sistema educativo, siendo de los mejores cursos referentes al buen entendimiento, gestión y diversificación en las inversiones internacionales.</p>
<br>
<br>
<br>
<br>
                </div>
              </div>  
            </div>
        </div>
    </section>
      

    <section class="feacture">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
            <img src="image/04.svg">
          </div>
          <div class="col-md-6">
            <h2>Hazte miembro y únete a esta gran comunidad.</h2>
            <h7>
              Te ofrecemos la oportunidad de convertirte en un profesional de los mercados financieros internacionales. Nuestro servicio educativo está hecho con todo el esfuerzo y dedicación que nuestros usuarios necesitan.
</h7>
        </div>
      </div>
    </section>
      
    <section class="explore">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Misión De La Corporación</h2>
            <h7>Nuestra objetivo es brindarte el mejor contenido educativo para la obtención de tu libertad financiera, mientras aprendas una nueva profesión podras al mismo tiempo poner en practica todo lo aprendido. Nuestro curso está calificado para hacer profesionistas en los mercados financieros.</h7>
            <a href="curso.php">COMPRAR AHORA</a>
          </div>
          <div class="col-md-6 text-center">
            <img src="image/05.svg" class="img-fluid">
          </div>
        </div>
      </div>
    </section>


    <section class="review">
      <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/000.png">
              <div class="carousel-caption">
                <h6>Grupos De Interactividad</h6>
                <small>Función</small>
                <p>Compartir experiencia de veteranos con aprendices.  <br>Continuar creciendo como familia. <br> Motivar todo el momento a nuestros aprendices y nuevos integrantes. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/1.png">
              <div class="carousel-caption">
                <h6>Grupo En WhatsApp</h6>
                <small>Función</small>
                <p> Convivencia de Negociantes durante todo el tiempo.  <br> Ejemplos realizados por nuestros miembros . <br> Contenido libre e interesante. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/2.png">
              <div class="carousel-caption">
                <h6>Grupo De Telegram</h6>
                <small>Señales y Noticias Fundamentales</small>
                <p> Adquiere señales de nosotros para tomar accion sobre precio.  <br> Mira ejemplos actualizados sobre analisis en indistintos pares. <br> Brindamos noticias de importante impacto en el mercado. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </section>
<!-- Footer -->

    <section class="footer text-center">
    <br>
    <div class="containerf">
        <h4 id="section1">Síguenos En Nuestras Redes Sociales</h4>
        
           <!-- Facebook -->
            <a href="https://m.facebook.com/MexcoTrade/" class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/MexcoTrade" class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a href="https://www.linkedin.com/in/mexco-trade-9778681b1" class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a href="https://www.instagram.com/mexcotrade/" class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
            </a>
            <form action="">
  </div>
  </form>
  <hr>
    <!-- Footer -->
<footer class="page-footer">

<!-- Footer Text -->
<div class="container-fluid text-md-center text-center">

  <!-- Grid row -->
  <div class="row">
 
    <!-- Grid column -->
    <div class="col-md-6">
  
      <p><small>DIVULGACIÓN DE RIESGOS: El comercio de divisas conlleva un alto nivel de riesgo y puede resultar en la pérdida de toda su inversión. Debe ser consciente de los riesgos y estar dispuesto a aceptarlos para poder invertir en los mercados financieros de acciones, opciones binarias o futuros que en este servicio se ofrecen con su sistema educativo. No opere con dinero que no pueda permitirse perder.</small></p>
</div>
    <!-- Grid column -->

    <hr class="clearfix ">

    <!-- Grid column -->
    <div class="col-md-6">

      <!-- Content -->
      <p><small>MexcoTrade,sus dueños, agentes, empleados, proveedores y colaboradores no son responsables de las pérdidas que puedan resultar del uso de los servicios ofrecidos en este sitio web.</small></p>
      <a href="https://mexcotrade.com/AvisoDePrivacidad.pdf">AVISO DE PRIVACIDAD</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
  </div>
  <!-- Footer Text -->
  
</div>
<!-- Copyright -->
<hr>
<div class="footer-copyright text-center py-1">© 2020 Copyright:
  <a href="https://mexcotrade.com/"> MexcoTrade.com</a>
  
</div>
<br>
<!-- Copyright -->
</section>

</footer>
<!-- Footer -->
</div>
<script src="https://kit.fontawesome.com/1b72e4ed05.js" crossorigin="anonymous"></script>
</body>
</html>