<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form method="POST">
        <label>2020</label>
        <input type="number" id="vendas2020" name="vendas[2020]" placeholder="Valor de vendas">
        <label>2021</label>
        <input type="number"  id="vendas2021" name="vendas[2021]" placeholder="Valor de vendas">
        <label>2022</label>
        <input type="number" id="vendas2022" name="vendas[2022]" placeholder="Valor de vendas">
        <label>2023</label>
        <input type="number" id="vendas2023" name="vendas[2023]" placeholder="Valor de vendas">

        <input type="submit" value="Enviar">
    </form>
 </body>
 </html>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
$vendas  = $_POST['vendas'];
$anos = ['2020' , '2021' , '2022' , '2023'];
$aumenta = 0;
for($i = 1; $i <count($anos); $i++){
    if($vendas[$anos[$i]] > $vendas[$anos[$i - 1]]){
     $aumenta++;
    }
}
$pencentualc = (($vendas[2023] - $vendas[2020]) / $vendas[2020] * 100);
echo $aumenta . "<br>";
echo number_format($pencentualc , 2) . "%";
 }