<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aprendendo PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Aprendendo PHP</h1>
            <p>Variáveis, condicionais e arrays</p>
        </header>
        
        <main>
            <!-- EXEMPLO 1: VARIÁVEIS E TIPOS DE DADOS -->
             <div class="card">
                <h2>Variáveis e tipos de dados</h2>

                <?php
                    // Variável do tipo string
                    $nome = "Catharina";

                    // Variável do tipo inteiro
                    $idade = 14;

                    //Variável do tipo float
                    $altura = 1.62;

                    //Variável do tipo boolean
                    $estudante = true;
                ?>

                <p><strong>Nome: </strong> <?= $nome ?> </p>
                <p><strong>Idade: </strong> <?= $idade ?> anos</p>
                <p><strong>Altura: </strong> <?= $altura ?> metros</p>
                <p><strong>É estudante?: </strong> <?= $estudante ? "Sim" : "Não"?> </p>
             </div>

             <!-- Exemplo : IF e ELSE -->
             <div class="card">
                <h2>Condicional IF e ELSE</h2>

                <?php
                    // Entrada da nota do aluno
                    $nota = 8;

                    // Verifica se o aluno foi aprovado
                    if ($nota >= 7) {
                        $resultado = "Aprovado";
                    } else {
                        $resultado = "Reprovado";
                    }
                ?>

                <p><strong>Nota do aluno: </strong> <?= $nota ?> </p>
                <p><strong>Resultado: </strong> <?= $resultado ?> </p>
             </div>

             <div class="card">
                <h2>Pode entrar na festa?</h2>

                <?php
                    // Entrada de dados
                    $nome = "Luzimar";
                    $idade = 19;

                    // Verifica se a pessoa pode entrar na festa
                    if ($idade >= 18) {
                        $entrada = "Permitida";
                    } else {
                        $entrada = "Não permitida";
                    }
                ?>

                <p><strong>Nome: </strong> <?= $nome ?> </p>
                <p><strong>Idade: </strong> <?= $idade ?> anos</p>
                <p><strong>Entrada: </strong> <?= $entrada ?> </p>
             </div>

             <div class="card">
                <h2>Suspensão do jogador</h2>

                <?php
                    // Dados do jogador
                    $nome = "Luca";
                    $cartoes = 1;

                    // Status do jogador
                    if ($cartoes >= 3) {
                        $status = "Suspenso da partida";
                    } else {
                        $status = "Jogando";
                    }
                ?>

                <p><strong>Nome: </strong> <?= $nome ?> </p>
                <p><strong>Cartões amarelos: </strong> <?= $cartoes ?> cartões</p>
                <p><strong>Status: </strong> <?= $status ?> </p>

             </div>

        </main>

    </body>
</html>