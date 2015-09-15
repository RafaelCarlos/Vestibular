<?php
date_default_timezone_set('Etc/UTC');


include "./phpmailer/PHPMailerAutoload.php";
include "./phpmailer/class.phpmailer.php";
include "./phpmailer/class.smtp.php";

//$msg = null;
//if(isset($_POST['enviaEmail']))
//{
$nome = (trim($_POST['nome']));
$email = (trim($_POST['email']));
$telefone = (trim($_POST['telefone']));
$concorrer = (trim($_POST['condicao']));
$destino = "rafaelcarlosrc2014@gmail.com";

$mail = new PHPMailer;
$mail->isSMTP();

$mail->CharSet = "UTF-8";
$mail->SMTPDebug = 2;
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username = "vestibularsistemas@gmail.com";
$mail->Password = "vestibularcatolica";


//$mail->isMail();
//$mail->isHTML(true);
$mail->setFrom("vestibularsistemas@gmail.com", "Inscrição Vestibular");
//$mail->From = "vestibularsistemas@gmail.com";
$mail->FromName = $nome;
$mail->Subject = "Vestibular de Sistemas de Informação";
$mail->addAddress($email);
$mail->msgHTML($mensagem);
//$mail->Body("TExto");
$mail->Body = "<h1>". "Dados cadastrados"."</h1>". "<br/>". "Nome: "  .$nome ."." .'<br/>' . " Email: ". $email .".". '<br/>' . 
         "Deseja concorrer a uma inscrição do Vestibular? " . $concorrer ."." ;


$mail->send();
//header('location:index.php');

//send the message, check for errors
//if (!$mail->send()) {
//    echo "Mailer Error: " . $mail->ErrorInfo;
//} else {
//    echo "Message sent!";
//}

//}
?>