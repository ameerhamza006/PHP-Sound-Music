<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xvelopers.com/demos/html/rekord/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2021 13:59:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.html" type="image/x-icon">
    <title>Record</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="css/typography.css">
	 <?php require "fun/functions.php"; ?>
</head>

<body class="sidebar-mini sidebar-collapse theme-dark  sidebar-expanded-on-hover has-preloader" style="display: none;">
<!-- Pre loader
  To disable preloader remove 'has-preloader' from body
 -->

<div id="loader" class="loader">
    <div class="loader-container">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- @Pre loader-->
<div id="app">

<main>
<div id="primary" class="p-t-b-100 height-full">
    <div class="container">
        <div class="text-center s-14 l-s-2 my-5">
            <a class="my-5" href="index.php">

                <span>RECORD</span>

            </a>
        </div>
        <div class="row">
            <div class="col-md-10 mx-md-auto">
                <div class="mt-5">
                    <div class="row grid">
                        <div class="col-md-7 card p-5">
                            <form class="form-material needs-validation" method="post" novalidate>
								<?php Sign_up(); ?>
                                <!-- Input -->
                                <div class="body">
                                       <div class="form-group form-float form-row">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" id="validationCustom01"  required>
                                            <label for="validationCustom01" class="form-label">Full Name</label>
											<div class="valid-feedback">
                                       Looks good!
                                    </div>
											<div class="invalid-feedback">
                                       Please Enter Fullname.
                                    </div>
                                        </div>
                                    </div>   
                                       <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" id="validationCustom01"  required>
                                            <label class="form-label">Email</label>
											<div class="valid-feedback">
                                       Looks good!
                                    </div>
											<div class="invalid-feedback">
                                       Please Enter Email.
                                    </div>
                                        </div>
                                    </div>  
                                      <div class="form-group form-float">

                                        <div class="form-line">
                                            <input type="text" name="number" class="form-control" id="validationCustom01"  required>
                                            <label class="form-label">Mobile Phone</label>
											<div class="valid-feedback">
                                       Looks good!
                                    </div>
											<div class="invalid-feedback">
                                       Please Enter Mobile Number.
                                    </div>
                                        </div>
                                    </div>   
                                        <div class="form-group form-float">
                                        <div class="form-line">
                                           
											<select class="form-control" name="country" id="validationCustom01"  required>
												<option disabled selected class="form-label">Country</option>
											<option class="form-label">Pakistan</option>
											<option class="form-label">Dubai</option>
											<option class="form-label">Turky</option>
											
											</select>
                                          <div class="valid-feedback">
                                       Looks good!
                                    </div>
											<div class="invalid-feedback">
                                       Please Select Country.
                                    </div>
                                        </div>
                                    </div>

                                        <div class="form-group form-float">
                                        <div class="form-line">
                                           <select class="form-control" name="city" id="validationCustom01"  required>
												<option disabled selected class="form-label">City</option>
											<option class="form-label">karachi</option>
											<option class="form-label">Lahore</option>
											<option class="form-label">Islamabad</option>
											
											</select>
											<div class="valid-feedback">
                                       Looks good!
                                    </div>
											<div class="invalid-feedback">
                                       Please Select City.
                                    </div>
                                        </div>
                                    </div><div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="address" class="form-control" id="validationCustom01"  required>
                                            <label class="form-label">Address</label>
											<div class="valid-feedback">
                                       Looks good!
                                    </div>
											<div class="invalid-feedback">
                                       Please Enter Address.
                                    </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" id="validationCustom01"  required>
                                            <label class="form-label">Password</label>
											<div class="valid-feedback">
                                       Looks good!
                                    </div>
											<div class="invalid-feedback">
                                       Please Enter password.
                                    </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="userbtn" class="btn btn-outline-primary btn-sm pl-4 pr-4" value="Sign Up">

                                    
                                </div>
                                <!-- #END# Input -->
                            </form>
                        </div>
                        <div class="col-md-5 " style="padding-left: 115px; padding-top: 120px;">
							<a href="Sign-in.php">
                            <h1 class="mt-3 font-weight-lighter" style="font-size: 28px;">Already Have An Account?</h1>
</a>
                            <div class="pt-2 mb-5">
                                <p>Lorem ipsum dolor sit amet, sapiente tenetur ut, veritatis.</p>
                            </div>
                            <a href="Sign-In.php" class="btn btn-outline-primary s-14 pl-4 pr-4">Login Here!</a>
                           


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main><!--@Page Content-->
</div><!--@#app-->
<!--/#app -->
<script src="https://maps.googleapis.com/maps/api/js?&amp;key=AIzaSyC3YkZNNySdyR87o83QEHWglHfHD_PZqiw&amp;libraries=places"></script>
<script src="assets/js/app.js"></script>

<!--Dashbord-->
	 <script src="js/jquery.min.js"></script>
     
      <script src="js/bootstrap.min.js"></script>
    
      
      <script src="js/jquery.counterup.min.js"></script>
     
      <script src="js/wow.min.js"></script>
     
      <script src="js/slick.min.js"></script>
     
      <script src="js/select2.min.js"></script>
     
      <script src="js/jquery.magnific-popup.min.js"></script>
     
      <script src="js/custom.js"></script>
	
</body>

<!-- Mirrored from xvelopers.com/demos/html/rekord/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2021 13:59:38 GMT -->
</html>