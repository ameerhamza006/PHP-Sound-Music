<script src="../assets/js/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="../assets/css/app.css">
<link rel="stylesheet" href="../assets/js/jquery.rateyo.min.css">
<?php require "functions.php";
	if(isset($_POST['rating']) || isset($_POST['user_id']) || isset($_POST['song_id']) || isset($_POST['name']) || isset($_POST['email']) || isset($_POST['msg']))
	{
		$rating = mysqli_real_escape_string($connect,$_POST['rating']);
		$user_id = mysqli_real_escape_string($connect,$_POST['user_id']);
		$song_id = mysqli_real_escape_string($connect,$_POST['song_id']);
		$name = mysqli_real_escape_string($connect,$_POST['name']);
		$email = mysqli_real_escape_string($connect,$_POST['email']);
		$msg = mysqli_real_escape_string($connect,$_POST['msg']);
		
		$insert = "insert into comments (name,email,rating,review,fk_user,fk_song) VALUES('$name','$email','$rating','$msg','$user_id','$song_id')";
		$run = mysqli_query($connect,$insert);
		
		if($run){
			#echo "<script>location.href='Video.php?Watch=$get_name';</script>";
			echo "
			<script>
			
			let timerInterval
Swal.fire({
  
  html: 'Comment Successfuly Added!',
  timer: 1500,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
 
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
			
			</script>
			";
		}else{
			#echo "<p class='text-danger text-center'>Something Wrong Please check.</p>";
			echo "not insert";
			
		}
	}
		

if(isset($_POST['eid']))
{
	extract($_POST);
	
	$get_title = $_Get['Watch'];
	
	$select_edit = "select * from comments where id='$eid'";
	$run_edit = mysqli_query($connect,$select_edit);
	
	while($fetch = mysqli_fetch_array($run_edit))
	{
		$e_id = $fetch['0'];
		$e_rating = $fetch['3'];
		$e_review = $fetch['4'];
		
		 
									
		
	echo	"<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content card'>
      
      
         <div class='col-md-12 card p-5 l'>
			 
                            
								<form method='post' id='myEdit' class='form-materia' action='fun/Add-comments.php'>
									<div class='row mb-4'>
                                        <div class='col-lg-12'>
                                            <div style='margin-left: 111px;' class='rateyo mb-2' id= 'rating'
											 data-rateyo-rating='$e_rating'
											 data-rateyo-num-stars='5'
											 data-rateyo-score='3'>
											 </div>
											<span style='margin-left: 175px;' class='result'></span>
											<input type='hidden' name='erating' value='$e_rating' />
											<input type='hidden' name='edid' value='$e_id' />
											<input type='hidden' name='etitle' value='$get_title' />
											
                                        </div>
									</div>
			
<script>

	

    $(function () {
        $('.rateyo').rateYo().on('rateyo.change', function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); 
        });
    });

	
	
	
</script>
									
										
                                    <div class='row'>
                                        <div class='col-lg-12'>
                                            <div class='form-group'>
                                                <div class='form-line'>
													<label>Review</label>
                                                      <textarea name='emsg' rows='5' class='form-control r-0'>$e_review</textarea>
													 
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class='row text-center'>

                                        <div class='col-lg-12'>
											<input  data-dismiss='modal' type='button' class='btn btn-success r-0'
                                                                      value='Cancle'>
											<input id='btnedit' name='editbtn'  type='submit' class='btn btn-primary r-0'
                                                                      value='Edit Review'>
										
										</div>
                                    </div>
                              </form>
                        </div>
     <script>
	 
	 
	 $('#btnedit').click(function(){
				
				
				$.post( $('#myEdit').attr('action'),$('#myEdit :input').serializeArray(),function(infoo){
					//$('#resultt').html(infoo);
					alert(infoo);
					$('#myEdit :input').val('');
				});
			});
			
			$('#myEdit').submit(function(){
				return false;
			});
				
	 
	 </script>
      
    </div>

  </div>
</div>";
		
		
		
	}
}

if(isset($_POST['edid']) || isset($_POST['erating']) || isset($_POST['emsg']))
{
	$edrating = mysqli_real_escape_string($connect,$_POST['erating']);
		$edid = mysqli_real_escape_string($connect,$_POST['edid']);
		$edmsg = mysqli_real_escape_string($connect,$_POST['emsg']);
	
		
	#extract($_POST);
	
	$select_edit = "select * from comments where id='$edid'";
	$run_edit = mysqli_query($connect,$select_edit);
	
	$fetch = mysqli_fetch_array($run_edit);
	
		$song_id = $fetch['6'];
	
	
	$select_video = "select * from videos where id='$song_id'";
	$run_video = mysqli_query($connect,$select_video);
	
	$fetchh = mysqli_fetch_array($run_video);
	
		$title = $fetchh['1'];
	
		$iinsert = "UPDATE comments SET rating='$edrating',review='$edmsg',modify_date=NOW() where id='$edid'";
		$rrun = mysqli_query($connect,$iinsert);
		
		if($rrun){
			
			echo "<script>location.href='../Video.php?Watch=$title';</script>";
		
			
		}else{
			echo "not Edit";
		}
}





?>