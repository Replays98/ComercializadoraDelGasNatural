<?php
$hn='localhost';
$db='reportes';
$un='root';
$pw='';

$con=new mysqli($hn,$un,$pw,$db);

if($con->connect_error)
{
    die('Error Fatal');
}

?>