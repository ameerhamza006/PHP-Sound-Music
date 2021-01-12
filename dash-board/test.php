<?php
require 'header.php';
?>


  <div class="col-sm-12 col-lg-12" id="al">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Albums</h4>
                            
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Album.php" class="btn btn-primary">List Album</a>
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
                                    <label for="validationCustom04">Year</label>
                                    <select class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
								 
                                 <div class="col-md-12 mb-3">
                                    <label for="validationCustom05">Choose Image</label>
							<div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                             
                              <button class="btn btn-primary" type="submit">Add Album</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>






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
                                    <th style="width: 30%;">Title</th>
                                    <th style="width: 15%;">Artist</th>
                                    <th style="width: 15%;">Language</th>
                                    <th style="width: 15%;">Year</th>
                                    <th style="width: 10%;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>
                                       <img src="../images/user/11.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                    </td>
                                    <td>Kesy Jio ga kesy</td>
                                    <td>Atif Aslam</td>
                                    <td>Urdu</td>
                                    <td>01 Jun 2020</td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
								  
								  
								  
								  
                               
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>



<?php
require 'footer.php';
?>