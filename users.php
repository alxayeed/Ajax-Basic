<?php

//connect to a database
$conn = mysqli_connect('localhost','root','','ajaxtest');

$query = "SELECT * FROM users";

//get result
$result = mysqli_query($conn,$query);

//Fetch Data
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($users);

