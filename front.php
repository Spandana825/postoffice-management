<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="front.css">
</head>
<style>
     .b{
    height:40px;
    width:120px;
    font-size:40;
    border:none;
   background:none;
   padding:0;
   
}  </style>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"></h2>
            </div>

            <div class="menu">
                <ul>
                    
                <li>
                    <form  action="front.php">
      <button class="b" style="color:white" ><h2> HOME</h2></button></form>
    </li>
       <li>
       <form  action="about.php">
      <button class="b" style="color:white" ><h2>ABOUT</h2></button></form>
    </li>
    <li>
       <form  action="service.php">
      <button class="b" style="color:white" ><h2> SERVICE</h2></button></form>
    </li>
    <li>
       <form  action="guide.php">
      <button class="b" style="color:white" ><h2> GUIDELINES</h2></button></form>
    </li>
    <li>
       <form  action="contact.php">
      <button class="b" style="color:white" ><h2> CONTACT</h2></button></form>
    </li>     
                </ul>
            </div>

            

        </div> 
        <div class="content">
            <h1>e-Post Office <br><span>Welcome User</span> </h1>
            <p class="par">India Post is a statutory body in India, which is under the ownership of Department of Post, <br>
                Ministry of Communications of the Government of India. Generally called "the Post Office" <br> in India, it is the most widely distributed postal system in the world. </p>
               
                <button class="cn"><a href="#">e-Post with us</a></button>

                <div class="form">
                    <h2>Welcome</h2>
                    <form  action="admin.php">
                    <button class="btnn"><a href="#">Admin Login</a></button>
</form>
<form  action="registration.php">
                    <button class="btnn"><a href="#">Register</a></button>
</form>
<form  action="user.php">
                    <button class="btnn"><a href="#">User Login</a></button>
                   </form>
                    <p class="link"><br>
                    <a href="#"></a> </a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>