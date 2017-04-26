<?php
require("config1.php");
$tanggal = date("Y-m-d H:i:s");

$query = "INSERT INTO tbardu (no, suhu, lembab, waktu) VALUES(NULL,'$_POST[t]','$_POST[h]','$tanggal')";


if(!@mysql_query($query))
{
    echo "&Answer; SQL Error - ".mysql_error();
    return;
}

?>
