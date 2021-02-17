<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// if (!empty($_POST['name']) && !empty($_POST['phone'])){
//   if (isset($_POST['name'])) {
//     if (!empty($_POST['name'])){
//   $name = strip_tags($_POST['name']);
//   $nameFieldset = "Имя пославшего: ";
//   }
// }
 
// if (isset($_POST['phone'])) {
//   if (!empty($_POST['phone'])){
//   $phone = strip_tags($_POST['phone']);
//   $phoneFieldset = "Телефон: ";
//   }
// }
// if (isset($_POST['theme'])) {
//   if (!empty($_POST['theme'])){
//   $theme = strip_tags($_POST['theme']);
//   $themeFieldset = "Тема: ";
//   }
// }
// $token = "805259046:AAFM_a75sNP3G9xn5OiIqvK92E3OGgGZknI";
// $chat_id = "-385648630";
// $arr = array(
//   $nameFieldset => $name,
//   $phoneFieldset => $phone,
//   $themeFieldset => $theme
// );
// foreach($arr as $key => $value) {
//   $txt .= "<b>".$key."</b> ".$value."%0A";
// };
// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
// if ($sendToTelegram) {
  
//   echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
//     return true;
// } else {
//   echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
// }
// } else {
//   echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
// }
// } else {
// header ("Location: /");
// }


//проверяем наличие ПОСТ-параметров
if(!empty($_POST)){
    
  //проверяем наличие параметров нашей формы
  if (!empty($_POST['name']) && !empty($_POST['phone'])){
  
      //токен вашего бота
      $token = "805259046:AAFM_a75sNP3G9xn5OiIqvK92E3OGgGZknI";
      //имя чата, если публичный или id для приватного
      $chat = "-385648630"; 
  
      //название вашего товара
      $order = rand(0, 1000); 

      //данные из форм
      $name = $_POST['name'];
      $phone = $_POST['phone'];

      $txt = "New order: $order%0A";  

      if (
          fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat&text=$txt", "") &&
          fopen("https://api.telegram.org/bot$token/sendContact?chat_id=$chat&phone_number=$phone&first_name=$name", "")
          ) {
          
          $return = 'Спасибо, Ваш заказ отправлен оператору!';
  
      } else {
      
          $return =  'Ошибка отправки!';
      }
  }
}
 
?>