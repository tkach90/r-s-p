<?php

/************************************************************************************
 * Отправ каданных на e-mail
 ***********************************************************************************/

//Принимаем данные
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$question=$_POST['question'];

//Тут указываем на какой ящик посылать письмо info@geotop.msk.ru
$to = "info@geotop.msk.ru";
//Далее идет тема и само сообщение
$subject = "Запрос";
$message = "
Форма на r-s-p.ru <br />
Указано:<br />Имя: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($email)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
Текст обращения: ".htmlspecialchars($question);
$headers = "From: r-s-p.ru <rsp@yandex.ru>\r\nContent-type: text/html; charset=utf8 \r\n";
if ($name!="") mail ($to, $subject, $message, $headers);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>