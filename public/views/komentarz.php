<?php
    session_start();

	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
        {
            $name = $_SESSION['name'];
            $koment = $_POST['koment'];
            $data_kom = date("Y/m/d H:i:s",time());
            
            $message = "Uzytkownik: {$name}  |  data:  {$data_kom}  |  {$koment} \r\n"; 

            $file = fopen("mecz1.txt","a");
            flock($file, 2); 
            fwrite($file, $message); 
            flock($file, 3); 
            fclose($file); 
            header('Location: mecz1.php');
        }else
        {
            header('Location: logowanie.php');
        }

?>