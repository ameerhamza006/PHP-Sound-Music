<?php
error_reporting(0);
require 'header.php'; $page = "List-Language";

if($_GET['l-id']){
	$get_idd = $_GET['l-id'];
	$delte = "DELETE FROM languages WHERE id='$get_idd'";
	$run_delete = mysqli_query($connect,$delte);
	
	if($run_delete)
	{
		echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
	}else{
		
		echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Language Not <b>Delete</b> Something Wrong!</div>
                           </div>";
	}

	
} else if($_GET['g-id']){
	$get_idd = $_GET['g-id'];
	$delte = "DELETE FROM ganres WHERE id='$get_idd'";
	$run_delete = mysqli_query($connect,$delte);
	
	if($run_delete)
	{
		echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
	}else{
		
		echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Ganres Not <b>Delete</b> Something Wrong!</div>
                           </div>";
	}

	
} else if($_GET['y-id']){
	$get_idd = $_GET['y-id'];
	$delte = "DELETE FROM years WHERE id='$get_idd'";
	$run_delete = mysqli_query($connect,$delte);
	
	if($run_delete)
	{
		echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
	}else{
		
		echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>year Not <b>Delete</b> Something Wrong!</div>
                           </div>";
	}

	
}

if($_GET['lang-id'])
{
	$get_id = $_GET['lang-id'];
	$select = "select * from languages where id = '$get_id'";
		$run = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run);
	    $uname = $fetch['1'];

?>


    <div class="col-sm-6 col-lg-6">
                     <div class="iq-card">
						 <?php Update_language(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Languages</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-languages-Ganres-Years.php" class="btn btn-primary">List Languages</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Language Name</label>
                                    <input type="text" value="<?php echo $uname ?>" name="ulangname" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
</div>
                              <button class="btn btn-primary" name="ubtnlang" type="submit">Add</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>


<?php }else if($_GET['Ganre-id']){ 

	$gget_id = $_GET['Ganre-id'];
	$gselect = "select * from ganres where id = '$gget_id'";
		$grun = mysqli_query($connect,$gselect);
		$gfetch = mysqli_fetch_array($grun);
	    $guname = $gfetch['1'];


?>


 <div class="col-sm-6 col-lg-6">
                     <div class="iq-card">
						 <?php Update_ganre(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Ganres</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-languages-Ganres-Years.php" class="btn btn-primary">List Ganres</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Name</label>
                                    <input type="text" value="<?php echo $guname ?>" name="gganrename" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 
                              <div class="form-group">
                                
                              </div>
                              </div>
                              <button class="btn btn-primary" name="gbtnganre" type="submit">Add</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>


<?php }else if($_GET['Year-id']){

$get_id = $_GET['Year-id'];
	$gselect = "select * from years where id = '$get_id'";
		$grun = mysqli_query($connect,$gselect);
		$gfetch = mysqli_fetch_array($grun);
	    $day = $gfetch['1'];
	    $month = $gfetch['2'];
	    $year = $gfetch['3'];


?>


  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Update_year(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Year</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-languages-Ganres-Years.php" class="btn btn-primary">List Years</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" novalidate>
                              <div class="form-row">
                               
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Day</label>
                                    <select class="form-control" name="uday" id="validationCustom04" required>
                                      
										<option selected value="<?php echo $day ?>"><?php echo $day ?></option>
                                      <option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Month</label>
                                    <select class="form-control" name="umonth" id="validationCustom04" required>
									<option selected value="<?php echo $month ?>"><?php echo $month ?></option>
                                    <option value="January">January</option>
                                   
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
                                      
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Year</label>
                                    <select class="form-control" name="uyear" id="validationCustom04" required>
                                      <option selected value="<?php echo $year ?>"><?php echo $year ?></option>
                                       <option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
                                    </select>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
								 
                            
                              </div>
                              
                              <button class="btn btn-primary" name="ubtnyear" type="submit">Add</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>


<?php }else {  ?>

         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">List Languages</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="Add-languages-Ganres-Years.php" class="btn btn-primary">Add New Language</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 5%;">Language</th>
                                    
                                    <th style="width: 1%;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
								<?php  list_language();  ?>
								  
								  
								  
                               
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>




               <div class="col-sm-6">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Ganres Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="Add-languages-Ganres-Years.php" class="btn btn-primary">Add New Ganres</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 5%;">Name</th>
                                   
                                    <th style="width: 1%;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                <?php list_ganre(); ?>
								  
								  
								  
								  
                               
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>

         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">List Years</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="Add-languages-Ganres-Years.php" class="btn btn-primary">Add New Year</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 5%;">Day</th>
                                    <th style="width: 5%;">Month</th>
                                    <th style="width: 5%;">Year</th>
                                    <th style="width: 1%;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                               <?php list_year(); ?>
								  
								  
								  
								  
                               
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>





<?php
			}
require 'footer.php';
?>