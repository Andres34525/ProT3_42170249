<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
</head>
<body>

  <!-- NAVBAR -->
  <?= view('partials/navbar') ?>

  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="text-success">Lista de Usuarios</h2>
      <a href="<?= base_url('logout') ?>" class="btn btn-danger">Cerrar sesión</a>
    </div>

    <table class="table table-striped table-hover">
      <thead class="table-success">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Usuario</th>
          <th>Creado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $usuario): ?>
          <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= esc($usuario['nombre']) ?></td>
            <td><?= esc($usuario['apellido']) ?></td>
            <td><?= esc($usuario['email']) ?></td>
            <td><?= esc($usuario['usuario']) ?></td>
            <td><?= $usuario['creado_en'] ?></td>
            <td>
              <a href="<?= base_url('usuarios/editar/' . $usuario['id']) ?>" class="btn btn-sm btn-warning">Editar</a>
              <a href="<?= base_url('usuarios/eliminar/' . $usuario['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este usuario?')">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="text-end">
      <a href="<?= base_url('/') ?>" class="btn btn-secondary">Volver al inicio</a>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-success text-white mt-5 pt-4 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5 class="fw-bold">RecetasDelicias</h5>
          <p class="small">Tu sitio de recetas caseras, fáciles y deliciosas.</p>
        </div>
        <div class="col-md-4 mb-3">
          <h6 class="fw-bold">Enlaces útile</h6>
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
      <div class="text-center small">© 2025 RecetasDelicias. Todos los derechos reservados.</div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
