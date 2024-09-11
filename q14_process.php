<?php
if(!empty($resultado)){
    echo "<hr>";
    echo "<p>$resultado</p>";
}?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de adivinhaçãot</title>
</head>
<body>
<form method="POST">
        <label>Tente adivinhar: </label>
        <input type ="number.float"  name="numUsuario" min=0 max=10>
        <input type="hidden" min= "0" max ="10" name="adivinhacao" value="<?php echo $adivinha;?>">
        <input type="submit" value="adivinhar">
       </form>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$resultado= "";
if (isset($_POST['adivinhacao'])){
    $adivinhacao = intval($_POST['adivinhacao']);
}else{
    $adivinhacao = rand (1,10);
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])){
    $numUsuario = intval($_POST['numUsuario']);
if($numUsuario < $adivinhacao){
    $resultado = "o número é maior que o $numUsuario. tente novamente!";
}elseif($numUsuario > $adivinhacao){
    $resultado = "o numero é menor que $numUsuario. tente novamente!";

}else{
    $resultado = "Você acertou! o numero é $numUsuario";
    $adivinhacao = rand(1,10);
}

}
}
