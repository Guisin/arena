<?php
function sendMail($de,$para,$mensagem,$assunto)
{
    require_once('function/PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    try {
      $mail->SMTPAuth   = true;
      $mail->Host       = 'smtp.automacaodovale.com.br';
      #$mail->SMTPSecure = "tls"; #remova se nao usar gmail
     $mail->Port       = 587;                  #remova se nao usar gmail
      $mail->Username   = 'suporte02@automacaodovale.com.br';
      $mail->Password   = 'entra123';
      $mail->AddAddress($para);
     $mail->AddReplyTo($de);
     $mail->SetFrom($de);
      $mail->Subject = $assunto;
      $mail->MsgHTML($mensagem);
      $mail->Send();    
      $envio = true;
    } catch (phpmailerException $e) {
      $envio = false;
    } catch (Exception $e) {
      $envio = false;
    }
    return $envio;
}
?>