<?php
$first_name = $_POST["first_name"]; //You have to get the form data
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$tel = $_POST["phone"];
$file = fopen('configurationSettings.txt', 'a+'); //Open your .txt file
$content = "\nИмя: $first_name \nФамилия: $last_name \nEmil: $email \nТелефон: $tel \n_____\n";
fwrite($file, $content); //Now lets write it in there
; //Finally close our .txt

die(header("Location: $filename"));
