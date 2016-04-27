<?php
require("config2.php");

$query = "INSERT INTO tbcharging (arus1, tegangan1, daya1, arus2,tegangan2, daya2) 
VALUES('$_POST[arus1]','$_POST[tegangan1]','$_POST[daya1]','$_POST[arus2]','$_POST[tegangan2]','$_POST[daya2]')";


if(!@mysql_query($query))
{
    echo "&Answer; SQL Error - ".mysql_error();
    return;
}



?>