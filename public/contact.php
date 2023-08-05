<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'priyanshu945y@gmail.com';

    $email_subject = "Portfolio Website";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "priyanshu945q@gmail.com";

    $headers = "from: $email_from \r\n";

    $headers .= "Reply-To $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: Contact.html");

?>
