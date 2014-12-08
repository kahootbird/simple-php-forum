<?php
error_reporting(0);
?>

<?php //Backend of the post process
		
		//TODO: Make this file only work if logged in.
?>

<?php 
$Title = $_POST['title'];
$Body = $_POST['body'];
$ID = $_POST['id'];
//Basic validations - make sure a username and a password was entered.
if (empty($Title))
{
	$error_message = '<font size="6" color="red"> Error: Please enter a username </font>';
	include('Create_Account.php'); exit();
}
if (empty($Body))
{
	$error_message = '<font size="6" color="red"> Error: Please enter a password </font>';
	include('Create_Account.php'); exit();
}
if (empty($ID))
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
						if (session_start() == true && (isset($_SESSION['usr'])))
					{
						$username = $_SESSION['usr'];
					}
					if (empty($username))
					{
						$error_message = '<font size="6" color="red"> Error: Please enter a password </font>';
						include('Create_Account.php'); exit();
					}

echo $username;
echo $Title;
echo $Body;
echo $ID;
		$query = 'insert into thread (user_id, title, date, txt_body, Icon, CategoryID) VALUES
		((select user_id from login where username = \'' . $username . '\'),
		\'' . $Title .'\', CURDATE(), \'' . $Body . '\', 0, ' . $ID . ')';
		$result = $db->query($query);
	
			//	$row = mysqli_fetch_row($result);
				//Failed
			
			/*
				if (!$row[0])
				{
				echo $usr;
				echo 'Failed.';
						include('index.php'); exit();
		
			
				}
			*/

include('forum.php'); exit();


	
	
?>
