<!doctype html>
<html lang="es-MX">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <link rel="mask-icon" href="./img/safari-pinned-tab.svg" color="#f3d933">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" type="text/css" href="./css/swiper.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="./css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./css/custom.css">

    <title>Didi | Rentaking</title>
  </head>
  <body class="animated fadeIn">
    
    <div id="wrapper">

      <header id="header">
        <nav>
          <div class="row">
            <div class="col-6 col-sm-6 col-md-8 px-0 logo-col" align="center">
              <a href="./">
                <img src="./img/logo-rentaking.png" class="img-fluid logo-header">
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 px-0 call-col center-vertically" align="left">
              <a href="tel:5542124013" class="btn btn-call">Llámanos 55 4212-4013</a>
            </div>
          </div>
        </nav>
      </header>

      <section id="slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image:url('img/slider/1.jpg')">
                <div class="container">
                  <div class="row animated slideInLeft">
                    <div class="col-lg-9">
                      <div class="row bottom-vertically">
                        <div class="col">
                          <h1 class="title-slide center-on-sm">Si eres<br>conductor<br>de DIDI</h1>
                        </div>
                        <div class="col">
                          <div class="book-slider center-on-sm">
                            <h4>¡Nuestro arrendamiento<br>te conviene, <span class="book-text">haz tu cita! <img src="./img/caret-right.png"></span></h4>
                          </div>
                        </div>
                      </div>
                    </div><!--.col-lg-9-->
                  </div><!--.row-->
                </div><!--.container-->
              </div><!--.swiper-slide-->
          </div><!--.swiper-wrapper-->
          <img src="./img/pleca-bottom.png" class="pleca-slider" alt="Pleca">
          <!-- Add Pagination -->
          <div class="swiper-pagination swiper-pagination-yellow"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div><!--.swiper-container-->
      </section>
      <div class="form-slider animated slideInRight">
        <div class="container-form mt-5 mb-4">
          <h2 class="text-center">Déjanos tus datos y te contactaremos</h2>
        </div>
        <form method="POST" id="contact-form" class="needs-validation" novalidate>
          <div class="container-form">
            <div class="form-group mb-4">
              <input type="text" name="name" class="form-control form-control-lg" placeholder="Nombre" required>
              <div class="valid-feedback">¡Perfecto!</div>
              <div class="invalid-feedback">Por favor, captura un nombre.</div>
            </div>
            <div class="form-group mb-4">
              <input type="text" name="phone" class="form-control form-control-lg" placeholder="Teléfono" required>
              <div class="valid-feedback">¡Perfecto!</div>
              <div class="invalid-feedback">Por favor, captura un teléfono.</div>
            </div>
            <div class="form-group mb-4">
              <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
              <div class="valid-feedback">¡Perfecto!</div>
              <div class="invalid-feedback">Por favor, captura un correo.</div>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="checkForm" required>
              <label class="form-check-label" for="checkForm">Acepto Términos y Condiciones, así mismo confirmo que he leído y aceptado el Aviso de Privacidad.</label>
            </div>
          </div>
          <button class="btn btn-block submit-slider" type="submit">Enviar</button>
        </form>
      </div><!--.form-slider-->
      
      <section id="content">
        
        <div class="content-wrap">

          <div class="container clearfix">
            
            <h4 class="text-center">Te ofrecemos el <strong>pago inicial más bajo del mercado</strong>,<br>a una <strong>renta mensual de 210 semanas</strong> con el derecho de uso de tu auto.</h4>

          </div><!--.container-->

          <div class="mobile-section">
            <div class="container">
              <div class="row bottom-vertically">
                <div class="col-lg-5 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                  <div class="cel">
                    <div id="phone-content">
                      <div id="tab1" class="hide show tab1">
                        <img src="./img/sin-enganche.png" alt="Sin enganche">
                      </div>
                      <div id="tab2" class="hide tab2">
                        <img src="./img/sin-aval.png" alt="Sin aval">
                      </div>
                      <div id="tab3" class="hide tab3">
                        <img src="./img/flexibilidad.png" alt="Flexibilidad">
                      </div>
                      <div id="tab4" class="hide tab4">
                        <img src="./img/seguro-placas-y-tenencia.png" alt="Seguro, placas y tenencia">
                      </div>
                      <div id="tab5" class="hide tab5">
                        <img src="./img/grandes-beneficios.png" alt="Grandes beneficios">
                      </div>
                    </div><!--#phone-content-->
                  </div><!--.cel-->
                </div><!--.col-lg-5-->
                <div class="col-lg-7">
                  <h3 class="d-sm-block d-md-block d-lg-none d-xl-none text-center mb-5">Obtén excelentes beneficios:</h3>
                  <ul class="list-unstyled d-none d-sm-none d-md-none d-lg-block d-xl-block" id="list-switching">
                    <li class="active"><a id="information-1" class="tabLink tab1" href="#tab1"><h3 class="mb-0"><img src="./img/caret-left.png" /> Sin enganche.</h3></a></li>
                    <li><a id="information-2" class="tabLink tab2" href="#tab2"><h3 class="mb-0"><img src="./img/caret-left.png" /> Sin aval*</h3></a></li>
                    <li><a id="information-3" class="tabLink tab3" href="#tab3"><h3 class="mb-0"><img src="./img/caret-left.png" /> Flexibilidad con Buró de Crédito.</h3></a></li>
                    <li><a id="information-4" class="tabLink tab4" href="#tab4"><h3 class="mb-0"><img src="./img/caret-left.png" /> Seguro, placas y tenencia incluidos.</h3></a></li>
                    <li><a id="information-5" class="tabLink tab5" href="#tab5"><h3 class="mb-0"><img src="./img/caret-left.png" /> Grandes beneficios por el cumplimiento.**</h3></a></li>
                  </ul>
                  <div class="row d-lg-none d-xl-none mb-5" align="center">
                    <div class="col-6 col-sm-4">
                      <img src="./img/sin-enganche.png" alt="Sin enganche">
                      <h5>Sin enganche.</h5>
                    </div>
                    <div class="col-6 col-sm-4">
                      <img src="./img/sin-aval.png" alt="Sin enganche">
                      <h5>Sin aval.</h5>
                    </div>
                    <div class="col-6 col-sm-4">
                      <img src="./img/flexibilidad.png" alt="Sin enganche">
                      <h5>Flexibilidad.</h5>
                    </div>
                    <div class="col-6 col-sm-4 offset-md-2 offset-sm-2">
                      <img src="./img/seguro-placas-y-tenencia.png" alt="Seguro, placas y tenencia">
                      <h5>Seguro, placas y tenencia.</h5>
                    </div>
                    <div class="col-6 col-sm-4">
                      <img src="./img/grandes-beneficios.png" alt="Grandes beneficios">
                      <h5>Grandes beneficios.</h5>
                    </div>
                  </div>
                  <p class="legal-mobile">*No aplica para clientes flotilleros. **Aplican por el cumplimiento de servicios, productividad, buen manejo y pagos puntuales.</p>
                </div><!--.col-lg-7-->
              </div><!--.row-->
            </div><!--.container-->
          </div><!--.mobile-section-->
          
        </div><!--.content-wrap-->

      </section><!--#content-->

      <footer id="footer">
        
      </footer>

    </div><!--#wrapper-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="./js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./js/functions.js"></script>

    <!-- Swiper JS -->
    <script type="text/javascript" src="./js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
  </body>
</html>