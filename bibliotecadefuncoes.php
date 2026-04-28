<?php
//ATIVIDADE - 1, 2
namespace conversao1;
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

    namespace geometria1;
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

namespace saude1;
function calcularimc($peso, $altura){
    return $peso / ($altura * $altura);}
    echo "\nO IMC é: ", calcularimc(93, 1.75);

function valorIdealAgua($peso){
    return $peso * 35;}
    echo "\nA quantidade ideal de agua é: ", valorIdealAgua(5, 10);

function frequenciaCardiacaMaxima($idade){
    return 220 - $idade;}
    echo "\nA frequencia cardiaca maxima é: ", frequenciaCardiacaMaxima(5, 5);

function converterLibrasParaQuilo($libras){
    return $libras * 0.453592;}
    echo "\nO resultado da conversão de libras para quilos é: ", converterLibrasParaQuilo(2);

function calcularCaloriasBasais($peso, $altura, $idade){
    return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);}
    echo "\ntaxa metabolica nasal é: ",  calcularCaloriasBasais(95, 1.75, 16);






namespace conversao; 
function dolar(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado da cotaçao de  100 dolares é  ", dolar(100,5,1), " reais"; 

    
    function peso(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  o resultado da cotaçao de 100 pesos é  ", peso(100,0.0035,1), " reais";

      function libra(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado da cotaçao de 100 libras é  ", libra(100,6.74,1), " reais"; 



      function euro(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado da cotaçao de 100 euros é  ", euro(100,5.85,1), " reais"; 



      function iene(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado  da cotaçao de 100 ienes é  ", iene(100,0.031,1), " reais ";



namespace geometria;
function dolar(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado da cotaçao de  100 dolares é  ", dolar(100,5,1), " reais"; 

    
    function peso(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  o resultado da cotaçao de 100 pesos é  ", peso(100,0.0035,1), " reais";

      function libra(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado da cotaçao de 100 libras é  ", libra(100,6.74,1), " reais"; 



      function euro(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado da cotaçao de 100 euros é  ", euro(100,5.85,1), " reais"; 



      function iene(  $valor, $cotacao, $real) {
        return  $valor * ($cotacao * $real);}
    echo"  resultado  da cotaçao de 100 ienes é  ", iene(100,0.031,1), " reais "; 
?>