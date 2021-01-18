<?php
error_reporting(0);
require 'header.php'; $page = "Video";



if($_GET['Watch'])
{
	
    $get_name = $_GET['Watch'];
   
    $select_video = "select * from videos where title='$get_name'";
	$run_video = mysqli_query($connect,$select_video);
	$fetch_video = mysqli_fetch_array($run_video);
	$video_id = $fetch_video['0'];
	
	$select = "select * from comments where fk_song='$video_id' ORDER BY id DESC";
	$run = mysqli_query($connect,$select);
	$count = mysqli_num_rows($run); 


?>

 


	<div id="result"></div>
	<div id="resultt"></div>
<div id="Edit"></div>

<!----Add comment model --->
<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content card">  
                <div class="modal-header card">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
               
					<input type="button" class="modal-title edittitle" 
    style="margin-left: 176px;     background-color: Transparent;
    background-repeat: no-repeat;
    border: none;
    cursor: pointer;
    overflow: hidden;
    font-size: 22px;
    color: #9a9a9a;
}" name="edittitle" id="edittitle" value="edittitle"/>
                </div>  
                <div class="modal-body card">  
                     <!--<form method="post" id="insert_form"> 
                    
                          <label>Enter Employee Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Employee Address</label>  
                          <textarea name="address" id="address" class="form-control"></textarea>  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Designation</label>  
                          <input type="text" name="designation" id="designation" class="form-control" />  
                          <br />  
                          <label>Enter Age</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form> --> 
					
					<div class="card-body ">
								<!--insert comment-->
						    <form method="post" id="insert_form" class="form-material">
                             <!-- <form class="form-material" id="myform" method="post" action="fun/Add-comments.php"> -->
									
									<?php 
									
                                    $get_name = $_GET['Watch'];
	                                $get_select = "select * from videos where title='$get_name'";
	                                $get_run = mysqli_query($connect,$get_select);
	                                $get_fatch = mysqli_fetch_array($get_run);
	                                $get_id = $get_fatch['0'];
									
									
									?>
									<div class="row mb-4">
                                        <div class="col-lg-12">
                                            <div style="margin-left: 120px;" class="rateyo mb-2" id= "rating"
											 data-rateyo-rating="0"
											 data-rateyo-num-stars="5"
											 data-rateyo-score="3">
											 </div>
											<span style="margin-left: 176px;"  class='result'></span>
											<input type="hidden" id="rating"   name="rating" />
											<input type="hidden" id="get_name" name="get_name"  name="rating" value="<?php echo  $get_name ?>" />
                                        </div>
									</div>
			
									
<script>

	

    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

	
	
	
</script>
									
                                    
									
									<input type="hidden"  id="user_id"  name="user_id" value="<?php echo $s_id ?>" />
									<input type="hidden" id="name" name="name" value="<?php echo $s_name ?>" />
									<input type="hidden" id="email" name="email" value="<?php echo $s_email ?>" />
									<input type="hidden" id="song_id" name="song_id" value="<?php echo $get_id ?>" />
									
									
										
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                      <textarea name="msg" id="msg" rows="5" class="form-control r-0"
                                                                placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row text-center">

                                        <div class="col-lg-12">
											 <input type="hidden" name="comment_id" id="comment_id" />  
                          <input type="submit" name="insert" id="insert" value="Add Review" class="btn btn-primary r-0" /> 
						      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
											
											</div>
                                    </div>
                                </form>
                            </div>
					
                </div>  
                <div class="modal-footer card">  
                   
                </div>  
           </div>  
      </div>  
 </div>

