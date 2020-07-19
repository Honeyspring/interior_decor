<?php

       /*$receipient = "emmanueldmlr@gmail.com";
        if(!isset($_POST["email"]) || !isset($_POST['phone_number']) || !isset($_POST['name'])|| !isset($_POST['message'])) {
            header('location:http://bracebrownn.com/contact.php');
        }

        else{
            $name = $_POST["name"];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $message = $_POST['message'];


            $headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
            $headers .= 'Reply-To: '.$email.'' . "\r\n";


            $subject = "New email from Interior Decoration Platform";


            $email_content = "First Name:$name\n";
            $email_content .= "Phone: $phone_number\n";
            $email_content .= "Message: $message \n\n";
            $email_content .= "Email: $email \n\n";

                $sendmailResult = mail($receipient, $subject, $email_content, $headers);
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

        }*/
if (empty($_POST["g-recaptcha-response"])) {
    $cookie_name = "result";
    $cookie_value = "The captcha field must be checked";
    setcookie($cookie_name, $cookie_value, time() + (60 * 1), "/");
    header('location:http://bracebrownn.com/contact.php');
} else {
    $receipient = "emmanueldmlr@gmail.com";

    if(!isset($_POST["email"]) || !isset($_POST['phone_number']) || !isset($_POST['name'])|| !isset($_POST['message'])) {
        $cookie_name = "result";
        $cookie_value = "All field must be filled";
        setcookie($cookie_name, $cookie_value, time() + (60 * 1), "/");
        header('location:http://bracebrownn.com/contact.php');
    } else {
        $name = $_POST["name"];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $message = $_POST['message'];

        $headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
        $headers .= 'Reply-To: '.$email.'' . "\r\n";


        $subject = "New email from Interior Decoration Platform";


        $email_content = "First Name:$name\n";
        $email_content .= "Phone: $phone_number\n";
        $email_content .= "Message: $message \n\n";
        $email_content .= "Email: $email \n\n";


        $sendmailResult = mail($receipient, $subject, $email_content, $headers);
        if ($sendmailResult) {
            $cookie_name = "result";
            $cookie_value = "Form submitted Successfully";
            setcookie($cookie_name, $cookie_value, time() + (60 * 1), "/");
            header('location:http://bracebrownn.com/contact.php');
        } else {
            $cookie_name = "result";
            $cookie_value = "Error Submitting the form";
            setcookie($cookie_name, $cookie_value, time() + (60 * 1), "/");
            header('location:http://bracebrownn.com/contact.php');
        }

    }
}

