<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'skunkisnotverybig@gmail.com';

    $email_subject = "New Inquiry from <?php $name ?>";

    $email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Message: $message.\n";

    $to = "skunkisnotverybig@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .="Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    




?>