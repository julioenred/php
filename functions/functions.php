<?php 

define('MIN_VALUE', 0);

function mostrar($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

// FUNCIONES PARA CORREGIR

function extraerPares($array)
{
    foreach ($array as $key => $value) 
    {
        $division = $value % 2;

        if ($division == 0) 
        {
            $arrayPares[] = $value;
        }
    }

    return $arrayPares;
}

function voltearString($string)
{
    $arrayString = str_split($string);
    $stringVolteado = '';

    for ($i = count($arrayString) - 1; $i >= MIN_VALUE; $i--) 
    { 
        $stringVolteado = $stringVolteado . $arrayString[$i];
    }

    return $stringVolteado;
}

function numeroPalabras($string)
{
    $palabras = explode(' ', $string);
    $i = 0;

    while ( isset($palabras[$i]) ) 
    {
        $i++;
    }

    return $i;
}

function nombresSinRepetir($nombres)
{
 
    $nombresSinRepetir = $nombres;

    foreach ($nombres as $keyNombres => $nombre) 
    {
        unset($nombres[$keyNombres]);
        $copiaNombres = $nombres;
        foreach ($copiaNombres as $keyCopiaNombres => $copiaNombre) 
        {
            if ($nombre == $copiaNombre) 
            {
                unset($nombresSinRepetir[$keyCopiaNombres]);
            }
        }
    }

    return $nombresSinRepetir;
}

function palabrasSinRepetir($arrayPalabras)
{
    $arrayPalabrasSinRepetir = $arrayPalabras;
    foreach ($arrayPalabrasSinRepetir as $keyPalabrasSinRepetir => $palabraSinRepetir) 
    {
        unset($arrayPalabras[$keyPalabrasSinRepetir]);
        foreach ($arrayPalabras as $keyPalabras => $palabra) 
        {
            if ($palabraSinRepetir == $palabra) 
            {
                unset($arrayPalabrasSinRepetir[$keyPalabrasSinRepetir]);
            }
        }
    }
    return $arrayPalabrasSinRepetir;
}

function mayores($agenda, $edad)
{
    $mayoresEdad = [];

    foreach ($agenda as $key => $contacto) 
    {
        if ($contacto['edad'] > $edad) 
        {
            $mayoresEdad[] = $contacto;
        }
    }

    return $mayoresEdad;
}

function existePalabra($palabra, $frase)
{
    $arrayFrase = explode(' ', $frase);

    foreach ($arrayFrase as $key => $palabraFrase) 
    {
        if ($palabraFrase == $palabra) 
        {
            return true;
        }
    }

    return false;
}

