<?php

if(isset($_POST['guardar'])){
    $numero1 = $_POST['txtnum1'];
    $numero2 = $_POST['txtnum2'];
    $operacion = $_POST['operacion'];


    if ($operacion == '+') {
        $opera = $numero1 + $numero2;
    }elseif ($operacion == '-') {
        $opera = $numero1 - $numero2;
    }elseif ($operacion == 'x') {
        $opera = $numero1 * $numero2;
    }elseif ($operacion == '/') {
        $opera = $numero1 / $numero2;
    }else{
        $opera = "0";
    }

    $mensaje = "mensaje=".$opera;

    header("location: index.php?".$mensaje);
}