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

width: 300px;  
height:200px;  
padding-top: 30px; 


} 
.e{
    border: 3px solid red;  
}
.b{
    height:40px;
    width:120px;
}
.d{
    height:90px;
    width:180px;
}
.c{
    font-color: black;
}

    
#btn{  
font-size: 25px;  
}
        </style>

    <body>
        <marquee>
            <p class="c">
            The ePost Office of India Post offers variety of online Postal services to the users.One can avail services such as sending an Electronic Money Order (EMO), Instant Money Order (IMO), philately etc. Users can also track and trace Speed Post, EMO, WorldNet Express (WNX), international mail, paying premium and searching pin codes.</p></marquee>

    
  
     <br><br>

    <h1 class="a">Postage Details </h1>
    <div class="c">

      
    
    <form action="moneyd.php" method="POST" style="text-align:center;" class="e">
      
    <label for="user"><b>SENDER DETAILS &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></label>
     
      <label for="user"><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RECIEVER DETAILS</b></label><br>

      <label for="id">sender name</label>
      <input type='text' name="sn" required/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <label for="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;reciever name</label>
      <input type='text' name="rn" required/><br>

      
     
      <label for="id">address</label>
      <input type='text' class="d" name="sad" required/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <label for="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;address</label>
      <input type='text' class="d" name="rad" required/><br>

      
      <label for="id">pincode</label>
      <input type='text' name="sp" required/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <label for="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;pincode</label>
      <input type='text' name="rp" required/><br>

      <label for="id">state</label>
      <input type='text' name="ss" required/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <label for="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;state</label>
      <input type='text' name="rs" required/><br>

      <label for="id">city</label>
      <input type='text' name="sc" required/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <label for="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;city</label>
      <input type='text' name="rc" required/><br>

      <label for="id">phoneno</label>
      <input type='text' name="spno" required/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <label for="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;phoneno</label>
      <input type='text' name="rpno" required/><br>
      
      <label for="user">amount</label>
       <input type='text' name="amt" required/><br>
       <label for="user">weight</label>
       <input type='text' name="wt" required/><br>
       <br><br><br><br><br>
      
      

     <input type='submit' name='submit' id="submit"/>
      </form>
   </div>
      
      

   
   
   
    
</body>
 </html>