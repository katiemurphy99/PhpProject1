<!DOCTYPE html>
<html> 
      <style>
   		h1{
        border: 5px solid gold;
       
        text-align: center;
        font-family:Engravers MT
      
   		}
  body {
	background:  url(MarbleBackground.jpg)	
              }
                                     
         button {
                    background-color:#ff99b9 ; 
                    margin-left: 100px;
                        }           
                         .button{font-size: 20px;}                
                        
   
   </style>
    <body>
    <!-- //Starting the session to get the session variable from last page-->
    
 <?php
 
 
 
 
 

 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];

 echo "The name is : ".$fullNameValue.".";
 echo "<br></br>";
 echo "The total value is : ".$totalValue2.".";
 ?>


    
    <br>
    <br>
    <br>
    <br>
    <br>
    
     <form method="get" action="Index.html"> <button type="submit" class="button button" >Back to Home Page</button> </form>
             <br>
    </body>
</html>
