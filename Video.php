<?php
error_reporting(0);
require 'header.php'; $page = "Video";



if($_GET['Watch'])
{

?>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<div id="result"></div>
	<div id="resultt"></div>
<div id="Edit"></div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
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
								
                              <form class="form-material" id="myform" method="post" action="fun/Add-comments.php">
									
									<?php 
									
                                    $get_name = $_GET['Watch'];
	                                $get_select = "select * from videos where title='$get_name'";
	                                $get_run = mysqli_query($connect,$get_select);
	                                $get_fatch = mysqli_fetch_array($get_run);
	                                $get_id = $get_fatch['0'];
									
									
									?>
									<div class="row mb-4">
                                        <div class="col-lg-12">
                                            <div style="margin-left: 241px;" class="rateyo mb-2" id= "rating"
											 data-rateyo-rating="0"
											 data-rateyo-num-stars="5"
											 data-rateyo-score="3">
											 </div>
											<span style="margin-left: 304px;" class='result'></span>
											<input type="hidden"  name="rating" />
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
									<?php if(!$_SESSION['email']){ ?>
									
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="name"  class="form-control" placeholder="Name"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="email"  class="form-control" placeholder="Email"/>
													<input type="hidden" name="song_id" value="<?php echo $get_id ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php }else{ ?>
									<input type="hidden"  name="user_id" value="<?php echo $s_id ?>" />
									<input type="hidden"  name="name" value="<?php echo $s_name ?>" />
									<input type="hidden"  name="email" value="<?php echo $s_email ?>" />
									<input type="hidden"  name="song_id" value="<?php echo $get_id ?>" />
									
									
										<?php } ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                      <textarea name="msg"  rows="5" class="form-control r-0"
                                                                placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row text-center">

                                        <div class="col-lg-12">
											<button id="btncom" name="btncom" type="submit"  class="btn btn-primary r-0" >Post Comment</button>
											</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                <div class="card mt-1 mb-5">
                    <div class="card-body">
						
						
                        <?php view_rating_and_review(); ?>
						
                    </div>
                </div>
				
				 

            </div>
			
			<script>
		//add comment
			$("#btncom").click(function(){
				
				
				$.post( $("#myform").attr("action"),$("#myform :input").serializeArray(),function(info){
					$("#result").html(info);
					$("#myform :input").val("");
				});
			});
			
			$("#myform").submit(function(){
				return false;
			});
				
				
				
			//edit comment
			function Editcom(w){
				var eid=w;
				
				$.ajax({
					url:'fun/Add-comments.php',
					type:'post',
					data:{eid:eid},
					success:function(data){
						$("#Edit").html(data);
						
					}
				});
				
			}	
	              //edit post
				
				
			</script>
			
            <div class="col-12 col-lg-4">
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