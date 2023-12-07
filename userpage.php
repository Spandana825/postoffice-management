<!DOCTYPE html>
<HTML>
    <title>user form</title>
    <style>
        .a{
            text-align: center;
            border: 3px solid red; 
            font-family:"times new roman",serif;
            background-color:lightsalmon;
        }
        .container{  
text-align: center;  

width: 500px;  
height: 50px;  
padding-top: 30px; 


} 
.b{
    height:30px;
    width:120px;
}

.c{
    font-color: black;
}

    
#btn{  
font-size: 25px;  
}
        </style>
        <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <body>
        <marquee>
            <p class="c">
            The ePost Office of India Post offers variety of online Postal services to the users.One can avail services such as sending an Electronic Money Order (EMO), Instant Money Order (IMO), philately etc. Users can also track and trace Speed Post, EMO, WorldNet Express (WNX), international mail, paying premium and searching pin codes.</p></marquee>

    <div class="Loginbox">
<img src ="https://tse1.mm.bing.net/th?id=OIP.7CbecGV3plNsXBSgvPfqbwHaHv&pid=Api&P=0" class="avatar">
<br><br><br>
    <h1 class="a">User Page</h1>
    <div class="container">  

    <form  action="try.php">
       
       <input type="SUBMIT" class="b" value="View E-Bill" action="" ><t><t>
       </form><br><br><br>
       <form  action="Cpostage.php">
       
       <input type="SUBMIT" class="b" value="Postage Details" action=""><t><t>
       </form><br><br><br>
    
<form  action="postletter.php">
       <input type="submit" class="b" value="Post Letter"></form>
   
   
   
    </div>
</body>
 </html>