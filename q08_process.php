<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <table>
            <?php
            $v = 0;
            for($i = 0 ; $i < 2 ; $i++){
                echo"<tr>";
                for($j = 0; $j < 2; $j++){
                echo"<td><input type='date' name='matriz[$i][$j]' required></td>";
                } 
                echo"</tr>";
            }
            ?>
        </table>
        <input type="submit" value="enviar">
    </form>
</body>
</html>



<?php
$valores = array();
$matriz = $_POST["matriz"];
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $valores[] = $matriz[$i][$j];
    }
}

function calcular_idade($valor) {
    $hoje = new DateTime();
    $data_nascimento = new DateTime($valor);
    $idade = $hoje->diff($data_nascimento)->y;
    return $idade;
}

$idades = array_map("calcular_idade", $valores);
$idade_maxima = max($idades);
$idade_minima = min($idades);
$idade_media = array_sum($idades) / count($idades);

echo "a pessoa mais velha possui $idade_maxima anos.". "<br>";
echo "a pessoa mais nova possui $idade_minima anos."."<br>";
echo "A média entre as idades é $idade_media .";
?>