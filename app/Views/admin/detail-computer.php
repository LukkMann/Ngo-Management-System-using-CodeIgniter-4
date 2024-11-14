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
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Laptop Application Form</h4>
            <form class="form-sample" method="post" action="admin/update-computer-status">

      
          <input type="hidden" name="kom_id"  value="<?= $compData['kom_id'] ?>"> 
          <p class="card-description">Update Status and Provision</p>

            <div class="row">

            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status Application</label>
                <div class="col-sm-9">
                  <input type="text"  class="form-control" value="<?= $compData['kom_status'] ?>" disabled/>
                </div>
              </div>
            </div> 
              
            <div class="col-md-6">
            <div class="form-group row">
              
              <div class="col-sm-9">
                <select class="form-control" name="kom_status">
                <option value="In Process">In Process</option>
                  <option value="Successfull">Successfull</option>
                  <option value="Reject">Reject</option>
                </select>
              </div>
            </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Provision</label>
                <div class="col-sm-9">
                  <input type="text" name="duit_kom" class="form-control" value="<?= $compData['duit_kom'] ?>"/>
                </div>
              </div>
            </div> 


            </div> 

            <div class="form-group mt-3">
            <button type="submit" class="btn btn-outline-success btn-fw">Update</button>
            <a href="<?= site_url('admin/computer-list') ?>"  class="btn btn-outline-primary btn-fw">Cancel</a>

            </div>

            </form>  

            <p class="card-description">Part A</p>
            <p class="card-description">Personal Information</p>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                  <input type="text" name="kom_nama" class="form-control" value="<?= $compData['kom_nama'] ?>" disabled/>
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Identification Card Number</label>
                <div class="col-sm-9">
                  <input type="text" name="kom_noic" class="form-control" value="<?= $compData['kom_noic'] ?>" disabled/>
                </div>
              </div>
            </div>
          </div>


          <div class="row">

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <input type="text" name="kom_jantina" class="form-control" value="<?= $compData['kom_jantina'] ?>" disabled/>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <textarea name="kom_alamat" class="form-control" disabled><?= $compData['kom_alamat'] ?></textarea>
                  </div>
                </div>
              </div>
          
          </div>

            <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Zip Code </label>
                  <div class="col-sm-9">
                    <input type="text" name="kom_poskod" class="form-control" value="<?= $compData['kom_poskod'] ?>" disabled/>
                  </div>
                </div>
              </div> 

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">City </label>
                  <div class="col-sm-9">
                    <input type="text" name="kom_bandar" class="form-control" value="<?= $compData['kom_bandar'] ?>" disabled/>
                  </div>
                </div>
              </div> 

              
          
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">State </label>
                      <div class="col-sm-9">
                        <input type="text" name="kom_negeri" class="form-control" value="<?= $compData['kom_negeri'] ?>" disabled/>
                      </div>
                    </div>
                  </div> 
    
                </div>     

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Mobile Phone No</label>
                      <div class="col-sm-9">
                        <input type="text" name="kom_nobimbit" class="form-control" value="<?= $compData['kom_nobimbit'] ?>" disabled/>
                      </div>
                    </div>
                  </div> 
    
                  
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Home Phone Number</label>
                      <div class="col-sm-9">
                        <input type="text" name="kom_norumah" class="form-control" value="<?= $compData['kom_norumah'] ?>" disabled/>
                      </div>
                    </div>
                  </div> 
            </div>

          <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                  <input type="email" name="kom_email" class="form-control" value="<?= $compData['kom_email'] ?>" disabled/>                  
                </div>
                </div>
            </div>
         </div>

         <p class="card-description">Information of parent or guardian</p>

         <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name of parent or guardian </label>
                <div class="col-sm-9">
                  <input type="text" name="kom_ibubapa" class="form-control" value="<?= $compData['kom_ibubapa'] ?>" disabled/>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Identification Card Number</label>
                  <div class="col-sm-9">
                    <input type="text" name="kom_icibubapa" class="form-control" value="<?= $compData['kom_icibubapa'] ?>" disabled/>
                  </div>
                </div>
              </div>
          </div>


          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Estimated Household Monthly Net Income </label>
                  <div class="col-sm-9">
                    <input type="number" name="kom_gaji" class="form-control" placeholder="RM" value="<?= $compData['kom_gaji'] ?>" disabled/>
                  </div>
                </div>
              </div>
          
          </div>

          <p class="card-description">University Information</p>

            <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Name of the University</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_u" class="form-control" value="<?= $compData['nama_u'] ?>" disabled/>
                  </div>
                </div>
              </div> 

              
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address of the University</label>
                  <div class="col-sm-9">
                    <textarea name="alamat_u" class="form-control" disabled><?= $compData['alamat_u'] ?></textarea>
                  </div>
                </div>
              </div> 
            </div>
        

            <p class="card-description">Applciant's Acknowledgement</p>

            <div class="row">

            <div class="col-md-6">
              
            <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Acknowledgement</label>
                  <div class="col-sm-9">
                    <textarea name="pengakuan" class="form-control" disabled><?= $compData['pengakuan'] ?></textarea>
                  </div>
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

