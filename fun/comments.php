<?php

require "functions.php";


if(isset($_POST['keyrating']) || isset($_POST['keyname']) || isset($_POST['keyemail']) || isset($_POST['keyuserid'])  || isset($_POST['keysongid']) || isset($_POST['keymsg']))
{
	extract($_POST);
	
	$insert = "insert into comments values('$keyname','$keyemail','$keyrating','$keymsg','$keyuserid','$keysongid')";
	$run = mysqli_query($connect,$insert);
	
	if($run)
	{
		echo "data insert successfully";
	}else{
		echo "not insert";
	}
}

?>