<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="ARTIST SONG";
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
</tr>
<?php


include("connection.php");
$a=$_GET['artist'];

$query = "SELECT * FROM song_record WHERE artist='$a'";
$result = mysql_query($query) or die(mysql_error());
echo '<form name="input" action="add_select.php" method="get">';

echo '<input type="submit" value="Submit" />';

while($row = mysql_fetch_array($result))
{   
$s_url = $row['song_url'];
$s_id = $row['id_no'];
$s_url = $row["song_url"];
echo '<tr><td>';
echo '<a href="sorted_artist.php?track='.$s_url.'"><img src="images/play.png"></a>';
echo "</td><td>";
//echo '<a href='.$s_url.'>'.$row['song_name'].'</a>';
echo '<a href="sorted_artist.php?track='.$s_url.'">'.$row['song_name'].'</a>';
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
echo '<input type="checkbox" name="add[]" value='.$s_id.' />';
echo '</td>';
echo '</td></tr>';
}

echo '</form>';
echo '</tr>';
echo '</table>';
?>