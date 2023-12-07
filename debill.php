<?php

session_start(); 

$con = mysqli_connect('localhost', 'root', '');

 mysqli_select_db($con,'test1');
$name = $_POST['damt']; 

$phno = $_POST['ddate']; 
$nam = $_POST['uname']; 
$pn = $_POST['pno']; 


$s="select *from ebill where damt = '$name'"; 

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); 
if($num == 1) {
    echo" Usename Already Taken"; 
    }
    else{
    
    
    
    $ebill=" insert into ebill(username,userid,damt,ddate) values ('$nam','$pn','$name','$phno')";
    
    mysqli_query($con, $ebill); 
   
    }
    ?>
   
   