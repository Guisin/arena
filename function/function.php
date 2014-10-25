<?php
function sendMail($nome,$email,$mensagem)
{
    require_once('function/PHPMailer/PHPMailerAutoload.php');
	$mail = new PHPMailer();
	$mail->IsMail(true);
	$mail->IsHTML(true);
	$mail->From = $email;
	$mail->FromName = $nome;
	$mail->AddAddress('contato@arenapiscinas.com.br','Arena Piscinas');
	$mail->Subject = 'Mensagem - Site';
	$mail->Body = '<b>Nome:</b> '.$nome.' <br /><br /><b>E-mail:</b> '.$email.' <br /><br /><b>Mensagem:</b> '.$mensagem;
	if($mail->Send()){
	 $envio = true;
	}else{
	 $envio = false;
	}
	return $envio;
}
?>