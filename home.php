<html>
<body>
<?php
session_start();
echo '<h1>'.$_SESSION["username"].'</h1>';
?>

<form name="input" action="show_user_playlist.php" method="get">
<input type="text" name="user" />
<input type="submit" value="Search User Paylist" />
</form>

<a href='logout.php'> Logout </a><br><br>
<a href ="sorted_album.php">Albums</a><br>
<a href ="sorted_artist.php">Artist</a><br>
<a href ="sorted_genre.php">Genre</a><br>

<a href ="show_playlist.php">Show playlist</a><br>

<a href='playlist_add1.php'> Add Playlist </a><br><br>

<?php

include("connection.php");

$query = "SELECT * FROM song_record ORDER BY song_name";
$result = mysql_query($query) or die(mysql_error());

echo '<form name="input" action="add_select.php" method="get">';

while($row = mysql_fetch_array($result))
{   
$s_url = $row['song_url'];
$s_id = $row['id_no'];

echo '<input type="checkbox" name="add[]" value='.$s_id.' />';
$s_url = $row["song_url"];

echo '<a href='.$s_url.'>'.$row['song_name'].'</a>';

//echo '<a href="play_song.php?track='.$s_url.'">'.$row['song_name'].'</a>';


echo "<br>";
echo "Song Album : ".$row['album']."<br>";  
echo "Song Artist : ".$row['artist']."<br>";
echo "Song Url : ".$row['song_url']."<br><br><br>";
}
echo '<input type="submit" value="Submit" />';
echo '</form>';
?>

</body>
</html>