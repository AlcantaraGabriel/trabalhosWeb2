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
       
        <div class="container">
            <div class="row">
                <form method="post" action="home.php">

                    <div class="col-sm">

                        <select class="custom-select" id="inputGroupSelect01" name="dia">
                            <option selected="">DIA:</option>
                            <?php
                                $dias = "";
                                for ($i=1; $i <= 31; $i++) { 
                                    $dias = $dias. "<option value=".$i.">".$i."</option>";
                                }
                                echo $dias;
                            ?>
                        
                        </select>
                    </div>

                    <div class="col-sm">

                        <select class="custom-select" id="inputGroupSelect02" name="mes">
                            <option selected="">MÊS:</option>
                            <?php
                                $meses = "";
                                for ($i=1; $i <= 12; $i++) { 
                                    $meses = $meses. "<option value=".$i.">".$i."</option>";
                                }
                                echo $meses;
                            ?>
                        </select>
                    </div>

                    <div class= "col-sm">

                        <select class="custom-select" id="inputGroupSelect03" name="ano">
                            <option selected="">ANO:</option>
                            <?php
                                $anos = "";
                                for ($i=1900; $i <= (int)date('Y'); $i++) { 
                                    $anos = $anos. "<option value=".$i.">".$i."</option>";
                                }
                                echo $anos;
                            ?>
                        </select>
                    </div>
                    <button class="btn btn-primary"  type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </body>
</html>