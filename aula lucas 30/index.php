<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    

     for($x = 1; $x < 11; $x++){
         for ($v = 1; $v < 11; $v++) {
            $var = $x*$v;

            echo $var . "<br>";
         }
        
     }

    ?>
</body>
</html>