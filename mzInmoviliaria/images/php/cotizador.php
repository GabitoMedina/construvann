<?php

include 'functions.php';

if (!empty($_POST)){

  $data['success'] = true;
  $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
  $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

  //your email adress 
  $emailTo ="ventas@tecnomade.net"; //"ventas@tecnomade.net";

  //from email adress
  $emailFrom ="contacto@tecnomade.net"; //"contacto@tecnomade.net";

  //email subject
  $emailSubject = "Mail de contacto Tecnomade";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST ["phone"];
  $city = $_POST ["city"];
  $interes = $_POST ["interes"];
  $comment = $_POST["comment"];
  if($name == "")
   $data['success'] = false;
 
 if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
   $data['success'] = false;
 
 if($phone == "")
   $data['success'] = false;

 if($comment == "")
   $data['success'] = false;

 if($data['success'] == true){

  $message = "NAME: $name<br>
  EMAIL: $email<br>
  TELEFONO: $phone<br>
  CIUDAD: $city<br>
  INTERES:$interes<br>
  COMMENT: $comment";


  $headers = "MIME-Version: 1.0" . "\r\n"; 
  $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
  $headers .= "From: <$emailFrom>" . "\r\n";
  mail($emailTo, $emailSubject, $message, $headers);

  $data['success'] = true;
  echo json_encode($data);
}
}