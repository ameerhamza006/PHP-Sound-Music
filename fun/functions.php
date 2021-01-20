<?php 

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sound";

$connect = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);



#For Audio Songs
#All Album view
function View_All_Album()
{
	
	global $connect;
	
	$s = "select * from audio";
	$r = mysqli_query($connect,$s);
	$f = mysqli_fetch_array($r);
	$fk_album = $f['3'];
	
	
	$select = "select * from album where id='$fk_album'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			$select_year = "select * from years where id='$year'";
			$run_year = mysqli_query($connect,$select_year);
			$fetch_year = mysqli_fetch_array($run_year);
			$year_name = $fetch_year['3'];
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			$select_language = "select * from languages where id='$language'";
			$run_language = mysqli_query($connect,$select_language);
			$fetch_language = mysqli_fetch_array($run_language);
			$language_name = $fetch_language['1'];
			
			
	
	      if($fetch){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}


#single album view
function Single_View_Album()
{
	global $connect;
	$get_name = $_GET['Albums'];
	
	$select = "select * from album where name='$get_name'";
	$select_run = mysqli_query($connect,$select);
	$album_fetch = mysqli_fetch_array($select_run);
	$fk_album = $album_fetch['0'];
	$album_name_single = $album_fetch['1'];
	$fk_year = $album_fetch['2'];
	$album_image = $album_fetch['5'];
	$artist_id = $album_fetch['3'];
	
	$selectt = "select * from artist where id='$artist_id'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	$selecttt = "select * from years where id='$fk_year'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$year_name_single = $ff['3'];
	
	$select_Audio = "select * from audio where fk_album='$fk_album'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	
	
	
     echo    "<section class='relative imggg' data-bg-possition='center'
                >
            <div class='wrapper has-bottom-gradient'>
                <div class='row pt-5 ml-lg-5 mr-lg-5'>
                    <div class='col-md-10 offset-1'>
                        <div class='row my-5 pt-5'>
                            <div class='col-md-3'>
                                <img src='dash-board/Artist/$artist_name_single/$album_name_single/$album_image' style='height: 250px ;width: 200px ;' alt='/'>
                            </div>
                            <div class='col-md-9'>
                                <div class='d-md-flex align-items-center justify-content-between'>
                                    <h1 class='my-3 text-white '>$album_name_single</h1>
                                    <div class='ml-auto mb-2'>
                                        <a href='#' style=' color: #fff;' class='snackbar' data-text='Bookmark clicked'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-bookmark s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='You like this song'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-heart s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='Thanks for sharing'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-share-1 s-24'></i></a>
                                    </div>
                                </div>

                                <div class='text-white my-2'>
                                    <p >Album: $album_name_single</p>
										  <p>Artist: $artist_name_single</p>
										  <p>Release: $year_name_single</p>
                                </div>
                                <div class='pt-3'>
                                    <a href='#' class='btn btn-primary btn-lg'><i class='icon-play s-28'></i> PLAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='bottom-gradient '></div>
        </section>
       

        <div class='wrapper p-3 p-lg-5'>
          
            <section>
                <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='playlist'>
                                    <ul class='list-group'>";
										
	
	                                  while($Audio_fetch = mysqli_fetch_array($Audio_run))
									  {
										  
										  
	
	
	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
	
	
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	#for language name
	$select_language = "select * from languages where id='$language'";
	$language_run = mysqli_query($connect,$select_language);
	$language_fetch = mysqli_fetch_array($language_run);
	$language_name = $language_fetch['1'];
	
	#for Year name
	$select_year = "select * from years where id='$year'";
	$year_run = mysqli_query($connect,$select_year);
	$year_fetch = mysqli_fetch_array($year_run);
	$year_name = $year_fetch['1'];
	
	#for lyrics name
	$select_lyrics = "select * from lyrics where id='$lyrics'";
	$lyrics_run = mysqli_query($connect,$select_lyrics);
	$lyrics_fetch = mysqli_fetch_array($lyrics_run);
	$lyrics_name = $lyrics_fetch['1'];
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];
										  
	
    $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name/$album_name/$title/$audio";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
										  
									  
                                      echo   "<li class='list-group-item my-1'>
                                            <div class='d-flex align-items-center'>
                                                <div class='col-1'>
                                                    <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                        <i class='icon-play s-28'></i>
                                                    </a>
                                                </div>
												
												<div class='col-6'>
                                                       <figure class='avatar-md float-left  mr-3 mt-1'>
                                                           <img class='r-3' src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt=''>
                                                       </figure>
                                                       <h6>$title</h6>$artist_name
                                                   </div>
												
                                                <span class=' ml-auto'>" .$ThisFileInfo['playtime_string']. "</span>
                                                <a href='#' class='ml-auto'><i class='icon-share-1'></i></a>
                                                <div class='ml-auto'>
                                                    <a href='#' class='btn btn-outline-primary btn-sm d-none d-lg-block'>Buy at
                                                        iTunes</a>
                                                </div>
                                            </div>
                                        </li>";
									  }
                                       
                                    echo "</ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        

        </div>";
	
	
	
	
	
	
	
	
	
	
}


