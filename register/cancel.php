<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();

include_once ("../config.php");

$userId = $_SESSION['user_id'];
if(isset($_GET["del"]) ){	
	
			 
    $id = $_GET["del"];	 		 

    $sql = "UPDATE apply SET status = 'cancel',updatedBy='$userId',updatedAt=NOW() WHERE id = '$id' ";	 	


    if ($mysqli->query($sql) === TRUE) {
        header("Location: history.php");
    }else{
        echo "<center><h2>ERROR Delete</h2></center>";
    }	


}
?>