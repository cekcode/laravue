<template>
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"> 
          <li class="nav-item"><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.navbars.main">Dashboard</span></router-link></li>
          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Profile</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-hospital-o"></i><span class="menu-title" data-i18n="nav.navbars.main">Profile</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/profile">Semua Profile</router-link></li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Baru</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Dokter</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bars"></i><span class="menu-title" data-i18n="nav.templates.main">Kategori Dokter</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/kategori-dokter">Semua Kategori Dokter</router-link></li>
              <li><a class="menu-item" href="/user/users/Semua-user" data-i18n="nav.navbars.nav_light">Tambah Kategori Dokter</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-stethoscope"></i><span class="menu-title" data-i18n="nav.navbars.main">Daftar Dokter</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/">Semua Dokter</router-link>
              </li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Dokter</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.navbars.main">Jadwal Dokter</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/jadwal-dokter">Semua Jadwal Dokter</router-link>
              </li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Jadwal Dokter</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Layanan</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bars"></i><span class="menu-title" data-i18n="nav.templates.main">Kategori Layanan</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/kategori-layanan">Semua Kategori Layanan</router-link></li>
              <li><a class="menu-item" href="/user/users/Semua-user" data-i18n="nav.navbars.nav_light">Tambah Kategori Layanan</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-ambulance"></i><span class="menu-title" data-i18n="nav.templates.main">Layanan</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/layanan">Semua Layanan</router-link></li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Layanan</a></li>
            </ul>
          </li>
          

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Informasi</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bars"></i><span class="menu-title" data-i18n="nav.templates.main">Kategori Informasi</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/kategori-informasi">Semua Kategori Informasi</router-link></li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Kategori Informasi</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bullhorn"></i><span class="menu-title" data-i18n="nav.templates.main">Informasi</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/informasi">Semua Informasi</router-link></li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Informasi</a></li>
            </ul>
          </li>
          

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Buku Tamu</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class=" nav-item">
            <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-book"></i>
              <span class="menu-title" data-i18n="nav.support_documentation.main">Daftar Buku Tamu</span>
            </a>
          </li>

        </ul>
      </div>
    </div>
</template>