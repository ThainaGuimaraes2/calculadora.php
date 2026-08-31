 <?php
    $operacao= $_POST["operacao"];
    $number = $_POST["number"];
    $number2 = $_POST["number2"];
    $resposta;

    if ($operacao == "+"){
       $resposta = $number + $number2;
       echo "A soma é igual $resposta";
    } elseif($operacao == "-"){
      $resposta = $number - $number2;
       echo "A subtração é igual $resposta";
    }elseif($operacao == "*"){
      $resposta = $number * $number2;
       echo "A multiplicação é igual $resposta";
    }elseif($operacao == "/"){
       if($number2 == 0){
         echo"operação invalida zero é indivisível";
       }else{
         $resposta = $number / $number2;
         echo "A divisão é igual $resposta";
       }
    }else{
       echo "operação invalida";
    };
  ?>