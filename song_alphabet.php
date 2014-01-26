<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="SONG";
include("gaana.php");
?>
<?php
include("gaana.php");
?>

<div class="ov">
<table border="1">

<?php
include("connection.php");
$count = 0;
$char=$_GET['track'];
$f=0;

$result = mysql_query("SELECT * FROM Song_record");
echo '<tr>';
while($row = mysql_fetch_array($result))
  {
$s_url = $row['song_url'];
$s_id = $row['id_no'];

$a=$row['song_name'] ;
 
 $c=substr($a,0,1);
 if ($char==$c)
  {
   $count = $count+1;
	echo '<tr><td>';
  echo '<a href="all_song_display.php?track='.$s_url.'">'.$row['song_name'].'</a><br>';
 echo "</td>";

echo '<td>';
echo $row['album'];  
echo '</td><td>';
echo $row['artist'];
echo '</td><td>';
echo 'R';
echo '</td><td>';
echo 'FB';
echo '</td>';
echo '<td>';
echo '<input type="checkbox" name="add[]" value='.$s_id.' />';
echo '</td></tr>';
  $f=1;
  }  
  }
  if($f==0)
  {
  echo '<td>';
  echo 'Not Found';
 echo '</td></tr>';
  }
   
   
?>
</table>
</div>
</body>
</html>