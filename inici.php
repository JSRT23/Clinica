<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<body>
  

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <h1>Centro Medico</h1>
      </div>
      <div class="col-4 text-center">
        
        <img class="mb-4" src="registro/imagenes/CM.png" alt="" width="300" height="150">
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Consultar</a> 
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between fs-5">
      <a class="nav-item nav-link link-body-emphasis active " href="inici.php">Inicio</a>
      <a class="nav-item nav-link link-body-emphasis" href="registro/Consultas.php">Consultas</a>
      <a class="nav-item nav-link link-body-emphasis" href="registro/Citas.php">Citas</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Contactos</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
      
    </nav>
  </div>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="registro/imagenes/D1.jpg" class="d-block w-100" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="registro/imagenes/D2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="registro/imagenes/D3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">Centro Medico</h1>
      <p class="lead my-3">Sitio web para realizar reserva de citas y consulta de resultados.</p>
      <p class="lead mb-0"><a href="registro/Consultas.php" class="text-body-emphasis fw-bold">Consultar</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis"></strong>
          <h3 class="mb-0">Agenda tus citas</h3>
          <div class="mb-1 text-body-secondary"></div>
          <p class="card-text mb-auto">Realiza en agendamiento de tus citas desde la comodidad de tu hogar.</p>
          <a href="registro/Citas.php" class="icon-link gap-1 icon-link-hover stretched-link">
            Agenda tus citas.
            <svg class="bi"><use xlink:href="imagenes"></use></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="240" height="260" src="registro/imagenes/C1.jpg" href="registro/Citas.php"  >
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Colsulta tus resultados</h3>
          <p class="mb-auto">Realiza la consulta de los resultados de tus examenes desde la comodidad de tu hogar.</p>
          <a href="registro/Consultas.php" class="icon-link gap-1 icon-link-hover stretched-link">
            Resultados
            <svg class="bi"><use xlink:href="#"></use></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img class="bd-placeholder-img" width="240" height="260" src="registro/imagenes/C2.jpg" href="registro/Citas.php"  >
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Centro Medico
      </h3>

      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">Comunidad</h2>
        <p class="blog-post-meta"></p>

        <p>Centro médica gratuito para la comunidad en el que ofrecemos servicio de consultas especializadas, Medicina alternativa, terapia neuronal y exámenes en laboratorio clínico especializado</p>
        <hr>
        

      

      

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Inicio</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
         
        </div>

        

    

        <div class="p-4">
          <h4 class="fst-italic">REDES</h4>
          <ol class="list-unstyled">
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>Consiguenos en <a href="https://getbootstrap.com/">Facebook</a> by <a href="https://twitter.com/mdo">@CMS</a>.</p>
 
</footer>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    

</body>
</body>
</html>