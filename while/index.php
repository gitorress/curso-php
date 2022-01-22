<?php
    //variavel quantidade de carros
    $qtd_carros = 10;
    echo "Quantidade de carros: ". $qtd_carros;

    //venda
    $venda = 1;
    echo "</br>Venda se inicia do:" . $venda;

    //LAÇO (WHILE)
    //ENQUANTO O venda FOR MENOR OU IGUAL
    //A QUANTIDADE DE carros REPETE
    while ($venda <= $qtd_carros){

        echo "</br>repetição: " . $venda;

        $venda = $venda+1;

        //REALIZOU UMA VENDA
        //echo "</br>QUANTIDADEDE VENDAS: " . $venda;

        //SE (IF) A SOBRA DA DIVISAO POR 2 FOR IGUAL 0
        if($venda % 2 ==0){
            echo ' [par]';
        }else{
            echo ' [impar] ';
        }


         
    }

?>