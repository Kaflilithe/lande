<?php
$first_name = $_POST["first_name"]; //You have to get the form data
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$tel = $_POST["phone"];
$file = fopen('configurationSettings.txt', 'a+'); //Open your .txt file
$content = "\nИмя: $first_name \nФамилия: $last_name \nEmil: $email \nТелефон: $tel \n_____\n";
fwrite($file, $content); //Now lets write it in there
; //Finally close our .txt

if (fclose($file)) {
	$filename = "999.html";
} else {
	$filename = "3788.html";
}
die(header("Location: $filename"));

// ; //Finally close our .txt
// $myCurl = curl_init();
// curl_setopt_array($myCurl, array(
// 	CURLOPT_URL => 'https://leadpnt.com/leads',
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_POST => true,
// 	CURLOPT_POSTFIELDS => http_build_query(array(/*здесь массив параметров запроса*/))
// ));
// $response = curl_exec($myCurl);
// curl_close($myCurl);

// echo "Ответ на Ваш запрос: " . $response;