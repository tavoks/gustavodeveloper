<?php

if (isset($_POST['BTEnvia'])) {
	
	$nome = $_POST['nome'];
	$mail = $_POST['mail'];
	$tel = $_POST['tel']; 
	$ass = $_POST['ass'];
	$mensagem = $_POST['msg'];
	
	$email_remetente = "contato@gustavodelima.com.br";
	
	$email_destinatario = "gustavodelima1997@outlook.com"; 
	$email_reply = "$mail"; 
	
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $mail \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Assunto = $ass \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	
		if (mail ($email_destinatario, $ass, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
} 
?>