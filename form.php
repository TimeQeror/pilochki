<?php
   &name = $_POST['name'];
   &email = $_POST['email'];
   &tel = $_POST['tel'];
   
    $name = htmlspecialchars(&name);
    $email = htmlspecialchars(&email);
    $tel = htmlspecialchars(&tel);

    $name = urldecode(&name);
    $email = urldecode(&email);
    $tel = urldecode(&tel);

    $name = trim(&name);
    $email = trim(&email);
    $tel = trim(&tel);

    if(mail("nakonechny_maks@mail.ru",
        "Новое письмо с сайта",
        "Логин: ".$name."\n"
        "email: ".$email."\n"
        "Телефон: ".$tel.
        "From: no-reply@mydomain.ru")
        ) {
            echo('Письмо успешно отправлено!');
        }
        else {
            echo('Есть ошибки! Проверьте данные...')
        }
?>