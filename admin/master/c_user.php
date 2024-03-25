<?php

if(isset($_POST["btnSaveNew"])) { 
	
	$txtUserId = $_POST['txtuserId']; 	 	 
	$txtphone = $_POST['txtphone'];
    $txtPassword = $_POST['txtpassword']; 
	$curl = curl_init();
	
	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'http://localhost:5000/api/v1/users',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS => json_encode(["userId" => $txtUserId, "phone" => $txtphone, "Password" => $txtPassword]),

	  CURLOPT_HTTPHEADER => array(
		'Authorization: Bearer '.$token.'',
		'Content-Type: application/json'
	  ),
	));
	
	$response = curl_exec($curl);
	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);
	// echo $phone;
	// echo $password;
	// echo 'HTTP code: ' . $httpcode;

  
    if ($httpcode == 200) {
		
        # code...
        header("Location: ?d=master/users");
      }
      else {
        echo "failed ".$httpcode;
      }
  




}

if(isset($_POST["btSaveEdit"])) {
	$txtId = $_POST['txtId']; 
	$txtuserId1 = $_POST['txtuserId1'];  	
	$txtphone1 = $_POST['txtphone1'];
    $txtpassword1 = $_POST['txtpassword1'];
	
$curl1 = curl_init();

curl_setopt_array($curl1, array(
  CURLOPT_URL => 'http://localhost:5000/api/v1/users',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>json_encode(["userId" => $txtId,"phone" => $txtphone1,"password" => $txtpassword1]),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$token1.'',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl1);
$httpcode = curl_getinfo($curl1, CURLINFO_HTTP_CODE);
curl_close($curl1);



// echo $id;
// echo $txtProvinceId;
// echo 'HTTP code: ' . $httpcode;


if ($httpcode == 200) {
	
  # code...
  header("Location: ?d=master/user");
}
else {
  echo "failed ".$httpcode;
}

}

 


if(isset($_POST["btDel"])) {
	$txtId2 = $_POST['txtId2']; 
	
	
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'http://localhost:5000/api/v1/users/delete/',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS =>json_encode(["postId" => $txtId2]),
	
	  CURLOPT_HTTPHEADER => array(
		'Authorization: Bearer '.$token2.'',
		'Content-Type: application/json'
	  ),
	));
	
	$response = curl_exec($curl);
	
	curl_close($curl);
	echo $response;

// echo $id;
// echo $txtProvinceId;
// echo 'HTTP code: ' . $httpcode;


if ($httpcode == 200) {
	
  # code...
  header("Location: ?d=master/user");
}
else {
  echo "failed ".$httpcode;
}

}


?>