<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Quiénes Somos | Recetas Delicias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>" />
</head>
<body>

  <!-- NAVBAR -->
  <?= view('partials/navbar') ?>

  <!-- CONTENIDO PRINCIPAL -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Nuestro Equipo</h2>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="<?= base_url('img/chef1.jpeg') ?>" class="card-img-top" alt="Chef 1">
          <div class="card-body">
            <h5 class="card-title">Franco Gómez</h5>
            <p class="card-text">Fundador y chef principal. Apasionado por la cocina casera con un toque gourmet.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="<?= base_url('img/chef2.jpg') ?>" class="card-img-top" alt="Chef 2">
          <div class="card-body">
            <h5 class="card-title">Andréa Ríos</h5>
            <p class="card-text">Chef, creadora de contenido y fotógrafa gastronómica. Captura el sabor con su cámara.</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="<?= base_url('img/chef3.jpg') ?>" class="card-img-top" alt="Chef 3">
          <div class="card-body">
            <h5 class="card-title">María Fernández</h5>
            <p class="card-text">Chef, encargada de redes sociales y contacto con la comunidad. Ama compartir recetas saludables.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-success text-white mt-5 pt-4 pb-3">
    <div class="container">
      <div class="row">
        <!-- Sección: Sobre nosotros -->
        <div class="col-md-4 mb-3">
          <h5 class="fw-bold">RecetasDelicias</h5>
          <p class="small">Tu sitio de recetas caseras, fáciles y deliciosas. Compartí tus platos y descubrí nuevas ideas todos los días.</p>
        </div>

        <!-- Sección: Enlaces útiles -->
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

        <!-- Sección: Contacto -->
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
