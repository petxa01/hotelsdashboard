
<?php
include_once 'connect.php';

    $nombre = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['message']);
    $address = "dm3-1-16.16@uni.eus";


    //incluimos la clase PHPMailer
    //require_once('php/PHPMailer/class.phpmailer.php');
    require_once('../PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php');
    
    $mail = new PHPMailer();
    //indico a la clase que use SMTP
    $mail->IsSMTP();
    //permite modo debug para ver mensajes de las cosas que van ocurriendo
    $mail->SMTPDebug = 2 ;
    //Debo de hacer autenticación SMTP
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    //indico el servidor de Gmail para SMTP
    $mail->Host = "smtp.gmail.com";
    //indico el puerto que usa Gmail
    $mail->Port = 465;
    //indico un usuario / clave de un usuario de gmail
    $mail->Username = "dm3-1-09.16@uni.eus";
    $mail->Password = "Gragas2op";
    $mail->SetFrom("$address", "$name");
    $mail->AddReplyTo("$email","$name");
    $mail->Subject = "Mensaje de cliente";
    $mail->MsgHTML("$mensaje");
    //indico destinatario
    
    $mail->AddAddress($address, "$name");
    
    if(!$mail->Send()) {
    header("Location: ../../Dashboard/home.php?send=false");
    } else {
    header("Location: ../../Dashboard/home.php?send=true");
    }
    
    //Redireccionamos a una pagina donde se visualizará que el mensaje se envio correctamente
      
?>
