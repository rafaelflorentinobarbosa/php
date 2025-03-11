<?php

/**
 * Crie um programa onde o usuário informe o tamanho do raio de um círculo, e o programa retorne a área do circulo e o tamanho da circunferência.
 * Obs: use a função pi() do PHP para pegar o verdadeiro valor do número PI.
 */
    function calcularArea($raio){
        return pi() * pow($raio, 2);//raio ** 2
    }

    function calcularCircunferencia($raio){
        return 2 * pi() * $raio;
    }   
?>