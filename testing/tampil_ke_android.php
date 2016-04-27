<?php

	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','dbcharging');
	$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	/*if ($conn) {
		# code...
		echo "Connection Successful\n";
	}*/

	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		# code...
		//require 'config2.php';
		showData();
	}

	function showData(){

		
		$return_arr = array();
		$fetch= mysql_query("SELECT * FROM tbcharging ");
		print_r($fetch);
		while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
   			   $row_array['id'] = $row['id'];
   			    $row_array['arus1'] = $row['arus1'];
    			$row_array['tegangan1'] = $row['tegangan1'];
    			$row_array['daya1'] = $row['daya1'];
    			$row_array['arus2'] = $row['arus2'];
    			$row_array['tegangan2'] = $row['tegangan2'];
    			$row_array['daya2'] = $row['daya2'];

    			  array_push($return_arr,$row_array);
}
		
		//header('Content-Type: application/json');
		echo json_encode($return_arr);
		/*$sql = "SELECT * FROM EMPLOYEE;";
		//getting result 
		$r = mysqli_query($con,$sql);
		//creating a blank array 
		$result = array();
		//looping through all the records fetched
		while($row = mysqli_fetch_array($r)){
			
			//Pushing name and id in the blank array created 
			array_push($result,array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"designation"=>$row['designation'],
				"salary"=>$row['salary']
			));
		}
		
		//Displaying the array in json format
		print_r($result); 
		echo json_encode(array_values($result));
		mysqli_close($con);*/
	}
?>