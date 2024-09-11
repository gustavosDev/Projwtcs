<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica se é um palíndromo</title>
</head>
<body>
<form method="post" action="">
    <label>Digite uma palavra</label>
    <input type="text" id="text" name="texto" min="0" required>
    <button type="submit">Enviar</button>
</form>
    
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $str = $_POST['texto'];

function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-z]/', '', $str));
    return $str === strrev($str);
}
 $str = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$str);

function removedorPontuacao($str) {
    return preg_replace('/[^a-zA-Z]/', '', $str);
}
function removedorEspaco($str ){
    return str_replace(' ', '', $str);
}
function palindromo($str) {
    $str = removedorEspaco(removedorPontuacao($str));
    return isPalindrome($str);
}

if (palindromo($str) == true) {
    echo "É um palíndromo!";
} else {
    echo "Não é um palíndromo.";
}
}
?>