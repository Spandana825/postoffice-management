<?php

 session_start(); 

$con = mysqli_connect('localhost', 'root', '');

 mysqli_select_db($con,'test1');
$name = $_POST['damt']; 

$phno = $_POST['ddate']; 
 
$pn = $_POST['pno']; 
$nam=$_post['uname']

$ss="select *from ebill where damt = '$name'"; 

$result = mysqli_query($con, $ss);

$num = mysqli_num_rows($result); 
if($num == 1) {
echo" username Already Taken"; 
}
else{



$reg =" insert into ebill(username,phoneno,damt,ddate) values ('$nam','$pn','$name','$phno')";

mysqli_query($con, $reg); 

}
?>