<!DOCTYPE html> <?php session_start(); ?>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.html" type="image/x-icon">
    <title>Sound</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
         
         

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link rel="stylesheet" href="assets/js/jquery.rateyo.min.css">
	
    <?php require "fun/functions.php"; ?>
	<?php require_once('v/getid3/getid3.php'); ?>
	
	<?php
	
	error_reporting(0);
	
	$session_email = $_SESSION['email'];
	$select = "select * from users where email='$session_email'";
	$run = mysqli_query($connect,$select);
	$fetch = mysqli_fetch_array($run);
	$s_id = $fetch['0'];
	$s_user_id = $fetch['1'];
	$s_name = $fetch['2'];
	$s_email = $fetch['3'];
	$s_number = $fetch['4'];
	$s_country = $fetch['5'];
	$s_city = $fetch['6'];
	$s_address = $fetch['7'];
	$s_image = $fetch['8'];
	$s_password = $fetch['9'];
	$s_role = $fetch['10'];
	
	
	?>
	
    
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


<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <div class="sidebar">
				 <div class="d-flex align-items-center" style="
    margin-left: 20px;
">
            <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle  paper-nav-toggle-sidenav ml-2 mr-2">
                <i></i>
            </a>
            <a class="navbar-brand d-none d-lg-block" href="index.html" style="
    margin-left: 19px;">
                <div class="d-flex align-items-center s-14 l-s-2">
                    <span>SOUND</span>
                </div>
            </a>
        </div>
        <ul class="sidebar-menu">
			<?php if($_SESSION['email'] && $s_role == "Admin"){ ?>
			<li><a class="ajaxifyPage " href="dash-board/index.php">
                 <i class="icon icon-home s-24"></i><span>Dashboard</span>
            </a>
            </li>
			<?php } ?>
            <li><a class="ajaxifyPage active" href="index.php">
                 <i class="icon icon-home s-24"></i><span>Home</span>
            </a>
            </li>
			<li><a class="ajaxifyPage " href="Latest.php">
                 <i class="icon icon-newspaper s-24"></i> <span>Latest</span>
            </a>
            </li>
            <li><a class="ajaxifyPage" href="Songs.php">
                 <i class="icon icon-layers-1 s-24"></i><span>Year</span>
            </a>
            <li>
            <li><a class="ajaxifyPage" href="Albums.php">
                <i class="icon icon-windows  s-24"></i><span>Albums</span>
            </a>
            <li>
            <li><a class="ajaxifyPage" href="Video.php">
                 <i class="icon icon-video-player-2  s-24"></i><span>Videos</span>
            </a>
            </li>
            <li><a class="ajaxifyPage" href="Songs.php">
                 <i class="icon icon-video-player-2  s-24"></i><span>Audio</span>
            </a>
            </li>

            <li><a class="ajaxifyPage" href="Songs.php">
                <i class="icon icon-photo-camera-1 s-24"></i> <span>Languages</span>
            </a>
            </li>
			<li><a class="ajaxifyPage" href="Artist.php">
                <i class="icon icon-users s-24"></i> <span>Artists</span>
            </a>
            </li>
            <li><a class="ajaxifyPage" href="blog.html">
                <i class="icon icon-newspaper s-24"></i> <span>Blog</span>
            </a>
            </li>

            
            <li class="menu-item-has-children">
                <a href="#">
                    <i class="icon icon-menu-4 s-24"></i> <span>Pages</span>
                    <i class=" icon-angle-left  pull-right"></i>
                </a>
                <ul class="sub-menu">

                    <li><a href="page-blank.html"><i class="icon icon-document"></i>Simple Blank</a>
                    </li>
                    <li><a href="page-blank-tabs.html"><i class="icon icon-document"></i>Tabs Blank</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="icon icon-document"></i>Login Page</a>
                    </li>
                    <li>
                        <a href="404.html"><i class="icon icon-document"></i>404 Page</a>
                    </li>
                    <li>
                        <a href="profile.html"><i class="icon icon-document"></i>Profile</a>
                    </li>

                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">
                    <i class="icon icon-add-3  s-24"></i> <span>Elements</span>
                    <i class=" icon-angle-left pull-right"></i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="element-widgets.html">
                            <i class="icon icon-app text-primary s-14"></i> <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a href="element-typography.html">
                            <i class="icon icon-text-width text-primary s-14"></i> <span>Typography</span>
                        </a>
                    </li>
                    <li><a href="element-slider.html"><i class="icon icon-sliders text-primary s-14"></i>
                        <span>Slider</span></a></li>
                    <li><a href="element-tabs.html"><i class="icon icon-folder text-primary s-14"></i>
                        <span>Tabs</span></a></li>
                    <li><a href="element-progress-bars.html"><i class="icon icon-battery-5 text-primary s-14"></i>
                        <span>Progress Bars</span></a></li>

                    <li><a href="element-preloaders.html"><i class="icon icon-attachment text-primary s-14"></i>
                        <span>Preloaders</span></a></li>
                    <li>
                        <a href="element-letters.html">
                            <i class="icon icon-user-1 text-primary s-14"></i>
                            <span>Avatar Placeholders</span>
                        </a>
                    </li>
                    <li>
                        <a href="element-icons.html">
                            <i class="icon icon-archive-3 text-primary s-14"></i> <span>Icons</span>
                        </a>
                    </li>
                    <li class="mb-5"><a href="element-colors.html">
                        <i class="icon icon-view-1 text-primary s-14"></i> <span>Colors</span>
                    </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</aside>
