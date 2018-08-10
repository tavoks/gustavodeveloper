<?php

$para= "gustavodelima1997@outlook.com"
$nome= $_POST['nome'];
$mail= $_POST['mail'];
$tel= $_POST['tel'];
$ass= $_POST['ass'];
$msg= $_POST['msg'];

  $corpo = "<strong> Mensagem de contato </strong><br/><br/>";
  $corpo .= "<strong> Nome: </strong> $nome";
  $corpo .= "<br/><strong> E-mail: </strong> $mail";
  $corpo .= "<br/><strong> Telefone: </strong> $tel";
  $corpo .= "<br/><strong> Assunto: </strong> $ass";
  $corpo .= "<br/><strong> Mensagem: </strong> $msg";
  
  $header .= "Content-Type: text/html; charset= utf-8\n";
  $header ="From: $mail Reply-to: $email\n";
  
@mail($para,$ass,$corpo,$header);

header("location:contato.html?msg=enviado");

$enviado = "<h1> Mensagem enviada, agradecemos seu contato!</h1>";
  
?>