#song view by Ganres
function Song_view_ganre()
{
	global $connect;
	
	
	$select = "select * from ganres";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		if(!$ganre ){
	
echo  "   <section class=' mt-4'>
				  <div class='row row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>
				
				  <div class='card-body has-items-overlay playlist p-4'>
                <div class='d-flex relative  justify-content-between p-2'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                    <a href='Songs.php?Ganre=$g_name'>View $g_name Songs<i class='icon-angle-right ml-1'></i></a>
                </div>
                <div class='lightSlider has-items-overlay playlist'
                     data-item='6'
                     data-item-lg='3'
                     data-item-md='3'
                     data-item-sm='2'
                     data-auto='false'
                     data-pager='false'
                     data-controls='true'
                     data-loop='false'>";
		
		$select_Audio = "select * from audio where fk_ganre='$g_id' ORDER by id DESC";
	$Audio_run = mysqli_query($connect,$select_Audio);
	while( $Audio_fetch = mysqli_fetch_array($Audio_run)){
												
												
												
	
		
	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
												
												
                                               echo  "  <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/' style='
    height: 122px;
'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play ' style='
    font-size: 17px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                    </div>
					
					
					
					";
	
												}
												
                                            echo "        </div>
                
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
            </section>";
		
		}
	
	}
	
	
	
	
}

#song view by Languages
function Song_view_Languages()
{
	global $connect;
	error_reporting(0);
	
	$select = "select * from languages";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		$select_Audio1 = "select * from audio where fk_lang='$g_id'";
	$Audio_run1 = mysqli_query($connect,$select_Audio1);
	$Audio_fetch1 = mysqli_fetch_array($Audio_run1);
		$lang_name = $Audio_fetch1['4'];
		
		if($lang_name){
	
echo  "   <section class='mt-0'>
				  <div class='row row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>
				
				  <div class='card-body has-items-overlay playlist p-4'>
                <div class='d-flex relative  justify-content-between p-2'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                    <a href='Songs.php?Language=$g_name'>View $g_name Songs<i class='icon-angle-right ml-1'></i></a>
                </div>
                <div class='lightSlider has-items-overlay playlist'
                     data-item='6'
                     data-item-lg='3'
                     data-item-md='3'
                     data-item-sm='2'
                     data-auto='false'
                     data-pager='false'
                     data-controls='true'
                     data-loop='false'>";
		
		$select_Audio = "select * from audio where fk_lang='$g_id'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	while( $Audio_fetch = mysqli_fetch_array($Audio_run)){
												
												
												
	
		
	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
												
												
                                               echo  "  <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/' style='
    height: 122px;
'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play ' style='
    font-size: 17px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                    </div>
					
					";
												
												}
												
                                            echo "        </div>
                
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
            </section>";
		}
		
	}
	
}


