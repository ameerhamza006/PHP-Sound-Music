<?php
require 'header.php'; $page = "List-Video";
error_reporting(0);
if($_GET['Delete-Video']){
	$g_id = $_GET['Delete-Video'];
	$delete = "DELETE FROM videos where id='$g_id'";
	$delete_query = mysqli_query($connect,$delete);
	echo "<script>window.location.href='List-Music-Video.php';</script>";
	
}else

if($_GET['Edit-Video']){
	
	$get_id = $_GET['Edit-Video'];
	
#for album get all value 	
$adselect = "select * from videos where id='$get_id'";
$adrun = mysqli_query($connect,$adselect);
	$row = mysqli_fetch_array($adrun);
	$alid = $row['0'];
	$altitle = $row['1'];
	$alartist = $row['2'];
	$alalbum = $row['3'];
	$allang = $row['4'];
	$alyear = $row['5'];
	$alganre = $row['6'];
	$allyries = $row['7'];
	$alcomp = $row['8'];
	$aldes = $row['9'];
	
	
	

#for Artist  get
$arselect = "select * from artist where id='$alartist'";
$arrun = mysqli_query($connect,$arselect);
	

#for Language get
$laselectt = "select * from languages where id='$allang'";
$larun = mysqli_query($connect,$laselectt);

#for Year get
$yeselecttt = "select * from years where id='$alyear'";
$yerun = mysqli_query($connect,$yeselecttt);

#for Album get
$abselectttt = "select * from album  where id='$alalbum'";
$abrun = mysqli_query($connect,$abselectttt);


#for Ganre get
$gaselectttt = "select * from ganres where id='$alganre'";
$garun = mysqli_query($connect,$gaselectttt);

#for Lyrical get
$lyselectttt = "select * from lyrics where id='$allyries'";
$lyrun = mysqli_query($connect,$lyselectttt);	
	
	
	
	
	
#for Artist Dropdown
$select = "select * from artist";
$run = mysqli_query($connect,$select);
	

#for Language Dropdown
$selectt = "select * from languages";
$runn = mysqli_query($connect,$selectt);

#for Year Dropdown
$selecttt = "select * from years";
$runnn = mysqli_query($connect,$selecttt);

#for Album Dropdown
$selectttt = "select * from album";
$runal = mysqli_query($connect,$selectttt);


#for Ganre Dropdown
$gselectttt = "select * from ganres";
$grun = mysqli_query($connect,$gselectttt);

#for Lyrical Dropdown
$lselectttt = "select * from lyrics";
$lrun = mysqli_query($connect,$lselectttt);
	
	
	?>
	
	 <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Update_Video();  ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Music Video</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Music-Video.php" class="btn btn-primary">List Music</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" value="<?php echo $altitle ?>" name="title" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Album</label>
                                    <select name="album" class="form-control" id="validationCustom04" required>
                                      <?php while($fetch = mysqli_fetch_array($abrun)){ $aid = $fetch['id']; $aanamee = $fetch['name']; ?>
                                       <option selected value="<?php echo $aid ?>"><?php echo $aanamee ?></option>
										<?php } ?>
                                      <?php while($fetch = mysqli_fetch_array($runal)){ $aidd = $fetch['id']; $anamee = $fetch['name']; ?>
                                       <option value="<?php echo $aidd ?>"><?php echo $anamee ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Artist</label>
                                    <select name="artist" class="form-control" id="validationCustom04" required>
                                      <?php while($fetch = mysqli_fetch_array($arrun)){ $arid = $fetch['id']; $arnamee = $fetch['name']; ?>
                                       <option selected value="<?php echo $arid ?>"><?php echo $arnamee ?></option>
										<?php } ?>
                                       <?php while($fetch = mysqli_fetch_array($run)){ $id = $fetch['id']; $name = $fetch['name']; ?>
                                       <option value="<?php echo $id ?>"><?php echo $name ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Lyrics</label>
                                    <select name="lyrical" class="form-control" id="validationCustom04" required>
                                       <?php while($fetch = mysqli_fetch_array($lyrun)){ $lyid = $fetch['id']; $lynamee = $fetch['name']; ?>
                                       <option selected value="<?php echo $lyid ?>"><?php echo $lynamee ?></option>
										<?php } ?>
                                      <?php while($fetch = mysqli_fetch_array($lrun)){ $lidd = $fetch['id']; $lnamee = $fetch['name']; ?>
                                       <option value="<?php echo $lidd ?>"><?php echo $lnamee ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Language</label>
                                    <select name="lang" class="form-control" id="validationCustom04" required>
                                       <?php while($fetch = mysqli_fetch_array($larun)){ $laid = $fetch['id']; $lanamee = $fetch['name']; ?>
                                       <option selected value="<?php echo $laid ?>"><?php echo $lanamee ?></option>
										<?php } ?>
                                       <?php while($fetch = mysqli_fetch_array($runn)){ $idd = $fetch['id']; $namee = $fetch['name']; ?>
                                       <option value="<?php echo $idd ?>"><?php echo $namee ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Ganre</label>
                                    <select name="ganre" class="form-control" id="validationCustom04" required>
                                       <?php while($fetch = mysqli_fetch_array($garun)){ $gaid = $fetch['id']; $ganamee = $fetch['name']; ?>
                                       <option selected value="<?php echo $gaid ?>"><?php echo $ganamee ?></option>
										<?php } ?>
                                        <?php while($fetch = mysqli_fetch_array($grun)){ $giddd = $fetch['id'];  $gname = $fetch['1'] ?>
                                       <option value="<?php echo $giddd ?>"><?php echo $gname ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Year</label>
                                    <select name="year" class="form-control" id="validationCustom04" required>
                                       <?php while($fetch = mysqli_fetch_array($yerun)){ $yeiddd = $fetch['id']; $yemonth = $fetch['month']; $yedate = $fetch['date']; $yeyear = $fetch['year']; ?>
                                       <option value="<?php echo $yeiddd ?>"><?php echo $yeyear ?></option>
										<?php } ?>
                                       <?php while($fetch = mysqli_fetch_array($runnn)){ $iddd = $fetch['id']; $month = $fetch['month']; $date = $fetch['date']; $year = $fetch['year']; ?>
                                       <option value="<?php echo $iddd ?>"><?php echo $year ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>

                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Composer</label>
                                    <input name="compo" value="<?php echo $alcomp ?>" type="text" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
								  
								  <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Description</label>
                                    <textarea  name="des" class="form-control" id="validationCustom01" rows="4"><?php echo $aldes ?></textarea>
                                    
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
								 
                              </div>
                              
                              <button class="btn btn-primary" name="uvbtn" type="submit">Update Music</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>
	
	


<?php
	
}else if($_GET['Edit-file']) {
	
	 $get_idi=$_GET['Edit-file'];
	#for album get all value 	
$adselect = "select * from videos where id='$get_idi'";
$adrun = mysqli_query($connect,$adselect);
	$row = mysqli_fetch_array($adrun);
	$img_id = $row['0'];
	$img_title = $row['1'];
	$img_artist = $row['2'];
	$img_album = $row['3'];
	$img = $row['10'];
	
	
	
	$select = "select * from artist where id='$img_artist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$arrname = $fetch['1'];
		
		$selectt = "select * from album where id='$img_album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$all_album= $fetchh['1'];
	
	
?>




 <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Update_Video_image(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Music Video Image</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Music-Video.php" class="btn btn-primary">List Music</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" name="title" value="<?php echo $img_title ?>" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                
                                
								  
								   <div class="col-md-6 mb-3">
                                   <img <?php echo "src='Artist/$arrname/$all_album/$img_title/$img'"; ?> style="height: 150px; width: 200px;" class="img-fluid avatar-50  rounded" alt="author-profile">
                                   
                                    
                                 </div>
								  
								 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Choose Image</label>
							<div class="custom-file">
                                 <input name="upic" type="file" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                              
                              <button class="btn btn-primary" name="vubtn" type="submit">Update Music</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>


<div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Update_music_Video(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Music Video </h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Music-Video.php" class="btn btn-primary">List Music</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" name="atitle" value="<?php echo $img_title ?>" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                
								   <div class="col-md-6 mb-3">
                                 </div>
								  
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Choose Audio</label>
							<div class="custom-file">
                                 <input name="vvideo" type="file" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose music</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                              
                              <button class="btn btn-primary" name="vvbtn" type="submit">Update Music</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>



<?php
	
}else {
?>

         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Music Videos Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="Add-Music-Video.php" class="btn btn-primary">Add New Music</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 15%;">Image</th>
                                    <th style="width: 15%;">Title</th>
                                    <th style="width: 15%;">Album</th>
                                    <th style="width: 15%;">Artist</th>
                                    <th style="width: 15%;">Lyrics</th>
									  <th style="width: 15%;">Composer</th>
                                    <th style="width: 15%;">Language</th>
                                    <th style="width: 15%;">Year</th>
                                    <th style="width: 15%;">Ganre</th>
                                    
                                    <th style="width: 100%;">Description</th>
                                   
                                    
                                    <th style="width: 10%;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                <?php list_Video(); ?>
								  
								  
								  
								  
                               
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>






<?php
}
require 'footer.php';
?>