<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Adm</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Murillo's</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


        </ul>
      </div>
      <strong class="opcionMenuOpen"><?= $text; ?></strong>
    </nav>
  </header>


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!--li class="header">Barra de Navegacion</li-->

        <?php foreach ($dataMenu as $m) { ?>
          <li id="" class="item menu-l">
            <a href="<?= base_url('index.php/'.$m->ruta); ?>">
              <i class="fa <?= $m->icono; ?> fa-lg"></i>
              <span> <?= $m->descripcion; ?></span>
            </a>
          </li>
        <?php } ?>

        <hr>
        <li>
          <a href="<?= base_url('index.php/Login/logOut'); ?>">
            <i class="fa fa-share" id="systemExit"></i> <span>Cerrar Sesion</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
