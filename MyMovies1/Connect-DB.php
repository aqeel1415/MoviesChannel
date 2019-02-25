<?php

$host = 'sql106.unaux.com';
$user = 'unaux_23484127';
$pwd = '79yhspzuv9gkm';
$db = 'unaux_23484127_1';

$con = mysqli_connect($host,$user,$pwd,$db);

if(mysqli_connect_errno($con))
{
    echo mysqli_connect_error();
}


?>
