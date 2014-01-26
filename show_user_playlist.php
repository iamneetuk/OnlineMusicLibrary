<html>
<body>
<?php
session_start();
include("connection.php");
$f=0;

$query = "SELECT DISTINCT username FROM playlist_record ";
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result))
{   
$u_name = $row['username'];
if($u_name==$_GET['user'])
{echo $u_name ;
echo'exist';
$f=1;
$_SESSION['shareuser']=$u_name; 
$query = "SELECT DISTINCT playlist FROM playlist_record WHERE username='$u_name' ";
$result = mysql_query($query) or die(mysql_error());
echo '<form name="input" action="share_playlist.php" method="get">';
while($row = mysql_fetch_array($result))
{ 
 
$p_name = $row['playlist'];
echo '<input type="checkbox" name="share[]" value='.$p_name.' />';
//echo $p_name ;
echo '<a href="show_playlist_song.php?share_playl='.$p_name.'">'.$row['playlist'].'</a><br>';

}
echo '<input type="submit" value="Share" />';
echo '</form>';

echo'</br>';
break;
}


}
if($f==0)
{
echo'username not exist';
header("location:home.php");
echo'</br>';
}




/*
$query = "SELECT DISTINCT playlist FROM playlist_record ";
$result = mysql_query($query) or die(mysql_error());

echo '<form name="input" action="share_playlist.php" method="get">';
while($row = mysql_fetch_array($result))
{   
$p_name = $row['playlist'];
echo '<input type="checkbox" name="share[]" value='.$p_name.' />';
echo $p_name ;
echo'</br>';

}
echo '<input type="submit" value="Share" />';
echo '</form>';
*/
?>
</body>
</html>