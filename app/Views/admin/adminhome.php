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




 
</head>



<body>

<?php 
        $session = session();
    $user_id = $session->get('user_id'); 
       
    ?>

   
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
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
   
                  <h3 class="font-weight-bold">Welcome</h3>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  
                 </div>
                </div>
              </div>
            </div>
          </div>
     
   
          <div class="row">
           
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Totals User Register</p>
                      <p class="fs-30 mb-2"><?= $totalUsers ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Form Asnaf</p>
                      <p class="fs-30 mb-2"><?= $totalAsnafForms ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Form Laptop Aid</p>
                      <p class="fs-30 mb-2"><?= $totalComputerForms ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Form Provision Aid</p>
                      <p class="fs-30 mb-2"><?= $totalProvisionForms ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawUserChart);

        function drawUserChart() {

            //User bar chart
            var data = google.visualization.arrayToDataTable([
                ['Year', 'User Count'],
                <?php foreach ($userCounts as $count): ?>
                    ['<?= $count->year ?>', <?= $count->count ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                chart: {
                    title: 'User Registration Count by Year',
                    subtitle: '2019-2030',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('user_div'));

            chart.draw(data, google.charts.Bar.convertOptions(options));


             //Asnaf bar chart
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Asnaf Application Count'],
                <?php foreach ($asnafCounts as $count): ?>
                    ['<?= $count->year ?>', <?= $count->count ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                chart: {
                    title: 'Asnaf Application Count by Year',
                    subtitle: '2019-2030',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('asnaf_chart_canvas'));

            chart.draw(data, google.charts.Bar.convertOptions(options));


            //Computer bar chart
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Computer Aid Application Count'],
                <?php foreach ($computerCounts as $count): ?>
                    ['<?= $count->year ?>', <?= $count->count ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                chart: {
                    title: 'Computer Aid Application Count by Year',
                    subtitle: '2019-2030',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('computer_chart_canvas'));

            chart.draw(data, google.charts.Bar.convertOptions(options));


            //Provision bar chart
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Provision Application Count'],
                <?php foreach ($provisionCounts as $count): ?>
                    ['<?= $count->year ?>', <?= $count->count ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                chart: {
                    title: 'Provision Application Count by Year',
                    subtitle: '2019-2030',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('provision_chart_canvas'));

            chart.draw(data, google.charts.Bar.convertOptions(options));


            //asnaf pie chart
            var data = google.visualization.arrayToDataTable([
                ['Status', 'Count'],
                <?php foreach ($asnafStatusCounts as $statusCount): ?>
                    ['<?= $statusCount->a_status ?>', <?= $statusCount->count ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                title: 'Asnaf Application Status Distribution',
            };

            var chart = new google.visualization.PieChart(document.getElementById('asnaf_pie_chart'));

            chart.draw(data, options);

              //computer pie chart
            var data = google.visualization.arrayToDataTable([
                ['Status', 'Count'],
                <?php foreach ($computerStatusCounts as $statusCount): ?>
                    ['<?= $statusCount->kom_status ?>', <?= $statusCount->count ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                title: 'Laptop Application Status Distribution',
            };

            var chart = new google.visualization.PieChart(document.getElementById('computer_pie_chart'));

            chart.draw(data, options);


                //Provision pie chart
                var data = google.visualization.arrayToDataTable([
                ['Status', 'Count'],
                <?php foreach ($provisionStatusCounts as $statusCount): ?>
                    ['<?= $statusCount->pe_status ?>', <?= $statusCount->count ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                title: 'Provision Application Status Distribution',
            };

            var chart = new google.visualization.PieChart(document.getElementById('provision_pie_chart'));

            chart.draw(data, options);


            

        }
    </script>

    <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
            <div id="user_div" style="width: 900px; height: 500px;" ></div>
            </div>
            </div>
        </div>

    

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
    <div id="asnaf_chart_canvas" style="width: 900px; height: 500px;"></div>
            </div>
            </div>
        </div>



<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
    <div id="computer_chart_canvas" style="width: 900px; height: 500px;"></div>
            </div>
            </div>
        </div>

      

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
    <div id="provision_chart_canvas" style="width: 900px; height: 500px;"></div>
            </div>
            </div>
        </div>


     

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
    <div id="asnaf_pie_chart" style="width: 900px; height: 500px;"></div>
            </div>
            </div>
        </div>

        
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
    <div id="computer_pie_chart" style="width: 900px; height: 500px;"></div>
            </div>
            </div>
        </div>

        <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
    <div id="provision_pie_chart" style="width: 900px; height: 500px;"></div>
            </div>
            </div>
        </div>


          
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

          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Form Computer Status</p>
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
                          <td><?= $computerStatus['inProcess'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-warning">In Process</div></td>
                        </tr>

                        <tr>
                          <td><?= $computerStatus['successful'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-success">Successfull</div></td>
                        </tr>
                       
                        <tr>
                          <td><?= $computerStatus['reject'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-danger">Reject</div></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            
           
          </div>

          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Form Provision Status</p>
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
                          <td><?= $provisionStatus['inProcess'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-warning">In Process</div></td>
                        </tr>

                        <tr>
                          <td><?= $provisionStatus['successful'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-success">Successfull</div></td>
                        </tr>
                       
                        <tr>
                          <td><?= $provisionStatus['reject'] ?></td>
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
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
 
  <!-- container-scroller -->

  <!-- plugins:js -->
  <!-- <script src="vendors/js/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- <script src="vendors/chart.js/Chart.min.js"></script> -->
  <!-- <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script> -->

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <!-- <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page -->


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
<script src="js/chart.js"></script>
<!-- Add the Google Bar Chart function here -->
<!-- Add the Google Bar Chart function here -->


<!-- End custom js for this page-->

</body>

</html>

