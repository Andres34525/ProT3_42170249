<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Recetas | Recetas Delicias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>" />
</head>
<body>

  <!-- NAVBAR -->
  <?= view('partials/navbar') ?>

  <!-- RECETAS -->
  <div class="container my-5">

    <!-- RECETA 1 -->
    <div class="mb-5 border rounded shadow-sm p-4 bg-white">
      <h2 class="text-center mb-4">Tarta de Verduras</h2>
      <img src="<?= base_url('img/tarta-de-verduras.jpeg') ?>" alt="Tarta de Verduras" class="img-fluid rounded mb-4">
      <ul class="nav nav-tabs" id="receta1Tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="elab1-tab" data-bs-toggle="tab" data-bs-target="#elab1" type="button" role="tab">Elaboración</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="ing1-tab" data-bs-toggle="tab" data-bs-target="#ing1" type="button" role="tab">Ingredientes</button>
        </li>
      </ul>
      <div class="tab-content p-4 border border-top-0" id="receta1TabsContent">
        <div class="tab-pane fade show active" id="elab1" role="tabpanel">
          <p>1. Cortar las verduras (zapallitos, zanahorias, cebolla) en cubos pequeños.</p>
          <p>2. Saltearlas en una sartén con aceite de oliva hasta que estén tiernas.</p>
          <p>3. Batir los huevos con sal, pimienta y queso rallado. Mezclar con las verduras cocidas.</p>
          <p>4. Colocar la mezcla sobre una masa de tarta y hornear 30 minutos a 180 °C.</p>
        </div>
        <div class="tab-pane fade" id="ing1" role="tabpanel">
          <table class="table table-striped">
            <thead class="table-success">
              <tr><th>Cantidad</th><th>Ingrediente</th></tr>
            </thead>
            <tbody>
              <tr><td>3</td><td>Zapallitos</td></tr>
              <tr><td>1</td><td>Zanahoria</td></tr>
              <tr><td>1</td><td>Cebolla</td></tr>
              <tr><td>3</td><td>Huevos</td></tr>
              <tr><td>100g</td><td>Queso rallado</td></tr>
              <tr><td>1</td><td>Masa para tarta</td></tr>
              <tr><td>A gusto</td><td>Sal y pimienta</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- RECETA 2 -->
    <div class="mb-5 border rounded shadow-sm p-4 bg-white">
      <h2 class="text-center mb-4">Fideos con Salsa</h2>
      <img src="<?= base_url('img/Fideos-con-salsa.jpeg') ?>" alt="Fideos con salsa" class="img-fluid rounded mb-4">
      <ul class="nav nav-tabs" id="receta2Tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="elab2-tab" data-bs-toggle="tab" data-bs-target="#elab2" type="button" role="tab">Elaboración</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="ing2-tab" data-bs-toggle="tab" data-bs-target="#ing2" type="button" role="tab">Ingredientes</button>
        </li>
      </ul>
      <div class="tab-content p-4 border border-top-0" id="receta2TabsContent">
        <div class="tab-pane fade show active" id="elab2" role="tabpanel">
          <p>1. Hervir los fideos en agua con sal hasta que estén al dente.</p>
          <p>2. Preparar una salsa con tomate, cebolla y especias a gusto.</p>
          <p>3. Escurrir los fideos y mezclar con la salsa caliente.</p>
          <p>4. Servir con queso rallado por encima.</p>
        </div>
        <div class="tab-pane fade" id="ing2" role="tabpanel">
          <table class="table table-striped">
            <thead class="table-success">
              <tr><th>Cantidad</th><th>Ingrediente</th></tr>
            </thead>
            <tbody>
              <tr><td>250g</td><td>Fideos</td></tr>
              <tr><td>2</td><td>Tomates</td></tr>
              <tr><td>1</td><td>Cebolla</td></tr>
              <tr><td>A gusto</td><td>Sal y pimienta</td></tr>
              <tr><td>A gusto</td><td>Queso rallado</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

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
      <div class="text-center small">© 2025 RecetasDelicias. Todos los derechos reservados.</div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
