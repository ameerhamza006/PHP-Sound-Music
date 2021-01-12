<?php
require 'header.php';
?>




         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Music Audio Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="Add-Music-Audio.php" class="btn btn-primary">Add New Music</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    
                                    <th style="width: 15%;">Title</th>
                                    <th style="width: 15%;">Album</th>
                                    <th style="width: 15%;">Artist</th>
                                    <th style="width: 15%;">Lyrics</th>
                                    <th style="width: 15%;">Language</th>
                                    <th style="width: 15%;">Ganre</th>
                                    <th style="width: 15%;">Year</th>
                                    <th style="width: 15%;">Composer</th>
                                    
                                    <th style="width: 100%;">Bio/Description</th>
                                    <th style="width: 15%;">Image</th>
                                    <th style="width: 15%;">Audio</th>
                                    <th style="width: 10%;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                   
                                    <td>Hello</td>
                                    <td>meer</td>
                                    <td>Honey singh</td>
                                    <td>jani</td>
                                    <td>Panjabi</td>
                                    <td>Ganre</td>
                                    <td>Year</td>
                                    <td>Rasheed</td>
                                    <td>
                                       <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration slightly believable.</p>
                                    </td>
                                    <td>
                                       <img src="../images/user/11.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                    </td>
                                    <td>
                                       <img src="../images/user/11.jpg" class="img-fluid avatar-50 rounded" alt="author-profile">
                                    </td>
                                    
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