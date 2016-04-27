<?php

/* 
$dbhost = 'chargingstation.its.ac.id'; 
$dbuser = 'cc_dbcharging@whs.its.ac.id';
$dbpass = 'yanuar';     
$dbname = 'dbcharging'; //This is the name of your database on the mysql server

$conn = mysql_connect($dbhost,$dbuser) or die ('Error connecting to mysql');  
mysql_select_db($dbname);
if(!$conn){
		echo "database gak konek";
	}else{
		echo "konek";
	}

	
ftp://username@whs.its.ac.id
	
*/


$conn = mysql_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbcharging", $conn);

$return_arr = array();

$fetch = mysql_query("SELECT * FROM tbcharging"); 

    //echo '{"testData":[';

    
while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
        //  cast results to specific data types
				$row_array['id'] = $row['id'];
   			    $row_array['arus1'] = $row['arus1'];
    			$row_array['tegangan1'] = $row['tegangan1'];
    			$row_array['daya1'] = $row['daya1'];
    			$row_array['arus2'] = $row['arus2'];
    			$row_array['tegangan2'] = $row['tegangan2'];
    			$row_array['daya2'] = $row['daya2'];
}

mysql_close($conn);



?>