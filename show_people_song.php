<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$u = $_SESSION['name'];
$_SESSION['heading'] =$u."'s SONG";
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

<?php

include("connection.php");
$playlist = $_GET['play'];

echo '<h1>'.$playlist.'</h1>';
$query = "SELECT song_record.id_no, song_record.song_name, song_record.genre, song_record.album, song_record.artist, song_record.song_url FROM 
song_record,playlist_record WHERE song_record.id_no=playlist_record.song_id && playlist_record.playlist='$playlist' && playlist_record.username='$u'"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{ 
 $s_url = $row['song_url'];
$s_id = $row['id_no'];
echo '<tr><td>';
echo '<a href="people.php?track='.$s_url.'"><img src="images/play.png"></a>';
echo "</td><td>";
//echo '<a href='.$s_url.'>'.$row['song_name'].'</a>';
echo '<a href="people.php?track='.$s_url.'">'.$row['song_name'].'</a>';
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
echo '</td>';
echo '</td></tr>';
}
?>
</body>
</html>