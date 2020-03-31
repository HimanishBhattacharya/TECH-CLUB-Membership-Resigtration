<!doctype>
<html>
	<link rel="stylesheet"  media="screen" type="text/css" href="Styleindex.css">
	<title>Welcome for the membership of CSE Society</title>
	<head>
		<h1 align=center>CSE SOCIETY</h1>
		<link rel="stylesheet" type="text/css" href="Styleindex.css">
		<div class="topnav" align=right>
			<a href="about.html">ABOUT</a>
			<a class="active1" href="members.html">MEMBERS</a>
			<a href="contact.html">CONTACT</a>
			<a href="home.html">HOME</a>
		</div>
	</head>
	<body>
	<div class="container"></div>	
	<div class="regreq8">
	<table align=center cellpadding="8" cellspacing="5"><tr>
					<td><th>ID</th></td>
					<td><th>Name</th></td>
					<td><th>Email</th></td>
					<td><th>Phone</th></td>
					<td><th>Year</th></td>
				</tr>
	<?php
	error_reporting(0);
	$serverdb='localhost';
	$user="root";
	$pass="";
	$database='databasex';
	$conn=@mysqli_connect($serverdb,$user,$pass,$database)or die("Connection Unsuccessful".mysqli_connect_error());
	$query="SELECT *FROM membersdatabase";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
    while($values=mysqli_fetch_assoc($data)){
		echo "<tr>
					<td><th>".$values['ID']."</th></td>
					<td><th>".$values['Name']."</th></td>
					<td><th>".$values['Email']."</th></td>
					<td><th>".$values['Phone']."</th></td>
					<td><th>".$values['Year']."</th></td>
	</tr>";} ?>
	</table></div></body></html>