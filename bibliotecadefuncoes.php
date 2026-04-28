<?php
//ATIVIDADE - 1, 2
namespace conversao;
function converterD($valorD, $cotacaoR){
    return $valorD * $cotacaoR;}
    echo "O resultado da conversão de dólar para real é: ", converterD(2, 5);

function converterE($valorE, $cotacaoR){
    return $valorE * $cotacaoR;}
    echo "\nO resultado da conversão de euro para real é: ", converterE(2, 5.85);

function converterP($valorP, $cotacaoR){
    return $valorP * $cotacaoR;}
    echo "\nO resultado da conversão de peso para real é: ", converterP(2, 0.0035);

function converterL($valorL, $cotacaoR){
    return $valorL * $cotacaoR;}
    echo "\nO resultado da conversão de libra para real é: ", converterL(2, 6.74);

function converterI($valorI, $cotacaoR){
    return $valorI * $cotacaoR;}
    echo "\nO resultado da conversão de iene para real é: ", converterI(2, 0.031);

    namespace geometria;
function areaQuadrado($lado){
    return $lado * $lado;}
    echo "\nA area do quadrado é: ", areaQuadrado(5);

function areaRetangulo($base, $altura){
    return $base * $altura;}
    echo "\nA area do retangulo é: ", areaRetangulo(5, 10);

function areaTriangulo($base, $altura){
    return $base * $altura;}
    echo "\nA area do triangulo é: ", areaTriangulo(5, 5);

function areaCirculo($raio){
    return 3.14 * ($raio * $raio);}
    echo "\nA area do circulo é: ", areaCirculo(2);

function areaTrapezio($baseMaior, $baseMenor, $altura){
    return ($baseMaior + $baseMenor * $altura) / 2;}
    echo "\nA area do trapezio é: ", areaTrapezio(5, 2 ,2);
?>