<script>  



 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Add Review");  
           $('#edittitle').val("Add Review");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var comment_id = $(this).attr("id");  
           $.ajax({  
                url:"fun/fetch.php",  
                method:"POST",  
                data:{comment_id:comment_id},  
                dataType:"json",  
                success:function(data){  
                     $('#rating').val(data.rating);  
                     $('#msg').val(data.review);  
                    
                     $('#comment_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#edittitle').val("Edit Review");  
                    
                   
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#msg').val() == "" )  
           {  
                alert("Rating Or Review is Required");  
           } else if($('#name').val() == "")
			   {
				   
			   }else if($('#email').val() == "")
						{
						
						}else if($('#user_id').val() == "")
								 {
								 
								 }else if($('#song_id').val() == "")
								 {
									 
								 }
						   
           
           else  
           {  
                $.ajax({  
                     url:"fun/insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#comment_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"fun/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>

<!-- Modal -->
<div id="mmmyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content card">
      
      
         <div class="col-md-12 card p-5">
			 
                            <form class="form-material"  method="post" >
								
									
									
									<?php 
									
                                    $get_name = $_GET['Watch'];
	                                $get_select = "select * from videos where title='$get_name'";
	                                $get_run = mysqli_query($connect,$get_select);
	                                $get_fatch = mysqli_fetch_array($get_run);
	                                $get_id = $get_fatch['0'];
									
									
									?>
									<div class="row mb-4">
                                        <div class="col-lg-12">
                                            <div style="margin-left: 111px;" class="rateyo mb-2" id= "rating"
											 data-rateyo-rating="0"
											 data-rateyo-num-stars="5"
											 data-rateyo-score="3">
											 </div>
											<span style="margin-left: 175px;" class='result'></span>
											<input type="hidden" name="rating" />
                                        </div>
									</div>
			

									
									<input type="hidden" name="user_id" value="<?php echo $s_id ?>" />
									<input type="hidden" name="name" value="<?php echo $s_name ?>" />
									<input type="hidden" name="email" value="<?php echo $s_email ?>" />
									<input type="hidden" name="song_id" value="<?php echo $get_id ?>" />
									
									
										
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-line">
													<label>Review</label>
                                                      <textarea name="msg" rows="5" class="form-control r-0"
                                                               ></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row text-center">

                                        <div class="col-lg-12">
											<input name="btncomment" data-dismiss="modal" type="button" class="btn btn-success r-0"
                                                                      value="Cancle">
											<input name="btncomment" type="submit" class="btn btn-primary r-0"
                                                                      value="Edit Review">
										
										</div>
                                    </div>
                                </form>
                        </div>
      
      
    </div>

  </div>
</div>



<div class="container-fluid relative animatedParent animateOnce">
    <div class="wrapper animated fadeInUpShort p-4 mt-2">
        <div class="row">
            <div class="col-lg-8">
               <?php Single_video_song_play(); ?>
                <div class="card mt-1 ">
                    <div class="card-body p-0">
                        <div class="lightSlider has-items-overlay playlist"
                             data-item="3"
                             data-item-xl="3"
                             data-item-lg="3"
                             data-item-md="3"
                             data-item-sm="1"
                             data-auto="false"
                             data-pager="false"
                             data-controls="true"
                             data-loop="false">
                            <div>
                                <div class="p-2 bg-primary text-white">
                                    <h5 class="font-weight-normal s-14">Views</h5>
                                    <span class="s-48 font-weight-lighter text-primary">140</span>
                                    <div> Likes
                                        <span class="text-primary">
                                            <i class="icon icon-arrow_downward"></i> 67%</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="p-2">
                                    <h5 class="font-weight-normal s-14">Share</h5>
                                    <span class="s-48 font-weight-lighter amber-text">700</span>
                                    <div>
                                            <span class="amber-text">
                                            <i class="icon icon-arrow_downward"></i> 34</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-2 light">
                                    <h5 class="font-weight-normal s-14">Comments</h5>
                                    <span class="s-48 font-weight-lighter text-indigo">411</span>
                                    <div> Iron
                                        <span class="text-indigo">
                                            <i class="icon icon-arrow_downward"></i> 89%</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-2">
                                    <h5 class="font-weight-normal s-14">Likes</h5>
                                    <span class="s-48 font-weight-lighter pink-text">224</span>
                                    <div> Sodium
                                        <span class="pink-text">
                                            <i class="icon icon-arrow_downward"></i> 47%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                     <div class="card mt-1 mb-1 post-comments ">
	
                            <div class="card-body ">
								<!--insert comment-->
                              <form class="form-material" id="myform" method="post" action="fun/Add-comments.php">
									
									
                                    <div class="row ">

                                        <div class="col-lg-12">
											<?php if($_SESSION['email']){ ?>
											 <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary r-0">Post Comment</button>
											<?php }else{ ?>
											 <a href="Sign-in.php" class="btn btn-primary r-0">Post Comment</a>
											<?php } ?>
											</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                <div class="card mt-1 mb-5">
                    <div class="card-body" id="comment_table" >
						
						
                        <?php 
						
						
	while($fetch = mysqli_fetch_array($run)){
		$comment_id = $fetch['0'];
		$comment_name = $fetch['1'];
		$comment_email = $fetch['2'];
		$comment_rating = $fetch['3'];
		$comment_msg = $fetch['4'];
		$comment_user = $fetch['5'];
		$comment_song = $fetch['6'];
		$comment_date = $fetch['7'];
		$date_short = substr($comment_date,0,16);
						
						echo "  <div class='media my-5 '>
		<style>
		
		.colorr{
		
		color: #f39c12;
		}
		
		</style>
                            <div class='avatar avatar-md mr-3 mt-1'>
                                <img src='assets/img/demo/u7.png' alt='user'>
                            </div>
                            <div class='media-body'>
								<div class='row'>
                                <h6 class='mt-0 ml-2 mr-1'>$comment_name</h6> <span class='mt-1' style='font-size: 10px;'>$date_short</span>
									</div>";
		                            if($comment_rating == 0){
										echo "<div ><span >★</span><span >★</span><span >★</span><span >★</span><span >★</span></div>";
									}else
									if($comment_rating <= 1)
									{
										echo "<div ><span class='colorr' >★</span><span >★</span><span>★</span><span >★</span><span >★</span></div>";
									}else if($comment_rating <= 2  ) {
									echo "<div ><span class='colorr' >★</span><span class='colorr' >★</span><span >★</span><span >★</span><span >★</span></div>";
									}else if($comment_rating <= 3) {
									echo "<div ><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span >★</span><span >★</span></div>";
									}else if($comment_rating <= 4) {
										echo "<div ><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span >★</span></div>";
									}else if($comment_rating <= 5) {
										echo "<div ><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span></div>";
									}
								echo "
                                $comment_msg
								<div class='row'>
								 <a  class='snackbar ml-3' data-text='You Like This Comment!'
								 style='color: #ff1744;'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='mt-2 icon-heart s-8'></i></a>";
									   if($_SESSION['email'] && $comment_email == $_SESSION['email']){
										


								      echo "<input type='button' name='edit' value='Edit' id='$comment_id' class=' edit_data' 
									  style='background-color: Transparent;
										background-repeat: no-repeat;
										border: none;
										cursor: pointer;
										overflow: hidden;

										color: #ff1744;
									}'
									  />";
										 # echo "<a href='#&Review=$comment_id' type='button' data-toggle='modal' data-target='#myModal'>Edit</a>";
										   
									   }else{
										  
										    echo "<a href='#' class='ml-2'>Reply</a>";
										   
									   }
								echo "</div>
                            </div>
                        </div>";
						
	}
						
						?>
						
                    </div>
                </div>
				
				 

            </div>
			
		
			
            <div class="col-12 col-lg-4" >
                <div class="card pt-3">
                    <div class="card-header">
                        <h6>You May Also like</h6>
                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">
                                <ul class="nav nav-pills mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show r-20" id="w3--tab1" data-toggle="tab"
                                           href="#w3-tab1" role="tab" aria-controls="tab1" aria-expanded="true"
                                           aria-selected="true">Album</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link r-20" id="w3--tab2" data-toggle="tab" href="#w3-tab2"
                                           role="tab" aria-controls="tab2" aria-selected="false">Playlist</a>
                                    </li>
                                   
                                </ul>
                            </div>
                           

                        </div>
                    </div>
                    <div class="card-body no-p">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="w3-tab1" role="tabpanel"
                                 aria-labelledby="w3-tab1">
                               <?php All_videos_by_one_Album(); ?>
                            </div>
                            <div class="tab-pane fade " id="w3-tab2" role="tabpanel"
                                 aria-labelledby="w3-tab2">
                                 <div class="d-flex align-items-center mb-4 ">
                                    <div class="col-5">
                                        <img src="assets/img/demo/v4.jpg" alt="Card image">
                                    </div>
                                    <div class="ml-3">
                                        <a href="video-single.html">
                                            <h6>new, Sounds of Kolachi, Record Studio Season</h6>
                                        </a>
                                        <small class="mt-1">Record Studio</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4 ">
                                    <div class="col-5">
                                        <img src="assets/img/demo/v2.jpg" alt="Card image">
                                    </div>
                                    <div class="ml-3">
                                        <a href="video-single.html">
                                            <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                                        </a>
                                        <small class="mt-1">Record Studio</small>
                                    </div>
                                </div>
                            </div>
                          
                        </div>

                    </div>
                </div>
				
				
                <div class="my-4">
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v5.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v1.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v6.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v7.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v8.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v9.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v10.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v11.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<?php }else if($_GET['Ganre'] || $_GET['Language'] ){ $get = $_GET['Ganre']; $get_lang = $_GET['Language']; ?>

<div class="container-fluid relative animatedParent animateOnce">
    <div class="wrapper animated fadeInUpShort p-md-5 p-3">
 <section class="section">
           <div class="d-flex">
               <div class="mb-4">
                   <h4 style="text-transform: uppercase;"><?php echo $get.$get_lang ?> SONGS For You</h4>
                   <p>Checkout new recommended videos</p>
               </div>
           </div>
           <div class="row ">
             <?php All_video_Song_view_ganre(); 
			   
		         All_video_Song_view_language();
			   
			   ?>
           </div>
           
       </section>	
</div>
	</div>

<?php }else { ?>
<div class="container-fluid relative animatedParent animateOnce">
    <div class="wrapper animated fadeInUpShort">
		
		<section class="section  p-md-5 p-3" >
            <h1 class=" text-primary">Videos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis consectetur
            </p>
        </section>
		<hr style="background: #2f1b1b;">
	<?php video_Song_view_ganre(); ?>
		<hr style="background: #2f1b1b;">
		<?php video_Song_view_Languages(); ?>
		
		
		
		
		
		
	</div>
	</div>




<?php
	
}
	
require 'footer.php';
?>