<?php 

include './functions.php';

$nombres = ['julio', 'julio', 'raul', 'diego', 'julio'];
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$frase = "esto es una frase con la cual vamos a jugar";
$contactos = [
                    ['nombre' => 'carlos', 'edad' => 23],
                    ['nombre' => 'pedro', 'edad' => 17],
                    ['nombre' => 'juan', 'edad' => 18]
             ];


// Ejercicio 1.  Mostrar pares

mostrar(extraerPares($numeros));

// Ejercicio 2. Dar la vuelta a un string

mostrar(voltearString($frase));

// Ejercicio 3. Contar número de palabras

mostrar(numeroPalabras($frase));

// Ejercicio 4. Eliminar nombres repetidos

$nombresSinRepetir = nombresSinRepetir($nombres);
mostrar($nombresSinRepetir);

$nombresSinRepetir = palabrasSinRepetir($nombres); // version Raul
mostrar($nombresSinRepetir);

// Ejercicio 5. Encontrar una palabra dentro de una frase

mostrar(existePalabra('perro', $frase));
mostrar(existePalabra('jugar', $frase));

// Ejercicio 6. Encontrar contactos mayores de 18 años

mostrar(mayores($contactos, 18));

