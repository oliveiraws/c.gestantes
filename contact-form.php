<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_form = "weslleysoliver@gmail.com";

    $email_subject = "Nova Resposta de Currículo";

    $email_body = "Nome de Usuário: $name.\n".
                    "Email: $email.\n".
                        "Assunto: $subject.\n". 
                            "Mensagem: $message.\n";

    $to = "weslleysoliver@gmail.com";
    
    $headers = "From: $email_form \r\n";

    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>