<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="ARTIST";
include("gaana.php");
?>

<div class="ov">
<table border="1">
<?php


include("connection.php");

$result = mysql_query("SELECT DISTINCT artist FROM Song_record ORDER BY artist");
$count=0;
while($row = mysql_fetch_array($result))
  {
 $a= $row['artist'];
  if($a!=NULL)
  {
  $count = $count+1;
 echo '<td>';
  echo '<a href="show_artist.php?artist='.$a.'"><img src="images/cover.png"><br>'.$row['artist'].'</a><br>';
 echo '</td>';
 if($count==4)
 {
 $count=0;
 echo '</tr><tr>';
 }
  }
  }
  
?>
</table>
</div>
</body>
</html>