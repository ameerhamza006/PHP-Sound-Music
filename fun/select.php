<?php  
 if(isset($_POST["comment_id"]))  
 {  
      $output = '';  
	 $comment_id = $_POST["comment_id"];
  require "functions.php";
      $query = "SELECT * FROM comments WHERE id = '$comment_id'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["review"].'</td>  
                </tr>  
                  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 