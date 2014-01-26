<?php
session_start();

include("connection.php");

echo '<h1>Profile page of '.$_SESSION['username'] .'</h1>' ; 
$query = 'INSERT INTO playlist_record (username,playlist)

VALUES
	("' . $_SESSION['username'] . '",
	"' . $_POST['playlist'] . '")';
		
mysql_query($query, $db) or die(mysql_error($db));
	
	header("location:show_playlist.php");
?>