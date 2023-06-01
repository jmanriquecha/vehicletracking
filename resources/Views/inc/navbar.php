<?php
  $user_img = $_SESSION['user_img'];
  $frist_letter_user_name = strtoupper($_SESSION['user_name'][0]);
  $frist_letter_user_lastname = strtoupper($_SESSION['user_lastname'][0]);
  if( $user_img === NULL ){
    $user_img = $frist_letter_user_name . $frist_letter_user_lastname;
  }
  else{
    $user_img = "<img src='".Assets."/".$user_img."'/>";
  }
?>

<nav class="navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= RUTA ?>/">CODEVELOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= RUTA ?>/">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Recorridos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= RUTA ?>/recorrido/create">Nuevo</a></li>
            <li><a class="dropdown-item" href="<?= RUTA ?>/recorrido">Listado</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?=Assets?>/img/icons/tecnico.png" width="15px" alt="Mantenimiento"> Mantenimientos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= RUTA ?>/mantenimiento/create">Nuevo</a></li>
            <li><a class="dropdown-item" href="<?= RUTA ?>/mantenimiento">Listado</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= RUTA ?>/tmantenimiento"><img src="<?=Assets?>/img/icons/config.png" width="20px" alt="Configurar tipo de mantenimiento"> Configurar Tipo</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?=Assets?>/img/icons/estacion.png" width="15px" alt="Estación de combustible"> Cargar combustible
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= RUTA ?>/tanquear/create">Nuevo</a></li>
            <li><a class="dropdown-item" href="<?= RUTA ?>/tanquear">Listado</a></li>
          </ul>
        </li>
      </ul>

      <?php if ($_SESSION['user']) : ?>
      <ul class="navbar-nav mr-auto">
        <li><hr class="dropdown-divider bg-white"></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex justify-content-start align-items-center me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="circle-img-profile me-3">
              <?= $user_img ?>
            </div>
            <?= $_SESSION['user'] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configuraciones</a></li>
            <li><hr class="dropdown-divider"></li>
              <form action="<?=RUTA?>/auth/logout"  method="post">
                <button class="dropdown-item" type="submit" name="logout">Salir</button>
              </form>
          </ul>
        </li>
      </ul>       
      <?php endif ?>
    </div>
  </div>
</nav>