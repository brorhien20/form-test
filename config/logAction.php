<?php
        include_once ("session.php");
        include_once ("admin.php");
        
        $site  = new admin;
        $id    = $site->posty("id");
        $query = "SELECT * FROM user WHERE unique_id='$id' ";
        $login = $site->userLogin($query);

        if ($login == 'false') {
        	echo 'Sorry, Unique ID incorrect';
        }else{
          $_SESSION['unique_id'] = $login['unique_id'];
          echo 'done';
                 
        }
?>