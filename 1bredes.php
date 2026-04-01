<?php 

/* // CODIGO FEITO COM MEUS FRIENDS

$inteiro = 1; // INT

$decimal = 1.1; // FLOAT

$letras = 'ALLP'; // STRING

$vf = true; // BOOLEANO
$fv = false; // BOOLEANO


echo $letras;

$idade = 23; // INT
$filme = "Missão Impossível"; // STRING
$time = "Náutico"; //STRING
$data_aniversario = "10-02-2003" // DATETIME

*/
?>

<form action="1bredes.php"  method="post">

   <label for="salario">Digite seu salário: </label>
   <input type="text" name="salario" id="salario">

   <input type="submit" value= "calcular salário"  >   
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $NUMERO = $_POST['salario'];
   if ($NUMERO <= 2259) {
    echo "Alíquota: Zero. <br><br> Parcela a se deduzir do IR: Zero";
 } elseif ($NUMERO >= 2259 && $NUMERO <= 2826) {
    echo "Alíquota: 7,5%. <br><br> Parcela a se deduzir do IR: 169,44";   
 } elseif ($NUMERO >= 2826 && $NUMERO <= 3751) {
    echo "Alíquota: 15% <br><br> Parcela a se deduzir do IR 381,44";
 } elseif ($NUMERO >= 3751 && $NUMERO <= 4664) {
    echo "Alíquota: 22,5% <br><br> Parcela a se deduzir do IR 662,77";
 } else {
   echo "Alíquota: 27,5% <br><br> Parcela a se deduzir do IR 896";
 }
 }
?>