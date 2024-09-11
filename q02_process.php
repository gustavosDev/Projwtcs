<!--Escreva um programa que leia 3 notas de um aluno (teórica, prática e projecto). As
notas deverão estar no intervalo 0-20. A nota final é dada pela soma pesada das notas
(TEOR=50% PRAT=30% PROJ=20%). O aluno será aprovado se a soma das 3 notas for
superior a 30 ou no caso de a nota prática e teórica serem ambas iguais ou superiores a 13.
O aluno deverá ser submetido a um exame oral se a nota teórica for 8 ou 9 ou no caso de a
média final ser superior a 14. O programa deverá indicar todos os resultados.
Para passar o aluno deverá ter uma nota igual ou superior a 8 em ambas as frequências e
uma nota igual ou superior a 10 na média das duas frequências (F). O programa deverá
verificar se os valores introduzidos para as frequências estão no intervalo entre 0 e 20.
O trabalho deverá ter um valor entre 0 e 4.-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Notas</title>
</head>
<body>
    <h1>Calculadora de Notas</h1>
    <form method="post">
        <label for="teorica">Nota Teórica (0-20):</label>
        <input type="number" id="teorica" name="teorica" min="0" max="20" required><br><br>

        <label for="pratica">Nota Prática (0-20):</label>
        <input type="number" id="pratica" name="pratica" min="0" max="20" required><br><br>

        <label for="projeto">Nota Projeto (0-4):</label>
        <input type="number" id="projeto" name="projeto" min="0" max="4" required><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teorica = $_POST['teorica'];
    $pratica = $_POST['pratica'];
    $projeto = $_POST['projeto'];

    // Verifica se as notas estão dentro dos intervalos permitidos
    if (($teorica < 0 || $teorica > 20) || ($pratica < 0 || $pratica > 20) || ($projeto < 0 || $projeto > 4)) {
        echo "As notas devem estar nos intervalos permitidos: Teórica e Prática (0-20), Projeto (0-4).";
    } else {
        // Calcula a média final com os pesos
        $media_final = ($teorica * 0.5) + ($pratica * 0.3) + ($projeto * 0.2);

        // Verifica se o aluno está aprovado
        $aprovado = false;
        $exame_oral = false;

        if (($teorica >= 13 && $pratica >= 13) || ($media_final > 30)) {
            $aprovado = true;
        }

        // Verifica se o aluno precisa de exame oral
        if ($teorica == 8 || $teorica == 9 || $media_final > 14) {
            $exame_oral = true;
        }

        // Verifica as condições finais para aprovação
        if ($teorica >= 8 && $pratica >= 8 && (($teorica + $pratica) / 2) >= 10) {
            $resultado_final = "Aprovado";
        } else {
            $resultado_final = "Reprovado";
        }

        // Exibe os resultados
        echo "Nota Teórica: $teorica<br>";
        echo "Nota Prática: $pratica<br>";
        echo "Nota Projeto: $projeto<br>";
        echo "Média Final: $media_final<br>";

        if ($aprovado) {
            echo "Status: Aprovado<br>";
        } else {
            echo "Status: Reprovado<br>";
        }

        if ($exame_oral) {
            echo "Necessita de Exame Oral<br>";
        }
    }
}
?>