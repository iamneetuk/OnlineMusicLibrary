<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<div id="wrapper">

<?php

session_start();
include("connection.php");
$target_path = "upload/";
 
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 


 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    
	
	$_SESSION['song_name'] = $_FILES['uploadedfile']['name'];
	
	if(isset($_POST["mood"]))
{
$a=$_POST["mood"];


$q = "SELECT  MAX(id_no) from Song_record";
$result = mysql_query($q);
$data = mysql_fetch_array($result);
$max_id=$data[0]+1;

echo $max_id.'</br>';
for($i=0; $i<sizeof($a); $i++)
{

mysql_query("INSERT INTO mood_record (mood,song_id)
VALUES ('$a[$i]','$max_id')");


}


}
	//header("location:song_info.php");
	header("location:song_record.php");
        
  
	
} else{
    echo "There was an error uploading the file, please try again!";
}
?>
</div>
</body>
</html>
