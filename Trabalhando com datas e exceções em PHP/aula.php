<?php

    // echo date('d/m/Y');
    
    // d = dia que estamos
    // m = mes que estamos
    // Y = ano que estamos em 4 digitos
    // para saber mais só entrar na documentação oficial 

    /*
    $data = new DateTime();
    
    echo $data -> format('d-m-Y'); // dia, mes e ano com 4 digitos
    echo "<br>";
    echo $data -> format('d-m-Y H:i:s'); // mostrando tambem as horas, minutos e segundos
    */

    $data = new DateTime();

    $intervalo = new DateInterval('PT5M'); // adiciona um periodo de 5 min
    $data -> add($intervalo); // adiciona esse intervalo de tempo da data atual
    $data -> sub($intervalo); // subtrai esse intervalo de tempo da data atual

    var_dump($data);

?>