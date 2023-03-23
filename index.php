

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php 

    require_once 'calculadora.php';

    $calculadora1 = new calculadora();


    $calculadora1->input1 = $_GET["num1"];
    $calculadora1->input2 = $_GET["num2"];
    $oper = $_GET["operacao"]; 

    if($oper == "+"){        
        $calculadora1->somar() ; 
    } elseif ($oper == "x") {
        $calculadora1->multiplicar() ;
    } elseif ($oper == "/"){
        $calculadora1->dividir() ;
    } elseif ($oper == "-"){
        $calculadora1-> subtrair() ;
    } else {
        echo "operação inexistente.";
    }



?>
    
</body>
</html>