<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Números Pares</title>
</head>
<body>

<form method="post" action="">
    <label>Digite um número inteiro positivo:</label>
    <input type="number" id="numero" name="numero" min="0" required>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero = intval($_POST["numero"]);
    if ($numero < 0) {
        echo "Por favor, digite um número inteiro positivo.";
    } else {
        echo "Números pares de 0 até $numero:<br>";
        for ($i = 0; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    }
}
?>

</body>
</html>

