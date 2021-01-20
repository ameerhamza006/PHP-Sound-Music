<?php 

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sound";

$connect = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if(!$connect){
	echo "Conection Eror";
}


#Start (Add,List And Update) Language,Ganre,Year,
#add language
function Add_language()
{
	global $connect;
	
	if(isset($_POST['btnlang']))
	{
		$name = $_POST['langname'];
		
		$insert = "INSERT INTO languages(name) values('$name')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Some <b>Error</b> Please check it!</div>
                           </div>";
		}
		
	}
}


#add ganre
function Add_ganre()
{
	global $connect;
	
	if(isset($_POST['btnganre']))
	{
		$name = $_POST['ganrename'];
		
		$insert = "INSERT INTO ganres(name) values('$name')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Some <b>Error</b> Please check it!</div>
                           </div>";
		}
		
	}
}



#add year
function Add_year()
{
	global $connect;
	
	if(isset($_POST['btnyear']))
	{
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		
		$insert = "INSERT INTO years(date,month,year) values('$day','$month','$year')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Some <b>Error</b> Please check it!</div>
                           </div>";
		}
		
	}
}



#list language
function list_language()
{
	
	global $connect;
	
	$select = "select * from languages";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$name = $fetch['1'];
			
	
	      if($fetch){
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     $name
                                    </td>
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-Languages-Ganres-Years.php?lang-id=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Languages-Ganres-Years.php?l-id=$id'><i class='ri-delete-bin-line'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
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


#list ganre
function list_ganre()
{
	global $connect;
	
	$select = "select * from ganres";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$name = $fetch['1'];
	
	
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     $name
                                    </td>
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-languages-ganres-years.php?Ganre-id=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Languages-Ganres-Years.php?g-id=$id'><i class='ri-delete-bin-line'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
		}
	}else{
		
		 echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		
	}
	
}


#list year
function list_year()
{
	global $connect;
	
	$select = "select * from years";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$day = $fetch['1'];
			$month = $fetch['2'];
			$year = $fetch['3'];
	
	
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     $day
                                    </td>
									<td>
                                     $month
                                    </td>
									<td>
                                     $year
                                    </td>
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-Languages-Ganres-years.php?Year-id=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Languages-Ganres-Years.php?y-id=$id'><i class='ri-delete-bin-line'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
		}
	}else{
		
		 echo "<tr>
                     <td></td>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
                     <td></td>
			  </tr>";
		
	}
	
}


#update language
function Update_language()
{
	global $connect;
	
	if(isset($_POST['ubtnlang']))
	{
		 $get_id = $_GET['lang-id'];
		$name = $_POST['ulangname'];
		
		
		
		$update = "UPDATE languages SET name='$name' WHERE id='$get_id'";
		$run_update = mysqli_query($connect,$update);
		
		if($run_update)
		{
			echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Some <b>Error</b> Please check it!</div>
                           </div>";
		}
		
	}
}


#update ganre
function Update_ganre()
{
	global $connect;
	
	if(isset($_POST['gbtnganre']))
	{
		 $get_id = $_GET['Ganre-id'];
		$name = $_POST['gganrename'];
		
		
		
		$update = "UPDATE ganres SET name='$name' WHERE id='$get_id'";
		$run_update = mysqli_query($connect,$update);
		
		if($run_update)
		{
			echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Some <b>Error</b> Please check it!</div>
                           </div>";
		}
		
	}
}


#update year
function Update_year()
{
	global $connect;
	
	if(isset($_POST['ubtnyear']))
	{
		$get_id = $_GET['Year-id'];
		$day = $_POST['uday'];
		$month = $_POST['umonth'];
		$year = $_POST['uyear'];
		
		$insert = "UPDATE years SET date='$day',month='$month',year='$year' where id='$get_id'";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Languages-Ganres-Years.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'>Some <b>Error</b> Please check it!</div>
                           </div>";
		}
		
	}
}

#End (Add,List And Update) Language,Ganre,Year,



#Start (Add,List And Update) Artist

#ADD Artist
function Add_Artist()
{
	global $connect;
	
	if(isset($_POST['btnart']))
	{
		
		$name = $_POST['artname'];
		$type = $_POST['arttype'];
		$bio = $_POST['artbio'];
		
		$path = "Artist/$name/";
		
		mkdir($path, 0, true);
		
		$image = $_FILES['artpic']['name'];
		$image_old_location = $_FILES['artpic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		$insert = "INSERT INTO artist(name,song_type,bio,image) values('$name','$type','$bio','$image')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Artist.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Artist</b> Not Added Someting Wrong!</div>
                           </div>";
		}
		
	}
}



