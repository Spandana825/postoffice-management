<?php

 session_start(); 

$con = mysqli_connect('localhost', 'root', '');

 mysqli_select_db($con,'test1');
$name = $_POST['name']; 

$phno = $_POST['phno']; 
$email = $_POST['email'];
$pass=$_POST['password'];


$s="select *from reg where name = '$name'"; 

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); 
if($num == 1) {
echo" Usename Already Taken"; 
}
else{



$reg =" insert into reg(name,phoneno,email,password) values ('$name','$phno','$email','$pass')";

mysqli_query($con, $reg);

}
?>
<script>
alert(" Registration Successful");
window.location.href="registration.php";
 </script>