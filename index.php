        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Aula 08</title>
        </head>
        <body>
            <h1>Introdução à programação em php</h1>
            <br/>
            <?php
            echo 'Olá, Matheus!';
            echo '<br/>';
            $ano_nascimento = 2008;
            $ano_atual = 2024;
            $idade = $ano_atual - $ano_nascimento;
            echo 'Você possui '. $idade . ' anos. ';
             ?>
             <br/>
             <br/>
             <a href="formulario.php">Ir para o formulário</a>
        </body>
        </html>