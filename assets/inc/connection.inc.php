<?php
function dbConnect($usertype, $connectionType = 'mysqli') {
  //$host = 'rawdesigns.db.7625389.hostedresource.com';
  $host = 'localhost';  
  $db = 'rawdesigns';
  if ($usertype  == 'read') {
	$user = 'root';
	$pwd = '';
  } elseif ($usertype == 'write') {
  	$user = 'root';
	$pwd = '';
  } else {
	exit('Unrecognized connection type');
  }
  if ($connectionType == 'mysqli') {
	$result = new mysqli($host, $user, $pwd, $db) ;
	if (!$result) die ('Cannot connect to database');
	return $result;
  } else {
    try {
      return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
    } catch (PDOException $e) {
      echo 'Cannot connect to database';
      exit;
    }
  }
}