#Single song play for Get_Ganre And Get_Languages
function Single_song_play()
{
	global $connect;
	
	$get_name = $_GET['Music-Player'];
	
	$select_Audio = "select * from audio where title='$get_name'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	$Audio_fetch = mysqli_fetch_array($Audio_run);
		$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
	
								
	
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name_single = $ff['1'];
	
	
	$selectttt = "select * from years where id='$year'";
	$runnn = mysqli_query($connect,$selectttt);
	$fff = mysqli_fetch_array($runnn);
	$year_name_single = $fff['3'];
	
	 $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name_single/$album_name_single/$title/$audio";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
	
     echo    "<section class='relative imggg' data-bg-possition='center'
                 >
            <div class='wrapper has-bottom-gradient'>
                <div class='row pt-5 ml-lg-5 mr-lg-5'>
                    <div class='col-md-10 offset-1'>
                        <div class='row my-5 pt-5'>
                            <div class='col-md-3'>
                                <img src='dash-board/Artist/$artist_name_single/$album_name_single/$title/$image' style='height: 250px ;width: 200px ;' alt='/'>
                            </div>
                            <div class='col-md-9'>
                                <div class='d-md-flex align-items-center justify-content-between'>
                                    <h1 class='my-3 text-white '>$title</h1>
                                    <div class='ml-auto mb-2'>
                                        <a href='#' style=' color: #fff;' class='snackbar' data-text='Bookmark clicked'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-bookmark s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='You like this song'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-heart s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='Thanks for sharing'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-share-1 s-24'></i></a>
                                    </div>
                                </div>

                                <div class='text-white my-2'>
                                   
										<p >Album: $album_name_single</p>
										  <p>Artist: $artist_name_single</p>
										  <p>Release: $year_name_single</p>
										  
                                </div>
                                <div class='pt-3' >
								
                                    <a href='#' class='btn btn-primary btn-lg'> <i class='icon-play s-28'></i> PLAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='bottom-gradient '></div>
        </section>
       

        <div class='wrapper p-3 p-lg-5'>
          
            <section>
                <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='playlist'>
                                    <ul class='list-group'>
										
	
	                                
	
										  
									  
                                      <li class='list-group-item my-1'>
                                            <div class='d-flex align-items-center'>
                                                <div class='col-1'>
                                                    <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name_single/$album_name_single/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                        <i class='icon-play s-28'></i>
                                                    </a>
                                                </div>
												
												<div class='col-6'>
                                                       <figure class='avatar-md float-left  mr-3 mt-1'>
                                                           <img class='r-3' src='dash-board/Artist/$artist_name_single/$album_name_single/$title/$image' alt=''>
                                                       </figure>
                                                       <h6>$title</h6>$artist_name_single
                                                   </div>
												
                                                <span class=' ml-auto'>" .$ThisFileInfo['playtime_string']. "</span>
                                                <a href='#' class='ml-auto'><i class='icon-share-1'></i></a>
                                                <div class='ml-auto'>
                                                    <a href='#' class='btn btn-outline-primary btn-sm d-none d-lg-block'>Buy at
                                                        iTunes</a>
                                                </div>
                                            </div>
                                        </li>
									  
                                       
                                   </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        

        </div>";
	
	
}

#all songs by ganres when click on bollywood or hollybood etc. then show this song by get ganre name,
function all_song_ganre()
{
	
	global $connect;
	$get_ganre = $_GET['Ganre'];
	
	$select = "select * from ganres where name='$get_ganre'";
	$run = mysqli_query($connect,$select);
	
    $fetch = mysqli_fetch_array($run);
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
	
	
	$select_Audio = "select * from audio where fk_ganre='$g_id'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	
	
	
	
	
	
echo  "<section class='section mt-4'>
	
                <div class=' row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>

	
	
  <div class='card-body has-items-overlay playlist p-3'>
	  
	   <div class='d-flex relative align-items-center justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                   
                </div>
                                            <div class='row'>";
											
	                                   while($Audio_fetch = mysqli_fetch_array($Audio_run))
									   {
										   	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
										   
										   
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name = $ff['1'];
	
                                                echo "<div class='col-md-2 mb-3'>
                                                    <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play s-48'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center mt-2'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
                                                    <div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                                                </div>";
												}
												
												
												
                                           echo "</div>
	  
	  
	  
                                          
                                        </div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>";
	
	
	
}


#all songs by languages when click on Hindi or English etc. then show this song by get Language name,
function all_song_language()
{
	
	global $connect;
	$get_lang = $_GET['Language'];
	
	$select = "select * from languages where name='$get_lang'";
	$run = mysqli_query($connect,$select);
	
    $fetch = mysqli_fetch_array($run);
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
	
	
	$select_Audio = "select * from audio where fk_lang='$g_id'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	
	
	
	
	
	
echo  "<section class='section mt-4'>
	
                <div class=' row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>

	
	
  <div class='card-body has-items-overlay playlist p-5'>
	  
	   <div class='d-flex relative align-items-center justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                   
                </div>
                                            <div class='row'>";
											
	                                   while($Audio_fetch = mysqli_fetch_array($Audio_run))
									   {
										   	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
										   
										   
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name = $ff['1'];
	
                                                echo "<div class='col-md-2 mb-3'>
                                                    <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play s-48'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center mt-2'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
                                                    <div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                                                </div>";
												}
												
												
												
                                           echo "</div>
	  
	  
	  
                                          
                                        </div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>";
	
	
	
}


#all Artist
function All_Artist()
{
	global $connect;
	
	$select = "select * from artist";
	$run = mysqli_query($connect,$select);
	
	while($fetch = mysqli_fetch_array($run))
	{
		$id = $fetch['0'];
		$name = $fetch['1'];
		$song_type = $fetch['2'];
		$bio = $fetch['3'];
		$image = $fetch['4'];
		
		#for songs count 
		$ad = "select * from audio where fk_artist='$id'";
		$runnn = mysqli_query($connect,$ad);
		$count_song = mysqli_num_rows($runnn);
		
		
		#for Album count
		$al = "select * from album where fk_artist='$id' ";
		$runn = mysqli_query($connect,$al);
		$count = mysqli_num_rows($runn);
		
		echo 	"<div class='col-md-4 mb-3' style='margin-top: 40px;'>
                <figure class='avatar avatar-md float-left mr-3 mt-1'>
                    <img src='dash-board/Artist/$name/$image' alt=''>
                </figure>
                <div>
                    <h6><a href='Artist.php?Album=$name'>$name</a></h6>
                    $count Albums - $count_song Songs
                </div>
            </div>";
			
        
		
		
		
	}
}




