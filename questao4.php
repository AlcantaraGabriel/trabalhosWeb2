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
    <form method="post">
        Valor: <input type="numeric" name="valor" value="0">
        <br>
        Meses: <input type="numeric" name="qtdmeses" value="1">
        <button class = "btn btn-primary" type="submit">Converter</button>

        
    </form>

    <?php
                $valor = $_POST['valor'];
                $meses = $_POST['qtdmeses'] ;
                $parcela = (float) $valor / (float) $meses;

                $s= "<table class='table'><tbody><tr>";
                for ($i=0; $i<$meses ; $i++) { 
                        $s=$s . "<th scope='col'>"."Parcela ".($i+1)."</th>";
                        $s=$s . "<th scope='col'>".$parcela."</th>";
                        $s=$s . "</tr><tbody>";
                }
                echo $s;
                
        ?>
</body>
</html>