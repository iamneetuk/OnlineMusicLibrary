<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$a=$_GET['mood'];
$_SESSION['heading'] =$a." SONG";
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

$result = mysql_query("SELECT song_id FROM mood_record WHERE mood='$a'");
while($row = mysql_fetch_array($result))
  {
  $b=$row['song_id'];
  
$rresult = mysql_query("SELECT * FROM song_record WHERE id_no ='$b'");
    

while($rrow = mysql_fetch_array($rresult))
{   
$s_url = $rrow['song_url'];
$s_id = $rrow['id_no'];


$s_url = $rrow["song_url"];
echo '<tr><td>';
echo '<a href="mood_selection.php?track='.$s_url.'"><img src="images/play.png"></a>';
echo "</td><td>";
echo '<a href="mood_selection.php?track='.$s_url.'">'.$rrow['song_name'].'</a>';
echo '</td>';

echo '<td>';
echo $rrow['album'];  
echo '</td><td>';
echo $rrow['artist'];
echo '</td><td>';
echo $rrow['genre'];
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

}
?>
</body>
</html>