#All Album by Artist
function Artist_All_Album()
{
	$get_name = $_GET['Album'];
	
	global $connect;
	
	$selectt = "select * from artist where name='$get_name'";
	$run_selectt = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run_selectt);
	$a_id = $f['0'];
	
	$select = "select * from album where fk_artist='$a_id'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			
			
	
	      if($title){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}


#all lyrical artist
function All_Lyrical()
{
	global $connect;
	
	$select = "select * from lyrics";
	$run = mysqli_query($connect,$select);
	
	while($fetch = mysqli_fetch_array($run))
	{
		$id = $fetch['0'];
		$name = $fetch['1'];
		$bio = $fetch['2'];
		$image = $fetch['3'];
		
		#for get Album id 
		$ad = "select * from audio where fk_lyrics='$id'";
		$runnn = mysqli_query($connect,$ad);
		$count_song = mysqli_num_rows($runnn);
		$f = mysqli_fetch_array($runnn);
		$fk_album = $f['3'];
		
		#for Album count
		$al = "select * from album where id='$fk_album'";
		$runn = mysqli_query($connect,$al);
		$count = mysqli_num_rows($runn);
		
		echo 	"<div class='col-md-4 mb-3' style='margin-top: 40px;'>
                <figure class='avatar avatar-md float-left mr-3 mt-1'>
                    <img src='dash-board/Lyrical/$name/$image' alt=''>
                </figure>
                <div>
                    <h6><a href='Artist.php?Album=$name'>$name</a></h6>
                    $count Albums - $count_song Songs
                </div>
            </div>";
			
        
		
		
		
	}
}


#All Album by lyrical
function Lyrical_All_Album()
{
	$get_name = $_GET['Album'];
	
	global $connect;
	
	$selectt = "select * from lyrics where name='$get_name'";
	$run_selectt = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run_selectt);
	$a_id = $f['0'];
	
	
	$selectl = "select * from audio where fk_lyrics='$a_id'";
	$run_selectl = mysqli_query($connect,$selectl);
	$fetchl = mysqli_fetch_array($run_selectl);
	$al_id = $fetchl['3'];
	
	$select = "select * from album where id='$al_id'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			
			
	
	      if($title){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}


#For videos songs
#All Album view of video songs
function Videos_song_All_Album()
{
	
	global $connect;
	
	$s = "select * from videos";
	$r = mysqli_query($connect,$s);
	$f = mysqli_fetch_array($r);
	$fk_album = $f['3'];
	
	
	$select = "select * from album where id='$fk_album'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			$select_year = "select * from years where id='$year'";
			$run_year = mysqli_query($connect,$select_year);
			$fetch_year = mysqli_fetch_array($run_year);
			$year_name = $fetch_year['3'];
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			$select_language = "select * from languages where id='$language'";
			$run_language = mysqli_query($connect,$select_language);
			$fetch_language = mysqli_fetch_array($run_language);
			$language_name = $fetch_language['1'];
			
			
	
	      if($fetch){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}


#single video album view
function Single_View_video_Album()
{
	global $connect;
	$get_name = $_GET['Albums'];
	
	$select = "select * from album where name='$get_name'";
	$select_run = mysqli_query($connect,$select);
	$album_fetch = mysqli_fetch_array($select_run);
	$fk_album = $album_fetch['0'];
	$album_name_single = $album_fetch['1'];
	$album_image = $album_fetch['5'];
	$artist_id = $album_fetch['3'];
	
	$selectt = "select * from artist where id='$artist_id'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	$select_Video = "select * from videos where fk_album='$fk_album'";
	$Video_run = mysqli_query($connect,$select_Video);
	
	
	
     echo    "
       

        <div class='wrapper p-3 p-lg-5'>
          <div class='d-flex' style='margin-left: 88px;'>
               <div class='mb-4'>
                   <h4>$album_name_single Video Songs </h4>
                   <p>Checkout new $album_name_single videos</p>
               </div>
           </div>
            <section>
                <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='row'>
                           ";
										
	
	                                  while($Video_fetch = mysqli_fetch_array($Video_run))
									  {
										  
										  
	
	
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
	
	
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	#for language name
	$select_language = "select * from languages where id='$language'";
	$language_run = mysqli_query($connect,$select_language);
	$language_fetch = mysqli_fetch_array($language_run);
	$language_name = $language_fetch['1'];
	
	#for Year name
	$select_year = "select * from years where id='$year'";
	$year_run = mysqli_query($connect,$select_year);
	$year_fetch = mysqli_fetch_array($year_run);
	$year_name = $year_fetch['1'];
	
	#for lyrics name
	$select_lyrics = "select * from lyrics where id='$lyrics'";
	$lyrics_run = mysqli_query($connect,$select_lyrics);
	$lyrics_fetch = mysqli_fetch_array($lyrics_run);
	$lyrics_name = $lyrics_fetch['1'];
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];
										  
	
    $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name/$album_name/$title/$video";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
										  
									  
                                      echo   " <div class='col-lg-3 col-md-6 mb-4'>
                   <div class='card no-b'>
				    <a href='Video.php?Watch=$title'>
                       <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='' style='height: 200px; width: 100%;' >
					    </a>
                       <div class='p-3'>
                           <div class='mb-1'>
                               <a href='Video.php?Watch=$title'>
                                   <h4>$title </h4>
                               </a>
                           </div>
                           <small><a href='Artist.php?Album=$artist_name'> $artist_name</a> - $album_name</small>
                       </div>
                   </div>
               </div>";
									  }
                                       
                                    echo "
                        </div>
                    </div>
                </div>
            </section>
        

        </div>";
	
	
	
	
	
	
	
	
	
	
}


