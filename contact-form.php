<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg_subject = $_POST['msg_subject'];
    $message = $_POST['message'];

    $email_form = "weslleysoliver@gmail.com";

    $email_subject = "Novo Fomulário Submetido";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Subject: $msg_subject.\n". 
                            "User Message: $message.\n";

    $to = "weslleysoliver@gmail.com";
    
    $headers = "From: $email_form \r\n";

    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>