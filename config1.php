<?php

$dbhost = 'localhost';
$dbuser = 'root';
//$dbpass = '';    
$dbname = 'ardu'; //This is the name of your database on the mysql server

$conn = mysql_connect($dbhost,$dbuser) or die ('Error connecting to mysql'); 
mysql_select_db($dbname);
if(!$conn){
        echo "database gak konek";
    }else{
        echo "database konek";
    }
?>