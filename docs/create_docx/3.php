<?php
$blank_orig = "../blanks/3.docx";
$name = md5(date("F j, Y, g:i:s "));
copy($blank_orig, "../blanks/tmp/$name.docx");
$blank = "../blanks/tmp/$name.docx";
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
$data = array();
foreach ($_POST as $key => $value) {
	$data['['.$key.']'] = $value;
}
$zip = new ZipArchive();
if (!$zip->open($blank)) {
    exit('Не удалось открыть бланк заявления');
}
//exit();
$data_xml = $zip->getFromName("word/document.xml");
//Заменяем все найденные переменные в файле на значения
$data_xml = str_replace(array_keys($data), array_values($data), $data_xml);
$zip->deleteName('word/document.xml');
$zip->addFromString('word/document.xml', $data_xml);
$zip->close();
//ОТдаём файл браузеру
// заставляем браузер показать окно сохранения файла
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=Договор_на_детали_с_предоплатой.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($blank));
// читаем файл и отправляем его пользователю
readfile($blank);
unlink($blank);
?>