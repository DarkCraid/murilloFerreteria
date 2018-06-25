<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Adm</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Administrador</b></span>
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
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/AdminLTE/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Equipo de Soporte
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Lorem ipsum dolor sit amet...</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/AdminLTE/dist/img/user4-128x128.jpg');?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Persona
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Lorem ipsum dolor sit amet...</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todos los mensajes.</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 2 notificaciones.</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>

                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/AdminLTE/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrador</span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Barra de Navegacion</li>

        <li class="treeview ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="#"><i class="fa fa-circle-o"></i> Barra de Navegacion</a></li>
            <li ><a href="#"><i class="fa fa-circle-o"></i> Comidas</a></li>
            <li ><a href="#"><i class="fa fa-circle-o"></i> Especialidades</a></li>

            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Galeria
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Restaurante</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Comidas</a></li>
              </ul>
            </li>
						<li><a href="<?php echo base_url('index.php/Admin/NosotrosActualizar') ?>"><i class="fa fa-circle-o"></i>Actualizar Sobre Nosotros</a></li>
            <li><a href="<?php echo base_url('index.php/Administrador/Reservaciones'); ?>"><i class="fa fa-circle-o"></i>Reservaciones</a></li>
            <li><a href="<?php echo base_url('index.php/Administrador/Contacto'); ?>"><i class="fa fa-circle-o"></i>Contacto</a></li>
          </ul>
        </li>

        <li class="treeview ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('index.php/Administrador/Registro');?>"><i class="fa fa-circle-o"></i> Agregar</a></li>
            <li ><a href="<?php echo base_url('index.php/Administrador/CambiarContrasena');?>"><i class="fa fa-circle-o"></i> Cambiar Contraseña</a></li>
          </ul>
        </li>

        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Lorem</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
          </ul>
        </li>-->

        <!--<li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Lorem</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Nuevo</small>
            </span>
          </a>
        </li>-->

        <li>
          <a href="#">
            <i class="fa fa-share"></i> <span>Cerrar Sesion</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