function Single_video_song_play()
{
	global $connect;
	
	$get_name = $_GET['Watch'];
	
	$select_Video = "select * from videos where title='$get_name'";
	$Video_run = mysqli_query($connect,$select_Video);
	$Video_fetch = mysqli_fetch_array($Video_run);
		$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
	
								
	
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name_single = $ff['1'];
	
	
	$selectttt = "select * from years where id='$year'";
	$runnn = mysqli_query($connect,$selectttt);
	$fff = mysqli_fetch_array($runnn);
	$year_name_single = $fff['3'];
	
	 $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name_single/$album_name_single/$title/$video";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
	
     echo    " <div class='video-responsive'>
                    
					
                    <div class='embed-responsive embed-responsive-16by9'>
                       <video  class='embed-responsive-item' height='540' controls autoplay  poster='dash-board/Artist/$artist_name_single/$album_name_single/$title/$image'>
						<source src='dash-board/Artist/$artist_name_single/$album_name_single/$title/$video' >
						</video>
						
						
                    </div>
					<div class='card no-b r-0'>
                        <div class='card-body p-4'>
                            <div class='d-lg-flex align-items-center'>
                                <h1 class='my-3 h4'>$title | $artist_name_single | $album_name_single</h1>
                                <div class='ml-auto'>
                                    <a href='#' class='snackbar' data-text='Added to favourites'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='icon-bookmark s-24'></i></a>
									   
                                    <a href='#' class='snackbar ml-3' data-text='Added to favourites'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='icon-heart s-24'></i></a>
									   
                                    <a href='#' class='snackbar ml-3' data-text='Added to favourites'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='icon-share-1 s-24'></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>";
	
	
}


#all video by 1 album view | jb video play ho gi to os k right side pr osi k album sy related sari video ay gi
function All_videos_by_one_Album()
{
	global $connect;
	$get_name = $_GET['Watch'];
	
	$select_Video_get = "select * from videos where title='$get_name'";
	$Video_get_run = mysqli_query($connect,$select_Video_get);
	$fetch_get_video = mysqli_fetch_array($Video_get_run);
	$get_album = $fetch_get_video['3'];
	
	$select = "select * from album where id='$get_album'";
	$select_run = mysqli_query($connect,$select);
	$album_fetch = mysqli_fetch_array($select_run);
	$fk_album = $album_fetch['0'];
	$album_name_single = $album_fetch['1'];
	$album_image = $album_fetch['5'];
	$artist_id = $album_fetch['3'];
	
	$selectt = "select * from artist where id='$artist_id'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	$select_Video = "select * from videos where fk_album='$fk_album'";
	$Video_run = mysqli_query($connect,$select_Video);
	
				
	
	                                  while($Video_fetch = mysqli_fetch_array($Video_run))
									  {
										  
										  
	
	
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
	
	
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	#for language name
	$select_language = "select * from languages where id='$language'";
	$language_run = mysqli_query($connect,$select_language);
	$language_fetch = mysqli_fetch_array($language_run);
	$language_name = $language_fetch['1'];
	
	#for Year name
	$select_year = "select * from years where id='$year'";
	$year_run = mysqli_query($connect,$select_year);
	$year_fetch = mysqli_fetch_array($year_run);
	$year_name = $year_fetch['1'];
	
	#for lyrics name
	$select_lyrics = "select * from lyrics where id='$lyrics'";
	$lyrics_run = mysqli_query($connect,$select_lyrics);
	$lyrics_fetch = mysqli_fetch_array($lyrics_run);
	$lyrics_name = $lyrics_fetch['1'];
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];
										  
	
    $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name/$album_name/$title/$video";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
										  
									  
                                      echo   "  <div class='d-flex align-items-center mb-4 ''>
                                    <div class='col-5'>
									 <a href='Video.php?Watch=$title'>
                                        <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='Card image' style='height: 65px; width: 100%;'>
										</a>
                                    </div>
                                    <div class='ml-3'>
                                        <a href='Video.php?Watch=$title'>
                                            <h6>$title | $artist_name </h6>
                                        </a>
                                        <small class='mt-1'>$album_name</small>
                                    </div>
                                </div>";
									  }
                                       
                                  
	
	
	
	
	
	
	
	
	
}


