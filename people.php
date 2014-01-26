<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="SELECT USER";
include("gaana_people.php");
?>

<div class="ovp">
<table border="1">

<?php

include("connection.php");
$count = 0;

$result = mysql_query("SELECT username FROM User_record ORDER BY username");
echo '<tr>';
while($row = mysql_fetch_array($result))
  {
 $a=$row['username'] ;
 if($a!=$_SESSION['username'])
 {
 $count = $count+1;
 echo '<td>';
 echo '<a href="people_profile.php?track='.$a.'"><img src="images/user.png"><br>'.$row['username'].'</a>';
 echo '</td>';
 if($count==7)
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