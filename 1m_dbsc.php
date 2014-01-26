<html>
<head>

<?php

$db = mysql_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');
//create the main database if it doesn’t already exist
$query = 'CREATE DATABASE IF NOT EXISTS Record';
mysql_query($query, $db) or die(mysql_error($db));
//make sure our recently created database is the active one
mysql_select_db('Record', $db) or die(mysql_error($db));
//create the movie table
$query = 'CREATE TABLE User_record(
	id_no INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL DEFAULT 0,
	Password VARCHAR(255) NOT NULL DEFAULT 0,
	PRIMARY KEY (id_no),
	KEY username (username , Password)
)
ENGINE=MyISAM';
mysql_query($query, $db) or die (mysql_error($db));

$query = 'CREATE TABLE Song_record(
	id_no INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	song_url VARCHAR(255) NOT NULL ,
	song_name VARCHAR(255) NOT NULL ,
	album VARCHAR(255) NOT NULL ,
	genre VARCHAR(255) NOT NULL ,
	artist VARCHAR(255) NOT NULL ,
	date  DATE    NOT NULL ,
	click INTEGER UNSIGNED ,
	
	PRIMARY KEY (id_no),
	KEY song_name (song_url , song_name)
)
ENGINE=MyISAM';
mysql_query($query, $db) or die (mysql_error($db));


$query = 'CREATE TABLE Favorites_record(
	id_no INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL ,
	song_id INTEGER UNSIGNED ,
	PRIMARY KEY (Id_no),
	FOREIGN KEY (song_id) REFERENCES Song_record(id_no),
	FOREIGN KEY (username) REFERENCES User_record(username),
	KEY username (username , song_id)
)
ENGINE=MyISAM';
mysql_query($query, $db) or die (mysql_error($db));


$query = 'CREATE TABLE Playlist_record(
	id_no INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL ,
	playlist VARCHAR(255) NOT NULL ,
	song_id INTEGER UNSIGNED ,
	PRIMARY KEY (id_no),
	FOREIGN KEY (song_id) REFERENCES Song_record(id_no),
	FOREIGN KEY (username) REFERENCES User_record(username),
	KEY Username (username , playlist)
)
ENGINE=MyISAM';
mysql_query($query, $db) or die (mysql_error($db));

$query = 'CREATE TABLE mood_record(
	id_no INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	mood VARCHAR(255) NOT NULL ,
	song_id INTEGER UNSIGNED ,
	PRIMARY KEY (id_no),
	FOREIGN KEY (song_id) REFERENCES Song_record(id_no),
	KEY id_no (id_no , mood)
)
ENGINE=MyISAM';

mysql_query($query, $db) or die (mysql_error($db));


echo 'Record database successfully created!';
?>

</html>
</head>