#video song view by Ganres | ganre sy sary song select krny k liye
function video_Song_view_ganre()
{
	global $connect;
	
	
	$select = "select * from ganres";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		
	
echo  " 
<section class='section p-5'>
                <div class='d-flex relative  justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                    <a href='Video.php?Ganre=$g_name'>View $g_name Songs<i class='icon-angle-right ml-1'></i></a>
                </div>
                <div class='lightSlider has-items-overlay playlist'
                     data-item='6'
                     data-item-lg='3'
                     data-item-md='3'
                     data-item-sm='2'
                     data-auto='false'
                     data-pager='false'
                     data-controls='true'
                     data-loop='false'>";
		
		$select_Video = "select * from videos where fk_ganre='$g_id'";
	$Video_run = mysqli_query($connect,$select_Video);
	while( $Video_fetch = mysqli_fetch_array($Video_run)){
												
												
												
	
		
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];
		$ti_al = $title." | ".$album_name;
		$title_album = substr($ti_al, 0,37);
												
												
                                               echo  " <div>
                        <div>
                            <div class='img-wrapper'>
								<a href='Video.php?Watch=$title'>
                                <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='/' style=' height: 130px; width: 100%; '>
									</a>
                         
                                <div class='figure-title card  p-2'>
								<a href='Video.php?Watch=$title'>
                                    <h5>$title_album..</h5>
									</a>
									<a href='Artist.php?Album=$artist_name'>
                                    <span>$artist_name</span>
									</a>
                                </div>
                            </div>
                        </div>
                    </div> ";
	
												}
												
                                            echo "  
            </div>
        </section>
		
		
		
		";
		
		
	
	}
	
	
	
	
}


# video song view by Languages | language sy sary song select krny k liye
function video_Song_view_Languages()
{
	global $connect;
	
	
	$select = "select * from languages";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		
		$select_video1 = "select * from videos where fk_lang='$g_id'";
	$video_run1 = mysqli_query($connect,$select_video1);
	$video_fetch1 = mysqli_fetch_array($video_run1);
		$lang_name = $video_fetch1['4'];
		
		if($lang_name ){
	
echo  " 
<section class='section p-5'>
                <div class='d-flex relative  justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                    <a href='Video.php?Language=$g_name'>View $g_name Songs<i class='icon-angle-right ml-1'></i></a>
                </div>
                <div class='lightSlider has-items-overlay playlist'
                     data-item='6'
                     data-item-lg='3'
                     data-item-md='3'
                     data-item-sm='2'
                     data-auto='false'
                     data-pager='false'
                     data-controls='true'
                     data-loop='false'>";
		
		$select_Video = "select * from videos where fk_lang='$g_id'";
	$Video_run = mysqli_query($connect,$select_Video);
	while( $Video_fetch = mysqli_fetch_array($Video_run)){
												
												
												
	
		
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
	$ti_al = $title." | ".$album_name;
		$title_album = substr($ti_al, 0,37);											
												
                                               echo  " <div>
                        <div>
                            <div class='img-wrapper'>
								<a href='Video.php?Watch=$title'>
                                <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='/' style=' height: 130px; width: 100%; '>
									</a>
                         
                                <div class='figure-title card  p-2'>
								<a href='Video.php?Watch=$title'>
                                    <h5>$title_album..</h5>
									</a>
									<a href='Artist.php?Album=$artist_name'>
                                    <span>$artist_name</span>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					";
	
												}
												
                                            echo " 
            </div>
        </section>
		
		
		
		";
		
		}
		
	}
	
}



