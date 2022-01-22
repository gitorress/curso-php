<!--AQUI E HTML-->



<?php

//AQUI E O PHP
   
//PARA COLETAR UMA INFORMACAO ENVIADA PELO USUARIO VIA FORM
//UTILIZAMOS O $_POST
$var_nome= $_POST['frm_name'];
//echo $var_nome . '</br>';

$var_idade= $_POST['frm_idade'];
//echo $var_idade . '</br>';

$var_sexo= $_POST['frm_sexo'];
//echo $var_sexo . '</br>';

if($var_sexo=='M'){
    echo '<style>
    .caixa_exibicao{
        width: 400px;
        height: 200px;
       border: solid 3px blue;
    }
    </style>';
}else{
    echo '<style>
    .caixa_exibicao{
        width: 400px;
        height: 200px;
       border: solid 3px pink;
    }
    </style>';
}
?>


<div class="caixa_exibicao">
    <?php
    echo $var_nome . '</br>';
    echo $var_idade . '</br>';
    echo $var_sexo . '</br>';
    ?>


</div>