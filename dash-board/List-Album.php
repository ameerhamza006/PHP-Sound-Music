<?php
error_reporting(0);
require 'header.php'; $page = "List-Lyrics";

if($_GET['a-id'])
{
	$get_iddd = $_GET['a-id'];
	
	$sselect = "select * from album where id='$get_iddd'";
	$drun = mysqli_query($connect,$sselect);
	$dfetch = mysqli_fetch_array($drun);
	$dname = $dfetch['1'];
	$dartist = $dfetch['3'];
	$img_artist = $dfetch['5'];
	
	
	$aselect = "select * from artist where id='$get_iddd'";
	$arun = mysqli_query($connect,$aselect);
	$afetch = mysqli_fetch_array($arun);
	$aname = $afetch['1'];
	
	$path = "Artist/$dname/$aname/$img_artist";
	
	rmdir($path);
	
	$delte = "DELETE FROM album WHERE id='$get_iddd'";
	$run_delete = mysqli_query($connect,$delte);
	
	if($run_delete)
	{
		echo "<script> document.location.href='List-Album.php';</script>";
	}else{
		
		echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Album Not <b>Delete</b> Something Wrong!</div>
                           </div>";
	
}
}

 if($_GET['Art-id'])
{
	
	
	$get_id = $_GET['Art-id'];
	$select = "select * from album where id='$get_id'";
	$run = mysqli_query($connect,$select);
	$fetch = mysqli_fetch_array($run);
	$title = $fetch['1'];
	$year = $fetch['2'];
	$artist = $fetch['3'];
	$language = $fetch['4'];
	$imagee = $fetch['5'];
	 
	 
	 
	 $select_year = "select * from years where id='$year'";
			$run_year = mysqli_query($connect,$select_year);
			$fetch_year = mysqli_fetch_array($run_year);
			$year_name = $fetch_year['3'];
			$year_id = $fetch_year['0'];
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			$artist_id = $fetch_artist['0'];
			
			$select_language = "select * from languages where id='$language'";
			$run_language = mysqli_query($connect,$select_language);
			$fetch_language = mysqli_fetch_array($run_language);
			$language_name = $fetch_language['1'];
			$language_id = $fetch_language['0'];
	 
	 
	 
	 #for Artist Dropdown
$select = "select * from artist";
$run = mysqli_query($connect,$select);
	

#for Language Dropdown
$selectt = "select * from languages";
$runn = mysqli_query($connect,$selectt);

#for Year Dropdown
$selecttt = "select * from years";
$runnn = mysqli_query($connect,$selecttt);
			
	
	
?>


  
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Update_Album(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Albums</h4>
                            
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Album.php" class="btn btn-primary">List Album</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" name="utitle" value="<?php echo $title ?>" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Artist</label>
                                    <select name="uartist" class="form-control" id="validationCustom04" required>
										
                                       <option selected value="<?php echo $artist_id ?>"><?php echo $artist_name ?></option>
										<?php while($fetch = mysqli_fetch_array($run)){ $id = $fetch['id']; $name = $fetch['name']; ?>
                                       <option value="<?php echo $id ?>"><?php echo $name ?></option>
										<?php } ?>
										
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Language</label>
                                    <select name="ulang" class="form-control" id="validationCustom04" required>
                                       
										 <option selected value="<?php echo $language_id ?>"><?php echo $language_name ?></option>
										<?php while($fetch = mysqli_fetch_array($runn)){ $idd = $fetch['id']; $namee = $fetch['name']; ?>
                                       <option value="<?php echo $idd ?>"><?php echo $namee ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Year</label>
                                    <select name="uyear" class="form-control" id="validationCustom04" required>
                                       <option selected value="<?php echo $year_id ?>"><?php echo $year_name ?></option>
										<?php while($fetch = mysqli_fetch_array($runnn)){ $iddd = $fetch['id']; $month = $fetch['month']; $date = $fetch['date']; $year = $fetch['year']; ?>
                                       <option value="<?php echo $iddd ?>"><?php echo $year ?></option>
										<?php } ?>
                                       
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
								 
                                
                              </div>
                             
                              <button class="btn btn-primary" name="ubtn" type="submit">Update Album</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>



<?php }else if($_GET['img-id']) { 

$get_id = $_GET['img-id'];
	$select = "select * from album where id='$get_id'";
	$run = mysqli_query($connect,$select);
	$fetch = mysqli_fetch_array($run);
	$title = $fetch['1'];
	$art= $fetch['3'];
	$art_img= $fetch['5'];
	 
	 
	 $aselect = "select * from artist where id='$art'";
	$arun = mysqli_query($connect,$aselect);
	$afetch = mysqli_fetch_array($arun);
	$artname = $afetch['1'];


?>

<div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Update_Album_image(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Album Image</h4>
                           </div>
							<div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Lyrics.php" class="btn btn-primary">List Album</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Full Name</label>
                                    <input type="text" value="<?php echo $title ?>" class="form-control" name="artname" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
								  
								   
								  <div class="col-md-6 mb-3">
									 
                                    <img <?php echo "src='Artist/$artname/$title/$art_img'"; ?> style="height: 150px; width: 200px;" class='img-fluid avatar-50  rounded' alt='author-profile'>
                                 </div>

                               

                               
								 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Choose Image</label>
							<div class="custom-file">
                                 <input type="file" name="uartpic"  class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                             
                              <button class="btn btn-primary" name="uimgup" type="submit">Update Person</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>


<?php }else { ?>

         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Album Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="Add-Album.php" class="btn btn-primary">Add New Album</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 5%;">Image</th>
                                    <th style="width: 20%;">Title</th>
                                   
                                    <th style="width: 15%;">Artist</th>
                                    <th style="width: 10%;">Language</th>
                                    <th style="width: 10%;">Year</th>
                                    <th style="width: 10%;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                               <?php list_Album(); ?>
								  
								 
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