<?php

    function recortar_palabras(string $texto,  int $cantidad) : string{
        //Dividir el texto en palabras
        $palabras = explode(" ", $texto);

        //Si la cantidad de palabras es menor o igual ala deseada, retorna el texto original
        if(count($palabras) <= $cantidad){
            return $texto;
        }

        //Recortar el texto y unirlo de nuevo

        return implode(" ", array_slice($palabras, 0 , $cantidad)) . "..." ;



    }




?>