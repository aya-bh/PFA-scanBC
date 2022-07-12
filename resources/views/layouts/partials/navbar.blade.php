






<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{auth()->user()->name}}&nbsp;</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ route('home.index') }}" class="nav-link {{ Route::is('home.index') ? 'active' : '' }} ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Tableau du bord
          </p>
        </a>
       
      </li>
      @role('admin')
      <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-solid fa-users"></i>
          <p>
            Gestion des utilisateurs
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('roles.index') }}" class="nav-link {{ Route::is('roles.index') ? 'active' : '' }}">
          <i class="nav-icon  fas fa-archive"></i>
          <p>
            Gestion des rôles
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('categorie.index') }}" class="nav-link {{ Route::is('categorie.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-align-justify"></i>
          <p>
            Gestion des Catégories
          </p>
        </a>
     
      </li>
      @endrole
      <li class="nav-item">
        <a href="{{ route('produits.index') }}" class="nav-link {{ Route::is('produits.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tree"></i>
          <p>
            Gestion des produits
          </p>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->