<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="ALBUM";
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

$result = mysql_query("SELECT DISTINCT album FROM Song_record");
echo '<tr>';
while($row = mysql_fetch_array($result))
  {
 $a=$row['album'] ;
 
 $c=substr($a,0,1);
 if ($char==$c)
  {
   $count = $count+1;
	echo '<td>';
  echo '<a href="show_album.php?album='.$a.'">'.$row['album'].'</a><br>';
 echo '</td>';
 if($count==7)
 {
 $count=0;
 echo '</tr>';
 }  
  $f=1;
  }  
  }
  if($f==0)
  {
  echo '<td>';
  echo 'No Album Found';
 echo '</td></tr>';
  }
   
   
?>
</table>
</div>
</body>
</html>