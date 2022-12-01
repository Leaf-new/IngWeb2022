<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="styles/stylesHome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php include "components/header.php" ?>
    </div>
      <div class="container container-fluid Controlbase align-self-center" >
        <div class="row align-self-center  contenedorFila">
        <div class="col col-lg-6 col-sm-12 align-self-center justify-content-center columnaContenido" >
            <div class = "sPrincipal"><h1 class="tituloPrincipal  ">Bienvenido al Mundial de Catar 2022</h1></div>
            <div class = "sPrincipal textoMedio"><p class="textoSecundario ">Los mejores 32 equipos del mundo se enfretan para dejar claro quien es el mejor dentro del campo de juego</p></div>
        </div>
        <div class="col col-lg-6 col-sm-12 align-self-center justify-content-center">
          <center><img  class= "box"src="/images/mascota.png" alt="Logo Mundial 2022"  ></center>
        </div>
      </div>
    </div>




    <!-- segunda pagina -->
    <section id="segundaPagina" class=" pagina2 d-flex align-items-center ">
      <div id="carouselExampleCaptions" class="carousel slide container-fluid container" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/equipos.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block contenidoSlider">
              <h5 class="titulosSlider">equipos</h5>
              <p class="textoSecundario"><a class="linkSlider" href="/posiciones">ver mas</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/Resultados.png" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block contenidoSlider">
              <h5 class="titulosSlider">Resultados</h5>
              <p class="textoSecundario"><a class="linkSlider"  href="/resultados">ver mas</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/tabladeposiciones.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block contenidoSlider">
              <h5 class="titulosSlider">Tabla de posiciones</h5>
              <p class="textoSecundario"><a class="linkSlider"  href="/posiciones">ver mas</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/Favoritos.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block contenidoSlider">
              <h5 class="titulosSlider">Favoritos</h5>
              <p class="textoSecundario"><a class="linkSlider" href="/favoritos">ver mas</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/Clasificacion.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block contenidoSlider">
              <h5 class="titulosSlider">Clasificacion</h5>
              <p class="textoSecundario"><a class="linkSlider"  href="/clasificacion">ver mas</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <footer class="d-flex align-items-center justify-content-center">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

