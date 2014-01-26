<?php
session_start();

$playlist = $_SESSION['playlist_name'];
include("connection.php");

$u=$_SESSION['username'];

if(isset($_GET["delete"]))
{
$checkBox=$_GET["delete"];

for($i=0; $i<sizeof($checkBox); $i++)
{
$b=$checkBox[$i];

$query = "DELETE FROM playlist_record WHERE username='$u' && playlist='$playlist' &&  song_id='$b' ";	
mysql_query($query, $db) or die(mysql_error($db));
}	
	header("location:show_playlist.php");	
	}
	
	
else if(isset($_GET["deletef"]))
{
$checkBox=$_GET["deletef"];

for($i=0; $i<sizeof($checkBox); $i++)
{
$b=$checkBox[$i];

$query = "DELETE FROM favorites_record WHERE username='$u' &&  song_id='$b' ";	
mysql_query($query, $db) or die(mysql_error($db));
}	
	header("location:show_favorites_song.php");	
	}

else if(isset($_GET["deletep"]))
{
$checkBox=$_GET["deletep"];

for($i=0; $i<sizeof($checkBox); $i++)
{
$b=$checkBox[$i];

$query = "DELETE FROM playlist_record WHERE username='$u' &&  playlist='$b' ";	
mysql_query($query, $db) or die(mysql_error($db));
}	
	header("location:show_playlist.php");	
}

	else
	{
	header("location:all_song_display.php");
}
	?>




