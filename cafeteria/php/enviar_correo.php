<?php

$email_a = $_POST['email'];
if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {

  $datos_usuario = [
    'nombre' => $_POST['nombre'],
    'correo' => $_POST['email'],
    'mensaje' => wordwrap($_POST['mensaje'], 70, "\r\n")
  ];

  $destinatario = "chiflando.aplaudiendo@outlook.com";
  $asunto = "MENSAJE";
  $encabezados = "MIME-Version: 1.0\r\n";
  $encabezados .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $encabezados .= "From: Geeky Theory < tu_dirección_email >\r\n";

  $bool = mail($destinatario, $asunto, $datos_usuario['mensaje'], $encabezados);
  if($bool){
    echo "<h2>{$datos_usuario['nombre']} muchas gracias por tu comentario,
          estaremos en contacto.</h2>";
    echo "Mensaje enviado";
  }else{
      echo "Mensaje no enviado";
  }

} else {
  echo "<h2> Algo salio mal </h2> ";
}

 ?>
