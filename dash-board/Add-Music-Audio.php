<?php
require 'header.php'; $page = "Add-Audio";


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
						 <?php Add_Audio(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Music Audio</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Music-Audio.php" class="btn btn-primary">List Music</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" name="title" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Album</label>
                                    <select name="album" class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
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
                                       <option selected disabled value="">Choose...</option>
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
                                       <option selected disabled value="">Choose...</option>
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
                                       <option selected disabled value="">Choose...</option>
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
                                       <option selected disabled value="">Choose...</option>
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
                                       <option selected disabled value="">Choose...</option>
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
                                    <input name="compo" type="text" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
								  
								  <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Description</label>
                                    <textarea  name="des" class="form-control" id="validationCustom01" rows="4"></textarea>
                                    
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
								 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Choose Image</label>
							<div class="custom-file">
                                 <input name="pic" type="file" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
								  
								   <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Choose Audio</label>
							<div class="custom-file">
                                 <input name="audio" type="file" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose music</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                              
                              <button class="btn btn-primary" name="abtn" type="submit">Add Music</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>






<?php
require 'footer.php';
?>