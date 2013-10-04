<?php
include_once("phpIncludes/dbConnects.php");

$tblUsers="CREATE TABLE IF NOT EXISTS users (
			id INT(11) NOT NULL AUTO_INCREMENT,
			userName VARCHAR(20) NOT NULL,
			email VARCHAR(255) NOT NULL,		
			password VARCHAR(255) NOT NULL,
			gender ENUM('m','f') NOT NULL,
			website VARCHAR(255) NULL,
			country VARCHAR(255) NULL,
			userLevel ENUM('a','b','c','d') NOT NULL DEFAULT 'a',
			avatar VARCHAR(255) NOT NULL,
			ip VARCHAR(255) NOT NULL,
			signup DATETIME NOT NULL,
			lastLogin DATETIME NOT NULL,
			notesCheck  DATETIME NOT NULL,
			activated ENUM('0','1') NOT NULL DEFAULT '0',
			PRIMARY KEY (id),
			UNIQUE KEY userName (userName)
			)";
$query = mysqli_query($db_conx,$tblUsers);
if ($query ===TRUE)
{
echo " <h3> Table Users Created </h3>";
} else
{echo "<h3> :( table users not created </h3>";}
//////////////////////////////////////////////////////////////
$tblUserOptions = "CREATE TABLE IF NOT EXISTS userOptions (
			id INT(11) NOT NULL AUTO_INCREMENT,
			userName VARCHAR(20) NOT NULL,
			background VARCHAR(255) NOT NULL,		
			questions VARCHAR(255) NOT NULL,
			answers ENUM('m','f') NOT NULL,
			PRIMARY KEY (id),
			UNIQUE KEY userName (userName,email)
			)"; 
$query = mysqli_query($db_conx,$tblUserOptions);
if ($query ===TRUE)
{
echo " <h3> Table User Options Created successfully created </h3>";
} else
{echo "<h3> :( table not created </h3>";}

/////////////////////////////////////////////////////////////
$tblFriends = "CREATE TABLE IF NOT EXISTS friends (
			id INT(11) NOT NULL AUTO_INCREMENT,
			user1 VARCHAR(20) NOT NULL,
			user2 VARCHAR(255) NOT NULL,		
			dateMade DATETIME NOT NULL,
			accepted ENUM('0','1') NOT NULL DEFAULT '0',
			PRIMARY KEY (id)
			)"; 
			$query = mysqli_query($db_conx,$tblFriends);
if ($query ===TRUE)
{
echo " <h3> Table friends Created successfully created </h3>";
} else
{echo "<h3> :( table not created </h3>";}

///////////////////////////////////////////////////////////
$tblBlockUsers = "CREATE TABLE IF NOT EXISTS blockedUsers (
			id INT(11) NOT NULL AUTO_INCREMENT,
			blocker VARCHAR(20) NOT NULL,
			blockee VARCHAR(255) NOT NULL,		
			blockDate DATETIME NOT NULL,
			PRIMARY KEY (id)
			)"; 
			$query = mysqli_query($db_conx,$tblBlockUsers);
if ($query ===TRUE)
{
echo " <h3> Blocked Users Created successfully created </h3>";
} else
{echo "<h3> :( table not created </h3>";}
////////////////////////////////////////////////////////////
$tblStatus = "CREATE TABLE IF NOT EXISTS status (
			id INT(11) NOT NULL AUTO_INCREMENT,
			osId INT(11) NOT NULL,
			accountName VARCHAR(255) NOT NULL,		
			author VARCHAR(16) NOT NULL,
			type ENUM('a','b','c') NOT NULL,
			date TEXT NOT NULL,
			postDate DATETIME NOT NULL,
			PRIMARY KEY (id)
			)"; 
			$query = mysqli_query($db_conx,$tblStatus);
if ($query ===TRUE)
{
echo " <h3> Table status Created successfully created </h3>";
} else
{echo "<h3> :( table not created </h3>";}

//////////////////////////////////////////////////////////////
$tblPhotos = "CREATE TABLE IF NOT EXISTS photos (
			id INT(11) NOT NULL AUTO_INCREMENT,
			user VARCHAR(20) NOT NULL,
			gallery VARCHAR(255) NOT NULL,		
			filename VARCHAR(255) NOT NULL,
			description VARCHAR(255) NOT NULL,
			uploadedDate DATETIME NOT NULL,
			PRIMARY KEY (id)
			)"; 
			$query = mysqli_query($db_conx,$tblPhotos);
if ($query ===TRUE)
{
echo " <h3> Table photos Created successfully created </h3>";
} else
{echo "<h3> :( table not created </h3>";}
//////////////////////////////////////////////////////////////
$tblNotifications = "CREATE TABLE IF NOT EXISTS notifications (
			id INT(11) NOT NULL AUTO_INCREMENT,
			username VARCHAR(20) NOT NULL,
			initiator VARCHAR(255) NOT NULL,		
			app VARCHAR(255) NOT NULL,
			note VARCHAR(255) NOT NULL,
			didRead ENUM('0','1') NOT NULL DEFAULT '0',
			dateTime DATETIME NOT NULL,
			PRIMARY KEY (id)
			)"; 
			$query = mysqli_query($db_conx,$tblNotifications);
if ($query ===TRUE)
{
echo " <h3> Table notifications Created successfully created </h3>";
} else
{echo "<h3> :( table not created </h3>";}
?>