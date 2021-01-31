<?php 
    include_once 'template/header.php';

?>


<hr class="style-two"/>

    <section class="container-fluid" data-aos="fade-up">
      <div class="row">
        <div class="col-12 col-lg-3 col-md-3 col-sm-12" id="form-4">
            <h2 class="text-capitalize mb-2 text-center">Sobre la App
              <hr class="style-two">
            </h2>
            <p class="text-white text-center">
              Dedicada a la facilitación de reservaciones en restaurantes, bares y cafeterías. </p>
        </div>
  
        <div class="col-12 col-lg-3 col-md-3 col-sm-12" id="form-2">
            <img src="img/Imagen1.png" class="img-fluid ">
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-12" id="form-2">
          <img src="img/Imagen2.png" class="img-fluid ">
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-12" id="form-2">
          <img src="img/Imagen3.png" class="img-fluid ">
        </div>
      </div>
  </section>


<!-- #region Usuarios-->
    <section class="container-fluid" data-aos="fade-up">
      <div class="row">
        <div class="col-12 col-lg-6 col-md-6" id="form-1">
            <h2 class="text-capitalize mb-2 text-center">APLICACION PARA USUARIOS
              <hr class="style-two">
            </h2>
            <p class="text-white text-center" data-aos="fade-up">
              Esta aplicación es ideal para aquellos que disfrutan de la experiencia, disfrutar buenos platillos y que buscarán mucho mejor su tiempo.</p>
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
        </div>
  
        <div class="col-12 col-lg-6 col-md-6" id="form-4">
            <img src="img/Imagen4.png" class="img-fluid " data-aos="fade-left">
        </div>
      </div>
  </section>
  <!-- #endregion -->

<!-- #region Negocio-->  
  <section class="container-fluid" data-aos="fade-up">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-6" id="form-4">
          <img src="img/Imagen5.png" class="img-fluid " data-aos="fade-right">
      </div>
      <div class="col-12 col-lg-6 col-md-6" id="form-1">
        <h2 class="text-capitalize mb-2 text-center" >APLICACION PARA NEGOCIOS
          <hr class="style-two">
        </h2>
        <p class="text-white text-center" data-aos="fade-up">
          Aquí podrá administrar reservas en línea y ofrecer a sus clientes un medio de pago seguro, además de tener la facilidad de hacer llegar sus pedidos.</p>
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
</section>
<!-- #endregion -->

<hr class="style-two"/>

<!--Footer-->
<footer class="footer bg-dark mt-5" data-aos="zoom-in">
  <div class="container-fluid">
    <div class="py-2">
      <p
        class="text-light text-center"
      >
        <a id="text1" class="footer-text mr-5"><span id="fecha"></span>. Derechos Reservados</a>
        <a id="text2" href="Preguntas.html" class="footer-text mr-5 ml-5 text-light">Preguntas Frecuentes</a>
        <a id="text3" href="Terminos.html" class="footer-text mr-5 ml-5 text-light">Terminos y Condiciones</a>
      </p>

      <p class="text-light">
        Siguenos en Nuestras Redes Sociales
        <a href="https://www.facebook.com/zea.mobi/"><img src="img/facebook-logo-2019.svg" id="img-1"></a>
        <a href="https://www.instagram.com/zea_app/"><img src="img/instagram.svg" id="img-2"></a>
       <a href="https://www.youtube.com/channel/UC5qcIVUwJ4mYhSz_VHONuNA"> <img src="img/play.svg" id="img-3"></a>
      </p>

    </div>
  </div>
</footer>
<!--End Footer-->

<!--Scripts-->
    <script src="js/index.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
      integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
      integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
      crossorigin="anonymous"
    ></script>
    <script
     src="https://unpkg.com/aos@next/dist/aos.js">
    </script>
    <script>
      AOS.init();
      </script>
<!--End Scripts-->
</body>
</html>
