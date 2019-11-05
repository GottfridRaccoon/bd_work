<?php
include('includes/db.php');


 if (isset($_POST['send'])){
 
      
 
 //  if ((""==trim($_POST['nam'])) || (""==trim($POST['fname'])) ||("" ==trim($_POST["oname"])))
  //  {
  //   echo "Вы ввели не все данные";
    //  exit();
  //  }
     $sql = mysqli_query($connect_db, "INSERT INTO `user` (`name`, `fname`,`oname`) VALUES ('{$_POST['nam']}', '{$_POST['fname']}','{$_POST['oname']}')");
    
    
     if ($sql) 
    {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
      header("Location: ".$_SERVER['REQUEST_URI']);
    }
     else 
     {
      echo '<p>Произошла ошибка: ' . mysqli_error($connect_db) . '</p>';
     }
   
 }    //   $set_data = mysqli_query($connect,)

?>
<form action="/autorization.php" method="post">
                 <input type="text" name ="nam"/>
                 <input type="text" name = "fname"/>
                 <input type="text" name ="oname"/>
           
             <input type="submit" value ="Отправить" name ='send'/>
            </form>