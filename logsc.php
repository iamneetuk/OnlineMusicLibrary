<html>
<body>
<?php
session_start();
$_SESSION['exist'] = "";
$db = mysql_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');
mysql_select_db('Record', $db) or die(mysql_error($db));
// select the movie titles and their genre after 1990


function usname_exist($username)
{
	
	$q="SELECT * FROM user_record WHERE username='$username'";
	$result=mysql_query($q);
	return (mysql_numrows($result)>0);
}
/**
 * function to check weather given password is correct or not
 * returns true on success
 */
function check_passwd($username,$password)
{
	
	$q="SELECT * FROM user_record WHERE username='$username'";
	$result=mysql_query($q);
	$row=mysql_fetch_array($result);
	return ($row['Password']==$password);
}
$u=$_POST['user'];
$p=$_POST['pass'];
if(usname_exist($u))
{
	if(!check_passwd($u,$p))
	{
		echo "wrong password entered<br>redirecting you to login....";
		$_SESSION['log'] = "wrong password entered<br>redirecting you to login....";
		header("location:login.php");
	}
	else
	{
		$_SESSION['username']=$u;
		//$_SESSION['count']=1;
		//$_SESSION['flag']=0;
		header("location:all_song_display.php");
	}
}
else
{
	echo "Username not found<br>redirect to login page...";
$_SESSION['log'] = "Username not found<br>redirect to login page...";
header("location:login.php");
}
?>
</body>
</html>