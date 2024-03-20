


    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

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

    $data = "num1: $num1, num2: $num2, op: $op, risultato: $risultato\n";
    file_put_contents("/home/claudio/Scrivania/calc.txt", $data, FILE_APPEND);

    ?> 


