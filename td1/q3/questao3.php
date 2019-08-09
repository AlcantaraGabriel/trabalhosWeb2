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
        <input type="numeric" name="speedM">m/s
        <button class = "btn btn-primary" type="submit">Converter</button><br>
        <input type="numeric" name="speedK" Value="<?php  require 'SpeedQ3.php'; Speed::mPsToKmPh($_POST['speedM']);?>">km/h

    </form>

</body>
</html>