<?php
   require 'PHPMailer/PHPMailerAutoload.php';
   require 'PHPMailer/class.phpmailer.php';
   require 'PHPMailer/class.phpmaileroauthgoogle.php';

   $nome    = $_POST['nome'];
   $email   = $_POST['email'];
   $assunto = $_POST['assunto'];
   $msg     = $_POST['msg'];



   // Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = 'smtp.gmail.com'; 
 
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 587; 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls';    // TLS REQUERIDO pelo GMail
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'email@email.com'; 
$mail->Password = 'inserirSenha'; 
 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
 $mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "email@email.com"; 
 
// Seu nome 
$mail->FromName = "Vidracaria "; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress($email, $nome); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "Orçamento"; 
 
// Corpo do email 
$mail->Body =  $nome."<br>"."Email para contato: ".$email."<br>"."Assunto: ".$assunto."<br><br><br>"
               .$msg;

 
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 

echo !extension_loaded('openssl')?"<br> Not Available":"<br> Available";