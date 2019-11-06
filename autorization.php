<?php
include('includes/db.php');


 if (isset($_POST['send'])){
 
      $name = $_POST['nam']; $fname = $_POST['fname']; $oname = $_POST['oname']; 
 if ((""==trim($name)) || (""==trim($fname)) ||("" ==trim($oname)))
   {
    echo "Вы ввели не все данные";
    //  exit();
    die ();
  }
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
              <p>  Имя : <input type="text" name ="nam" size = "25px"/></p>   
                  <p>Фамилия : <input type="text" name = "fname"/></p>
              <p>Отчество :  <input type="text" name ="oname"/></p>  
           
             <input type="submit" value ="Отправить" name ='send'/>
            </form>