#list Artist
function list_Artist()
{
	
	global $connect;
	
	$select = "select * from artist";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$name = $fetch['1'];
			$type = $fetch['2'];
			$bio = $fetch['3'];
			$image = $fetch['4'];
			
	
	      if($fetch){
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     <img src='Artist/$name/$image' class='img-fluid avatar-50 rounded' alt='author-profile'>
                                    </td>
									<td>
                                     $name
                                    </td>
									<td>
                                     $type
                                    </td>
									<td>
                                     $bio
                                    </td>
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-Artist.php?Art-id=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Artist.php?a-id=$id'><i class='ri-delete-bin-line'></i></a>
										   <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Image Edit' href='List-Artist.php?img-id=$id'><i class='fa fa-camera'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
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


#update Artist
function Update_Artist()
{
	global $connect;
	
	if(isset($_POST['btnup']))
	{
		$get_id = $_GET['Art-id'];
		$name = $_POST['artname'];
		$type = $_POST['arttype'];
		$bio = $_POST['artbio'];
		
		$select = "select * from artist where id='$get_id'";
	$rrun = mysqli_query($connect,$select);
	$ffetch = mysqli_fetch_array($rrun);
	$oname = $ffetch['1'];
	$oimg = $ffetch['4'];
		
		$old_path = "Artist/$oname/";
		$path = "Artist/$name/";
		
		rename($old_path,$path);
		
		$insert = "UPDATE artist SET name='$name',song_type='$type',bio='$bio' where id='$get_id'";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Artist.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'> <b>Artist</b>Not Update Something Wrong!</div>
                           </div>";
		}
		
	}
}


#update Artist image
function Update_Artist_image()
{
	global $connect;
	
	if(isset($_POST['imgup']))
	{
		$get_id = $_GET['img-id'];
		$name = $_POST['artname'];
		
		$select = "select * from artist where id='$get_id'";
	$rrun = mysqli_query($connect,$select);
	$ffetch = mysqli_fetch_array($rrun);
	$oname = $ffetch['1'];
	$oimg = $ffetch['4'];
		
		$old_path = "Artist/$oname/";
		$path = "Artist/$name/";
		
		rename($old_path,$path);
		
		
		$image = $_FILES['artpic']['name'];
		$image_old_location = $_FILES['artpic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		
		
		$insert = "UPDATE artist SET name='$name',image='$image' where id='$get_id'";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Artist.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'> <b>Artist Picture</b>Not Update Something Wrong!</div>
                           </div>";
		}
		
	}
}

#End (Add,List And Update) Artist



#Start (Add,List And Update) lyrical

#ADD Artist
function Add_Lyrical()
{
	global $connect;
	
	if(isset($_POST['btnly']))
	{
		
		$name = $_POST['lyname'];
		
		$bio = $_POST['lybio'];
		
		$path = "Lyrical/$name/";
		
		mkdir($path, 0, true);
		
		$image = $_FILES['lypic']['name'];
		$image_old_location = $_FILES['lypic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		$insert = "INSERT INTO lyrics(name,bio,image) values('$name','$bio','$image')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Lyrics.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Lyrical Person</b> Not Added Someting Wrong!</div>
                           </div>";
		}
		
	}
}



#list Lyrical Person
function list_Lyrical()
{
	
	global $connect;
	
	$select = "select * from lyrics";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$name = $fetch['1'];
			$bio = $fetch['2'];
			$image = $fetch['3'];
			
			
	
	      if($fetch){
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     <img src='Lyrical/$name/$image' class='img-fluid avatar-50 rounded' alt='author-profile'>
                                    </td>
									<td>
                                     $name
                                    </td>
									
									<td>
                                     $bio
                                    </td>
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-Lyrics.php?Art-id=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Lyrics.php?a-id=$id'><i class='ri-delete-bin-line'></i></a>
										   <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Image Edit' href='List-Lyrics.php?img-id=$id'><i class='fa fa-camera'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
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



#update Lyrical
function Update_Lyrical()
{
	global $connect;
	
	if(isset($_POST['btnup']))
	{
		$get_id = $_GET['Art-id'];
		$name = $_POST['artname'];
		
		$bio = $_POST['artbio'];
		
		$select = "select * from lyrics where id='$get_id'";
	$rrun = mysqli_query($connect,$select);
	$ffetch = mysqli_fetch_array($rrun);
	$oname = $ffetch['1'];
	$oimg = $ffetch['3'];
		
		$old_path = "Lyrical/$oname/";
		$path = "Lyrical/$name/";
		
		rename($old_path,$path);
		
		$insert = "UPDATE lyrics SET name='$name',bio='$bio' where id='$get_id'";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Lyrics.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'> <b>Lyrical Person</b>Not Update Something Wrong!</div>
                           </div>";
		}
		
	}
}


#update Lyrical Person image
function Update_Lyrical_image()
{
	global $connect;
	
	if(isset($_POST['imgup']))
	{
		$get_id = $_GET['img-id'];
		$name = $_POST['artname'];
		
		$select = "select * from lyrics where id='$get_id'";
	$rrun = mysqli_query($connect,$select);
	$ffetch = mysqli_fetch_array($rrun);
	$oname = $ffetch['1'];
	$oimg = $ffetch['3'];
		
		$old_path = "Lyrical/$oname/";
		$path = "Lyrical/$name/";
		
		rename($old_path,$path);
		
		
		$image = $_FILES['artpic']['name'];
		$image_old_location = $_FILES['artpic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		
		
		$insert = "UPDATE lyrics SET name='$name',image='$image' where id='$get_id'";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Lyrics.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'> <b>Lyrical Person Picture</b>Not Update Something Wrong!</div>
                           </div>";
		}
		
	}
}

#End (Add,List And Update) Lyrical Person



#Start (Add,List And Update) Album

#ADD Album
function Add_Album()
{
	global $connect;
	
	if(isset($_POST['btnal']))
	{
		
		$title = $_POST['altitle'];
		$artist = $_POST['alartist'];
		$language = $_POST['allang'];
		$year = $_POST['alyear'];
		
		$select = "select * from artist where id='$artist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$name = $fetch['1'];
		
		
		$path = "Artist/$name/$title/";
		
		mkdir($path, 0, true);
		
		
						
		$image = $_FILES['alpic']['name'];
		$image_old_location = $_FILES['alpic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		$insert = "INSERT INTO album(name,fk_year,fk_artist,fk_lang,image) values('$title','$year','$artist','$language','$image')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Album.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Album</b> Not Added Someting Wrong!</div>
                           </div>";
		}
		
	}
}



#list Album
function list_Album()
{
	
	global $connect;
	
	$select = "select * from album";
	
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
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     <img src='Artist/$artist_name/$title/$image' class='img-fluid avatar-50 rounded' alt='author-profile'>
                                    </td>
									<td>
                                     $title
                                    </td>
									
									<td>
                                     $artist_name
                                    </td>
									<td>
                                     $language_name
                                    </td>
									<td>
                                     $year_name
                                    </td>
									
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-Album.php?Art-id=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Album.php?a-id=$id'><i class='ri-delete-bin-line'></i></a>
										   <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Image Edit' href='List-Album.php?img-id=$id'><i class='fa fa-camera'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
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


#Update Album
function Update_Album()
{
	global $connect;
	
	if(isset($_POST['ubtn']))
	{
		$get_id = $_GET['Art-id'];
		$title = $_POST['utitle'];
		$artist = $_POST['uartist'];
		$language = $_POST['ulang'];
		$year = $_POST['uyear'];
		
		$select = "select * from artist where id='$artist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$name = $fetch['1'];
		
		$selectt = "select * from album where id='$get_id'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_name = $fetchh['1'];
		
		$old_path = "Artist/$name/$al_name/";
		$path = "Artist/$name/$title/";
		
		rename($old_path,$path);
		
		
		$insert = "UPDATE album SET name='$title',fk_year='$year',fk_artist='$artist',fk_lang='$language' where id='$get_id'";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Album.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Album</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}



#Update Album Image
function Update_Album_image()
{
	global $connect;
	
	if(isset($_POST['uimgup']))
	{ 
		$get_id = $_GET['img-id'];
		$title = $_POST['artname'];
		
		
		
		$selectt = "select * from album where id='$get_id'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_name = $fetchh['1'];
		$artist = $fetchh['3'];
		
		
		$select = "select * from artist where id='$artist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$name = $fetch['1'];
		
		$old_path = "Artist/$name/$al_name/";
		$path = "Artist/$name/$title/";
		
		rename($old_path,$path);
		
		
	 
	    $image = $_FILES['uartpic']['name'];
		$old_image_location = $_FILES['uartpic']['tmp_name'];
		$new_image_location = $path.$image;
		
		move_uploaded_file($old_image_location,$new_image_location);
		
		$insert = "UPDATE album SET name='$title',image='$image' where id='$get_id'";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Album.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Album Image</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}



#Start (Add,List And Update) Audio

#ADD Audio
function Add_Audio()
{
	error_reporting(0);
	global $connect;
	
	if(isset($_POST['abtn']))
	{
		
		$title = $_POST['title'];
		$artist = $_POST['artist'];
		$language = $_POST['lang'];
		$year = $_POST['year'];
		$album = $_POST['album'];
		$ganre = $_POST['ganre'];
		$comboser = $_POST['compo'];
		$lyrical = $_POST['lyrical'];
		$descrip = $_POST['des'];
		
		
		
		
		
		$select = "select * from artist where id='$artist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$name = $fetch['1'];
		
		$selectt = "select * from album where id='$album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_title= $fetchh['1'];
		
		
		$path = "Artist/$name/$al_title/$title/";
		
		mkdir($path, 0, true);
		
		
						
		$image = $_FILES['pic']['name'];
		$image_type = $_FILES['pic']['type'];
		$image_old_location = $_FILES['pic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		$audio = $_FILES['audio']['name'];
		$audio_type = $_FILES['audio']['type'];
		$audio_old_location = $_FILES['audio']['tmp_name'];
		$audio_new_location = $path.$audio;
		
		
		move_uploaded_file($audio_old_location,$audio_new_location);
		
		$insert = "INSERT INTO audio(title,fk_artist,fk_album,fk_lang,fk_year,fk_ganre,fk_lyrics,compose,discription,image,audio) values('$title','$artist','$album','$language','$year','$ganre','$lyrical','$comboser','$descrip','$image','$audio')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Music-Audio.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Audio</b> Not Upload Someting Wrong!</div>
                           </div>";
		}
		
		
	}
}



#list Audio
function list_Audio()
{
	
	global $connect;
	
	$select = "select * from audio";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$artist = $fetch['2'];
			$album = $fetch['3'];
			$language = $fetch['4'];
			$year = $fetch['5'];
			$ganre = $fetch['6'];
			$lyrics = $fetch['7'];
			$composer = $fetch['8'];
			$des = $fetch['9'];
			$image = $fetch['10'];
			$audio = $fetch['11'];
			
			$select_year = "select * from years where id='$year'";
			$run_year = mysqli_query($connect,$select_year);
			$fetch_year = mysqli_fetch_array($run_year);
			$year_name = $fetch_year['3'];
			
			
            $abselectttt = "select * from album  where id='$album'";
            $abrun = mysqli_query($connect,$abselectttt);
			$fetch_album = mysqli_fetch_array($abrun);
			$album_name = $fetch_album['1'];


            $gaselectttt = "select * from ganres where id='$ganre'";
            $garun = mysqli_query($connect,$gaselectttt);
			$fetch_ganre = mysqli_fetch_array($garun);
			$ganre_name = $fetch_ganre['1'];

            $lyselectttt = "select * from lyrics where id='$lyrics'";
            $lyrun = mysqli_query($connect,$lyselectttt);
			$fetch_lyrics = mysqli_fetch_array($lyrun);
			$lyrics_name = $fetch_lyrics['1'];
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			$select_language = "select * from languages where id='$language'";
			$run_language = mysqli_query($connect,$select_language);
			$fetch_language = mysqli_fetch_array($run_language);
			$language_name = $fetch_language['1'];
			
			
	
	      if($fetch){
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     <img src='Artist/$artist_name/$album_name/$title/$image' class='img-fluid avatar-50 rounded' alt='author-profile'>
                                    </td>
									<td>
                                     $title
                                    </td>
									
									<td>
                                     $album_name
                                    </td>
									<td>
                                     $artist_name
                                    </td>
									<td>
                                     $lyrics_name
                                    </td>
									<td>
                                     $composer
                                    </td>
									<td>
                                     $language_name
                                    </td>
									<td>
                                     $year_name
                                    </td>
									<td>
                                     $ganre_name
                                    </td>
									<td>
                                     $des
                                    </td>
									
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-Music-Audio.php?Edit-Audio=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Music-Audio.php?Delete-Audio=$id'><i class='ri-delete-bin-line'></i></a>
										   <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Image Edit' href='List-Music-Audio.php?Edit-file=$id'><i class='fa fa-camera'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
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


# Update Audio
function Update_Audio()
{
	global $connect;
	
	if(isset($_POST['uabtn']))
	{
		$get_id = $_GET['Edit-Audio'];
		
		$title = $_POST['title'];
		$artist = $_POST['artist'];
		$language = $_POST['lang'];
		$year = $_POST['year'];
		$album = $_POST['album'];
		$ganre = $_POST['ganre'];
		$comboser = $_POST['compo'];
		$lyrical = $_POST['lyrical'];
		$descrip = $_POST['des'];
		
		#for get method
		$bselect = "select * from audio where id='$get_id'";
		$brun_select = mysqli_query($connect,$bselect);
		$fetch = mysqli_fetch_array($brun_select);
		$btitle = $fetch['1'];
		$bartist = $fetch['2'];
		$b_album = $fetch['3'];
		
		
		$select = "select * from artist where id='$bartist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$aname = $fetch['1'];
		
		$selectt = "select * from album where id='$b_album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_album= $fetchh['1'];
		
		
		
		#for post method
		$aselect = "select * from artist where id='$artist'";
		$arun_select = mysqli_query($connect,$aselect);
		$afetch = mysqli_fetch_array($arun_select);
		$arname = $afetch['1'];
		
		$alselectt = "select * from album where id='$album'";
		$alrun_selectt = mysqli_query($connect,$alselectt);
		$alfetchh = mysqli_fetch_array($alrun_selectt);
		$album_name= $alfetchh['1'];
		
		
		$old_path = "Artist/$aname/$al_album/$btitle/";
		$path = "Artist/$arname/$album_name/$title/";
		
		rename($old_path,$path);
		
		
		
		
		$Update = "UPDATE audio SET title='$title',fk_artist='$artist',fk_album='$album',fk_lang='$language',fk_year='$year',fk_ganre='$ganre',fk_lyrics='$lyrical',compose='$comboser',discription='$descrip' where id='$get_id'";
		$run_insert = mysqli_query($connect,$Update);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Music-Audio.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Audio</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}



# Update Audio image
function Update_Audio_image()
{
	global $connect;
	
	if(isset($_POST['ubtn']))
	{
		$get_id = $_GET['Edit-file'];
		
		$title = $_POST['title'];
		
		
		#for get method
		$bselect = "select * from audio where id='$get_id'";
		$brun_select = mysqli_query($connect,$bselect);
		$fetch = mysqli_fetch_array($brun_select);
		$btitle = $fetch['1'];
		$bartist = $fetch['2'];
		$b_album = $fetch['3'];
		
		
		$select = "select * from artist where id='$bartist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$aname = $fetch['1'];
		
		$selectt = "select * from album where id='$b_album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_album= $fetchh['1'];
		
		
		#for post method
		$pselect = "select * from audio where title='$title'";
		$prun_select = mysqli_query($connect,$pselect);
		$pfetch = mysqli_fetch_array($prun_select);
		
		$artist = $pfetch['2'];
		$album = $pfetch['3'];
		
		#for post method
		$aselect = "select * from artist where id='$artist'";
		$arun_select = mysqli_query($connect,$aselect);
		$afetch = mysqli_fetch_array($arun_select);
		$arname = $afetch['1'];
		
		$alselectt = "select * from album where id='$album'";
		$alrun_selectt = mysqli_query($connect,$alselectt);
		$alfetchh = mysqli_fetch_array($alrun_selectt);
		$album_name= $alfetchh['1'];
		
		
		$old_path = "Artist/$aname/$al_album/$btitle/";
		$path = "Artist/$arname/$album_name/$title/";
		
		rename($old_path,$path);
		
		$image = $_FILES['upic']['name'];
		$image_old_location = $_FILES['upic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		
		
		$Update = "UPDATE audio SET title='$title', image='$image' where id='$get_id'";
		$run_insert = mysqli_query($connect,$Update);
		
		if($run_insert)
		{
			echo "<meta http-equiv='refresh' content='0'>";
			echo "<div class='alert text-white bg-success' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Audio Image</b> Updated Successfully.</div>
                           </div>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Audio Image</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}



# Update music Audio 
function Update_music_Audio()
{
	global $connect;
	
	if(isset($_POST['audbtn']))
	{
		$get_id = $_GET['Edit-file'];
		
		$title = $_POST['atitle'];
		
		
		#for get method
		$bselect = "select * from audio where id='$get_id'";
		$brun_select = mysqli_query($connect,$bselect);
		$fetch = mysqli_fetch_array($brun_select);
		$btitle = $fetch['1'];
		$bartist = $fetch['2'];
		$b_album = $fetch['3'];
		
		
		$select = "select * from artist where id='$bartist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$aname = $fetch['1'];
		
		$selectt = "select * from album where id='$b_album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_album= $fetchh['1'];
		
		
		#for post method
		$pselect = "select * from audio where title='$title'";
		$prun_select = mysqli_query($connect,$pselect);
		$pfetch = mysqli_fetch_array($prun_select);
		
		$artist = $pfetch['2'];
		$album = $pfetch['3'];
		
		#for post method
		$aselect = "select * from artist where id='$artist'";
		$arun_select = mysqli_query($connect,$aselect);
		$afetch = mysqli_fetch_array($arun_select);
		$arname = $afetch['1'];
		
		$alselectt = "select * from album where id='$album'";
		$alrun_selectt = mysqli_query($connect,$alselectt);
		$alfetchh = mysqli_fetch_array($alrun_selectt);
		$album_name= $alfetchh['1'];
		
		
		$old_path = "Artist/$aname/$al_album/$btitle/";
		$path = "Artist/$arname/$album_name/$title/";
		
		rename($old_path,$path);
		
		$audio = $_FILES['aaudio']['name'];
		$audio_old_location = $_FILES['aaudio']['tmp_name'];
		$audio_new_location = $path.$audio;
		
		move_uploaded_file($audio_old_location,$audio_new_location);
		
		
		
		$Update = "UPDATE audio SET title='$title', audio='$audio' where id='$get_id'";
		$run_insert = mysqli_query($connect,$Update);
		
		if($run_insert)
		{
			
			echo "<div class='alert text-white bg-success' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Music Audio</b> Updated Successfully.</div>
                           </div>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Music Audio</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}




#Start (Add,List And Update) Video

#ADD video
function Add_Video()
{

	global $connect;
	
	if(isset($_POST['vbtn']))
	{
		
		$title = $_POST['title'];
		$artist = $_POST['artist'];
		$language = $_POST['lang'];
		$year = $_POST['year'];
		$album = $_POST['album'];
		$ganre = $_POST['ganre'];
		$comboser = $_POST['compo'];
		$lyrical = $_POST['lyrical'];
		$descrip = $_POST['des'];
		
		
		
		
		$select = "select * from artist where id='$artist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$name = $fetch['1'];
		
		$selectt = "select * from album where id='$album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_title= $fetchh['1'];
		
		
		$path = "Artist/$name/$al_title/$title/";
		
		mkdir($path, 0, true);
		
		
		$sound = "-sound.strategicvision.com.pk";				
		$image = $_FILES['pic']['name'];
		
		$image_old_location = $_FILES['pic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		$video = $_FILES['video']['name'];
	
		$video_old_location = $_FILES['video']['tmp_name'];
		
		$video_new_location = $path.$video;
		
			
		
		move_uploaded_file($video_old_location,$video_new_location);
		
		
		$insert = "INSERT INTO videos(title,fk_artist,fk_album,fk_lang,fk_year,fk_ganre,fk_lyrics,compose,discription,image,video) values('$title','$artist','$album','$language','$year','$ganre','$lyrical','$comboser','$descrip','$image','$video')";
		$run_insert = mysqli_query($connect,$insert);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Music-Video.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Video</b> Not Upload Someting Wrong!</div>
                           </div>";
		}
			
		
	}
}



#list Audio
function list_Video()
{
	
	global $connect;
	
	$select = "select * from videos";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$artist = $fetch['2'];
			$album = $fetch['3'];
			$language = $fetch['4'];
			$year = $fetch['5'];
			$ganre = $fetch['6'];
			$lyrics = $fetch['7'];
			$composer = $fetch['8'];
			$des = $fetch['9'];
			$image = $fetch['10'];
			$audio = $fetch['11'];
			
			$select_year = "select * from years where id='$year'";
			$run_year = mysqli_query($connect,$select_year);
			$fetch_year = mysqli_fetch_array($run_year);
			$year_name = $fetch_year['3'];
			
			
            $abselectttt = "select * from album  where id='$album'";
            $abrun = mysqli_query($connect,$abselectttt);
			$fetch_album = mysqli_fetch_array($abrun);
			$album_name = $fetch_album['1'];


            $gaselectttt = "select * from ganres where id='$ganre'";
            $garun = mysqli_query($connect,$gaselectttt);
			$fetch_ganre = mysqli_fetch_array($garun);
			$ganre_name = $fetch_ganre['1'];

            $lyselectttt = "select * from lyrics where id='$lyrics'";
            $lyrun = mysqli_query($connect,$lyselectttt);
			$fetch_lyrics = mysqli_fetch_array($lyrun);
			$lyrics_name = $fetch_lyrics['1'];
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			$select_language = "select * from languages where id='$language'";
			$run_language = mysqli_query($connect,$select_language);
			$fetch_language = mysqli_fetch_array($run_language);
			$language_name = $fetch_language['1'];
			
			
	
	      if($fetch){
	                        echo "
                                 <tr>
                                    <td>" .++$sno. "</td>
                                    <td>
                                     <img src='Artist/$artist_name/$album_name/$title/$image' class='img-fluid avatar-50 rounded' alt='author-profile'>
                                    </td>
									<td>
                                     $title
                                    </td>
									
									<td>
                                     $album_name
                                    </td>
									<td>
                                     $artist_name
                                    </td>
									<td>
                                     $lyrics_name
                                    </td>
									<td>
                                     $composer
                                    </td>
									<td>
                                     $language_name
                                    </td>
									<td>
                                     $year_name
                                    </td>
									<td>
                                     $ganre_name
                                    </td>
									<td>
                                     $des
                                    </td>
									
                                    
                                    <td>
                                       <div class='flex align-items-center list-user-action'>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit' href='List-Music-Video.php?Edit-Video=$id'><i class='ri-pencil-line'></i></a>
                                          <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete' href='List-Music-Video.php?Delete-Video=$id'><i class='ri-delete-bin-line'></i></a>
										   <a class='bg-primary' data-toggle='tooltip' data-placement='top' title='' data-original-title='Image Edit' href='List-Music-Video.php?Edit-file=$id'><i class='fa fa-camera'></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              ";
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


# Update Audio
function Update_Video()
{
	global $connect;
	
	if(isset($_POST['uvbtn']))
	{
		$get_id = $_GET['Edit-Video'];
		
		$title = $_POST['title'];
		$artist = $_POST['artist'];
		$language = $_POST['lang'];
		$year = $_POST['year'];
		$album = $_POST['album'];
		$ganre = $_POST['ganre'];
		$comboser = $_POST['compo'];
		$lyrical = $_POST['lyrical'];
		$descrip = $_POST['des'];
		
		#for get method
		$bselect = "select * from videos where id='$get_id'";
		$brun_select = mysqli_query($connect,$bselect);
		$fetch = mysqli_fetch_array($brun_select);
		$btitle = $fetch['1'];
		$bartist = $fetch['2'];
		$b_album = $fetch['3'];
		
		
		$select = "select * from artist where id='$bartist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$aname = $fetch['1'];
		
		$selectt = "select * from album where id='$b_album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_album= $fetchh['1'];
		
		
		
		#for post method
		$aselect = "select * from artist where id='$artist'";
		$arun_select = mysqli_query($connect,$aselect);
		$afetch = mysqli_fetch_array($arun_select);
		$arname = $afetch['1'];
		
		$alselectt = "select * from album where id='$album'";
		$alrun_selectt = mysqli_query($connect,$alselectt);
		$alfetchh = mysqli_fetch_array($alrun_selectt);
		$album_name= $alfetchh['1'];
		
		
		$old_path = "Artist/$aname/$al_album/$btitle/";
		$path = "Artist/$arname/$album_name/$title/";
		
		rename($old_path,$path);
		
		
		
		
		$Update = "UPDATE videos SET title='$title',fk_artist='$artist',fk_album='$album',fk_lang='$language',fk_year='$year',fk_ganre='$ganre',fk_lyrics='$lyrical',compose='$comboser',discription='$descrip' where id='$get_id'";
		$run_insert = mysqli_query($connect,$Update);
		
		if($run_insert)
		{
			echo "<script> document.location.href='List-Music-Video.php';</script>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Video</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}



# Update Audio image
function Update_Video_image()
{
	global $connect;
	
	if(isset($_POST['vubtn']))
	{
		$get_id = $_GET['Edit-file'];
		
		$title = $_POST['title'];
		
		
		#for get method
		$bselect = "select * from videos where id='$get_id'";
		$brun_select = mysqli_query($connect,$bselect);
		$fetch = mysqli_fetch_array($brun_select);
		$btitle = $fetch['1'];
		$bartist = $fetch['2'];
		$b_album = $fetch['3'];
		
		
		$select = "select * from artist where id='$bartist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$aname = $fetch['1'];
		
		$selectt = "select * from album where id='$b_album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_album= $fetchh['1'];
		
		
		#for post method
		$pselect = "select * from videos where title='$title'";
		$prun_select = mysqli_query($connect,$pselect);
		$pfetch = mysqli_fetch_array($prun_select);
		
		$artist = $pfetch['2'];
		$album = $pfetch['3'];
		
		#for post method
		$aselect = "select * from artist where id='$artist'";
		$arun_select = mysqli_query($connect,$aselect);
		$afetch = mysqli_fetch_array($arun_select);
		$arname = $afetch['1'];
		
		$alselectt = "select * from album where id='$album'";
		$alrun_selectt = mysqli_query($connect,$alselectt);
		$alfetchh = mysqli_fetch_array($alrun_selectt);
		$album_name= $alfetchh['1'];
		
		
		$old_path = "Artist/$aname/$al_album/$btitle/";
		$path = "Artist/$arname/$album_name/$title/";
		
		rename($old_path,$path);
		
		$image = $_FILES['upic']['name'];
		$image_old_location = $_FILES['upic']['tmp_name'];
		$image_new_location = $path.$image;
		
		move_uploaded_file($image_old_location,$image_new_location);
		
		
		
		$Update = "UPDATE videos SET title='$title', image='$image' where id='$get_id'";
		$run_insert = mysqli_query($connect,$Update);
		
		if($run_insert)
		{
			echo "<meta http-equiv='refresh' content='0'>";
			echo "<div class='alert text-white bg-success' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Video Image</b> Updated Successfully.</div>
                           </div>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Video Image</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}



# Update music Audio 
function Update_music_Video()
{
	global $connect;
	
	if(isset($_POST['vvbtn']))
	{
		$get_id = $_GET['Edit-file'];
		
		$title = $_POST['atitle'];
		
		
		#for get method
		$bselect = "select * from videos where id='$get_id'";
		$brun_select = mysqli_query($connect,$bselect);
		$fetch = mysqli_fetch_array($brun_select);
		$btitle = $fetch['1'];
		$bartist = $fetch['2'];
		$b_album = $fetch['3'];
		
		
		$select = "select * from artist where id='$bartist'";
		$run_select = mysqli_query($connect,$select);
		$fetch = mysqli_fetch_array($run_select);
		$aname = $fetch['1'];
		
		$selectt = "select * from album where id='$b_album'";
		$run_selectt = mysqli_query($connect,$selectt);
		$fetchh = mysqli_fetch_array($run_selectt);
		$al_album= $fetchh['1'];
		
		
		#for post method
		$pselect = "select * from videos where title='$title'";
		$prun_select = mysqli_query($connect,$pselect);
		$pfetch = mysqli_fetch_array($prun_select);
		
		$artist = $pfetch['2'];
		$album = $pfetch['3'];
		
		#for post method
		$aselect = "select * from artist where id='$artist'";
		$arun_select = mysqli_query($connect,$aselect);
		$afetch = mysqli_fetch_array($arun_select);
		$arname = $afetch['1'];
		
		$alselectt = "select * from album where id='$album'";
		$alrun_selectt = mysqli_query($connect,$alselectt);
		$alfetchh = mysqli_fetch_array($alrun_selectt);
		$album_name= $alfetchh['1'];
		
		
		$old_path = "Artist/$aname/$al_album/$btitle/";
		$path = "Artist/$arname/$album_name/$title/";
		
		rename($old_path,$path);
		
		$video = $_FILES['vvideo']['name'];
		$video_old_location = $_FILES['vvideo']['tmp_name'];
		$video_new_location = $path.$video;
		
		move_uploaded_file($video_old_location,$video_new_location);
		
		
		
		$Update = "UPDATE videos SET title='$title', video='$audio' where id='$get_id'";
		$run_insert = mysqli_query($connect,$Update);
		
		if($run_insert)
		{
			
			echo "<div class='alert text-white bg-success' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Music Video</b> Updated Successfully.</div>
                           </div>";
		}else{
			
			echo "<div class='alert text-white bg-primary' role='alert'>
                              <div class='iq-alert-icon'>
                                 <i class='ri-alert-line'></i>
                              </div>
                              <div class='iq-alert-text'><b>Music Video</b> Not Updated Someting Wrong!</div>
                           </div>";
		}
		
	}
}



?>