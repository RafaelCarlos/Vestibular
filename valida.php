<?php
date_default_timezone_set('Etc/UTC');


include "./phpmailer/PHPMailerAutoload.php";
include "./phpmailer/class.phpmailer.php";
include "./phpmailer/class.smtp.php";

//$msg = null;
//if(isset($_POST['enviaEmail']))
//{
$nome = addcslashes(trim($_POST['nome']));
$email = addcslashes(trim($_POST['email']));
$telefone = addcslashes(trim($_POST['telefone']));
$mensagem = addcslashes(trim($_POST['mensagem']));
$destino = "rafaelcarlosrc2014@gmail.com";

$mail = new PHPMailer;
$mail->isSMTP();

$mail->CharSet = "UTF-8";
$mail->SMTPDebug = 2;
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username = "rafaelcarlosrc2014@gmail.com";
$mail->Password = "sequelafx";


//$mail->isMail();
//$mail->isHTML(true);
$mail->setFrom($email, "Inscrição Vestibular");
$mail->From = "rafaelcarlosrc2014@gmail.com";
$mail->FromName = $nome;
$mail->Subject = "Vestibular de Sistemas de Informação";
$mail->addAddress($email);
$mail->msgHTML($mensagem);
$mail->Body($mensagem);

$mail->send();

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

//}
?>