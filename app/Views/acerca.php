<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Acerca de | Recetas Delicias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>" />
</head>
<body>

  <!-- Navbar reusable -->
  <?= view('partials/navbar') ?>

  <!-- CONTENIDO PRINCIPAL -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Acerca de Recetas Delicias</h2>
    <div class="row mb-4">
      <div class="col-md-6">
        <h4>¿Quiénes somos?</h4>
        <p>Recetas Delicias es un proyecto que empezo con una sola idea, la de compartir nuestras recetas y que las personas nos compartan sus recetas tanto a nosostros como al mundo atraves de Recetas Delicias.</p>
      </div>
      <div class="col-md-6">
        <h4>¿Dónde estamos?</h4>
        <p>Nos encontramos en la capital de Corrientes. Si querés visitarnos, podés encontrarnos en:</p>
        <ul>
          <li><strong>Dirección:</strong> Calle falsa al 956, Corrientes Capital</li>
          <li><strong>Teléfono:</strong> 3794-73xx89</li>
          <li><strong>Email:</strong> contacto@recetasdelicias.com</li>
        </ul>
      </div>
    </div>

    <!-- MAPA EMBEBIDO -->
    <div class="mb-4">
      <h5>Ubicación en el mapa:</h5>
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.5874134962937!2d-58.41930068476956!3d-34.615654180454944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb279ba4e36f%3A0x7d7b4e6be6d771fb!2sCalle%20Falsa%20123!5e0!3m2!1ses!2sar!4v1680997433453!5m2!1ses!2sar"
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

    <div class="text-center">
      <a href="<?= base_url('/') ?>" class="btn btn-success">Volver al Inicio</a>
    </div>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>