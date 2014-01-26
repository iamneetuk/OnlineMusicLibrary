<html>
<head>

<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="Searched Song";
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
$_SESSION['item']=$_POST['ss'];
//echo '<b>'.$_SESSION['item'].'</b>';
$a=$_SESSION['item'];

$f=0;
$result = mysql_query("SELECT * FROM Song_record");
while($row = mysql_fetch_array($result))
  {
  if($row['artist']==$a)
  {/*
    echo $row['song_name'].' ';
    echo $row['album'].' ';
    echo '<b>'.$row['artist'].'</b>'.' ';
    echo $row['genre'].' '; 
    echo'</br>';
    */
	  
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
	$f=1;
  }
   else if($row['song_name']==$a)
   {/*
    echo '<b>'.$row['song_name'].'</b>'.' ';
    echo $row['album'].' ';
    echo $row['artist'].' ';
    echo $row['genre'].' ';
    echo'</br>';
    */
	  
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

	
	$f=1;
   }
   
   else if($row['album']==$a)
   {/*
    echo $row['song_name'].' ';
    echo '<b>'.$row['album'].'</b>'.' ';
    echo $row['artist'].' ';
    echo $row['genre'].' ';
    echo'</br>';
    */
	
	  
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

	
	$f=1;
   }
    
   else if($row['genre']==$a)
   {/*
   echo $row['song_name'].' ';
    echo $row['album'].' ';
    echo $row['artist'].' ';
    echo  '<b>'.$row['genre'].'</b>'.' ';
    echo'</br>';
    */
	
	  
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

	
	$f=1;
   }   
   else
   echo' ';
  }
  if($f==0)
  echo 'Not Found any entry with this name';
?>

</body>
</html>