#all video songs by Ganres when click on Bollywood or Hollywood etc. then show this song by get Ganre name,
function All_video_Song_view_ganre()
{
	global $connect;
	
	$get_name = $_GET['Ganre'];
	
	$select = "select * from ganres where name='$get_name'";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		if(!$ganre ){
	

		$select_Video = "select * from videos where fk_ganre='$g_id'";
	$Video_run = mysqli_query($connect,$select_Video);
	while( $Video_fetch = mysqli_fetch_array($Video_run)){
									
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
	$ti_al = $title." | ".$album_name;
		$t_a = substr($ti_al, 0,40);											
												
                                               echo  "    <div class='col-lg-3 col-md-6 mb-4'>
                   <div class='card no-b'>
				   <a href='Video.php?Watch=$title'>
                       <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='' style='height: 150px; width: 100% ;'>
					   </a>
                       <div class='p-3' style='height: 100px;'>
                           <div class='mb-1'>
                               <a href='Video.php?Watch=$title'>
                                   <h4>$t_a..</h4>
                               </a>
                           </div>
						    <a href='Artist.php?Album=$artist_name'>
                           <small>$artist_name</small>
						   </a>
                       </div>
                   </div>
               </div>";
	
												}
												
                                           
		
		}
	
	}
	
	
	
	
}


#all video songs by language when click on Bollywood or Hollywood etc. then show this song by get language name,
function All_video_Song_view_language()
{
	global $connect;
	
	$get_name = $_GET['Language'];
	
	$select = "select * from languages where name='$get_name'";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		if(!$ganre ){
	

		$select_Video = "select * from videos where fk_lang='$g_id'";
	$Video_run = mysqli_query($connect,$select_Video);
	while( $Video_fetch = mysqli_fetch_array($Video_run)){
									
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
	$ti_al = $title." | ".$album_name;
		$t_a = substr($ti_al, 0,40);											
												
                                               echo  "    <div class='col-lg-3 col-md-6 mb-4'>
                   <div class='card no-b'>
				   <a href='Video.php?Watch=$title'>
                       <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='' style='height: 150px; width: 100%;'>
					   </a>
                       <div class='p-3' style='height: 100px;'>
                           <div class='mb-1'>
                               <a href='Video.php?Watch=$title'>
                                   <h4>$t_a..</h4>
                               </a>
                           </div>
						   <a href='Artist.php?Album=$artist_name'>
                           <small>$artist_name</small>
						   </a>
                       </div>
                   </div>
               </div>
			   
			   ";
	
												}
												
                                           
		
		}
	
	}
	
	
	
	
}



#User Register
function Sign_up()
{
	
	global $connect;
	
	
	if(isset($_POST['userbtn']))
	{
		$name = mysqli_real_escape_string($connect,$_POST['name']);
		$email = mysqli_real_escape_string($connect,$_POST['email']);
		$number = mysqli_real_escape_string($connect,$_POST['number']);
		$country = mysqli_real_escape_string($connect,$_POST['country']);
		$city = mysqli_real_escape_string($connect,$_POST['city']);
		$address = mysqli_real_escape_string($connect,$_POST['address']);
		$password = mysqli_real_escape_string($connect,$_POST['password']);
		#remove 2 digit from number
		$remove = substr($number,2,15);
		#create rendom number
		$rendom = rand(1,999);
		#ready user_id
		$user_id = $rendom.$remove;
		
		
		
		$user_role = "User";
		
		if($password < 8)
		{
			echo "<p class='text-danger text-center'>Password miniman 8 corecters Require</p>";
			
		}else{
		
		$insert = "INSERT INTO `users`(`user_id`, `name`, `email`, `number`, `country`, `city`, `address`, `password`, `role`) VALUES ('$user_id','$name','$email','$number','$country','$city','$address','$password','$user_role')";
		$run = mysqli_query($connect,$insert);
		
		if($run)
		{
			echo "<script>location.href='Sign-in.php';</script>";
			
		}else{
			echo "<p class='text-danger text-center'>Something Wrong Please check again!</p>";
		}
	  }
		
	}
	
}


function sign_in()
{
	global $connect;
	
	if(isset($_POST['btnlogin']))
	{
		$emaile = mysqli_real_escape_string($connect,$_POST['email']);
		$passwordp = mysqli_real_escape_string($connect,$_POST['password']);

		
		$select = "select * from users where email='$emaile' AND password='$passwordp'";
		$run = mysqli_query($connect,$select);
		
		$count = mysqli_num_rows($run);
		
		if($count == 1)
		{
			$_SESSION['email'] = $emaile;
			echo "<script>location.href='index.php';</script>";
		}else{
			echo "<p class='text-danger text-center'>invalid email Or password</p>";
		}
		
	}
}


function logout(){
	global $connect;
	
	if(isset($_POST['logout']))
	{
	session_start();
	
	session_destroy();
	
		echo "<script>location.href='Sign-in.php';</script>";
		
	}
}

#for comments
function rating_and_review(){
	global $connect;
	$get_name = $_GET['Watch'];
	
	if(isset($_POST['btncomment']))
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
			echo "<script>location.href='Video.php?Watch=$get_name';</script>";
		}else{
			echo "<p class='text-danger text-center'>Something Wrong Please check.</p>";
			
		}
	}
}



