<?php
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];	
$buy = $_POST['buy'];
$type = $_POST['type'];


if (!empty($name) || !empty($age) || !empty($gender) || !empty($phone) || !empty($email) || !empty($address) || !empty($buy) || !empty($type))
	{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "building";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
				or 
			die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   

     $INSERT = "INSERT Into info(name, age , gender, phone, email, address, buy, type)values('".$name."','".$age."','".$gender."','".$phone."','".$email."','".$address."','".$buy."','".$type."')";
	if(mysqli_query($conn,$INSERT))
	{
		echo  '<script type="text/javascript"> alert("DATA SAVED")
		window.history.go(-1);
		</script>';
		
	}
	else{
		echo 'failed to insert';
		echo mysqli_error($conn);
	}
	 
     $conn->close();
    
} 
?>