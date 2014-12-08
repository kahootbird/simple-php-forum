<?php
error_reporting(0);
?>



<?php
//	    require_once('database.php');
	//		$query = 'select title from thread where categoryid = ' . $ID . ' order by threadid';
	//	$categories = $db->query($query);
//
// 1. Connect to local mySQL installation. User and password provided.
//
$db = mysql_connect("localhost","root","");
if (!$db)
 exit("Error - Could not connect to MySQL"); 
//
// 2. Select the database to use.
//
$er = mysql_select_db("forum");
if (!$er)
 exit("Error - Could not select the database!");
//
// 3. Get AJAX POST parameter and issue SQL request.
//
$searchStr = $_POST["searchField"];

$query = "select username from login where username like '$searchStr%'" .
 " order by username";

$result = mysql_query($query);
if (!$result) {
 print "Error - query cannot be processed: ";
 $error = mysql_error();
 print "$error";
 exit;
}
//
// 4. Process the result - a list of first and last names.
//
$num_rows = mysql_num_rows($result);
for ($i = 0; $i < $num_rows; $i++) {
 $row = mysql_fetch_row($result);
 print "$row[0] $row[1]\n";
}
?>

