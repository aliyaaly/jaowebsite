<?php
$userId = $_SESSION['user_id'];
if(isset($_POST["btnSaveNew"])) { 
    $txtNews = $mysqli->real_escape_string($_POST['txtNews']); 

   $tmp_file_name1 = trim($_FILES["txtImage"]["tmp_name"]);
//    echo '<script>alert("'.$tmp_file_name1.'")</script>';
   if($tmp_file_name1 != "") { 		
       $name1 = $_FILES["txtImage"]["name"];
       $ext1 = end((explode(".", $name1))); # extra () to prevent notice
       $file_name1 = date('YmdHms').$userId.".".$ext1; 
       copy($_FILES["txtImage"]["tmp_name"],"ecommerce/upload/".$file_name1);
       $fullPath1 = "ecommerce/upload/".$file_name1; 
    //    echo '<script>alert("'.$file_name1.'")</script>';
    //    echo '<script>alert("'.$fullPath1.'")</script>';
   }

   $sql = "insert into tbl_news (name,image)
           VALUES ('$txtNews', '$file_name1') ";	
            
   if ($mysqli->query($sql) === TRUE) {


       header("Location: ?d=master/news");
   }else{
       echo "<center><h2>ERROR INSERT</h2></center>";
   }
}


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM tbl_news WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/news");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 