<?php 
            $db_name ="gottus_db";
            $connect_db = mysqli_connect("127.0.0.1","root", "", $db_name);
     


            if($connect_db==false) { 
                 'Не подключается';
                  mysqli_connect_error();
                exit();

            }
           
           
           
if (isset($_POST['send'])){
                 $name = $_POST['nam']; $fname = $_POST['fname']; $oname = $_POST['oname']; 
                  $sql = mysqli_query($connect_db, "INSERT INTO `user` (`name`, `fname`,`oname`) VALUES ('{$name}', '{$fname}','{$oname}')");
    
    
                if ((""==trim($name)) || (""==trim($fname)) ||("" ==trim($oname)))
                            {
                                echo "Вы ввели не все данные";
                    
                                die ();
                                }
    
                            if ($sql) 
                            {
                            echo '<p>Данные успешно добавлены в таблицу.</p>';
                            header("Location: ".$_SERVER['REQUEST_URI']);
                            }
                        else 
                        {
                        echo '<p>Произошла ошибка: ' . mysqli_error($connect_db) . '</p>';
                        }
    }

    // Я ПЫТАЛСЯ СДЕЛАТЬ ХОРОШО, НО ЭТО ПХП



  //  $select_user = mysqli_query( $connect_db,"SELECT *FROM $table_user ");

                function showTable($connect, $use_table){
                        $select_table = mysqli_query($connect, "SELECT * FROM $use_table");
                       echo '<table style = "border: 1px solid;">';
                      echo '<tr >';
                            while( ($return_rows=mysqli_fetch_assoc($select_table)))
                            {   
                            foreach ($return_rows as $value_rows){
                                        echo "<td width ='100px'> $value_rows </td>";
                                    }
                                    echo '</tr>';
                            }
                 echo '</table>';
                }
                
            showTable($connect_db,"`user`");
            ?>
<!-- name,fnmae,onmae -->
 