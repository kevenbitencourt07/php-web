<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exemplo PHP</title>
    </head>
    <body>
        <h1>Bem vindo</h1>
        <h2>Keven Bitencourt dos Reis</h2>
        <h3>Curso de PHP</h3>
        <h4>Desenvolvedor de programação</h4>
        <h5>PHP - MySql</h5>
        <h6>Front-End - HTMl</h6>
        <strong>Site</strong>
        <hr/>
        <img 
            src="img-1.avif"
            alt="Imagem do meu site"
            width="200"    
        >
        <br><br>
        <strong>
            <?php
                echo date("H:i")
            ?>
        </strong>
        <hr/>
        <ul>
            <li>Pedro</li>
            <li>Kaio</li>
            <li>Juliana</li>
        </ul>
        <hr>
        <ol>
            <li>Bangu</li>
            <li>Paulista</li>
        </ol>
    </body>
</html>