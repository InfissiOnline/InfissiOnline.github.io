


    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $op = $_GET["op"];

    function calcolatrice($num1,$num2,$op){
    switch ($op) {
        case "+":
            $risultato = $num1 + $num2;
            break;
        case "-":
            $risultato = $num1 - $num2;
            break;
        case "*":
            $risultato = $num1 * $num2;
            break;
        case "/":
            $risultato = $num1 / $num2;
            break;

        
        } 
            return $risultato;
    }
    

    $risultato = calcolatrice($num1, $num2, $op);

    echo "Il risultato è: $risultato";


    ?> 


