
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

    
#btn{  
font-size: 25px;  
}
        </style>

▾ <body>
    <marquee>
      <P>  PAY THE BILL BEFORE DUE-DATE TO AVOID PENALTY.NOT PAYING DUE-AMOUNT INCREASES PENALTY</P> </marquee>
<div class="Loginbox">
     <br><br>

    <h1 class="a">Display E-BILL</h1>
    <div class="c">
    <form action="uebill.php" method="post" style="text-align:center;">
      

<h1><?php
$con = mysqli_connect('localhost', 'root', '');
$db =mysqli_select_db($con,'test1');

if(isset($_post['damt'])): endif;?>
  <h1>  Your name is: <?php echo $_POST['uname']; ?> </h1><br>
  <h1>  Your id is: <?php echo $_POST['pno']; ?> </h1><br>
<h1> Due Amount is: <?php echo $_POST['damt']; ?> </h1><br>
<h1> Due Date is: <?php echo $_POST['ddate']; ?> </h1><br>

<form action='uebill.php' method="POST" style="text-align:center;">
<input type='submit' name='Save ebill' id="submit"/>
       </form>


</form>
</div>
</body>
</html>
