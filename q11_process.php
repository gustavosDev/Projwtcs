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
            for ($i = 0; $i < 3; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 3; $j++) {
                    echo "<td><input type='number' name='elementos$i$j' required></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$matriz = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz[$i][$j] = $_POST["elementos$i$j"];
    }
}

$soma_diagonal = 0;
for ($i = 0; $i < 3; $i++) {
    $soma_diagonal += $matriz[$i][$i];
}

echo "A soma da diagonal principal da matriz é $soma_diagonal";
}
?> 