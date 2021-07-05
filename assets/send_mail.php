<?php
if(isset($_POST)){
  error_reporting(0);

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subjet"];
  $comments = $_POST["comments"];

  $domain = $_SERVER["HTTP_HOST"];
  $to = "luisfernandolocu@gmail.com";
  $subject_mail = "Contacto desde el formulario del sitio $domain";
  $message = "
  <p>
  Datos enviados desde el desde el formulario del sitio<b> $domain</b>
  </p>
  <ul>
    <li>Nombre <b>$name</b></li>
    <li>Email <b>$email</b></li>
     <li>Asunto $subject</li>
    <li>Comentarios: $comments</li>
  </ul>
  ";

  $headers = "MIME-Version 1.0\r\n"."Content-Type: text/html; charset=utf-8\r\n"."From: Envio Automatico No Responder <no-reply@$domain>";

  $send_mail = mail($to,$subject_mail,$message,$headers);

  if($send_mail){
    $res = [
      "err" => false,
      "message" => "Tus datos han sido enviados"
    ];
  }else{
    $res = [
    "err" => false,
      "message" => "Error al enviar tus datos . Intenta nuevamente"
    ];
  }
header("Acces-Control-Allow-Origin: *")//hacer peticiones desde cualquier origen
//header("Acces-Control-Allow-Origin: https://")//origen local
  header('Content-type: application/json');
  echo json_encode($res);
  exit;
}