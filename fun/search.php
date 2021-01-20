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
			   $artist_image = $row['4'];
			   $artist_id = $row['0'];
			   
			   
		#for audio songs count 
		$ad = "select * from audio where fk_artist='$artist_id'";
		$runnn = mysqli_query($connect,$ad);
		$count_Artist_audio_song = mysqli_num_rows($runnn);
	
			   	#for video songs count 
		$vd = "select * from videos where fk_artist='$artist_id'";
		$runnn_vd = mysqli_query($connect,$vd);
		$count_Artist_video_song = mysqli_num_rows($runnn_vd);
	
			   
		
		#for Album count
		$al = "select * from album where fk_artist='$artist_id' ";
		$runn = mysqli_query($connect,$al);
		$count_artist_album = mysqli_num_rows($runn);
		
			 $count_Artist_video_song +=   $count_Artist_audio_song;
			   
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    <figure class='avatar avatar-md float-left  mr-3 mt-1'>
                                        <img src='dash-board/Artist/$name/$artist_image' alt=''>
                                    </figure>
                                    <h6>$name</h6>
                                    <small>Albums - $count_artist_album Songs - $count_Artist_video_song</small>
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
	  } else if(mysqli_num_rows($run_album) > 0){
		  
		   while($fetch_album = mysqli_fetch_array($run_album))  
           {  
			   $album_name = $fetch_album['1'];
			   $album_id = $fetch_album['0'];
			   
			   #for audio songs count 
		$add = "select * from audio where fk_album='$album_id'";
		$runnnn = mysqli_query($connect,$add);
		$count_album_audio_song = mysqli_num_rows($runnnn);
	
			   	#for video songs count 
		$vvd = "select * from videos where fk_album='$album_id'";
		$runnn_vdd = mysqli_query($connect,$vvd);
		$count_album_video_song = mysqli_num_rows($runnn_vdd);
	
			 $count_album_video_song +=   $count_album_audio_song;
			   
			      $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class=' col-10'>
                                
                                    <h6>$album_name Album</h6>  
									
                                    <small>  $count_album_video_song - Songs</small>
                                </div>
                                <a href='#' class='ml-auto'><i class='icon-more'></i></a>
                            </div>
                        </li>"; 
			  
		   }
	  }else if(mysqli_num_rows($run_lyrics) > 0){
		  
		    while($fetch_lyrics = mysqli_fetch_array($run_lyrics))  
           {  
			   $name = $fetch_lyrics['1'];
			   $bio = $fetch_lyrics['2'];
			   $lyrical_image = $fetch_lyrics['3'];
			   
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    <figure class='avatar avatar-md float-left  mr-3 mt-1'>
                                        <img src='dash-board/Lyrical/$name/$lyrical_image' alt=''>
                                    </figure>
                                    <h6>$name</h6>
                                    <small>5 Albums - 50 Songs  </small>
                                </div>
                                <a href='#' class='ml-auto'><i class='icon-more'></i></a>
                            </div>
                        </li>";  
           }  
				  
		  
	  }else if(mysqli_num_rows($run_ganres) > 0){
		  
		   while($fetch_ganres = mysqli_fetch_array($run_ganres))  
           {  
			   $ganre = $fetch_ganres['1'];
			   $ganre_id = $fetch_ganres['0'];
			  
				
				 $video_ganre = "SELECT * FROM videos WHERE fk_ganre='$ganre_id' ";  
      $video_ganre_run = mysqli_query($connect, $video_ganre); 
			
			   $audio_ganre = "SELECT * FROM audio WHERE fk_ganre='$ganre_id' ";  
      $audio_ganre_run = mysqli_query($connect, $audio_ganre); 
			$count_audio_ganre = mysqli_num_rows($audio_ganre_run);
			   
				
			$count_video_ganre = mysqli_num_rows($video_ganre_run);
			   
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    
                                    <h6>$ganre</h6>
                                   <small>$count_audio_ganre Audio Song | $count_video_ganre - Video Song  </small>
                                </div>
                              
                            </div>
                        </li>
					";  
           }
	  }else if(mysqli_num_rows($run_languages) > 0){
		
		   while($fetch_lang = mysqli_fetch_array($run_languages))  
           {  
			   $languages_name = $fetch_lang['1'];
			   $language_id = $fetch_lang['0'];
			  
				
				 $video_lang = "SELECT * FROM videos WHERE fk_lang='$language_id' ";  
      $video_lang_run = mysqli_query($connect, $video_lang); 
			$count_video_lang = mysqli_num_rows($video_lang_run);
			   
			    $audio_lang = "SELECT * FROM audio WHERE fk_lang='$language_id' ";  
      $audio_lang_run = mysqli_query($connect, $audio_lang); 
			$count_audio_lang = mysqli_num_rows($audio_lang_run);
			   
			   
			   
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    
                                    <h6>$languages_name</h6>
                                   <small>$count_audio_lang - Audio Song | $count_video_lang - Video Song </small>
                                </div>
                              
                            </div>
                        </li>
					";  
           }
	  }else if(mysqli_num_rows($run_years) > 0){
		  
		   while($fetch_years = mysqli_fetch_array($run_years))  
           {  
			   $year_name = $fetch_years['3'];
			   
			  
                $output .= "<li class='list-group-item'>
                            <div class='d-flex align-items-center'>
                                <div class='col-10'>
                                    
                                    <h6>$year_name</h6>
                       
                                </div>
                              
                            </div>
                        </li>
					";  
           }  
		 
	  }else{
		  $output .= "<h4 class='text-center'>Result Not Found</h4>";
	  }
      $output .= " </ul>
                </div>";  
      echo $output;  
 } 
 ?>  