<?php
$db = mysql_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');
mysql_select_db('record', $db) or die(mysql_error($db));
?>