
       <div id="frm">
      
       header('location:debill.php');
       background-size: cover;
       background-position: center;
      
      $a="anusha";
        $b=100;
        $b--;
        $a[0]="j";
        echo strtoupper("$a has scored $b<br>");
        echo strtolower("$a<br>");
        echo str_replace("jnusha", "anu<br>",$a);
       echo substr("$a<br>", 4);
       echo 4+5*10;
       echo "<br>";
       echo round(3.77);echo "<br>";
       echo ceil(3.3);echo "<br>";
       echo floor(3.9);
       
       ?>
       <img src="anu.jpg" alt="">

       from here
       $stmt=$conn->prepare("select * from users where username = ?");
$stmt->bind_param("s", $name);
$stmt->execute();

    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0){
        $data=$stmt_result->fetch_assoc();
    }
   if( $data['password']===$age)
   {
    echo "<h2>Login Successfully</h2>";
   }else{
    echo "<h2>Invalid Email or password</h2>";
   }
}
}
?>
<input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="" placeholder="Enter Password Here">

<link rel="stylesheet" type="text/css" herf="./style.css">

&& isset($_POST['id']) && isset($_POST['phno']) && isset($_POST['email']) 
$id= $_POST['id'];
    $phno= $_POST['phno'];
    $email= $_POST['email'];
    , `id`, `phoneno`, `email`,

    <label for="id">userid:</label>
       <input type='text' id="id" required/><br><br>
       $pn = $_POST['pno']; 