function view_rating_and_review(){
	global $connect;
	$get_name = $_GET['Watch'];
	
	
	$select_video = "select * from videos where title='$get_name'";
	$run_video = mysqli_query($connect,$select_video);
	$fetch_video = mysqli_fetch_array($run_video);
	$video_id = $fetch_video['0'];
	
	$select = "select * from comments where fk_song='$video_id' ORDER BY id DESC";
	$run = mysqli_query($connect,$select);
	$count = mysqli_num_rows($run);
	
	echo "<h3 style='font-size: 15px;''><i class='icon-list-1 s-10 text-primary mr-2'></i>$count Comments</h3>";
	
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
		 #$date_short = date_format($comment_date,"Y/m/d H:i:s A");
		
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
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='mt-2 icon-heart s-8'></i></a>";
									   if($_SESSION['email'] && $comment_email == $_SESSION['email']){
										


								      echo "<div style='color:#ff1744;' onClick='Editcom($comment_id)' class='ml-2' type='button' data-toggle='modal' data-target='#myModal'>Edit</div>";
										 # echo "<a href='#&Review=$comment_id' type='button' data-toggle='modal' data-target='#myModal'>Edit</a>";
										   
									   }else{
										  
										    echo "<a href='#' class='ml-2'>Reply</a>";
										   
									   }
								echo "</div>
                            </div>
                        </div>";
		
	
		
	}
	
	
}


#for single video page 
function All_songs(){
	global $connect;
	
	$output="";
	
	$select = "select * from videos ORDER BY id DESC  LIMIT 12";
	$run = mysqli_query($connect,$select);
	
	while($Video_fetch = mysqli_fetch_array($run))
	{
		$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
		
		#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
	$ti_al = $title." | ".$album_name;
		$t_a = substr($ti_al, 0,40);		
		
		   $output   .= "  <div class='d-flex align-items-center mb-4 ''>
                                    <div class='col-5'>
									 <a href='Video.php?Watch=$title'>
                                        <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='Card image' style='height: 65px; width: 100%;'>
										</a>
                                    </div>
                                    <div  style='margin-top: -27px;'>
                                        <a href='Video.php?Watch=$title'>
                                            <h6>$t_a.. </h6>
                                        </a>
                                        <small class='mt-1'>$album_name</small>
                                    </div>
                                </div>";
	
		
		
	}
	
	echo $output;
	
}

function slider_video()
{
	global $connect;
	
	$output="";
	
	$select = "select * from videos ORDER BY id DESC  LIMIT 6";
	$run = mysqli_query($connect,$select);
	
	while($Video_fetch = mysqli_fetch_array($run))
	{
		$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
		
		#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
	$ti_al = $title." | ".$album_name;
		$t_a = substr($ti_al, 0,40);	
		
		
		$output .= "<div class='card'>
                        <figure class='card-img figure'>
                            <div class='img-wrapper'>
                                <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='Card image' style='height: 238px; width: 100%;'>
                            </div>
                            <div class='img-overlay'></div>
                            <div class='has-bottom-gradient'>
                                <div class='d-flex'>
                                    <div class='card-img-overlay'>
                                        <div class='pt-3 pb-3'>
                                            <a href='Video.php?Watch=$title'>
                                                <figure class='float-left mr-3 mt-1'>
                                                    <i class='icon-play s-36'></i>
                                                </figure>
                                                <div>
                                                    <h5>$title</h5>
                                                    <small> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class='bottom-gradient bottom-gradient-thumbnail'></div>
                    </div>";
		
		
		
	}
	echo  $output;
	
}


function Latest_song()
{
	global $connect;
	
	$output="";
	
	$select = "select * from audio ORDER BY id DESC ";
	$Audio_run = mysqli_query($connect,$select);
	
		
	
$output .= "<section class='section mt-4'>
	
                <div class='row row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>

	
	
  <div class='card-body has-items-overlay playlist p-3'>
	  
	   <div class='d-flex relative align-items-center justify-content-between'>
                    <div class='mb-4'>
                        <h4>Latest Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                   
                </div>
                                            <div class='row'>";
											
	                                   while($Audio_fetch = mysqli_fetch_array($Audio_run))
									   {
										   	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
										   
										   
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name = $ff['1'];
	
                                                $output .= "<div class='col-md-2 mb-3'>
                                                    <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/' style='
    height: 160px;
'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play s-48'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center mt-2'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
                                                    <div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                                                </div>";
												}
												
												
												
                                           $output .= "</div>
	  
	  
	  
                                          
                                        </div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>";


	echo  $output;
	
}





?>