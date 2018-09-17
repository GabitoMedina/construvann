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
  $data['success'] = true;
  //email subject
  $emailSubject = "Mail from Porta";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $ciudad = $_POST["ciudad"];
  $comment = $_POST["comment"];
    
	
  if($name == "")
   $data['success'] = false;
 
 if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
   $data['success'] = false;

if($telefono == "")
   $data['success'] = false;

if($ciudad == "")
   $data['success'] = false;

 if($comment == "")
   $data['success'] = false;

 if($data['success'] == true){

  $message = "name: $name<br>
  EMAIL: $email<br>
  CIUDAD: $ciudad<br>
  TELEFONO: $telefono<br>
  COMMENT: $comment";


  $headers = "MIME-Version: 1.0" . "\r\n"; 
  $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
  $headers .= "From: <$emailFrom>" . "\r\n";
  mail($emailTo, $emailSubject, $message, $headers);

  $data['success'] = true;
  echo json_encode($data);
}
}