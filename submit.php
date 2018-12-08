
<?php @header("Content-Type:text/html; charset=utf-8"); ?>
<?php
require_once('config.php');
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$password=$_POST['password'];
$zip_code=$_POST['zip_code'];
$date_of_birth=$_POST['date_of_birth'];
$address=$_POST['address'];
$sex=$_POST['sex'];
$country=$_POST['country'];
$ins=mysql_query("Insert into test values('','$fname' , '$lname', '$email', '$phone_no', '$password', '$zip_code', '$country', '$sex', '$date_of_birth', '$address')");
if($ins){
	header("Location: show.php");
}else{
	header("Location: index.php");
}
// <?php 


// $insert=mysql_query("insert into test (first_name)values('$fname')");
//$insert=mysql_query("INSERT INTO test (first_name,last_name,email,phone,password,zip,country,sex,date_of_birth,Address)VALUES('".$fname."' , '".$lname."', '".$email."', '".$phone_no."', '".$password."', '".$zip_code."', '".$country."', '".$sex."', '".$date_of_birth."', '".$country."')");
?>
				