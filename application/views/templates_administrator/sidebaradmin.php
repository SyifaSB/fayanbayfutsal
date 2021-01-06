<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       
    </ul>
 
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
            <!-- Message End -->
          
      <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu">
          
         <div class="dropdown-divider"></div>
         <a href="<?php echo base_url() ?>auth" class="dropdown-item">
          <i class="fas fa-sign-out-alt fa-sm mr-2"></i>Logout
          </a>
      </li> 
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark ">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="<?php echo base_url() ?>assets/img/logoo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: 200">
        </div>
        <div class="info">
          <center><a class="d-block"><h6>Fayanbay Futsal</h6></a></center>
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
              <a class="nav-link" href="<?php echo base_url() ?>administrator/admin/dashboardadmin">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                ADMIN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/karyawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data karyawan</p>
                </a>
              </li>
        

              
            </ul>
          </li>
          
          <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/pemasukan" class="nav-link">
                  <i class="nav-icon fas fa-edit nav-icon"></i>
                  <p>Data Pemasukan</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/pengeluaran" class="nav-link">
                  <i class="nav-icon fas fa-edit nav-icon"></i>
                  <p>Data Pengeluaran</p>
                </a>
              </li>
         
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/admin/pemesanan" class="nav-link">
                  <i class="nav-icon fas fa-edit nav-icon"></i>
                  <p>Data Pemesanan</p>
                </a>
              </li>

              
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportkaryawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportpemasukan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportpengeluaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data pengeluaran</p>
                </a>
              </li>
            
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>administrator/report/reportpemesanan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data pemesanan</p>
                </a>
           
             
              

        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  