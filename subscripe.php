<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}

/* Сюда впишите свою эл. почту */
$address = "stanislav.bykov@gmail.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
$message = "Тема: Хотите узнавать о наших мероприятиях в числе первых?\nТелефон: $phone\nПочта: $email";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$subject='Подписка на мероприятия'; //сабж
$mail='Подписка с сайта'; // от кого
$send = mail ($address, $subject, $message,"Content-type:text/plain; charset = utf-8\r\nFrom:$mail");
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
echo("success_send");
?>