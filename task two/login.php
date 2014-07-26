<?php
include "file_constants.php";
session_start();
	
    if (isset($_POST['submit'])) {
$dbc = mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');

      $user_rollnumber = mysqli_real_escape_string($dbc, trim($_POST['rollno']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['passwordentered']));

      if (!empty($user_rollnumber) && !empty($user_password)) {
        $query = "SELECT * FROM sign WHERE rollnumber = '$user_rollnumber' AND password = SHA('$user_password')";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies)
          $row = mysqli_fetch_array($data);
          $_SESSION['user_id'] = $row['rollnumber'];
          $_SESSION['password'] = $row['password'];
		  $_SESSION['name']= $row['name'];
		  echo 'you have successfully logged in as '.$_SESSION['name'] .' :) <br>';
		   
 }
       else {
          // The username/password are incorrect 
        echo 'Sorry, you must enter a valid rollnumber and password to log in.'.'<br>';
        }
      }
      else {
        // The username/password weren't entered 
echo  'Sorry, you must enter your rollnumber and password to log in.'.'<br>';
      }
    echo '<a href="home.php"> click here to go back to home</a> <br>';
	}
	?>
 
