<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">EduCheck</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../theme/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $email ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./dashboard.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="riwayat-presensi.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Riwayat Presensi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-guru.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Guru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-jurusan.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Jurusan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-kelas.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kelas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-siswa.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./profile.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Logout Here
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->

      <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->
</aside>