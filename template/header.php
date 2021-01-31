<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- #Boostrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
      crossorigin="anonymous"
    />
    <!-- #Boostrap -->

    <!--Styles-->
    <link rel="stylesheet" href="styles/index.css" />
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Montserrat:wght@200&display=swap"
      rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap"
      rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">

    <!--Animate-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Bienvenido</title>
  </head>

  <body>

<!-- #region Header-->

    <header class="header">
      <!--Header-->
      <div class="barra">
        <!--Barra o Navegador-->
        <div class="container">
          <nav
            id="navegacion-principal"
            class="navbar navbar-dark justify-content-between
            navbar-expand-lg text-uppercase text-md-center fixed-top navbar-light
             "
          >
            <a class="navbar-brand" href="Index.html">
              <img id="img-logo" src="img/logo1.png" width="60" height="80"
              data-aos="zoom-in"/>
              <span class="display-4 w-1"></span></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"  id="navbarNavDropdown">
              <ul class="navbar-nav w-100 justify-content-end nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="Index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sobre-app.php">Sobre la App</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contacto.php">Contactanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Blog/index.php">Blog</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!--.container-->
      </div>
      <!--.barra-->

      <div
        id="flechas"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block img-fluid"
              src="img/ZEAFONDO3.png"
              id="carrusel"
            />
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-6">
                  <div class="carousel-caption d-none d-md-block text-left">
                    <img src="img/Logo-Zea.x.ico" class="animate__animated  animate__flash"  />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="carousel-caption d-none d-md-block bloque-info">
                    <a
                    data-aos="zoom-in"
                      id="button-1"
                      href="https://play.google.com/store/apps/details?id=com.companyname.appreservation"
                      class="btn btn-warning btn-lg text-uppercase"
                    >
                      <img
                        src="img/play-store.svg"
                        class="img-fluid"
                        id="icono-play"
                        
                      />App para Usuarios</a
                    >
                    <hr class="style-two"/>
                    <a
                    data-aos="zoom-in"
                      id="button-2"
                      href="https://play.google.com/store/apps/details?id=com.companyname.zea_business"
                      class="btn btn-warning btn-lg text-uppercase"
                      >
                      <img src="img/play-store.svg"
                      class="img-fluid"
                      id="icono-play">
                      App para Negocios</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End Carrusel 1-->
          <!-- #Carrusel2 -->
          <div class="carousel-item">
            <img
              class="d-block img-fluid d-block"
              src="img/ZEAFONDO4.png"
              id="carrusel"
            />
            <div class="carousel-caption d-none d-md-block bloque-info intro-class-in">
              <h2> SUSCRIPCIÓN
                PREMIUM GOLD</h2>
              <a href="gold.php" class="btn btn-warning"
                >
                <img src="img/click (3).svg">
                Haz click aqui</a
              >
            </div>
          </div>
          <!-- #EndCarrusel2 -->
          <!-- #Carrusel3 -->
          <div class="carousel-item">
            <img
              class="d-block img-fluid "
              src="img/ZEAFONDO5.png"
              id="carrusel"
            />
            <div class="carousel-caption d-none d-md-block bloque-info intro-class-in">
              <h2>"Elige y saborea a tu gusto"</h2>
               <p>Zea es posible gracias a las nuevas tecnologías, es única por ser una aplicación para toda Latinoamérica siendo caracterizada por transmitir elegancia, calidad y exclusividad total. Es diferente por contar con reservaciones y un sistema premium con beneficios exclusivos.</p>
              <a href="" class="btn btn-warning"
                >
                <img src="img/click (3).svg">
                Haz click aqui</a
              >
            </div>
          </div>
          <!-- #endCarrusel -->
        </div>
        <a
          class="carousel-control-prev"
          href="#flechas"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only visually-hidden">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#flechas"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only visually-hidden">Next</span>
        </a>
      </div>
    </header>
<!-- #endregion -->
