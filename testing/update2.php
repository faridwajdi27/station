<?php
require("config2.php");

$query = "UPDATE tbcharging SET arus1='$_POST[arus1]', tegangan1='$_POST[tegangan1]', daya1='$_POST[daya1]', arus2='$_POST[arus2]', tegangan2='$_POST[tegangan2]', daya2='$_POST[daya2]' WHERE no=1";


if(!@mysql_query($query))
{
    echo "&Answer; SQL Error - ".mysql_error();
    return;
}
?>
