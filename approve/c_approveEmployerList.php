<?php
$user_id = $_SESSION['user_id'];
if(isset($_GET["id"]) ){	
	
			 
    $id = $_GET["id"];	 		 

    $sql = "UPDATE employ SET status = 'open',updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";	 	


    if ($mysqli->query($sql) === TRUE) {
        header("Location: ?d=approve/approveEmployerList");
    }else{
        echo "<center><h2>ERROR Delete</h2></center>";
    }	


}
