<?php
include('includes/db.php');


 

   
   //   $set_data = mysqli_query($connect,)

?>
<form action="/autorization.php" method="post">
              <p>  Имя : <input type="text" name ="nam" size = "25px"/></p>   
                  <p>Фамилия : <input type="text" name = "fname"/></p>
              <p>Отчество :  <input type="text" name ="oname"/></p>  
           
             <input type="submit" value ="Отправить" name ='send'/>
            </form>