
<?php

    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    //echo $dia;
    //echo $mes;
    //echo $ano;
    //$hoje = mktime(0,0,0,date('m'),date('d'),date('Y'));
    //$nascimento = mktime(0,0,0,$mes,$dia,$ano);

    //$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    if((int)date('Y') - (int)$ano<18){
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <title>Document</title>
        </head>
        <body bgcolor='#7F7F7F'>
            
        </body>
        </html>";
    }else{
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <title>Document</title>
        </head>
        <body bgcolor='#00FF7F'>
            
        </body>
        </html>";
    }
    //print $idade;
?>


