<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="PLAYLIST";
include("gaana_playlist.php");
?>

<div class="ov">
<table border="1">

<tr>
<th>
Playlist
</th>
<th>
FB
</th>
<th>
Mark
</th>
</tr>
<?php
include("connection.php");
include("playlist_add1.php");

echo	'<div class="search">';

//include("item_search.php"); 
echo	'</div>';
	
$u = $_SESSION['username'];
$query = "SELECT DISTINCT playlist FROM playlist_record WHERE username ='$u'";
$result = mysql_query($query) or die(mysql_error());
echo '<form name="input" action="Delete.php" method="get">';
echo '<tr>';
while($row = mysql_fetch_array($result))
{  

$p_name = $row['playlist'];
 if($p_name!=NULL)
 {

echo '<td>';
echo '<a href="show_playlist_song.php?playl='.$p_name.'">'.$row['playlist'].'</a><br>';
echo '</td>';
echo '<td>';
include("facebook_share.php");
echo '<td>';
echo '<input type="checkbox" name="deletep[]" value='.$p_name.' />';
echo '</td></tr>';

  }
}
echo '<input type="submit" value="Delete" />';
echo '</form>';
?>
</table>
</div>
</body>
</html>