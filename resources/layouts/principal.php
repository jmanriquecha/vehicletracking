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
    <title>MIVEHICULO</title>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">

    <!-- Header -->
    <nav class="app-header navbar navbar-expand bg-body">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
              <i class="bi bi-list"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Sidebar -->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <div class="sidebar-brand">
        <a href="<?= RUTA ?>" class="brand-link">
          <span class="brand-text fw-light">My Dashboard</span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
            <li class="nav-item">
              <a href="<?= RUTA ?>" class="nav-link active">
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
                <i class="nav-icon bi bi-bar-chart"></i>
                <p>Reports</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Main content -->
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <!-- Aquí se inyectará el contenido específico de cada página -->
        <?php 
        if (isset($request)) {
            $request->send();
        }
        ?>
        </div>
      </div>
    </main>
  </div>

<!-- Bootstrap + Popper + AdminLTE (JS) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0/dist/js/adminlte.min.js"></script>
</body>

</html>