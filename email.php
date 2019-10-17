<?php
$destinatario = "veloo.contato@gmail.com";

$empresa = $_REQUEST['Empresa'];
$nome_contato = $_REQUEST['Nome_contato'];
$celular = $_REQUEST['Celular'];
$assunto = "Quero ser Cliente";

 // monta o e-mail na variavel $body

$body = "" . "\n";
$body = $body . "===================================" . "\n";
$body = $body . "      VELOO - QUERO SER CLIENTE ". "\n";
$body = $body . "===================================" . "\n\n\n";
$body = $body . "Empresa:  " . $empresa . "\n";
$body = $body . "Nome do contato:  " . $nome_contato . "\n";
$body = $body . "Celular:  " . $celular . "\n\n";
$body = $body . "" . "\n";

// envia o email
try {
    mail($destinatario, $assunto , $body, "From: $destinatario\r\n");
    echo 'ok';
    exit();
}  catch (Exception $e) {
    echo $e;
}

?>