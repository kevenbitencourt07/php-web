<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aprendendo PHP</title>
        <!-- Link do CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Apredendo PHP</h1>
            <p>Primeiros passos com programação PHP</p>
        </header>

        <main>

            <div class="card">
                <h2>Primeiro contato com PHP</h2>

                <?php
                    echo "Olá Turma!";
                ?>

            </div>

            <div class="card">
                <h2>Variáveis</h2>

                <?php
                    // Variável do tipo "string" (texto)
                    $nome = "Catharina";

                    // Variável do tipo "integer" (número inteiro)
                    $idade = 14;

                    // Variável do tipo "float" (número decimal)
                    $altura = 1.64;
                ?>

                <p><strong>Nome: </strong> <?= $nome ?></p>
                <p><strong>Idade: </strong> <?= $idade ?> Anos</p>
                <p><strong>Altura: </strong> <?= $altura ?> Metros</p>

            </div>

            <div class="card">
                <h2>Operações matemáticas</h2>

                <?php
                    $numero1 = 10;
                    $numero2 = 5;

                    $soma = $numero1 + $numero2;
                    $subtracao = $numero1 - $numero2;
                    $multiplicacao = $numero1 * $numero2;
                    $divisao = $numero1 / $numero2;
                ?>

                <p><strong>Soma: </strong> <?= $soma ?></p>
                <p><strong>Subtração: </strong> <?= $subtracao ?></p>
                <p><strong>Multiplicação: </strong> <?= $multiplicacao ?></p>
                <p><strong>Divisão: </strong> <?= $divisao ?></p>

            </div>

            <div class="card">
                <h2>Condicionais</h2>

                <?php
                    $notaAluno = 8;
                    if ($notaAluno >= 7) {
                        $resultado = "Aprovado";
                    } else {
                        $resultado = "Reprovado";
                    }

                ?>

                <p><strong>Nota do Aluno: </strong> <?= $notaAluno ?></p>
                <p><strong>Resultado: </strong> <?= $resultado ?></p>

            </div>

        </main>
    </body>
</html>