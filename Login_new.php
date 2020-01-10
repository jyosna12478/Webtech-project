<?php
session_start();

/*	if (isset($_SESSION['uname']))

	{

		header('Location: Login.html');

	}*/
  // put in only login page
	//$uname = $_POST['uname'];  // get email from html form
	//$pass = $_POST['pwd'];  // get password from html form
	

	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$flag=0;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	$uname = $conn->real_escape_string($_POST['uname']);

	$pass = $conn->real_escape_string($_POST['pwd']);
	$uname = strtolower($uname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   $query = 'SELECT username,password FROM login';
   mysqli_select_db($conn,'registeration') or die (mysqli_error($conn));
   $retval = mysqli_query($conn,$query );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
  //if ($retval->num_rows == 1)
	  while($row = $retval->fetch_assoc())

		{

	    // output data of each row

			//$row = $retval->fetch_assoc();
			//print_r($row['username']);
			//print_r($row['password']);
			//echo $uname;
			//echo $pass;
			
			if(($row['username']===$uname)&&($row['password']===$pass))

			{

				$_SESSION['uname'] = $uname;

				header('Location: HOME.php');	
					break;

			}
		}
			
				
			/*$_SESSION['error'] = "Invalid Username or Password";
					header('Location: Login.php');
					break;
					
				}*/


		

		if (!isset($_SESSION['uname']))

		{

			$_SESSION['error'] = "Invalid Username or Password";
			header('Location: Login.php');	
		}
		

		$conn->close();

	
  
  
  ?>