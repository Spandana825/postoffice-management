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
        .d{
    height:190px;
    width:280px;
}
.e{
    border: 3px solid red;  
}
        </style>
        


<br><br>
    <h1 class="a">Letter</h1>

    <form action='letterd.php' method="POST" style="text-align:center;" >
      
    
       <label for="user">from address:</label>
       <input type='text' name="fad" required/><br><br>
       <label for="id">To address:</label>
       <input type='text' name="tad" required/><br><br>
       <label for="user">from phoneno:</label>
       <input type='text' name="fno" required/><br><br>
       <label for="id">To phoneno:</label>
       <input type='text' name="tno" required/><br><br>
       <label for="phno">letter:</label>
       <input type='text' class="d" name="le"  required/><br><br>
       

      <input type='submit' name='submit' id="submit"/>
       </form>
    </div>
       
       
      
      
        </body>
        </html>