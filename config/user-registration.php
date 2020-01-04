<?php
        include_once ("session.php");
        include_once ("admin.php");
        $site     = new admin;
        $email    = $site->posty("email");
        $username = $site->posty("username");
        $phone    = $site->posty("phone");
        $date     = date('d-M-Y');
        $permitted_chars = '0123456789';
        $unique_id = substr(str_shuffle($permitted_chars), 0, 10);
        $check = $site->checkUserDuplicate($email);

        if ($check == 0) {
        $query = "INSERT INTO user (email,phone,username,unique_id,created_at) VALUES('$email','$phone','$username','$unique_id','$date')";
        $register = $site->siteQuery($query);
            if ($register == 'done') {
                $subject = 'Access code';
                $message = 'Dear, '.$username."\r\n".' please use this code to login:'.$unique_id;
                $headers = 'From: no-reply@example.com' . "\r\n" .
                    'Reply-To: no-reply@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                mail($email, $subject, $message, $headers);

                    echo 'done';
            }else{
                 echo 'Sorry, we are unable to complete your registration';     
            }    
        }else{
            echo 'Sorry this email already exist';
        }
?>