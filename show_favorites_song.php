<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="FAVORITES";
include("gaana.php");
?>

<div class="ov">

<table border="1">

<tr>
<th>
Play
</th>
<th>
Title
</th>
<th>
Album
</th>
<th>
Artist
</th>
<th>
Genre
</th>
<th>
Rating
</th>
<th>
Download
</th>
<th>
|_|
</th>
<?php

include("connection.php");
$u = $_SESSION['username'];

$query = "SELECT song_record.song_name, song_record.song_url, song_record.genre, song_record.artist, song_record.id_no, song_record.album FROM song_record,favorites_record WHERE song_record.id_no=favorites_record.song_id && favorites_record.username='$u'"; 

$result = mysql_query($query) or die(mysql_error());

echo '<form name="input" action="Delete.php" method="get">';
while($row = mysql_fetch_array($result))
{   
$s_url = $row['song_url'];
$s_id = $row['id_no'];

echo '<tr><td>';
echo '<a href="show_favorites_song.php?track='.$s_url.'"><img src="images/play.png"></a>';
echo "</td><td>";

//echo '<a href='.$s_url.'>'.$row['song_name'].'</a>';
echo '<a href="show_favorites_song.php?track='.$s_url.'">'.$row['song_name'].'</a>';
echo '</td>';
echo '<td>';
echo $row['album'];  
echo '</td><td>';
echo $row['artist'];
echo '</td><td>';
echo $row['genre'];
echo '</td><td>';
echo '<img src="images/rating.png">';
echo '</td>';
echo '<td>';
echo '<a href="download.php?download='.$s_url.'">Download</a>';
echo '</td><td>';
echo '<input type="checkbox" name="delete[]" value='.$s_id.' />';
echo '</td>';
echo '</td></tr>';

}
echo '<input type="submit" value="Delete" />';
echo '</form>';

?>
</div>
</body>
</html>