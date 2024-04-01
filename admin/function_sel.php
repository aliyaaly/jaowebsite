<?php
include_once("config.php");


function checkLogin($getUsername, $getPass, $mysqli) { 
	//$date = new DateTime();

    $message='';
    $passmd5 = md5($getPass.'l1tt@v@nh'.$getUsername);
    $qry = " SELECT * FROM user WHERE  username='$getUsername' and password='$passmd5'  ";
    
    if ($result_auth = $mysqli->query($qry)) {
    	while ($row = $result_auth->fetch_row()) {
	        $_SESSION['user_id'] = $row[0];
	 		$_SESSION['username'] = $row[1];       
	        $_SESSION['role'] = $row[3];
	        $_SESSION['name'] = $row[4];
			$_SESSION['surname'] = $row[5];
		

		
	        header("Location: index.php");
	        exit();
	    }
	     $result_auth->close();
    }
     

      
}



?>
