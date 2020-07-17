<?php

       $receipient = "emmanueldmlr@gmail.com";
        if(!isset($_POST["email"]) || !isset($_POST['phone_number']) || !isset($_POST['name'])|| !isset($_POST['message'])) {
            header('location:http://bracebrownn.com/contact.php');
        }

        else{
            $name = $_POST["name"];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $message = $_POST['message'];

            // Headers
            $headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
            $headers .= 'Reply-To: '.$email.'' . "\r\n";

            // Subject
            $subject = "New email from Interior Decoration Platform";

            // Build Message
            $email_content = "First Name:$name\n";
            $email_content .= "Phone: $phone_number\n";
            $email_content .= "Message: $message \n\n";
            $email_content .= "Email: $email \n\n";


// Check if sent

                $sendmailResult = mail($receipient, $subject, $email_content, $headers);
                /*die($sendmailResult);*/
                if( $sendmailResult) {
                    $cookie_name = "result";
                    $cookie_value = "Form is submitted successfully";
                    setcookie($cookie_name, $cookie_value, time() + (60 * 1), "/");
                    header('location:http://bracebrownn.com/contact.php');
                } else {
                    $cookie_name = "result";
                    $cookie_value = "Message Could not be Sent";
                    setcookie($cookie_name, $cookie_value, time() + (60*1), "/");
                    header('location:http://bracebrownn.com/contact.php');
                }

        }
