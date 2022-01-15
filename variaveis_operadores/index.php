<?php

   //Criando variavel
   $qtd_caixas = 10;
   $uni_caixas = 5;
   $qtd_total = $qtd_caixas * $uni_caixas;

   //Exibindo valor variavel
   //echo $qtd_caixas;
   //echo $uni_caixas;
   //echo $qtd_total = $qtd_caixas * $uni_caixas;  

?>

<!--TR-LINHA
    TH - COLUNA DE TITULO
    TD - COLUNA DE RESULTADO-->

  <table style="border: solid 1px black;">
        <tr>
            <th style="border: 1px solid black;">
                QUANTIDADE DE CAIXAS
            </th> 
            <th  style="border: 1px solid black;">
                UNIDADES POR CAIXAS
            </th>  
            <th  style="border: 1px solid black;">
                QUANTIDADE TOTAL
            </th>    
        </tr>
        <tr>
            <td style="text-align:center;">
                <?php echo $qtd_caixas; ?>
            </td>  
            <td style="text-align:center;">
                <?php echo $uni_caixas; ?>

            </td>      
            <td style="text-align:center;">
                <?php echo $qtd_total; ?>

            </td>      
       
    
    
    
    
    
        </tr>

     </table>
















    