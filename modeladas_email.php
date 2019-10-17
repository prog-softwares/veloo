<?php
$destinatario = "veloobrasil@gmail.com";

$email = $_REQUEST['email'];
$nome_contato = $_REQUEST['nome'];
$tel = $_REQUEST['tel'];
$assunto = "CADASTRO VISEIRA";

 // monta o e-mail na variavel $body

$body = "" . "\n";
$body = $body . "===================================" . "\n";
$body = $body . "      VELOO - CADASTRO VISEIRA ". "\n";
$body = $body . "===================================" . "\n\n\n";
$body = $body . "E-MAIL:  " . $email . "\n";
$body = $body . "NOME DO CONTATO:  " . $nome_contato . "\n";
$body = $body . "TELEFONE:  " . $tel . "\n\n";
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
<!--<html>
    <head>
    </head>
    <body>
        <div style="padding-left: 30%">
            <div id="parent">
                <div id="child" style=" padding: 30px 0; 
                                        margin-top:10%; 
                                        width: 300px; 
                                        border: 3px solid green; 
                                        border-radius: 16px; 
                                        text-align: center; 
                                        color:green;">
                    ENVIADO COM SUCESSO!
                </div>
            </div>
        </div>

        <script>
            window.setTimeout(function(){
                
                window.location.href = "modeladas.html";
            }, 3000);
        </script>
    </body>
</html>-->