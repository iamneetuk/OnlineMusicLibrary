<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="GENRE";
include("gaana.php");
?>

<div class="ov">
<table border="1">

<?php

include("connection.php");
$count = 0;
$result = mysql_query("SELECT DISTINCT genre FROM song_record ORDER BY genre");
echo '<tr>';
while($row = mysql_fetch_array($result))
  {
 $a= $row['genre'];
 if($a!=NULL)
 {
 $count = $count+1;
 echo '<td>';
 echo '<a href="show_genre.php?genre='.$a.'"><img src="images/cover.png"><br>'.$row['genre'].'</a><br>';
 echo '</td>';
 if($count==4)
 {
 $count=0;
 echo '</tr>';
 }
 
 }
 }
?>
</table>
</div>
</body>
</html>