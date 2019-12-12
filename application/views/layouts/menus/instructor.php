<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="<?= base_url('home') ?>" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Inicio</p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
          Registrar
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Nuevo informe</p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Mis avances</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
          Consultar
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Mis informes</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Mis grupos</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-header">CUENTA</li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-warning"></i>
        <p>Editar datos personales</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?= base_url("logout") ?>" class="nav-link">
        <i class="nav-icon far fa-circle text-danger"></i>
        <p class="text">Cerrar sesión</p>
      </a>
    </li>          
  </ul>
</nav>