<!--Sidebar End-->

<!-- Right Sidebar -->
<aside class="control-sidebar fixed ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>PlayList</h4>
            <p>Awesome Collection for you</p>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <ul id="playlist" class="playlist list-group">
                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="assets/img/demo/a1.jpg" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="assets/img/demo/a2.jpg" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track3.mp3" data-wave="assets/media/track3.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="assets/img/demo/a4.jpg" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track1.mp3"  data-wave="assets/media/track1.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="assets/img/demo/a5.jpg" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="assets/img/demo/a6.jpg" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>


            </ul>

        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow  fixed"></div>

<svg class="d-none">
    <defs>
        <symbol id="icon-cross" viewBox="0 0 24 24">
            <title>cross</title>
            <path
                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
            />
        </symbol>
    </defs>
</svg>
<div class="searchOverlay page">
    <button
            id="btn-searchOverlay-close"
            class="btn btn--searchOverlay-close"
            aria-label="Close searchOverlay form"
    >
        <svg class="icon icon--cross">
            <use xlink:href="#icon-cross"></use>
        </svg>
    </button>
    <div class="searchOverlay__inner  searchOverlay__inner--up ">
  <form class="searchOverlay__form" method="get" action="searchh.php" >
      <div class="row">
		  <div class="col-md-10">
	  <input type="text" name="q" placeholder="Search123" autocomplete="off" spellcheck="false" class="form-control" id="q" style="height: 118px;" />
			  </div>
		  <div class="col-md-2">
	  <button type="submit" name="search" class="btn btn-primary" style="
    float: right;
    width: 123%;
    padding: 23px;
    
    color: white;
    font-size: 46px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
"><i class="icon icon-search"></i></button>
			  </div>
		  </div>
            <span class="searchOverlay__info">Hit enter to searchOverlay or ESC to close</span>
	  
      </form>
		
    </div>
	
    <div class="searchOverlay__inner searchOverlay__inner--down">
        <div class="searchOverlay__related">
            <div class="searchOverlay__suggestion" id="countryList">
            
            </div>
        
        </div>
    </div>
