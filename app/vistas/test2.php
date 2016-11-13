<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');    // DB username
define('DB_PASSWORD', '');    // DB password
define('DB_DATABASE', 'ggwp');      // DB name
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysqli_select_db($connection,DB_DATABASE) or die( "Unable to select database");
session_start();
 
function checkuser($fuid,$ffname,$femail){
	global $connection;
    $check = mysqli_query($connection,"select * from Users where Fuid='$fuid'");
	$check = mysqli_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO users (Fuid,Ffname,Femail) VALUES ('$fuid','$ffname','$femail')";
	mysqli_query($connection,$query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE users SET Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
	mysqli_query($query);
}
}
checkuser($_SESSION['FBID'],$_SESSION['FULLNAME'],$_SESSION['EMAIL']);