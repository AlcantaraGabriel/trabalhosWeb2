<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
</head>
<body>

<?php

    $s= "<table class='table'><tbody><tr>";

    
    $n = 2;
    for ($j=0; $j <10 ; $j++) { 
        for ($i=0; $i<5 ; $i++) { 
            $s=$s . "<th scope='col'>".$n."</th>";
            $n+=2;    
        }
        $s=$s . "</tr><tbody>";

        for ($i=0; $i<5 ; $i++) { 
            $s=$s . "<th scope='col'>-</th>";     
        }
        $s=$s . "</tr><tbody>";

   }    
   $s=$s . "</table>";

   echo $s;
?>
    
</body>
</html>