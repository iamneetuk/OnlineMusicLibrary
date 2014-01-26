<?php

session_start();
include("connection.php");

$s_name = $_SESSION['song_n'];
$s_url = $_SESSION['song_url'];
$s_album = $_SESSION['song_album'];
$s_artist = $_SESSION['song_artist'];
$s_genre = $_SESSION['song_genre'];
$s_date = date("Y-m-d");

mysql_query("INSERT INTO Song_record (song_url,song_name,album,artist,genre,date)


VALUES ('$s_url','$s_name','$s_album','$s_artist','$s_genre','$s_date' )");

echo 'Inserted';
header("location:mp3_upload.php");

?>