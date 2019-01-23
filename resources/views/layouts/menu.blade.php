<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
  <!-- main menu content-->
  <div class="main-menu-content">
    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
      <li @click="menu=0" class="nav-item"><a href="javascript:void(0);"><i class="icon-home4"></i><span data-i18n="nav.changelog.main" class="menu-title">Dashboard</span></a>
      </li>
      <li class=" nav-item"><a href="javascript:void(0);"><i class="icon-video-camera2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Peliculas</span></a>
        <ul class="menu-content">
          <li @click="menu=1"><a href="javascript:void(0);" data-i18n="nav.page_layouts.1_column" class="menu-item">Listado de peliculas</a>
          </li>
          <li @click="menu=2"><a href="javascript:void(0);" data-i18n="nav.page_layouts.2_columns" class="menu-item">Género</a>
          </li>
          <li @click="menu=3"><a href="javascript:void(0);" data-i18n="nav.page_layouts.boxed_layout" class="menu-item">Actores</a>
          </li>
          <li @click="menu=4"><a href="javascript:void(0);" data-i18n="nav.page_layouts.static_layout" class="menu-item">Directores</a>
          </li>
        </ul>
      </li>
      
      <li @click="menu=5" class="nav-item"><a href="javascript:void(0);"><i class="icon-users3"></i><span data-i18n="nav.changelog.main" class="menu-title">Clientes</span></a>
      </li>
      <li @click="menu=6" class="nav-item"><a href="javascript:void(0);"><i class="icon-building"></i><span data-i18n="nav.changelog.main" class="menu-title">Sucursales</span></a>
      </li>
    </ul>
  </div>
  <!-- /main menu content-->
  <!-- main menu footer-->
  <!-- include includes/menu-footer-->
  <!-- main menu footer-->
</div>
<!-- / main menu-->