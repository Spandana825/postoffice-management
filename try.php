<!DOCTYPE html>
<html>

<head> <title> Home Page </title>

</head>
<style>
        .a{
            text-align: center;
            border: 3px solid red; 
            font-family:"times new roman",serif;
            background-color:lightsalmon;
        }
        .container{  
text-align: center;  

width: 300px;  
height: 200px;  
padding-top: 30px; 


} 
.b{
    height:40px;
    width:120px;
}
.c{
    font-color: black;
}
</style>
+
<body>
    <marquee>
      <P>  PAY THE BILL BEFORE DUE-DATE TO AVOID PENALTY.NOT PAYING DUE-AMOUNT INCREASES PENALTY</P> </marquee>
<div class="Loginbox">
     <br><br>

    <h1 class="a">Display E-BILL</h1>
    <div class="c">
    <form action="user.php" method="post" style="text-align:center;">

<?php

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'test1');


$query="select * from ebill"; 
$data=mysqli_query($conn, $query);
 $total = mysqli_num_rows ($data);

$result = mysqli_fetch_assoc($data);

echo $result['username']." ".$result['userid']."  ".$result['damt']."  ".$result['ddate'];
 
?><br><br><br><input type='submit' name='Save ebill' id="submit"/>
</form>


</form>
</div>
</body>
</html>