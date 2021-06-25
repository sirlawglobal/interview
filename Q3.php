<?php

$conn = mysqli_connect("localhost", "root", "", "bincomphptest");

if (!$conn) {
	echo "Connection failed!";
}
//else{	echo "Connection heee";}


?>
 



 



<!.....register....>
<?php


$Result_id=$pulling_unit_unique_id=$party_abbreviation=$party_score=$enter_by_user=$date_enter=$user_iP_address=""; 

$errors = array( 'Result_id'=>'','pulling_unit_unique_id'=>'', 'party_abbreviation'=>'', 'party_score'=> '', 'enter_by_user'=>'', 'date_enter'=>'', 'user_iP_address'=>'', );

// check for fill.
if(isset($_POST['submit'])){
  
  


  //check for the Result_id

  if(empty($_POST['Result_id'])){
    $errors['Result_id'] ='A Result_id is required </br>';
  }
  else {

    $Result_id=$_POST['Result_id'];

    if (!preg_match("/^[a-zA-Z ]*$/",$Result_id)) {
      $errors['Result_id'] = 'Result_id must be  a valid name';
  }}



   //check for the pulling_unit_unique_id

   if(empty($_POST['pulling_unit_unique_id'])){
    $errors['pulling_unit_unique_id'] ='A pulling_unit_unique_id is required </br>';
  }
  else {

    $pulling_unit_unique_id=$_POST['pulling_unit_unique_id'];

    if (!preg_match("/^[a-zA-Z ]*$/",$pulling_unit_unique_id)) {
      $errors['pulling_unit_unique_id'] = 'pulling_unit_unique_id must be  a valid name';
  }}
//if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
  //check for the party_abbreviations.

  if(empty($_POST['party_abbreviation'])){
    $errors['party_abbreviation'] ='party_abbreviation is required </br>';
  }
  else {

    $party_abbreviation=$_POST['party_abbreviation'];

    if (!preg_match("/^[a-zA-Z ]*$/",$party_abbreviation)) {
      $errors['party_abbreviation'] = 'party_abbreviation must be  a valid ingredients';
  }}

    if(array_filter($errors)){

      echo "there is an error";
  
    }

//if there is no error, then save it into database.
    else{
     
     $Result_id = mysqli_real_escape_string($conn, $_POST['Result_id']);
     $polling_unit_uniqueid = mysqli_real_escape_string($conn, $_POST['polling_unit_uniqueid']);
     $party_abbreviation = mysqli_real_escape_string($conn, $_POST['party_abbreviation']);
     $party_score = mysqli_real_escape_string($conn, $_POST['party_score']);
     $entered_by_user = mysqli_real_escape_string($conn, $_POST['entered_by_user']);
     $date_entered = mysqli_real_escape_string($conn, $_POST['date_entered']);
     $user_ip_address = mysqli_real_escape_string($conn, $_POST['user_ip_address']);
     


     //INSERT INTO new pu( result_id, polling_unit_uniqueid, party_abbreviation, party_score, entered_by_user, date_entered, user_ip_address) 
     //VALUES

     //$sql = "INSERT INTO new pu( result_id, polling_unit_uniqueid, party_abbreviation, party_score, entered_by_user, date_entered, user_ip_address) 
     //VALUES('$Result_id', '$party_abbreviation')";

     $sql =  "INSERT INTO new pu(Result_id ,polling_unit_uniqueid,party_abbreviation, party_score,entered_by_user,date_entered, user_ip_address ) 
     
      VALUES('$Result_id', '$polling_unit_uniqueid', '$party_abbreviation', '$party_score', '$entered_by_user', '$date_entered', '$user_ip_address')";

     if(mysqli_query($conn,$sql)){

     echo 'issue wa oo';
     } else{
       echo 'query error: ' . mysqli_error($conn);
     }

  
    }

}

?>
  
  
  <!DOCTYPE html>
 <html lang="en">

 <style>
 .middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
 
 </style>
     


  <section class="middle">

<h4>Kindly Fill in the following to Register Your new pulling unit</h4>

 <form action="Q3.php" method="post">


 <label>Result_id</label><br>
<input type="text" name="Result_id"  value="<?php echo $Result_id ?>"></input>
<div style='color:red'>  <?php echo $errors['Result_id'];  ?></div>


<label>pulling_unit_unique_id</label><br>
<input type="text" name="pulling_unit_unique_id"  value="<?php echo $pulling_unit_unique_id  ?>"></input><br />
<div style='color:red'>  <?php echo $errors['pulling_unit_unique_id'];  ?></div>



<label>party_abbreviation:</label><br>
<input type="text" name="party_abbreviation"  value="<?php echo $party_abbreviation  ?>"></input>
<div style='color:red'>  <?php echo $errors['party_abbreviation'];  ?></div>



<label>party_score:</label><br>
<input type="text" name="party_score"  value="<?php echo $party_score  ?>"></input>
<div style='color:red'>  <?php echo $errors['party_score'];  ?></div>



<label>enter_by_user:</label><br>
<input type="text" name="party_score"  value="<?php echo $party_score  ?>"></input>
<div style='color:red'>  <?php echo $errors['party_score'];  ?></div>


<label>date_enter:</label><br>
<input type="text" name="date_enter"  value="<?php echo $date_enter  ?>"></input>
<div style='color:red'>  <?php echo $errors['date_enter'];  ?></div>



<label>user_iP_address:</label> <br>
<input type="text" name="user_iP_address"  value="<?php echo $user_iP_address  ?>"></input>
<div style='color:red'>  <?php echo $errors['user_iP_address'];  ?></div>



<input type="submit" name="submit" value="submit"></input>
 </div>
</form>

  </section>

 
 </html>