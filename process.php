<?php


//connect to a database
$conn = mysqli_connect('localhost','root','','ajaxtest');

echo 'Processing...';

//Check for POST variable
if(isset($_POST['name'])){
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	

	$query = "INSERT INTO users(name) VALUES('$name')";
	if(mysqli_query($conn,$query)){
		echo "User adedd";
	}
	else{
		echo "Error :".mysqli_error($conn);
	}
}

//Check for get variable
if(isset($_GET['name'])){
	echo 'GET : Your name is '.$_GET['name'];
}

