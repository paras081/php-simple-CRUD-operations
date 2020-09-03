<?php

$con = mysqli_connect("localhost","root","","student");

		

if(isset($_REQUEST['submit']))
{
	$t1=$_REQUEST['t1'];
	
	$sql="select * from Persons where FirstName like '$t1%'";
	
	$rs=mysqli_query($con,$sql);
	
	while($row=mysqli_fetch_array($rs))
	{
		echo "<b>".$row['FirstName']."</b><br/>";
	}
}	


?>

<html>

<body>

	<form>
    
    	Search : <input type="text" name="t1" /> <br/>
        
        <input type="submit" name="submit" />
        
    
    </form>

</body>

</html>