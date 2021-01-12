<?php
require 'header.php'; $page = "Add-Lyrics";
?>



 
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Add_Lyrical(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Lyrical Person</h4>
                           </div>
							<div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Lyrics.php" class="btn btn-primary">List Lyrical Person</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Full Name</label>
                                    <input type="text" class="form-control" name="lyname" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>

                                 <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Bio</label>
                           <textarea class="form-control" name="lybio" id="validationCustom01" rows="4"></textarea>
                                    
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>

                               
								 
                                 <div class="col-md-12 mb-3">
                                    <label for="validationCustom05">Choose Image</label>
							<div class="custom-file">
                                 <input type="file" name="lypic" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                             
                              <button class="btn btn-primary" name="btnly" type="submit">Add Artist</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>





<?php
require 'footer.php';
?>