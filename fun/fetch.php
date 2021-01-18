
  <?php  
 //fetch.php  
 require "functions.php";

 if(isset($_POST["comment_id"]))  
 {  
	 $comment_id = $_POST["comment_id"];
      $query = "SELECT * FROM comments WHERE id = '$comment_id'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 