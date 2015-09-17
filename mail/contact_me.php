<?php
date_default_timezone_set('Etc/UTC');

include '../phpmailer/PHPMailerAutoload.php';

include '../phpmailer/class.phpmailer.php';
include '../phpmailer/class.smtp.php';

//$msg = null;
//if(isset($_POST['enviaEmail']))
//{
$nome = (trim($_POST['nome']));
$email = (trim($_POST['email']));
$telefone = (trim($_POST['telefone']));
$destino = "vestibularsistemas@gmail.com";

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

$mail->setFrom("vestibularsistemas@gmail.com", "Inscrição Vestibular");
//$mail->From = "vestibularsistemas@gmail.com";
$mail->FromName = "Inscrição - Vestibular Sistemas de Informação";
$mail->Subject = "Vestibular de Sistemas de Informação";
$mail->addAddress($destino);
//$mail->addAddress("vestibularsistemas@gmail.com");
$mail->msgHTML($mensagem);
//$mail->Body("TExto");
$mail->Body = "<h1>". "Dados cadastrados"."</h1>". "<br/>". "Nome: "  .$nome ."." .'<br/>' . " Email: ". $email .".". '<br/>' . 
        "Telefone: ". $telefone .".". '<br/>' ;


$mail->send();

?>