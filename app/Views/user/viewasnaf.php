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
                                        <li><a href="<?= base_url('user') ?>">Home</a></li>
                                        <li><a href="">About</a></li>
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
                        <h3>Asnaf Application</h3>
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
   

<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Asnaf Application Form</h4>
        <form class="form-sample" method="post" action="submit-edit-asnaf">

          <p class="card-description">Personal info </p>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                  <input type="text" name="nama_pemohon" class="form-control" value="<?= $asnafData['nama_pemohon'] ?>" required/>
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Identification Card Number</label>
                <div class="col-sm-9">
                  <input type="text" name="kad_pengenalan" class="form-control" value="<?= $asnafData['kad_pengenalan'] ?>" required/>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <select class="form-control" name="jantina" value="<?= $asnafData['jantina'] ?>"  >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <textarea name="alamat" class="form-control"><?= $asnafData['alamat'] ?></textarea>
                  </div>
                </div>
              </div>
          
          </div>

            <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">District </label>
                  <div class="col-sm-9">
                    <input type="text" name="daerah" class="form-control" value="<?= $asnafData['daerah'] ?>"/>
                  </div>
                </div>
              </div> 

              
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Zip Code </label>
                  <div class="col-sm-9">
                    <input type="text" name="poskod" class="form-control" value="<?= $asnafData['poskod'] ?>"/>
                  </div>
                </div>
              </div> 
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">City </label>
                      <div class="col-sm-9">
                        <input type="text" name="bandar" class="form-control" value="<?= $asnafData['bandar'] ?>"/>
                      </div>
                    </div>
                  </div> 
    
                  
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">State</label>
                      <div class="col-sm-9">
                        <input type="text" name="negeri" class="form-control" value="<?= $asnafData['negeri'] ?>"/>
                      </div>
                    </div>
                  </div> 
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Mobile Phone No</label>
                      <div class="col-sm-9">
                        <input type="text" name="no_bimbit" class="form-control" value="<?= $asnafData['no_bimbit'] ?>"/>
                      </div>
                    </div>
                  </div> 
    
                  
                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Home Phone Number</label>
                      <div class="col-sm-9">
                        <input type="text" name="no_rumah" class="form-control" value="<?= $asnafData['no_rumah'] ?>"/>
                      </div>
                    </div>
                  </div> 
            </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Health Status</label>
                <div class="col-sm-9">
                  <select  class="form-control"  name="kesihatan" value="<?= $asnafData['kesihatan'] ?>">
                    <option value="Healthy">Healthy</option>
                    <option value="Not Healthy">Not Healthy</option>
                    <option value="Disabled">Disabled</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Describe health status if unwell or disabled</label>
                  <div class="col-sm-9">
                    <textarea name="hurai" class="form-control" ><?= $asnafData['hurai'] ?></textarea>
                  </div>
                </div>
            </div>
         </div>

         <p class="card-description">Information on the income and expenses of the applicant/parent/guardian</p>

         <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Position (if employed)</label>
                <div class="col-sm-9">
                  <input type="text" name="jawatan" class="form-control" value="<?= $asnafData['jawatan'] ?>" />
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Sector</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="sektor"  value="<?= $asnafData['sektor'] ?>">
                      <option value="Government">Government</option>
                      <option value="Private">Private</option>
                      <option value="Statutory body">Statutory body</option>
                      <option value="Self-employed">Self-employed</option>
                    </select>
                  </div>
                </div>
              </div>
          </div>


          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">State the type of job if self-employed</label>
                  <div class="col-sm-9">
                    <input type="text" name="jenis_pekerjaan" class="form-control" value="<?= $asnafData['jenis_pekerjaan'] ?>"/>
                  </div>
                </div>
              </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Total net income </label>
                  <div class="col-sm-9">
                    <input type="text" name="pendapatan" class="form-control" value="<?= $asnafData['pendapatan'] ?>"/>
                  </div>
                </div>
              </div>
          
          </div>

          <p class="card-description">Bank Information</p>

            <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Name of Account Holder </label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_pemegang" class="form-control" value="<?= $asnafData['nama_pemegang'] ?>"/>
                  </div>
                </div>
              </div> 

              
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Bank name </label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_bank" class="form-control" value="<?= $asnafData['nama_bank'] ?>"/>
                  </div>
                </div>
              </div> 
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Account Bank Number </label>
                      <div class="col-sm-9">
                        <input type="text" name="no_bank" class="form-control" value="<?= $asnafData['no_bank'] ?>"/>
                      </div>
                    </div>
                  </div> 

            </div>

          
          
        
          <div class="form-group mt-3">
            <button type="submit" class="btn btn-outline-success btn-fw">Submit</button>
            <button type="reset" class="btn btn-outline-primary btn-fw">Reset</button>
        </div>

        
        </form>
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
                            <li><a href="#">Donate</a></li>
                            <li><a href="<?= base_url('user') ?>">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Status Application</a></li>
                            <li><a href="<?= base_url('logout') ?>">Logout</a></li>
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









