<?php
include_once("config.php");
// $log_id = $_SESSION['EGTKCOINuser_id'];

// ob_start(); // Turn on output buffering
// system('ipconfig /all'); //Execute external program to display output
// $mycom=ob_get_contents(); // Capture the output into a variable
// ob_clean(); // Clean (erase) the output buffer

// $findme = "Physical";
// $pmac = strpos($mycom, $findme); // Find the position of Physical text
// $mac=substr($mycom,($pmac+36),17); // Get Physical Address

// $_SESSION['EGTKCOINmacadd'] = $mac;


function checkLogin($getUsername, $getPass, $mysqli) { 
	//$date = new DateTime();

    // $message='';
    // $passmd5 = md5($getPass.'505uK5@v@y'.$getUsername);
    $qry = " SELECT * FROM  v_user  WHERE  username='$getUsername' and password='$getPass'  ";
    
    if ($result_auth = $mysqli->query($qry)) {
    	while ($row = $result_auth->fetch_row()) {
	        $_SESSION['user_id'] = $row[0];
	 		$_SESSION['username'] = $row[1];       
	        $_SESSION['name'] = $row[3];
	        $_SESSION['surname'] = $row[4];
			$_SESSION['role'] = $row[5];
			$_SESSION['role_id'] = $row[6];

			if ($_SESSION['role_id'] == 4) {
				header("Location: ecommerce/ecommerce.php");
				exit();
			}
	        header("Location: index.php");
	        exit();
	    }
	     $result_auth->close();
    }
     

      
}



?>
