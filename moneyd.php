<?php

session_start(); 

$con = mysqli_connect('localhost', 'root', '');

 mysqli_select_db($con,'test1');
$sn= $_POST['sn']; 

$rn= $_POST['rn']; 
$sad= $_POST['sad']; 
$rad = $_POST['rad'];
$sp = $_POST['sp']; 

$rp = $_POST['rp']; 
$ss = $_POST['ss']; 
$rs= $_POST['rs']; 
$sc= $_POST['sc']; 

$rc= $_POST['rc']; 
$spno= $_POST['spno']; 
$rpno= $_POST['rpno'];
$amt= $_POST['amt']; 
$wt= $_POST['wt'];


$s="select *from moneyorder where sendername = '$sn'"; 

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); 
if($num == 1) {
    echo" Usename Already Taken"; 
    }
    else{
    
    
    
    $ebill=" insert into moneyorder(sendername,receivername,saddress,raddress,spincode,	rpincode,sstate,rstate,scity,rcity,	rpno,sphno,amount,weight) values ('$sn','$rn','$sad','$rad','$sp','$rp','$ss','$rs','$sc','$rc','$spno','$rpno','$amt','$wt')";
    
    mysqli_query($con, $ebill); 
    echo " Saved Successful";
    }
    ?>
    