<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('admin/vendors/feather/feather.css')?>">  
  <link rel="stylesheet" href="<?= base_url('admin/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?= base_url('admin/vendors/css/vendor.bundle.base.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')?>">
  <link rel="stylesheet" href="<?= base_url('admin/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin/js/select.dataTables.min.css')?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('admin/css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('admin/images/favicon.png')?>" />
</head>

<?php 
        $session = session();
    $user_id = $session->get('user_id'); 
       
    ?>

<body>

   
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?= base_url('admin/adminhome') ?>"><img src="<?= base_url('admin/images/logo2.svg')?>" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('admin/adminhome') ?>"><img src="<?= base_url('admin/images/logo-mini.svg')?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                </span>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
      
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/adminhome') ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>  
          </li>

          <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/user-list') ?>">List</a></li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Asnaf</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/asnaf-list') ?>">Asnaf</a></li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Laptop Aid</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/computer-list') ?>">Laptop</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Provision Aid</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/provision-list') ?>">Provision</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Donation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/donation-list') ?>">List</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout') ?>">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
         
        </ul>
        
      </nav>
     


      <!-- partial -->
      <div class="main-panel">        
      <?php if (session()->has('alert')): ?>
    <?= session('alert') ?>
<?php endif; ?>

<?php if (session()->has('alertSuccess')): ?>
    <?= session('alertSuccess') ?>
<?php endif; ?>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Detail User</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" method="post" action="admin/update-user-data">
                  <input type="hidden" name="user_id"  value="<?= $userData['user_id'] ?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?= $userData['username'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Full Name</label>
                      <input type="text" name="full_name" class="form-control" id="exampleInputUsername1" placeholder="Full Name" value="<?= $userData['full_name'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?= $userData['email'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $userData['password'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" name="address" ><?= $userData['address'] ?> </textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Register Date</label>
                      <input type="text" name="register_date" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $userData['register_date'] ?>" disabled>          
                      </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a href="<?= site_url('admin/user-list') ?>"  class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
            </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url('admin/vendors/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('admin/vendors/chart.js/Chart.min.js')?>"></script>
  <script src="<?= base_url('admin/vendors/datatables.net/jquery.dataTables.js')?>"></script>
  <script src="<?= base_url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')?>"></script>
  <script src="<?= base_url('admin/s/dataTables.select.min.js')?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('admin/js/off-canvas.js')?>"></script>
  <script src="<?= base_url('admin/js/hoverable-collapse.js')?>"></script>
  <script src="<?= base_url('admin/js/template.js')?>"></script>
  <script src="<?= base_url('admin/js/settings.js')?>"></script>
  <script src="<?= base_url('admin/js/todolist.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('admin/js/dashboard.js')?>"></script>
  <script src="<?= base_url('admin/js/Chart.roundedBarCharts.js')?>"></script>
  <!-- End custom js for this page-->
</body>

</html>

