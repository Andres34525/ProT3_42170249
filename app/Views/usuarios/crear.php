<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crear Usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
</head>
<body>

  <?= view('partials/navbar') ?>

  <div class="container mt-5">
    <h2 class="mb-4">Crear nuevo usuario</h2>
    <form action="<?= base_url('/usuarios/guardar') ?>" method="post">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>
      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" required>
      </div>
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuario" id="usuario" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>
      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?= base_url('/usuarios') ?>" class="btn btn-secondary">Volver</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

