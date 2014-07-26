<?php
session_start();
	$path = '/wamp/www/';
if(isset($_POST['upload']))
	{
	$evaluator=0;
		if ($_FILES["file"]["size"] == 0)
		{
			echo '<br>No image uploaded.';
			$evaluator++;
		}
		
		if ($_FILES["file"]["size"] / 1024 >2048 && flag) 
		{
			echo '<br>Image size should be less than 2mb';
			$evaluator++;
		}
		
		if(!(($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/png"))&&
			($evaluator==0))
		{
			echo '<br>File not an image file';
			$evaluator++;
		}
		
		if($evaluator==0)
		{
			
			move_uploaded_file($_FILES["file"]["tmp_name"],
			   $path .$_SESSION['user_id'])          //user_id is rollnumber
			  or die('Error');

			echo "File uploaded successfully";
		}
		echo '<a href="home.php"> click here to go back to home</a> <br>';
	}
	
	?>