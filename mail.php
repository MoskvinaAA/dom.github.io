<?php
$to = 'vjcr-200@mail.ru';
$theme = 'Сообщение от пользователя';
$fio = $_POST['Имя'];
$email = $_POST['email'];
$tel = $_POST['phone_number'];
$message = $_POST['msg'];
$headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n"; // установливаем кодировку

$mess = "Имя: ".$fio."\n"."Номер телефона: "."\n"."Почта: "$email."\n"."Сообщение: ".$msg."\n"."Сообщение: ".$_POST['message'];

if(mail($to,$theme,$mess,$headers)){
	echo $('.popup-fade').show();
}
else{
	echo $('.popup_invalid').show();
}
?>