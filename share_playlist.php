<?php
session_start();
include("connection.php");

$a=$_SESSION['username'];
$b=$_SESSION['shareuser'];

if(isset($_GET["share"]))
{
$checkBox=$_GET["share"];
for($i=0; $i<sizeof($checkBox); $i++)
{
$c=$checkBox[$i];

$query = "SELECT song_id FROM playlist_record WHERE username='$b' && playlist='$c'";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{ 
 if($row['song_id']!=NULL)
 {
$s_id = $row['song_id'];

$query = 'INSERT INTO playlist_record (username,playlist,song_id)

VALUES
	("' . $_SESSION['username'] . '",
	"' . $c . '",
	' . $s_id. ')';
		
mysql_query($query, $db) or die(mysql_error($db));
header("location:Show_playlist.php");
}
}
}
}
?>
