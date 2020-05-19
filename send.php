<?php
    $to = 'dom-prestarelyh.moskva@mail.ru';
    $theme = 'Отправка сообщения';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_phone = $_POST['phone_number'];
    $msg = $_POST['msg'];
    $mess = "ФИО клиента: ".$name."\n"."Электронная почта: ".$email."\n"."Номер телефона: ".$user_phone."\n"."Сообщение: ".$msg;

if(mail($to,$theme,$mess))
echo 'Заявка успешно отправлена';
?>

