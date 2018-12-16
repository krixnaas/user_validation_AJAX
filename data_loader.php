<?php 
	# data_loader.php
	
	$con = mysqli_connect("localhost", "root", "", "forum"); 
	
	if(isset($_POST['username']))
	{
		$username = trim($_POST['username']);
		
		//do your database comparisions here
		
		$query = mysqli_query($con, "select * from users where uname='$username'");
		$check = mysqli_fetch_array($query);
		if($check)
		{
			echo "1";
		}else{ 
			
			echo "0";
		}

	}
?>