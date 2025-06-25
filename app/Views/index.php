<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recetas Deliciosas | Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
</head>
<body>

  <!-- Navbar reusable -->
  <?= view('partials/navbar') ?>

  <!-- CARRUSEL -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('img/Fideos-con-salsa.jpeg') ?>" class="d-block w-100" alt="Receta 1">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('img/tarta-de-verduras.jpeg') ?>" class="d-block w-100" alt="Receta 2">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('img/tortilla-francesa.jpeg') ?>" class="d-block w-100" alt="Receta 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- PRESENTACIÓN -->
  <section class="container my-5 text-center">
    <h1 class="mb-4">¡Bienvenido a Recetas Delicias!</h1>
    <p class="lead">Tu lugar favorito para descubrir, compartir y disfrutar las mejores recetas caseras. Explora nuestro catálogo, descubre nuevos sabores y envía tus propias recetas para que otros las disfruten.</p>
    <a href="<?= base_url('receta') ?>" class="btn btn-success mt-3 me-2">Ver Receta de Ejemplo</a>
    <a href="<?= base_url('enviar') ?>" class="btn btn-outline-success mt-3">Subir mi Receta</a>
  </section>

  <!-- FOOTER -->
  <footer class="bg-success text-white mt-5 pt-4 pb-3">
    <div class="container">
      <div class="row">
        <!-- Sobre nosotros -->
        <div class="col-md-4 mb-3">
          <h5 class="fw-bold">RecetasDelicias</h5>
          <p class="small">Tu sitio de recetas caseras, fáciles y deliciosas. Compartí tus platos y descubrí nuevas ideas todos los días.</p>
        </div>

        <!-- Enlaces -->
        <div class="col-md-4 mb-3">
          <h6 class="fw-bold">Enlaces útiles</h6>
          <ul class="list-unstyled small">
            <li><a href="<?= base_url('/') ?>" class="text-white text-decoration-none">Inicio</a></li>
            <li><a href="<?= base_url('receta') ?>" class="text-white text-decoration-none">Receta</a></li>
            <li><a href="<?= base_url('enviar') ?>" class="text-white text-decoration-none">Enviar Receta</a></li>
            <li><a href="<?= base_url('quienes') ?>" class="text-white text-decoration-none">Quiénes Somos</a></li>
            <li><a href="<?= base_url('acerca') ?>" class="text-white text-decoration-none">Acerca de</a></li>
          </ul>
        </div>

        <!-- Contacto -->
        <div class="col-md-4 mb-3">
          <h6 class="fw-bold">Contacto</h6>
          <p class="small mb-1">📧 recetasdelicias@gmail.com</p>
          <p class="small mb-1">📍 Corrientes Capital, Argentina</p>
          <p class="small">📞 +54 379 123 4567</p>
        </div>
      </div>

      <hr class="border-light">
      <div class="text-center small">
        © 2025 RecetasDelicias. Todos los derechos reservados.
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
