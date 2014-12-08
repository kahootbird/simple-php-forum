<?php
error_reporting(0);
?>


<?php //Backend of the login process. ?>

<?php 
$paswrd = $_POST['password'];
$usr = $_POST['username'];
//Basic validations - make sure a username and a password was entered.
if (empty($usr))
{
	$error_message = '<font size="6" color="red"> Error: Please enter a username </font>';
	include('Create_Account.php'); exit();
}
if (empty($paswrd))
{
	$error_message = '<font size="6" color="red"> Error: Please enter a password </font>';
	include('Create_Account.php'); exit();
}


	//$paswrd = sha1($paswrd);
	    require_once('database.php');
/*		
	$query = 'SELECT username from login 
	where username = \'$username\' AND password = \'$paswrd\'';
	
	$result = $db->query($query);
	$result = $result->fetch_assoc();
	$test = $result['categoryName'];
*/
	//$print $test;
	//echo $usr;
//	echo $paswrd;

//			$query = 'SELECT username from login 
//	where username = \'' . $usr . '\' ';
	
		$query = 'insert into login (username, password, admin_status, post_count) 
		VALUES ( \'' . $usr . '\', sha1(\'' . $paswrd . '\'), 0, 0)';
		$result = $db->query($query);
				$row = mysqli_fetch_row($result);
				//Failed
			/*
			echo $row[0];
				if (!$row[0])
				{
				echo $usr;
				echo 'Failed.';
						include('index.php'); exit();
		
			
				}
*/


//echo 'Logged in!';
$lifetime = 60*10; //Ten minutes
	session_set_cookie_params($lifetime,'/');
	if (session_start() == true)
	{
		$_SESSION['usr'] = $usr;
		//echo 'User is:' . $_SESSION['usr'];
		session_write_close();
		//echo '</br>Session started sucessfully.';
	}
include('index.php'); exit();


	
	
?>
