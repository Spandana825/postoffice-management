<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
$conn= mysqli_connect('localhost','root','','test1') or die("Connection Failed:" .mysqli_connect_error());
if(isset($_POST['name']) && isset($_POST['password'])){
    $name= $_POST['name'];
 
  
   
    
    $age= $_POST['password'];

    $sql = "INSERT INTO `reg` (`name`,  `password`)VALUES('$name','$age')";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        echo  'entry successful';

    }
    else{
        echo 'error';
    }
}
}

?>