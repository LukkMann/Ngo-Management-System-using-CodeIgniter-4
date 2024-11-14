<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



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
        <a class="navbar-brand brand-logo mr-5" href="<?= base_url('admin/adminhome') ?>"><img src="images/logo2.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('admin/adminhome') ?>"><img src="images/logo-mini.svg" alt="logo"/></a>
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
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Form Asnaf Status</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>  
                      </thead>
                      <tbody>

                      <tr>
                          <td><?= $asnafStatus['inProcess'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-warning">In Process</div></td>
                        </tr>

                        <tr>
                          <td><?= $asnafStatus['successful'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-success">Successfull</div></td>
                        </tr>
                       
                        <tr>
                          <td><?= $asnafStatus['reject'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-danger">Reject</div></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>


      <div class="content-wrapper">

<div class="row">
    
<div class="col-lg-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
  <div class="table-responsive">
    <h2>Asnaf List</h2>
        <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active" id="tab1" data-toggle="tab" href="#content1">In Process</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2" data-toggle="tab" href="#content2">Successfull</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab3" data-toggle="tab" href="#content3">Reject</a>
            </li>
        </ul>

        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="content1">
                <h3>In Process Asnaf List</h3>
                <!-- DataTable for Tab 1 -->
                <table id="dataTable1" class="table table-striped">
                    <thead>
                    <th> No</th>                           
            <th>Full Name </th>                        
            <th>IC/Passport Number</th>                                                     
            <th> Status </th>                          
            <th>Apply Date </th>
            <th>Provision</th>
            <th>Action</th>
        </tr>
                    </thead>
                    <tbody>
<?php if ($asnafs): ?>
<?php $counter = 1; ?>
<?php foreach ($asnafs as $asnaf): ?>
  <?php if ($asnaf['a_status'] === 'In Process'): ?>
      <tr>
          <td><?php echo $counter; ?></td>
          <td><?php echo $asnaf['nama_pemohon']; ?></td>
          <td><?php echo $asnaf['kad_pengenalan']; ?></td>
          <td><label class="badge badge-warning"><?php echo $asnaf['a_status']; ?></label></td>
          <td><?php echo $asnaf['as_date']; ?></td>
          <td><?php echo $asnaf['duit_asnaf']; ?></td>
          <td>
              <a href="<?php echo base_url('admin/detail-asnaf/'.$asnaf['asnaf_id']);?>" class="btn btn-outline-info btn-fw">View</a>
              <button type="button" class="btn btn-outline-danger btn-fw" data-toggle="modal" data-target="#exampleModal<?php echo $counter; ?>">Delete</button>
          </td>
      </tr>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <!-- Modal content -->
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Asnaf</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      Are you sure you want to delete
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="<?php echo base_url('delete-asnaf/'.$asnaf['asnaf_id']);?>"  class="btn btn-danger">Delete</a>
                  </div>
              </div>
          </div>
      </div>
      <?php $counter++; ?>
  <?php endif; ?>
<?php endforeach; ?>
<?php else: ?>
<tr>
  <td colspan="7">No data yet</td>
</tr>
<?php endif; ?>
</tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="content2">
                <h3>Successfull Asnaf List</h3>
                <!-- DataTable for Tab 2 -->
                <table id="dataTable2" class="table table-striped">
                    <thead>
                    <th> No</th>                           
            <th>Full Name </th>                        
            <th>IC/Passport Number</th>                                                     
            <th> Status </th>                          
            <th>Apply Date </th>
            <th>Provision</th>
            <th>Action</th>
        </tr>
                    </thead>
                    <tbody>
                  <?php if ($asnafs): ?>
                      <?php $counter = 1; ?>
                      <?php foreach ($asnafs as $asnaf): ?>
                          <?php if ($asnaf['a_status'] === 'Successfull'): ?>
                              <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $asnaf['nama_pemohon']; ?></td>
                        <td><?php echo $asnaf['kad_pengenalan']; ?></td>
                        <td><label class="badge badge-success"><?php echo $asnaf['a_status']; ?></label></td>
                        <td><?php echo $asnaf['as_date']; ?></td>
                        <td><?php echo $asnaf['duit_asnaf']; ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/detail-asnaf/'.$asnaf['asnaf_id']);?>" class="btn btn-outline-info btn-fw">View</a>
                            <button type="button" class="btn btn-outline-danger btn-fw" data-toggle="modal" data-target="#exampleModalSuccess<?php echo $counter; ?>">Delete</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalSuccess<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <!-- Modal content -->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Asnaf</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?php echo base_url('delete-asnaf/'.$asnaf['asnaf_id']);?>"  class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                                <?php $counter++; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7">No data yet</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="content3">
                <h3>Reject Asnaf List</h3>
                <!-- DataTable for Tab 3 -->
                <table id="dataTable3" class="table table-striped">
                    <thead>
                    <th> No</th>                           
            <th>Full Name </th>                        
            <th>IC/Passport Number</th>                                                     
            <th> Status </th>                          
            <th>Apply Date </th>
            <th>Provision</th>
            <th>Action</th>
        </tr>
                    </thead>
                    <tbody>
<?php if ($asnafs): ?>
<?php $counter = 1; ?>
<?php foreach ($asnafs as $asnaf): ?>
  <?php if ($asnaf['a_status'] === 'Reject'): ?>
      <tr>
          <td><?php echo $counter; ?></td>
          <td><?php echo $asnaf['nama_pemohon']; ?></td>
          <td><?php echo $asnaf['kad_pengenalan']; ?></td>
          <td><label class="badge badge-danger"><?php echo $asnaf['a_status']; ?></label></td>
          <td><?php echo $asnaf['as_date']; ?></td>
          <td><?php echo $asnaf['duit_asnaf']; ?></td>
          <td>
              <a href="<?php echo base_url('admin/detail-asnaf/'.$asnaf['asnaf_id']);?>" class="btn btn-outline-info btn-fw">View</a>
              <button type="button" class="btn btn-outline-danger btn-fw" data-toggle="modal" data-target="#exampleModalReject<?php echo $counter; ?>">Delete</button>
          </td>
      </tr>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalReject<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <!-- Modal content -->
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Asnaf</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      Are you sure you want to delete
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="<?php echo base_url('delete-asnaf/'.$asnaf['asnaf_id']);?>"  class="btn btn-danger">Delete</a>
                  </div>
              </div>
          </div>
      </div>
      <?php $counter++; ?>
  <?php endif; ?>
<?php endforeach; ?>
<?php else: ?>
<tr>
  <td colspan="7">No data yet</td>
</tr>
<?php endif; ?>
</tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function () {
            // DataTable initialization for each tab
            $('#dataTable1').DataTable();
            $('#dataTable2').DataTable();
            $('#dataTable3').DataTable();
        });
    </script>

        




</div>
</div>
</div>
    
 
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>
</html>

