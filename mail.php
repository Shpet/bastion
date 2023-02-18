<?php
    $to      = 'bastionmvv@gmail.com';
    $subject = 'Заявка з сайту на консультацію';
    $message = 'Ім\'я: ' . htmlspecialchars($_POST["name"]) . "\r\n" .
                'Пошта: ' . htmlspecialchars($_POST["mail"]) . "\r\n" .
                'Номер: ' . htmlspecialchars($_POST["phone"]) . "\r\n" .
                'Повідомлення: ' . htmlspecialchars($_POST["message"]) . "\r\n";
    $headers = 'From: Master Bud'       . "\r\n" .
                 'Reply-To: ' . htmlspecialchars($_POST["mail"]) . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    header('Location: /thanks.html');