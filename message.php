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
$message = 'Заявка на выкуп автомобиля с сайта: Имя:'.$name.'.\r\n Город: '.($city ? $city : '').'. Номер телефон:'.($phone ? $phone : '').'. Email:'.($email ? $email : '').'. Марка автомобиля:'.$auto_mark.'. Модель автомобиля:'.$auto_model.'. Год выпуска:'.$auto_year.'. Описание авто:'.($auto_info ? $auto_info : '').'. Желаемая цена:'.($auto_price ? $auto_price : '').'.';
$headers = 'From: site@otwinta.net' . "\r\n" .
    'Reply-To: site@otwinta.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo 'Заявка успешно отправлена! С Вами свяжутся в ближайшее время.';
}
?>
