<?php
require 'header.php';
?>



 
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Music Video</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Music-Video.php" class="btn btn-primary">Lists Music</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Album</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Artist</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Lyrics</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Language</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Ganre</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Year</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>

                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Composer</label>
                                    <input type="text" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
								  
								  <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Description</label>
                                    <textarea class="form-control" id="validationCustom01" rows="4"></textarea>
                                    
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
								 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Choose Image</label>
							<div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
								  
								   <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Upload Video</label>
							<div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose music</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                              
                              <button class="btn btn-primary" type="submit">Add Music</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>






<?php
require 'footer.php';
?>