</div>
	
	
	
	<script>  
 $(document).ready(function(){  
      $('#q').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"fun/search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'h6', function(){  
           $('#q').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>

		<nav class="mainnav navbar navbar-default justify-content-between">
    <!--to center logo replace classess by:  navbar-center -->
    <div class="container relative  px-md-5 ">
    
        <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i></i>
    </a>
    <a class="navbar-brand" href="index.php" style="
    margin-left: 70px;
">
        <div class="d-flex align-items-center s-14 l-s-2">
            <span>SOUND</span>
        </div>
    </a>
    <div class="paper_menu ml-auto">
        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
            <ul class="dl-menu align-items-center">
                <li class="ajaxifyPage"><a href="index.php">Home</a>
               
                </li>
               
                <li><a class="ajaxifyPage" href="Latest.php">
                    <span>Latest</span>
                </a>
                </li>
				
                <li><a class="ajaxifyPage" href="Albums.php">
                    <span>Albums</span>
                </a>
                </li>
				<li><a class="ajaxifyPage" href="Songs.php">
                     <span>Audio</span>
                </a>
                </li>
                <li><a class="ajaxifyPage" href="Video.php">
                     <span>Videos</span>
                </a>
                </li>
                 <li><a class="ajaxifyPage" href="Artist.php">
                     <span>Artists</span>
                </a>
				</li>
    
                <li><a class="ajaxifyPage" href="gallery.html">
                     <span>Gallery</span>
                </a>
                </li>
               
    
               <?php if(!$_SESSION['email']){  ?>
                <li><a href="Sign-in.php" class="btn btn-primary nav-btn">Sign
                    In</a>
                </li>
				<?php }else { logout(); ?>
				
				<form method="post">
				 <li>
					 <button name="logout" class="btn btn-primary btb-xs ">Logout</button>
					 
                </li>
					</form>
				<?php } ?>
            </ul>

        </div>
        <!-- Login modal -->
    </div>


</div>


</nav>

<!--navbar-- player-->

<nav class="navbar-wrapper navbar-bottom-fixed shadow">
    <div class="navbar navbar-expand player-header justify-content-between  bd-navbar">
        <div class="d-flex align-items-center">
            <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle  paper-nav-toggle-sidenav ml-2 mr-2">
                <i></i>
            </a>
            <a class="navbar-brand d-none d-lg-block" href="index.html">
                <div class="d-flex align-items-center s-14 l-s-2">
                    <span> SOUND</span>
                </div>
            </a>
        </div>
        <!--Player-->
        <div id="mediaPlayer" class="player-bar col-lg-8 col-md-5" >
            <div class="row align-items-center grid">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <button id="previousTrack" class="btn btn-link d-none d-sm-block">
                            <i class="icon-back s-18"></i>
                        </button>
                        <button class=" btn btn-link" id="playPause">
                            <span id="play"><i class="icon-play s-36"></i></span>
                            <span id="pause" style="display: none"><i class="icon-pause s-36 text-primary"></i></span>
                        </button>
                        <button id="nextTrack" class="btn btn-link d-none d-sm-block">
                            <i class="icon-next s-18"></i>
                        </button>
                    </div>
                </div>
                <div class="col-8 d-none d-lg-block">
                    <div id="waveform"></div>
                </div>
                <div class="col d-none d-lg-block">
                    <small class="track-time mr-2 text-primary align-middle"></small>
                    <a data-toggle="control-sidebar">
                        <i class="icon icon-menu-3 s-24 align-middle"></i>
                    </a>
                </div>
            </div>

        </div>
        <!--@Player-->
        <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

        <!-- Right Sidebar Toggle Button -->
        <li class="searchOverlay-wrap">
            <a href="#" id="btn-searchOverlay" class="nav-link mr-3 btn--searchOverlay no-ajaxy">
                <i class="icon icon-search s-24"></i>
            </a>

        </li>
        <!-- User Account-->
        <li class="dropup custom-dropdown user user-menu ">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <figure class="avatar">
                    <img src="assets/img/demo/u7.png" alt="">
                </figure>
                <i class="icon-more_vert "></i>
            </a>
            <div class="dropdown-menu p-4 dropdown-menu-right">
				 <div class="col text-center">
                        <a href="#" class=" text-center" ><span><?php echo $s_name ?></span></a>
                    </div>
				
                <div class="row box justify-content-between my-4">
                    <div class="col text-center">
                        <a class="ajaxifyPage" href="saved.html">
                            <i class="icon icon-save s-24"></i> <span>Saved</span>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="ajaxifyPage" href="saved.html">
                            <i class="icon icon-heart s-24"></i> <span>Favourites</span>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="ajaxifyPage" href="profile.html">
                            <i class="icon-user-4  s-24"></i>
                            <div class="pt-1">Profile</div>
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
    </div>

</nav>

<!--Page Content-->
<main id="pageContent" class="page has-sidebar">

		