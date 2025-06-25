<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <!-- LOGO + NOMBRE -->
    <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
      <img class="logo me-2" src="<?= base_url('img/logo.png') ?>" alt="Logo" style="height: 50px; width: auto;">
      <span class="fw-bold fs-5">RecetasDelicias</span>
    </a>

    <!-- BOTÓN HAMBURGUESA -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- CONTENIDO DEL NAV -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- ENLACES PRINCIPALES -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('receta') ?>">Receta</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('enviar') ?>">Enviar Receta</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('quienes') ?>">Quiénes Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('acerca') ?>">Acerca de</a></li>
      </ul>

      <!-- BUSCADOR -->
      <form class="d-flex me-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar receta..." aria-label="Buscar">
        <button class="btn btn-light" type="submit">Buscar</button>
      </form>

      <!-- REGISTRO / LOGIN -->
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
