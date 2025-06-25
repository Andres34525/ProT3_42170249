<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
</head>
<body>

  <!-- NAVBAR -->
  <?= view('partials/navbar') ?>

  <!-- FORMULARIO DE LOGIN -->
  <div class="form-container">
    <h2>Iniciar sesión</h2>

    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('login/ingresar') ?>" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Correo" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>
      </div>
      <div class="d-flex justify-content-between align-items-center mb-3">
        <button type="submit" class="btn btn-success">Ingresar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
      </div>
      <p class="text-center">
        ¿Aún no se registró? <a href="<?= base_url('registro') ?>">Registrarse aquí</a>
      </p>
    </form>
  </div>

  <!-- FOOTER -->
  <footer class="bg-success text-white mt-5 pt-4 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5 class="fw-bold">RecetasDelicias</h5>
          <p class="small">Tu sitio de recetas caseras, fáciles y deliciosas. Compartí tus platos y descubrí nuevas ideas todos los días.</p>
        </div>
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
