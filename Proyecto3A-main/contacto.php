<?php


$Nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING); 
$Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
$Empresa = filter_var($_POST['Empresa'], FILTER_SANITIZE_STRING); 
$TextArea = filter_var($_POST['TextArea'], FILTER_SANITIZE_STRING); 


    if(!empty($mail) && !empty($Nombre) && !empty($Empresa) && !empty($TextArea)){
        $destino = '2123100459@soy.utj.edu.mx';
        $asunto = 'Email de prueba 1 GG FF PAPA';
        
        // Cuerpo del mensaje
        $cuerpo = '
        <html>
        <head>
        <title>test 1</title> 
        </head>
        <body>
        <h3>Email de : '.$Nombre.'</h3>
        <p>'.$TextArea.'</p>
        </body>
        </html>
        ';

        // Encabezados del correo
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: $Email\r\n";
        $headers .= "Return-path: $destino\r\n";

        // Enviar el correo
        mail($destino, $asunto, $cuerpo, $headers);

      
        echo '<script type="text/javascript">
        alert("Enviado Corectamente");
        </script>';
    } else {
      echo '<script type="text/javascript">
      alert("Error al enviar el email");
      </script>';
   } 

?> 
