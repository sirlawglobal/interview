<?php

$conn = mysqli_connect("localhost", "root", "", "bincomphptest");

if (!$conn) {
	echo "Connection failed!";
}
//else{	echo "Connection heee";}







$sql = 'SELECT * FROM announced_pu_results WHERE  polling_unit_uniqueid =  announced_pu_results.polling_unit_uniqueid';

$result= mysqli_query($conn,$sql);

 $rowarray= mysqli_fetch_array($result );

 print_r ($rowarray);
?>
 