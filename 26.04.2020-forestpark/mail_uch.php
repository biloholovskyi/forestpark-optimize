<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['tel'])) {$phone = $_POST['tel'];}
  if (isset($_POST['name'])) {$name = $_POST['name'];}
  if (isset($_POST['vid'])) {$vid = $_POST['vid'];}
  if (isset($_POST['nomeruchas'])) {$nomeruchas = $_POST['nomeruchas']; $land = preg_replace("/[^0-9]/", '', $nomeruchas);}
  

/* Сюда впишите свою эл. почту */
$address = "albertgaifullin@gmail.com,2257005@bk.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Заявка на бронирования участка\nИмя: $name\nТелефон:$phone\nНомер участка:$nomeruchas";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка на бронирования участка'; //сабж
$email='С сайта'; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

$token = '1121198397:AAGkQlgt4D4HD7pPs6Nc7geY3qQnRHnfpoU';
$chat_id = '-409039015';
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Уасток номер: ' => $land
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
