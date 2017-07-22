<?php
foreach($_POST as $key => $val){
	if(empty($val)){
		continue;
	}
	$$key = filter_var($val, FILTER_SANITIZE_STRING);
	//echo $key."<br>";
}
if(!$email && !$phone){
	echo 'Укажите номер телефона или email';
	exit();
}
$to      = 'otwintanet@yandex.ru';
$subject = 'Заявка на выкуп авто';
$message = 'Заявка на выкуп автомобиля с сайта otwinta.net:<br> Имя:'.$name.'.<br> Город: '.($city ? $city : '').'.<br> Номер телефона:'.($phone ? $phone : '').'.<br> Email:'.($email ? $email : '').'.<br> Марка автомобиля:'.$auto_mark.'. <br>Модель автомобиля:'.$auto_model.'.<br> Год выпуска:'.$auto_year.'.<br> Описание авто:'.($auto_info ? $auto_info : '').'.<br><br> Желаемая цена:'.($auto_price ? $auto_price : '').'.';
$headers = 'From: site@otwinta.net' . "\r\n" .
    'Reply-To: site@otwinta.net' . "\r\n" .
    'Content-type: text/html' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo '<b>Заявка успешно отправлена! С Вами свяжутся в ближайшее время.</b>';
}
?>
