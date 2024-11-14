<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yayasan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">  
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php 
        $session = session();
    $user_id = $session->get('user_id'); 
       
    ?>

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i>+6011-2849-5341</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>lukkim46@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="<?= base_url('user') ?>">
                                    <img src="img/logo1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?= base_url('user') ?>">home</a></li>
                                        <li><a href="<?= base_url('profile') ?>">Profile</a></li>
                                        <li><a href="#">Aid Application <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url('asnaf') ?>">Asnaf</a></li>
                                                <li><a href="<?= base_url('computer') ?>">Laptop Aid</a></li>
                                                <li><a href="<?= base_url('provision') ?>">Provision Service</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url('status') ?>">Status Application</a></li>
                                        <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                                    </ul>
                                </nav>
                               
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Status Application Form</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (session()->has('alert')): ?>
    <?= session('alert') ?>
<?php endif; ?>

<?php if (session()->has('alertSuccess')): ?>
    <?= session('alertSuccess') ?>
<?php endif; ?>
    
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Form Application</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>


     
    <tr>
        <td>Asnaf</td>
        <?php if (empty($asnafData)): ?>
            <td><label class="badge badge-info">Not Apply yet</label></td>
            <td>Not Apply yet</td>
        <?php else: ?>
            <?php foreach ($asnafData as $asnaf): ?>
            <?php if ($asnaf['a_status'] === 'Successfull'): ?>
                <td><label class="badge badge-success"><?php echo $asnaf['a_status']; ?></label></td>
                <td>Can't Update Form Information</td>
            <?php elseif ($asnaf['a_status'] === 'Reject'): ?>
                <td><label class="badge badge-danger"><?php echo $asnaf['a_status']; ?></label></td>
                <td>Can't Update Form Information</td>
            <?php else: ?>
                <?php
                // Calculate the time difference
                $currentTime = time();
                $statusTime = strtotime($asnaf['as_date']); // Assuming 'created_at' is the column storing the status creation time

                // Calculate the time difference in seconds
                $timeDifference = $currentTime - $statusTime;

                // Calculate the time difference in days
                $daysDifference = floor($timeDifference / (60 * 60 * 24));

                // Show the "Update" button if it's within the allowed time frame (2 days)
                $showUpdateButton = $daysDifference <= 2;
                ?>
                <td><label class="badge badge-warning"><?php echo $asnaf['a_status']; ?></label></td>
                <td>
                    <?php if ($showUpdateButton): ?>
                        <a href="<?php echo base_url('viewasnaf');?>" class="btn btn-outline-success btn-fw">Update</a>
                    <?php else: ?>
                        <!-- Show a message or alternative content when the button is not visible -->
                        Update button is not available after 2 days from the date that user apply
                    <?php endif; ?>
                </td>
            <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </tr>




    <tr>
        <td>Laptop Aid</td>
        <?php if (empty($computerData)): ?>
            <td><label class="badge badge-info">Not Apply yet</label></td>
            <td>Not Apply yet</td>
        <?php else: ?>
            <?php foreach ($computerData as $computer): ?>
            <?php if ($computer['kom_status'] === 'Successfull'): ?>
                <td><label class="badge badge-success"><?php echo $computer['kom_status']; ?></label></td>
                <td>Can't Update Form Information</td>
            <?php elseif ($computer['kom_status'] === 'Reject'): ?>
                <td><label class="badge badge-danger"><?php echo $computer['kom_status']; ?></label></td>
                <td>Can't Update Form Information</td>
            <?php else: ?>
                <?php
                // Calculate the time difference
                $currentTime = time();
                $statusTime = strtotime($computer['kom_date']); // Assuming 'created_at' is the column storing the status creation time

                // Calculate the time difference in seconds
                $timeDifference = $currentTime - $statusTime;

                // Calculate the time difference in days
                $daysDifference = floor($timeDifference / (60 * 60 * 24));

                // Show the "Update" button if it's within the allowed time frame (2 days)
                $showUpdateButton = $daysDifference <= 2;
                ?>
                <td><label class="badge badge-warning"><?php echo $computer['kom_status']; ?></label></td>
                <td>
                    <?php if ($showUpdateButton): ?>
                        <a href="<?php echo base_url('viewcomputer');?>" class="btn btn-outline-success btn-fw">Update</a>
                    <?php else: ?>
                        <!-- Show a message or alternative content when the button is not visible -->
                        Update button is not available after 2 days from the date that user apply

                    <?php endif; ?>
                </td>
            <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </tr>


    <tr>
        <td>Provision Service Aid</td>
        <?php if (empty($provisionData)): ?>
            <td><label class="badge badge-info">Not Apply yet</label></td>
            <td>Not Apply yet</td>
        <?php else: ?>
            <?php foreach ($provisionData as $provision): ?>
            <?php if ($provision['pe_status'] === 'Successfull'): ?>
                <td><label class="badge badge-success"><?php echo $provision['pe_status']; ?></label></td>
                <td>Can't Update Form Information</td>
            <?php elseif ($provision['pe_status'] === 'Reject'): ?>
                <td><label class="badge badge-danger"><?php echo $provision['pe_status']; ?></label></td>
                <td>Can't Update Form Information</td>
            <?php else: ?>
                <?php
                // Calculate the time difference
                $currentTime = time();
                $statusTime = strtotime($provision['pe_date']); // Assuming 'created_at' is the column storing the status creation time

                // Calculate the time difference in seconds
                $timeDifference = $currentTime - $statusTime;

                // Calculate the time difference in days
                $daysDifference = floor($timeDifference / (60 * 60 * 24));

                // Show the "Update" button if it's within the allowed time frame (2 days)
                $showUpdateButton = $daysDifference <= 2;
                ?>
                <td><label class="badge badge-warning"><?php echo $provision['pe_status']; ?></label></td>
                <td>
                    <?php if ($showUpdateButton): ?>
                        <a href="<?php echo base_url('viewprovision');?>" class="btn btn-outline-success btn-fw">Update</a>
                    <?php else: ?>
                        <!-- Show a message or alternative content when the button is not visible -->
                        Update button is not available after 2 days from the date that user apply.

                    <?php endif; ?>
                </td>
            <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
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


 <!-- footer_start  -->
 <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo1.png" alt="">
                            </a>
                        </div>
                        <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Menu
                        </h3>
                        <ul class="links">
                            <li><a href="<?= base_url('user') ?>">Home</a></li>
                            <li><a href="<?= base_url('profile') ?>">Profile</a></li>
                            <li><a href="<?= base_url('Logout') ?>">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Contacts
                        </h3>
                        <div class="contacts">
                            <p>+6011-2849-5341<br>
                                info@loveuscharity.com <br>
                                Flat 20, Reynolds Neck, North
                                Helenaville, FV77 8WS
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="row">
                <div class="bordered_1px "></div>
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_end  -->

<!-- link that opens popup -->

<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>
<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>
</body>

</html>









