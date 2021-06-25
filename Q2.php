<?php

$conn = mysqli_connect("localhost", "root", "", "bincomphptest");

if (!$conn) {
	echo "Connection failed!";
}
//else{	echo "Connection heee";}


//SELECT * FROM student WHERE name LIKE '%John%'



$sql = 'SELECT  * FROM announced_pu_results WHERE polling_unit_uniqueid LIKE \'%8%\' ';


//$sql = 'SELECT *  FROM announced_pu_results WHERE polling_unit_uniqueid = 10';

$result = mysqli_query($conn,$sql);

 $rowarray= mysqli_fetch_all($result, MYSQLI_ASSOC);

 print_r ($rowarray);
?>
 


 