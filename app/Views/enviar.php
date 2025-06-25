
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Enviar Receta | Recetas Delicias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>" />
</head>
<body>

  <!-- Navbar reusable -->
  <?= view('partials/navbar') ?>

  <!-- FORMULARIO DE ENVÍO DE RECETA -->
  <div class="container my-5">
    <h2 class="mb-4 text-center">Enviar Nueva Receta</h2>

    <form class="row g-3" enctype="multipart/form-data">
      <div class="col-md-6">
        <label for="nombreReceta" class="form-label">Nombre de la Receta</label>
        <input type="text" class="form-control" id="nombreReceta" required>
      </div>

      <div class="col-md-6">
        <label for="categoria" class="form-label">Categoría</label>
        <select class="form-select" id="categoria" required>
          <option selected disabled value="">Elegir categoría...</option>
          <option>Entradas</option>
          <option>Plato Principal</option>
          <option>Postres</option>
          <option>Veganas</option>
          <option>Sin Gluten</option>
        </select>
      </div>

      <div class="col-12">
        <label for="imagenReceta" class="form-label">Imagen de la Receta</label>
        <input class="form-control" type="file" id="imagenReceta" accept="image/*">
      </div>

      <div class="col-12">
        <label for="ingredientes" class="form-label">Ingredientes</label>
        <textarea class="form-control" id="ingredientes" rows="3" required></textarea>
      </div>

      <div class="col-12">
        <label for="elaboracion" class="form-label">Elaboración</label>
        <textarea class="form-control" id="elaboracion" rows="4" required></textarea>
      </div>

      <div class="col-12 text-end">
        <button type="reset" class="btn btn-secondary me-2">Cancelar</button>
        <button type="submit" class="btn btn-success">Enviar Receta</button>
      </div>
    </form>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
