<?php

$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="akhuwat";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con)
{
   echo "Connection failed";
}





?>