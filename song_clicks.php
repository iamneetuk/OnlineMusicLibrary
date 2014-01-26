<?php
include("connection.php");
$result = mysql_query("SELECT * FROM Song_record WHERE song_url='$track'");
echo '<tr>';
while($row = mysql_fetch_array($result))
  {
    $click = $row['click'];
	$click +=1;
	mysql_query("UPDATE Song_record SET click = ".$click."
		WHERE song_url='$track'");
  }
?>