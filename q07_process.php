<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST">
        <table>
            <?php
            for($i = 0 ; $i < 4 ; $i++){
                echo "<tr>";
                for($j = 0 ; $j < 4; $j++){
                    echo"<td><input type='number' name='matriz[$i][$j]'required</td>";
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
$valores = array();
$matriz = $_POST["matriz"];
for($i = 0 ; $i < 4 ; $i++){
    for($j = 0 ; $j < 4 ; $j++){
        $valores[] = $matriz[$i][$j];
    }
}
for($u = count($valores) ; $u >= 0 ; $u = $u - 1){
    print_r($valores[$u] . " " );
}
}