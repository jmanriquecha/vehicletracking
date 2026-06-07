<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0766f3">
    <!-- AdminLTE 4 + Bootstrap 5.3 (CSS) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0/dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="<?= Assets ?>/css/main.css">
    <title>MIVEHICULO</title>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">

    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body" id="navigation" tabindex="-1">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav" role="navigation" aria-label="Navigation 1">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>           
          </ul>
          <!--end::Start Navbar Links-->

          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto" role="navigation" aria-label="Navigation 2">
            <!--begin::Navbar Search-->
            <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="bi bi-search"></i>
              </a>
            </li>
            <!--end::Navbar Search-->

            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit d-none"></i>
              </a>
            </li>
            <!--end::Fullscreen Toggle-->

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="<?=isset($_SESSION['user_img']) ? $_SESSION['user_img'] : Assets."/img/icons/default.png" ?>" class="user-image rounded-circle shadow" alt="User Image">
                <span class="d-none d-md-inline"><?=isset($_SESSION['user_fullname']) ? $_SESSION['user_fullname'] : 'User'; ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img src="<?=isset($_SESSION['user_img']) ? $_SESSION['user_img'] : Assets."/img/icons/default.png" ?>" class="rounded-circle shadow" alt="User Image">
                  <p>
                    <?= isset($_SESSION['user_fullname']) ? $_SESSION['user_fullname'] : 'User'; ?>
                    <small>Member since Nov. 2023</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-outline-secondary">Profile</a>
                  <form action="<?=RUTA?>/auth/logout"  method="post" class="d-inline">
                     <button class="btn btn-outline-danger float-end" type="submit" name="logout">Salir</button>
                  </form>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
    <!--end::Header-->
    <!-- Sidebar -->
     <?= RUTA ?>
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <div class="sidebar-brand">
        <a href="/<?= RUTA ?>" class="brand-link">
          <span class="brand-text fw-light">App Vehiculo</span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
            <li class="nav-item">
              <a href="/<?= RUTA ?>" class="nav-link active">
                <i class="nav-icon bi bi-house"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Recorridos
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" role="navigation" aria-label="Navigation 4" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="<?= RUTA ?>/recorrido/create" class="nav-link">
                      <i class="nav-icon bi bi-plus-circle"></i>
                      <p>Agregar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= RUTA ?>/recorrido" class="nav-link">
                      <i class="nav-icon bi bi-view-list"></i>
                      <p>Ver listado</p>
                    </a>
                  </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-fuel-pump"></i>
                  <p>
                    Cargar Combustible
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" role="navigation" aria-label="Navigation 4" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="<?= RUTA ?>/tanquear/create" class="nav-link">
                      <i class="nav-icon bi bi-plus-circle"></i>
                      <p>Tanquear</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= RUTA ?>/tanquear" class="nav-link">
                      <i class="nav-icon bi bi-view-list"></i>
                      <p>Ver listado</p>
                    </a>
                  </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-wrench-adjustable"></i>
                  <p>
                    Mantenimientos
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" role="navigation" aria-label="Navigation 4" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="<?= RUTA ?>/mantenimiento/create" class="nav-link">
                      <i class="nav-icon bi bi-plus-circle"></i>
                      <p>Registrar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= RUTA ?>/mantenimiento" class="nav-link">
                      <i class="nav-icon bi bi-view-list"></i>
                      <p>Ver listado</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= RUTA ?>/tmantenimiento" class="nav-link">
                      <i class="nav-icon bi bi-gear"></i>
                      <p>Configurar</p>
                    </a>
                  </li>
                </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Main content -->
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">