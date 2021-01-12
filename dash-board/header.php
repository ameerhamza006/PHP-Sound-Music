<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/muzik/html-dark/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 13:29:43 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Muzik - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../css/responsive.css">
	<?php require 'fun/functions.php'; ?>
   </head>
   <body class="sidebar-main-active right-column-fixed">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html" class="header-logo">
                  <img src="../images/logo.png" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">Sound</span> 
                  </div>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">

                  <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Album" || $page == "Add-Language" || $page == "Add-Ganre" || $page == "Add-Year" || $page == "Add-Artist" || $page == "Add-Lyrics" || $page == "Add-Audio" || $page == "Add-Video" || $page == "List-Album" || $page == "List-Language" || $page == "List-Ganre" || $page == "List-Year" || $page == "List-Artist" || $page == "List-Lyrics" || $page == "List-Audio" || $page == "List-Video" || $page == "List-User" || $page == "List-Admin" || $page == "List-Comment"  ){ echo 'true'; }else { echo 'false'; } ?>"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse <?php if($page == "Add-Album" || $page == "Add-Language" || $page == "Add-Ganre" || $page == "Add-Year" || $page == "Add-Artist" || $page == "Add-Lyrics" || $page == "Add-Audio" || $page == "Add-Video" || $page == "List-Album" || $page == "List-Language" || $page == "List-Ganre" || $page == "List-Year" || $page == "List-Artist" || $page == "List-Lyrics" || $page == "List-Audio" || $page == "List-Video" || $page == "List-User" || $page == "List-Admin" || $page == "List-Comment"  ){ echo 'show'; } ?>" data-parent="#iq-sidebar-toggle">
                           

                           <li>
                              
                              <ul>
                                 <li class=" menu-level">
                                    <a href="#sub-menus" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Album" || $page == "Add-Language" || $page == "Add-Ganre" || $page == "Add-Year"  || $page == "List-Album" || $page == "List-Language" || $page == "List-Ganre" || $page == "List-Year"  ){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line active"></i><span>Categorys</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="sub-menus" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Album" || $page == "Add-Language" || $page == "Add-Ganre" || $page == "Add-Year"  || $page == "List-Album" || $page == "List-Language" || $page == "List-Ganre" || $page == "List-Year"  ){ echo 'show'; } ?>">

                                    <li>
                                          <ul>
                                          <li class=" menu-level">
                                    <a href="#album" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Album" || $page == "Add-Language" || $page == "Add-Ganre" || $page == "Add-Year"  || $page == "List-Album" || $page == "List-Language" || $page == "List-Ganre" || $page == "List-Year"  ){ echo 'true'; }else{ echo "false"; } ?>"><i class="ri-play-circle-line "></i><span>Album</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="album" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Album" || $page == "List-Album"){ echo 'show'; } ?>">

                                    <li><a href="Add-Album.php" class="active"><i class="ri-record-circle-line active"></i>Add Album</a></li>
                                       <li class="active"><a href="List-Album.php"><i class="ri-record-circle-line"></i>List Album</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>


                                       <li>
                                          <ul>
                                          <li class="menu-level">
                                    <a href="#lang" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Language" || $page == "List-Language"){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line"></i><span>Languages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="lang" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Language" || $page == "List-Language"){ echo 'show'; } ?>">

                                    <li><a href="Add-languages-Ganres-Years.php"><i class="ri-record-circle-line"></i>Add Languages</a></li>
                                       <li><a href="List-Languages-Ganres-Years.php"><i class="ri-record-circle-line"></i>List Languages</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>

                                       <li>
                                          <ul>
                                          <li class="menu-level">
                                    <a href="#ganer" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Ganre" || $page == "List-Ganre"){ echo 'true'; } else { echo 'false'; }?>"><i class="ri-play-circle-line"></i><span>Ganres</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="ganer" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Ganre" || $page == "List-Ganre"){ echo 'show'; } ?>">

                                    <li><a href="Add-languages-Ganres-Years.php"><i class="ri-record-circle-line"></i>Add Ganres</a></li>
                                       <li><a href="List-Languages-Ganres-Years.php"><i class="ri-record-circle-line"></i>List Ganres</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>


                                       <li>
                                          <ul>
                                          <li class="menu-level">
                                    <a href="#year" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Year" || $page == "List-Year"){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line"></i><span>Years</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="year" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Year" || $page == "List-Year"){ echo 'show'; } ?>">

                                    <li><a href="Add-languages-Ganres-Years.php"><i class="ri-record-circle-line"></i>Add Years</a></li>
                                       <li><a href="List-Languages-Ganres-Years.php"><i class="ri-record-circle-line"></i>List Years</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>

                        
                                       
                                    </ul>
                                 </li>
                                 <li>

                                 
                              </ul>

                           </li>




                           <li>
                              
                              <ul>
                                 <li class="menu-level">
                                    <a href="#art" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Artist" || $page == "List-Artist" || $page == "Add-Lyrics" || $page == "List-Lyrics"){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line"></i><span>Artist</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="art" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Artist" || $page == "List-Artist" || $page == "Add-Lyrics" || $page == "List-Lyrics"){ echo 'show'; } ?>">

                                    <li>
                                          <ul>
                                          <li class="menu-level">
                                    <a href="#artist" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Artist" || $page == "List-Artist"){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line"></i><span>Singer Artist</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="artist" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Artist" || $page == "List-Artist"){ echo 'show'; } ?>">

                                    <li><a href="Add-Artist.php"><i class="ri-record-circle-line"></i>Add Artist</a></li>
                                       <li><a href="List-Artist.php"><i class="ri-record-circle-line"></i>List Artist</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>


                                       <li>
                                          <ul>
                                          <li class="menu-level">
                                    <a href="#lyrical" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Lyrics" || $page == "List-Lyrics"){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line"></i><span>Lyrical Artist</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="lyrical" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Lyrics" || $page == "List-Lyrics"){ echo 'show'; } ?>">

                                    <li><a href="Add-Lyrics.php"><i class="ri-record-circle-line"></i>Add Artist</a></li>
                                       <li><a href="List-Lyrics.php"><i class="ri-record-circle-line"></i>List Artist</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>

                                      
                                    </ul>
                                 </li>
                                 <li>

                                 
                              </ul>

                           </li>



                           
                           <li>
                              
                              <ul>
                                 <li class="menu-level">
                                    <a href="#music" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Audio" || $page == "List-Audio" || $page == "List-Video" || $page == "Add-Video"){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line"></i><span>Music</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="music" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Audio" || $page == "List-Audio" || $page == "List-Video" || $page == "Add-Video"){ echo 'show'; } ?>">

                                    <li>
                                          <ul>
                                          <li class="menu-level">
                                    <a href="#audio" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "Add-Audio" || $page == "List-Audio"){ echo 'true'; } else { echo 'false'; }?>"><i class="ri-play-circle-line"></i><span>Music Audio</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="audio" class="iq-submenu iq-submenu-data collapse <?php if($page == "Add-Audio" || $page == "List-Audio"){ echo 'show'; } ?>">

                                    <li><a href="Add-Music-Audio.php"><i class="ri-record-circle-line"></i>Add Music</a></li>
                                       <li><a href="List-Music-Audio.php"><i class="ri-record-circle-line"></i>List Music</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>


                                       <li>
                                          <ul>
                                          <li class="menu-level">
                                    <a href="#video" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?php if($page == "List-Video" || $page == "Add-Video"){ echo 'true'; }else { echo 'false'; } ?>"><i class="ri-play-circle-line"></i><span>Music Video</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="video" class="iq-submenu iq-submenu-data collapse <?php if($page == "List-Video" || $page == "Add-Video"){ echo 'show'; } ?>">

                                    <li><a href="Add-Music-Video.php"><i class="ri-record-circle-line"></i>Add Music</a></li>
                                       <li><a href="List-Music-Video.php"><i class="ri-record-circle-line"></i>List Music</a></li>
                                       </ul>
                                         </li>
                                          </ul>
                                       </li>

                                      
                                    </ul>
                                 </li>
                                 <li>

                                 
                              </ul>

                           </li>
                           <li><a href="List-Users.php"><i class="ri-record-circle-line"></i>Users</a></li>
                           <li><a href="List-Rating-&-Reviews.php"><i class="ri-record-circle-line"></i>Rating & Reveiws</a></li>
                           <li><a href="Add-&-List-Adi.php"><i class="ri-record-circle-line"></i>Admins </a></li>
                        </ul>
                     </li>
                     
                     <li><a href="../Latest.php"><i class="ri-record-circle-line"></i>Latest</a></li>
                     <li><a href="../Albums.php"><i class="ri-record-circle-line"></i>Albums</a></li>
                     <li><a href="../Artist.php"><i class="ri-record-circle-line"></i>Artists</a></li>
                     <li><a href="#"><i class="ri-record-circle-line"></i>Lyricals</a></li>
                     <li><a href="../Audio.php"><i class="ri-record-circle-line"></i>Audio Musics</a></li>
                     <li><a href="../Video.php"><i class="ri-record-circle-line"></i>Video Musics</a></li>
                     <li><a href="#"><i class="ri-record-circle-line"></i>Languages</a></li>
                     
                     <li>
                        <a href="#dashboar" class="iq-waves-effect" data-toggle="collapse"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboar" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="index.html"><i class="las la-house-damage"></i>Home</a></li>
                           <li><a href="latest.html"><i class="las la-headphones"></i>Latest</a></li>
                           <li><a href="albums.html"><i class="lar la-file-audio"></i>Albums</a></li>
                        </ul>
                     </li>
                     <li>
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="admin-dashboard.html"><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="admin-category.html"><i class="ri-function-line"></i>Category</a></li>
                        <li><a href="admin-writer.html"><i class="las la-user"></i>Writer</a></li>
                        <li><a href="admin-singer.html"><i class="las la-microphone-alt"></i>Singer</a></li>
                        <li><a href="admin-song.html"><i class="las la-play-circle"></i>Music</a></li>
                     </ul>
                  </li>
                     <li>
                        <a href="calendar.html" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Calendar</span></a>
                     </li>
                     <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                           <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li>
                           <li><a href="profile-edit.html"><i class="las la-edit"></i>User Edit</a></li>
                           <li><a href="add-user.html"><i class="las la-plus-circle"></i>User Add</a></li>
                           <li><a href="user-list.html"><i class="las la-th-list"></i>User List</a></li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="elements">
                              <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                                 <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>
                                 <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>
                                 <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>
                                 <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>
                                 <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>
                                 <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>
                                 <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>
                                 <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>
                                 <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>
                                 <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>
                                 <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>
                                 <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>
                                 <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>
                                 <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>
                                 <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>
                                 <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>
                                 <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>
                                 <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>
                                 <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>
                                 <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>
                              </ul>
                           </li>
                           <li class="form">
                              <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                                 <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>
                                 <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                                 <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                                 <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>
                                 <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                                 <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                                 <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                                 <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                                 <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                                 <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                                 <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="charts" class="iq-submenu collapse" data-parent="#ui-elements">
                                 <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>
                                 <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                                 <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                                 <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                                 <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                                 <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                                 <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                                 <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                                 <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="active active-menu">
                        <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="pages" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li>
                              <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                                 <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                                 <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                                 <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                                 <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                                 <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                              </ul>
                           </li>
                           <li class="active">
                              <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="extra-pages" class="iq-submenu collapse show" data-parent="#pages">
                                 <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                                 <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                                 <li class="active"><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                                 <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                                 <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                                 <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                                 <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                                 <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                                 <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>

                    

                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                     <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index.html" class="header-logo">
                           <img src="../images/logo.png" class="img-fluid rounded-normal" alt="">
                           <div class="pt-2 pl-2 logo-title">
                              <span class="text-primary text-uppercase">Muzik</span>
                           </div>
                        </a>
                     </div>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
                     <li><a href="../index.php">Home</a></li>
                        <li><a href="../Latest.php">Latest</a></li>
                        <li><a href="../Albums.php">Albums</a></li>
						 <li><a href="../Artist.php">Artist</a></li>
						 <li><a href="../Audio.php">Audio</a></li>
						 <li><a href="../Video.php">Video</a></li>
                     </ul>
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon">
                           <div class="iq-search-bar">
                              <form action="#" class="searchbox">
                                 <input type="text" class="text search-input" placeholder="Search Here..">
                                 <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                                 <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                              </form>
                           </div>
                        </li>
                        <li class="nav-item nav-icon search-content">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span class="ripple rippleEffect " ></span>
                           <i class="ri-search-line text-black"></i>
                           </a>
                           <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                           <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                        </form>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="las la-cog"></i>
                           <span class=" dots"></span>
                           </a>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="lar la-envelope"></i>
                           <span class="massage-icon dots badge badge-primary">5</span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Bni Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                           <i class="ri-notification-line block"></i>
                           <span class="notice-icon dots badge badge-primary">+</span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded img-fluid" src="../images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Barry</h6>
                                             <small class="float-right">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded img-fluid" src="../images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right">5 days ago</small>
                                             <p class="mb-0">Cyst Barry</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded img-fluid" src="../images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Two customer is left</h6>
                                             <small class="float-right">2 days ago</small>
                                             <p class="mb-0">Cyst Barry</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded img-fluid" src="../images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Mail from Fenny</h6>
                                             <small class="float-right">3 days ago</small>
                                             <p class="mb-0">Cyst Barry</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="line-height pt-3">
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="../images/user/11.png" class="img-fluid rounded-circle" alt="user">
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-account-box-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Account settings</h6>
                                             <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-lock-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Privacy Settings</h6>
                                             <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
           
                 