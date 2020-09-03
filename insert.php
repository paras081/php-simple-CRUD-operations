<?php
		if(isset($_POST['submit']))
		{
		
			$con = mysqli_connect("localhost","root","","student");

//			mysqli_select_db("student", $con);

			$fnm = $_POST['firstname'];
			$lnm = $_POST['lastname'];
			$age = $_POST['age'];

			$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES('$fnm','$lnm','$age')";

			mysqli_query($con,$sql);
		}
?> 

<html>
<body>

<form method="post">
	Firstname: <input type="text" name="firstname" /><br/>
	Lastname: <input type="text" name="lastname" /><br/>
	Age: <input type="text" name="age" /><br/>
<input type="submit" value="Insert" name="submit" />
</form>

</body>
</html>     