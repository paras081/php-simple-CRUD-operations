<?php
	$con = mysqli_connect("localhost","root","","student");

//	mysqli_select_db($con,"student");
	
	$sql = "UPDATE Persons SET Age = '32'
	WHERE FirstName = 'mridu'";
	
	mysqli_query($con,$sql);
	
	echo "<script>alert('successfully updated');</script>'";


?> 