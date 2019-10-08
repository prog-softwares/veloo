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
mail($destinatario, $assunto , $body, "From: $destinatario\r\n");

// redireciona para a página de obrigado
//header("location:index.html");


?>
<html>
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
                // Move to a new location or you can do something else
                window.location.href = "index.html";
            }, 3000);
        </script>
    </body>
</html>