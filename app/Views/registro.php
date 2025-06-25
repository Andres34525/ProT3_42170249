<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrarse</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
</head>
<body>

  <!-- Navbar -->
  <?= view('partials/navbar') ?>

  <!-- FORMULARIO DE REGISTRO -->
  <div class="form-container">
    <h2>Registrar usuario</h2>
   <form action="<?= base_url('usuario/guardar') ?>" method="post">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>

  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="correo@algo.com">
  </div>

  <div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña (mínimo 5 caracteres)">
  </div>

  <div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </div>
</form>
  </div>

  <!-- Footer -->
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
