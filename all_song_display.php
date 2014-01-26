<html>
<head>

<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="HOME PAGE";
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

$query = "SELECT * FROM song_record ORDER BY song_name";
$result = mysql_query($query) or die(mysql_error());

echo '<form name="input" action="add_select.php" method="get">';
while($row = mysql_fetch_array($result))
{   
$s_url = $row['song_url'];
$s_id = $row['id_no'];
echo '<tr><td>';
echo '<a href="all_song_display.php?track='.$s_url.'"><img src="images/play.png"></a>';
echo "</td><td>";
//echo '<a href='.$s_url.'>'.$row['song_name'].'</a>';
echo '<a href="all_song_display.php?track='.$s_url.'">'.$row['song_name'].'</a>';
echo "</td>";

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
echo '<td>';
echo '<input type="checkbox" name="add[]" value='.$s_id.' />';
echo '</td>';
echo '</td></tr>';
}
echo '<input type="submit" value="Submit" />';
echo '</form>';
?>
</table>
</div>
</body>
</html>