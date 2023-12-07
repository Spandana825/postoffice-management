<?php

session_start(); 

$con = mysqli_connect('localhost', 'root', '');

 mysqli_select_db($con,'test1');
$fad = $_POST['fad']; 
$tad = $_POST['tad']; 
$fno = $_POST['fno']; 
$tno = $_POST['tno']; 
$le = $_POST['le']; 




$s="select *from letter where fromad = '$fad'"; 

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); 
if($num == 1) {
    echo" Usename Already Taken"; 
    }
    else{
    
    
    
    $ebill=" insert into letter(fromad,	toad,fromphno,tophno,letter) values ('$fad','$tad','$fno','$tno','$le')";
    
    mysqli_query($con, $ebill); 
    echo " Saved Successful";
    }
    ?>
    