<?php
	$con = mysqli_connect("localhost","root","");

	mysqli_select_db($con,"student");
	
	$sql = "delete from Persons
	WHERE id = '3'";
	
	mysqli_query($con,$sql);
	
	echo "<script>alert('successfully deleted');</script>'";


?> 