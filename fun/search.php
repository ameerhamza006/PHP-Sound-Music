<?php  
require "functions.php"; 
 if(isset($_POST["query"]))  
 {  
      $output = '';  
	 $search = $_POST["query"];
	
	 #for artist search
      $query = "SELECT * FROM artist WHERE name LIKE '%$search%' OR song_type LIKE '%$search%' ";  
      $result = mysqli_query($connect, $query); 
	  #for video search
	  $video_select = "SELECT * FROM videos WHERE title LIKE '%$search%' OR compose LIKE '%$search%' OR discription LIKE '%$search%' "; 
		    $run_video = mysqli_query($connect,$video_select);
	  #for audio search
	  $audio_select = "SELECT * FROM audio WHERE title LIKE '%$search%' OR compose LIKE '%$search%' OR discription LIKE '%$search%' "; 
		    $run_audio = mysqli_query($connect,$audio_select);
	 
	 #for album search
	  $album_select = "SELECT * FROM album WHERE name LIKE '%$search%'"; 
		    $run_album = mysqli_query($connect,$album_select);
	 
	 #for ganres search
	  $ganres_select = "SELECT * FROM ganres WHERE name LIKE '%$search%'"; 
		    $run_ganres = mysqli_query($connect,$ganres_select);
	 
	 #for languages search
	  $languages_select = "SELECT * FROM languages WHERE name LIKE '%$search%'"; 
		    $run_languages = mysqli_query($connect,$languages_select);
	 
	 #for lyrics search
	  $lyrics_select = "SELECT * FROM lyrics WHERE name LIKE '%$search%' OR bio LIKE '%$search%' "; 
		    $run_lyrics = mysqli_query($connect,$lyrics_select);
	 
	 #for years search
	  $years_select = "SELECT * FROM years WHERE year LIKE '%$search%'"; 
		    $run_years = mysqli_query($connect,$years_select);
	 
	 
      $output = "
	 
	  
	  <div class='card mb-3'>
                   
                    <ul class='playlist list-group list-group-flush'>";  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
			   $name = $row['1'];
			   $song = $row['2'];
			   
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    <figure class='avatar avatar-md float-left  mr-3 mt-1'>
                                        <img src='assets/img/demo/u1.jpg' alt=''>
                                    </figure>
                                    <h6>$name</h6>
                                    <small>5 Albums - 50 Songs - $song</small>
                                </div>
                                <a href='#' class='ml-auto'><i class='icon-more'></i></a>
                            </div>
                        </li>";  
           }  
      }  
      else  if(mysqli_num_rows($run_video) > 0)
      {  
           
		 
		  
		 
		  while($fetch_video = mysqli_fetch_array($run_video))  
           {  
			   $title = $fetch_video['1'];
			   $art = $fetch_video['2'];
			   $composer = $fetch_video['8'];
			  
			  	 $artisttt = "SELECT * FROM artist WHERE id='$art' ";  
      $artist_rr = mysqli_query($connect, $artisttt); 
				$ff_artist = mysqli_fetch_array($artist_rr);
				
				$aa = $ff_artist['1'];
			   
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    
                                    <h6>$title Song</h6>
                                  <small>Artist - $aa | Composer - $composer </small>
                                </div>
                              
                            </div>
                        </li>
					";  
           }  
		 
 
	  }else if(mysqli_num_rows($run_audio) > 0){
		    while($fetch_audio = mysqli_fetch_array($run_audio))  
           {  
			   $title = $fetch_audio['1'];
			   $fk_artist = $fetch_audio['2'];
			   $composer = $fetch_audio['8'];
				
				 $artistt = "SELECT * FROM artist WHERE id='$fk_artist' ";  
      $artist_r = mysqli_query($connect, $artistt); 
				$f_artist = mysqli_fetch_array($artist_r);
				
				$a = $f_artist['1'];
			   
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    
                                    <h6>$title Song</h6>
                                   <small>Artist - $a | Composer - $composer </small>
                                </div>
                              
                            </div>
                        </li>
					";  
           }  
	  }if(mysqli_num_rows($run_album) > 0){
		  
		   while($fetch_album = mysqli_fetch_array($run_album))  
           {  
			   $album_name = $fetch_album['1'];
			   
			   
			      $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    <figure class='avatar avatar-md float-left  mr-3 mt-1'>
                                        <img src='assets/img/demo/u1.jpg' alt=''>
                                    </figure>
                                    <h6>$album_name</h6>
                                    <small>5 Albums - 50 Songs</small>
                                </div>
                                <a href='#' class='ml-auto'><i class='icon-more'></i></a>
                            </div>
                        </li>"; 
			  
		   }
	  }
      $output .= " </ul>
                </div>";  
      echo $output;  
 } 
 ?>  