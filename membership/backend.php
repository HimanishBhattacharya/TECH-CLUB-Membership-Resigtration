<?php
	$serverdb='localhost';
	$user="root";
	$pass="";
	$database='databasex';
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$year=$_POST['year'];
	$conn=@mysqli_connect($serverdb,$user,$pass,$database)or die("Connection Unsuccessful".mysqli_connect_error());
	if($conn){
		echo "Connected";
	}
	$query="INSERT INTO membersdatabase VALUES ('','$name','$email','$phone','$year')";
	$insert=@mysqli_query($conn,$query);
	
	if($insert){
		echo "Data inserted";
	}
	else
		die("Error: During insertion");
	
?>