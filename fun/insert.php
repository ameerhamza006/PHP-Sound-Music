
  <?php  
 require "functions.php";
session_start();
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
	 $name = mysqli_real_escape_string($connect, $_POST["name"]);
	 $email = mysqli_real_escape_string($connect, $_POST["email"]);
	 $fk_user = mysqli_real_escape_string($connect, $_POST["user_id"]);
	 $fk_song = mysqli_real_escape_string($connect, $_POST["song_id"]);
      $rating = mysqli_real_escape_string($connect, $_POST["rating"]);  
      $msg = mysqli_real_escape_string($connect, $_POST["msg"]); 
      $get_name = mysqli_real_escape_string($connect, $_POST["get_name"]); 
	 $comment_id = $_POST["comment_id"];
      
      if($_POST["comment_id"] != '')  
      {  
           $query = "  
           UPDATE comments   
           SET rating='$rating',   
           review='$msg'
           WHERE id='$comment_id'";  
           $message = 'Comment Successfully Update';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO comments(name, email, rating, review, fk_user,fk_song)  
           VALUES('$name', '$email', '$rating', '$msg', '$fk_user','$fk_song');  
           ";  
           $message = 'Comment Successfully Added';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<h4 class="text-danger text-center">' . $message . '</h4>';  
           
    $select_video = "select * from videos where title='$get_name'";
	$run_video = mysqli_query($connect,$select_video);
	$fetch_video = mysqli_fetch_array($run_video);
	$video_id = $fetch_video['0'];
	
	$select_query = "select * from comments where fk_song='$video_id' ORDER BY id DESC";
	$result = mysqli_query($connect,$select_query);
	$count = mysqli_num_rows($result); 

		  
           while($fetch = mysqli_fetch_array($result))  
           {  
			   	$comment_id = $fetch['0'];
		$comment_name = $fetch['1'];
		$comment_email = $fetch['2'];
		$comment_rating = $fetch['3'];
		$comment_msg = $fetch['4'];
		$comment_user = $fetch['5'];
		$comment_song = $fetch['6'];
		$comment_date = $fetch['7'];
		$date_short = substr($comment_date,0,16);
	
			   
                $output .= "  
                   <div class='media my-5 '>
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
									 $output .= " <div ><span >★</span><span >★</span><span >★</span><span >★</span><span >★</span></div>";
									}else
									if($comment_rating <= 1)
									{
										 $output .= " <div ><span class='colorr' >★</span><span >★</span><span>★</span><span >★</span><span >★</span></div>";
									}else if($comment_rating <= 2  ) {
								 $output .= " <div ><span class='colorr' >★</span><span class='colorr' >★</span><span >★</span><span >★</span><span >★</span></div>";
									}else if($comment_rating <= 3) {
									 $output .= " <div ><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span >★</span><span >★</span></div>";
									}else if($comment_rating <= 4) {
										 $output .= " <div ><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span >★</span></div>";
									}else if($comment_rating <= 5) {
										 $output .= " <div ><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span><span class='colorr' >★</span></div>";
									}
								
                               $output .= "  $comment_msg
								<div class='row'>
								 <a  class='snackbar ml-3' data-text='You Like This Comment!'
								       style='color: #ff1744;'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='mt-2 icon-heart s-8'></i></a>";
									   
									   if($_SESSION['email'] && $comment_email == $_SESSION['email']){
										


								       $output .= " <input type='button' name='edit' value='Edit' id='$comment_id' class='btn btn-info btn-xs edit_data'
									   style='     background-color: Transparent;
										background-repeat: no-repeat;
										border: none;
										cursor: pointer;
										overflow: hidden;
										font-size: 13px;
    									margin-top: -4px;
										color: #ff1744;
									   }'
									   />";
								
										   
									   }else{
										  
										     $output .= " <a href='#' class='ml-2'>Reply</a>";
										   
									   }
							 $output .= " </div>
                            </div>
                        </div>";  
           }  
          
      }  
      echo $output;  
 }  
 ?>
 