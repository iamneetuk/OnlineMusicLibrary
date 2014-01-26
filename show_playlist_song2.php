<html>
<body>
<?php
session_start();
include("connection.php");
$playlist = $_GET["playl"];
$u = $_SESSION['username'];
echo '<h1>'.$playlist.'</h1>';
$query = "SELECT song_record.song_name, song_record.song_url, song_record.id_no, song_record.album FROM song_record,playlist_record WHERE song_record.id_no=playlist_record.song_id && playlist_record.playlist='$playlist' && playlist_record.username='$u'"; 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result))
{   
$s_url = $row['song_url'];
$s_id = $row['id_no'];

echo '<a href="play_song.php?track='.$s_url.'">'.$row['song_name'].'</a><br>';
}














/*
$query = "SELECT * FROM song_record ORDER BY song_name";
$result = mysql_query($query) or die(mysql_error());

echo '<form name="input" action="add_select.php" method="get">';

while($row = mysql_fetch_array($result))
{   
$s_url = $row['song_url'];
$s_id = $row['id_no'];

echo '<input type="checkbox" name="add[]" value='.$s_id.' />';


echo '<a href="play_song.php?track='.$s_url.'">'.$row['song_name'].'</a>';


echo "<br>";
echo "Song Album : ".$row['album']."<br>";  
echo "Song Artist : ".$row['artist']."<br>";
echo "Song Url : ".$row['song_url']."<br><br><br>";
}
echo '<input type="submit" value="Submit" />';
echo '</form>';

*/
?>
</body>
</html>