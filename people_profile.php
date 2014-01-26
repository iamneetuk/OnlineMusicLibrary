<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$char = $_GET['track'];
$_SESSION['shareuser'] = $char;
$_SESSION['heading'] =$char."'s PLAYLIST";
include("gaana.php");
?>

<div class="ov">
<table border="1">

<?php
include("connection.php");
$count = 0;

$_SESSION['name']=$_GET['track'];


$result = mysql_query("SELECT DISTINCT playlist FROM playlist_record WHERE username='$char'");
echo '<form name="input" action="share_playlist.php" method="get">';
echo '<tr>';
while($row = mysql_fetch_array($result))
  {
 $a=$row['playlist'];
 if($a!=NULL)
 {
 $count = $count+1;
 echo '<td>';
 echo '<a href="show_people_song.php?play='.$a.'">'.$a.'</a>';
 echo '</td>';
  echo '<td>';
 echo '<input type="checkbox" name="share[]" value='.$a.' />';
  echo '</td>';
 echo '</tr>';
 }
 }
  echo '<input type="submit" value="Submit" />';
echo '</form>';
?>
</table>
</div>
</body>
</html>